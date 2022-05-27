<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'user_id',
        'email',
        'shipping_country',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_address',
        'shipping_optional',
        'shipping_city',
        'shipping_postal_code',
        'status',
        'amount'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
