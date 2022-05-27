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
}
