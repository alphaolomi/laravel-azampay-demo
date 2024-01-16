<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;

class OrderSummaryPage extends Component
{
    public $order;

    public function mount(Order $order)
    {
        $this->order = $order;
    }

    public function render()
    {
        $order = $this->order->load('items.product');

        // dd($order->toArray());

        return view('livewire.order-summary-page', [
            'order' => $order
        ]);
    }
}
