<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Requests\BlogStoreRequest;
use App\Product;
use Illuminate\Http\Request;


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
    public function store(BlogStoreRequest $request)
    {
        //
        $input = $request->all();
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
    public function update(BlogStoreRequest $request, Blog $blog)
    {
        //
        $input = $request->all();
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
