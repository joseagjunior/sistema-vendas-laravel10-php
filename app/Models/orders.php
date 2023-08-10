<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = [
        'id',
        'totalPrice',
        'discount',
        'formPay',
    ];

    public function unitOrders()
    {
        return $this->hasMany(unitOrders::class);
    }
}
