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
    public function user()
    {
        return $this->hasOne('App\User');
    }
    /** @OA\Schema(
     *     schema="orders",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         format="int64"
     *     ),  @OA\Property(
     *         property="user_id",
     *         type="integer",
     *         format="int64"
     *     ),
     * @OA\Property(
     *         property="email",
     *         type="string",
     *     ),@OA\Property(
     *         property="shipping_country",
     *         type="string",
     *     ),@OA\Property(
     *         property="shipping_first_name",
     *         type="string",
     *     ),@OA\Property(
     *         property="shipping_last_name",
     *         type="string",
     *     ),@OA\Property(
     *         property="shipping_address",
     *         type="string",
     *     ),@OA\Property(
     *         property="shipping_optional",
     *         type="string",
     *     ),@OA\Property(
     *         property="shipping_city",
     *         type="string",
     *     ),@OA\Property(
     *         property="shipping_postal_code",
     *         type="string",
     *     ),
     *  @OA\Property(
     *         property="status",
     *         type="integer",
     *     ),
     *     @OA\Property(
     *          property="amount",
     *         type="double",
     *     ),
     *     @OA\Property(
     *         property="deleted_at",
     *         type="string",
     *         format="date-time"
     *     ),
     * ),
     */
}
