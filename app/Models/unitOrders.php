<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class unitOrders extends Model
{
    protected $fillable = [
        'id',
        'qtProduct',
        'unitPrice',
    ];

    public function Product()
    {
        return $this->belongsToMany(products::class);
    }

    public function orders()
    {
        return $this->belongsTo(orders::class);
    }
}
