<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'product_name',
        'sku',
        'origin_price',
        'sell_price',
        'discount_percent',
        'discount_price',
        'description',
        'short_description',
        'size',
        'color',
        'quantity',
        'quantity_sell',
        'image',
    ];

    /**
     * Get the phone associated with the user.
     */
    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }


}
