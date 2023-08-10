<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'nameProduct',
        'price',
        'stock',
        'typeStock',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function unitOrder()
    {
        return $this->belongsToMany(unitOrders::class);
    }
    public function setNameProductAttribute($value)
    {
        $this->attributes['nameProduct'] = strtoupper($value);
    }
    public function getPriceAttribute($value)
    {
        return number_format($value, 2);
    }
}

