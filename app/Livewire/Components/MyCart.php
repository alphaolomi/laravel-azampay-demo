<?php

namespace App\Livewire\Components;

use Livewire\Component;

class MyCart extends Component
{
    public function render()
    {
        $cartItems = cart()->items();
        
        return view('livewire.components.my-cart', [
            'cartTotal' => count($cartItems),
        ]);
    }
}
