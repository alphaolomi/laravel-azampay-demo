<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = [
        'name',
        'email',
        'address',
        'country',
        'region',
        'zip',
        'registered_name',
        'mobile_number',
        'order_number',
        'status',
        'payment_method',
        'payment_status',
        'transaction_id',
        'amount',
        'currency',
        'user_id',
        'external_id',
    ];

    // order items
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // total
    public function total()
    {
        return $this->items->sum(function ($item) {
            return $item->quantity * $item->price;
        });
    }

    // total quantity
    public function totalQuantity()
    {
        return $this->items->sum('quantity');
    }
}
