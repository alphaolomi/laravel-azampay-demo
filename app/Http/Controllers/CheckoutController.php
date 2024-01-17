<?php

namespace App\Http\Controllers;

use Alphaolomi\Azampay\Facades\Azampay;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    // show
    public function show()
    {
        return view('checkout');
    }

    // update
    public function update(Request $request)
    {
        $data = Azampay::mobileCheckout([
            'amount' => 4000,
            'currency' => 'TZS',
            'accountNumber' => '0747991498',
            'externalId' => 'TR-' . Str::random(6),
            'provider' => 'Mpesa',
        ]);

        // dd($request->all());
        // dd($data);
        return response()->json($data);
    }

    public function store(Request $request)
    {


        $cart_data = cart()->data();



        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'zip' => 'required|string|max:10',
            'registered_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
        ]);


        $order_data = [
            'name' => $data['first_name'] . ' ' . $data['last_name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'country' => $data['country'],
            'region' => $data['region'],
            'zip' => $data['zip'],
            'registered_name' => $data['registered_name'],
            'mobile_number' => $data['mobile_number'],
            'order_number' => 'OR' . Str::upper(Str::random(6)),
            'amount' => $cart_data['total'],
            'currency' => config('cart_manager.currency', 'TZS'),
            'user_id' => auth()->check() ? auth()->id() : null,
        ];

        try {
            DB::beginTransaction();

            $order = Order::create($order_data);

            $cart_data_items = cart()->items();

            foreach ($cart_data_items as $item) {
                $order->items()->create([
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);
            }

            cart()->clear();

            DB::commit();

            $order->load('items');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());

            return redirect()->back()->with('error_message', 'Something went wrong!')->withInput();
        }
        return redirect()->route('order-summary.show', ['order' => $order]);
    }
}
