<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'category_name', 'icon', 'description'
    ];



    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    /** @OA\Schema(
     *     schema="categories",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *          property="category_name",
     *         type="string",
     *     ),
     *     @OA\Property(
     *         property="icon",
     *         type="string",
     *     ),
     * @OA\Property(
     *         property="description",
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
