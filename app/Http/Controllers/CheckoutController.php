<?php

namespace App\Http\Controllers;

use Alphaolomi\Azampay\Facades\Azampay;
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

        $data['order_number'] = 'TR-' . Str::random(6);
        Log::info('Order created successfully!', ['order' => $data]);

        return redirect()->route('order-summary.show', ['order' => $data['order_number']]);
    }
}
