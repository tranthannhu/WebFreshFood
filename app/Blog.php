<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'image',
        'title',
        'tags',
        'description',
        'short_description'
    ];

    /**
     * Get the phone associated with the user.
     */
    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
    /** @OA\Schema(
     *     schema="blogs",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         format="int64"
     *     ),@OA\Property(
     *         property="category_id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *          property="image",
     *         type="string",
     *     ),
     *     @OA\Property(
     *         property="title",
     *         type="string",
     *     ),
     * @OA\Property(
     *         property="tags",
     *         type="string",
     *     ),@OA\Property(
     *         property="description",
     *         type="text",
     *     ),@OA\Property(
     *         property="short_description",
     *         type="text",
     *     ),
     *     @OA\Property(
     *         property="deleted_at",
     *         type="string",
     *         format="date-time"
     *     ),
     * ),
     */
}
