<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserWishList extends Model
{
    use SoftDeletes;
    protected $table = 'user_wishlist';
    //
    protected $fillable = [
        'product_id',
        'user_id'
    ];
}
