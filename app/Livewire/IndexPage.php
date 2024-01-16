<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class IndexPage extends Component
{
    public function render()
    {
        $products = Product::query()
            ->orderBy('name')
            ->limit(8)
            ->get();

        return view('livewire.index-page', [
            'products' => $products,
        ]);
    }
}
