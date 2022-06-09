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
/** @OA\Schema(
     *     schema="products",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *          property="category_id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *         property="product_name",
     *         type="string",
     *     ),
     * @OA\Property(
     *         property="sku",
     *         type="string",
     *     ),
     * @OA\Property(
     *         property="origin_price",
     *         type="double",
     *     ),
     * @OA\Property(
     *         property="sell_price",
     *         type="double",
     *     ),
     *  @OA\Property(
     *         property="discount_percent",
     *         type="integer",
     *     ),
     *  @OA\Property(
     *         property="discount_price",
     *         type="integer",
     *     ),
     *  @OA\Property(
     *         property="description",
     *         type="text",
     *     ), @OA\Property(
     *         property="short_description",
     *         type="text",
     *     ), @OA\Property(
     *         property="size",
     *         type="string",
     *     ), @OA\Property(
     *         property="color",
     *         type="string",
     *     ), @OA\Property(
     *         property="quantity",
     *         type="integer",
     *     ),@OA\Property(
     *         property="quantity_sell",
     *         type="integer",
     *     ),
     * @OA\Property(
     *         property="image",
     *         type="string",
     *     ),
     *     @OA\Property(
     *         property="deleted_at",
     *         type="string",
     *         format="date-time"
     *     ),
     * ),
     */

}
