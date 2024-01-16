<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
        'price',
    ];

    // product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // total
    public function total()
    {
        return $this->quantity * $this->price;
    }
}
