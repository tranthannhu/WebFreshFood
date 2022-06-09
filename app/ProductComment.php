<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductComment extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'product_id',
        'user_id',
        'customer_name',
        'customer_email',
        'rating',
        'review_title',
        'body_title'
    ];
    /** @OA\Schema(
     *     schema="product_comments",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         format="int64"
     *     ),
     *  @OA\Property(
     *         property="user_id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *          property="product_id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *         property="customer_name",
     *         type="string",
     *     ),
     * @OA\Property(
     *         property="customer_email",
     *         type="string",
     *     ),
     * @OA\Property(
     *         property="rating",
     *         type="integer",
     *     ),
     * @OA\Property(
     *         property="review_title",
     *         type="string",
     *     ),
     *  @OA\Property(
     *         property="body_title",
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
