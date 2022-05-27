<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use SoftDeletes;
    protected $table = 'orders_detail';
    //
    protected $fillable = [
        'order_id',
        'product_id',
        'size',
        'color',
        'quantity',
        'price',
        'amount'
    ];
}
