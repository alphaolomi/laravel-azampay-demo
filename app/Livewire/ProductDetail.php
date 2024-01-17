<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetail extends Component
{

    public $id;
    public $slug;
    public $quantity = 1;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::query()
            ->where('slug', $this->slug)
            ->firstOrFail();

        return view('livewire.product-detail', [
            'product' => $product,
        ]);
    }

    public function addToCart($id)
    {
        $product = Product::query()
            ->where('id', $id)
            ->firstOrFail();

        $product->addToCart($product->id);

        $this->emit('cartUpdated');
    }
}
