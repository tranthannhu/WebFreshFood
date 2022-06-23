<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Product;
use App\ProductComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use File;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return $this->sendResponse($products->toArray(), 'Products retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    // public function store(ProductStoreRequest $request)
    // {
    //     //
    //     $input = $request->all();
    //     $product = Product::create($input);

    //     return $this->sendResponse($product->toArray(), 'Product created successfully.');
    // }
    public function store(ProductStoreRequest $request){
        $input=$request->except('image1', 'image2');

        $this->validate($request,[
            'image1' => 'mimes:png,jpeg,jpg,pdf|max:2048',
            'image2' => 'mimes:png,jpeg,jpg,pdf|max:2048',
        ]);
        if ($files = $request->file('image1')) {

            $file1 = Storage::disk('local')->put('images1', $files);
            $input['image1']= $file1;
            
        }
        if ($files = $request->file('image2')) {

            $file2 = Storage::disk('local')->put('images2', $files);
            $input['image2']= $file2;
            
        }
        $product = Product::create($input);

        return $this->sendResponse($product->toArray(), 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }

        return $this->sendResponse($product->toArray(), 'Product retrieved successfully.');
    }
//     public function show(Product $product){
//         if (is_null($product)) {
//             return $this->sendError('Product not found.');
//         }
//         // dd($product);
//         $img = $product->getOriginal('image');
//         // dd($img);
//         $path = storage_path('app/' .$img);
// $file = File::get($path);
// $type = File::mimeType($path);
// $response = Response::make($file, 200);
// $response->header("Content-Type", $type);
// return $response;
// return response()->json([
// 	'image' => $response,
// 	'products' => [
// 		$product
// 	],
// ]);
//         // return $this->sendResponse([$product->toArray(), response()->file($path)], 'Product retrieved successfully.');
//     }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function updateProduct(ProductUpdateRequest $request, Product $product)
    {
        //
        // $input = $request->all();
        $input=$request->except('image1', 'image2');

        $this->validate($request,[
            'image1' => 'mimes:png,jpeg,jpg,pdf|max:2048',
            'image2' => 'mimes:png,jpeg,jpg,pdf|max:2048',
        ]);
        if ($files = $request->file('image1')) {
            $file1 = Storage::disk('local')->put('images1', $files);
            $input['image1']= $file1;
        }
        if ($files = $request->file('image2')) {
            $file2 = Storage::disk('local')->put('images2', $files);
            $input['image2']= $file2;
        }
        $product = Product::updateOrCreate(
            ['id' => $product->id],
            $input
        );
        return $this->sendResponse($product->toArray(), 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

        return $this->sendResponse($product->toArray(), 'Product deleted successfully.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comments(Product $product)
    {
        $comments = ProductComment::where('product_id', $product->id)->get();


        return $this->sendResponse($comments->toArray(), 'Comments retrieved successfully.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteComment(ProductComment $productComment)
    {
        $productComment->delete();


        return $this->sendResponse($productComment->toArray(), 'Comment deleted successfully.');
    }

}
