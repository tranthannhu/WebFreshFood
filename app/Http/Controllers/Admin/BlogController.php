<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Storage;


class BlogController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::with('category')->get();


        return $this->sendResponse($blogs->toArray(), 'Blogs retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(BlogStoreRequest $request)
    // {
    //     //
    //     $input = $request->all();
    //     $blog = Blog::create($input);

    //     return $this->sendResponse($blog->toArray(), 'Blog created successfully.');
    // }
    public function store(BlogStoreRequest $request)
    {
        $input=$request->except('image');

        $this->validate($request,[
            'image' => 'required|mimes:png,jpeg,jpg,pdf|max:2048',
        ]);
        if ($files = $request->file('image')) {
            $file = Storage::disk('local')->put('images', $files);
            $input['image']= $file;
        }
        $blog = Blog::create($input);
        return $this->sendResponse($blog->toArray(), 'Blog created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //

        return $this->sendResponse($blog->toArray(), 'Blog retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function updateBlog(BlogUpdateRequest $request, Blog $blog)
    {
        //
        $input=$request->except('image');

        $this->validate($request,[
            'image' => 'required|mimes:png,jpeg,jpg,pdf|max:2048',
        ]);
        if ($files = $request->file('image')) {
            $file = Storage::disk('local')->put('images', $files);
            $input['image']= $file;
        }
        $blog = Blog::updateOrCreate(
            ['id' => $blog->id],
            $input
        );
        return $this->sendResponse($blog->toArray(), 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();

        return $this->sendResponse($blog->toArray(), 'Blog deleted successfully.');
    }
}
