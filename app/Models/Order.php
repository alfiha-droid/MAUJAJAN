<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'table_number',
        'total_price',
        'status',
        'notes',
    ];

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }
}
