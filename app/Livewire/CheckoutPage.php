<?php

namespace App\Livewire;

use Livewire\Component;

class CheckoutPage extends Component
{
    public function render()
    {
         $cart = cart()->toArray();
        //  dd($cart);
        return view('livewire.checkout-page', [
            'cart' => $cart,
        ]);
    }
}
