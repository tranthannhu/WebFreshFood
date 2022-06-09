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
    /** @OA\Schema(
     *     schema="user_wishlist",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *          property="product_id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *         property="user_id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *         property="delete_at",
     *         type="string",
     *         format="date-time"
     *     ),
     * ),
     */
}
