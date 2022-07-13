<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('products')->get();


        return $this->sendResponse($categories->toArray(), 'Categories retrieved successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        //
        $input = $request->all();

//         = Validator::make($input, [
//            'category_name' => 'required|unique:categories'
//        ]);
        $validator = $request->validated();

//        if ($validator) {
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $category = Category::create($input);

        return $this->sendResponse($category->toArray(), 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category = Category::find($id);

        if (is_null($category)) {
            return $this->sendError('Category not found.');
        }

        return $this->sendResponse($category->toArray(), 'Category retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        //
        $input = $request->all();

//        $validator = Validator::make($input, [
//            'category_name' => 'required'
//        ]);
//
//        if ($validator->fails()) {
//            return $this->sendError('Validation Error.', $validator->errors());
//        }
        $category = Category::updateOrCreate(
            ['id' => $id],
            $input
        );
//        $category = Category::findOrFail($id);
//        $category->category_name = $input['category_name'];
////        $category->detail = $input['detail'];
//        $category->save();
        return $this->sendResponse($category->toArray(), 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id);
        $category->delete();

        return $this->sendResponse($category->toArray(), 'Category deleted successfully.');
    }
}
