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
    /** @OA\Schema(
     *     schema="orders_detail",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         format="int64"
     *     ),
     *  @OA\Property(
     *         property="order_id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *          property="product_id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *         property="size",
     *         type="string",
     *     ),
     * @OA\Property(
     *         property="color",
     *         type="string",
     *     ),
     * @OA\Property(
     *         property="quantity",
     *         type="integer",
     *     ),
     * @OA\Property(
     *         property="price",
     *         type="double",
     *     ),
     *  @OA\Property(
     *         property="amount",
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
