<?php

namespace App\Http\Controllers;

use Alphaolomi\Azampay\Facades\Azampay;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'externalId' => 'TR-'. Str::random(6),
            'provider' => 'Mpesa',
        ]);

        // dd($request->all());
        // dd($data);
        return response()->json($data);
    }
}
