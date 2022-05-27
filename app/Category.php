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
}
