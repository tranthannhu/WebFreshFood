<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\ProductCommentStoreRequest;
use App\Product;
use App\ProductComment;
use App\UserWishList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::with('category')->get();
        // foreach ($products as $product){
        //     $userWish =  UserWishList::where([
        //         ['product_id', $product->id],
        //         ['user_id', DB::raw(Auth::id())],
        //     ])->first();
        //     if($userWish) {
        //         $product->isWish = true;
        //     } else {
        //         $product->isWish = false;
        //     }
        // }
//        dd($products);
        return $this->sendResponse($products->toArray(), 'Products retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ProductComment $productComment
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $product = $product->where('id', $product->id)->with('category')->get();
        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }

        return $this->sendResponse($product->toArray(), 'Product retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ProductComment $productComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductComment $productComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ProductComment $productComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductComment $productComment)
    {
        //
    }

    public function storeComment(ProductCommentStoreRequest $request, Product $product)
    {
        //
        $request->merge([
            'product_id' => $product->id,
            'user_id' => Auth::id()
        ]);

        $input = $request->all();

        $productComment = ProductComment::create($input);

        return $this->sendResponse($productComment->toArray(), 'ProductComment created successfully.');
    }

    public function addToWishLish(Product $product)
    {
        //
        $productWishLish = [
            'product_id' => $product->id,
            'user_id' => Auth::id()
        ];
        $wishList = UserWishList::where([
            ['product_id', $product->id],
            ['user_id', Auth::id()]
        ])->first();

        if ($wishList) {
            $wishList->delete();
        } else {
            $wishList = UserWishList::create($productWishLish);
        }


        return $this->sendResponse($wishList->toArray(), 'Add To wishlish successfully.');
    }
    public function lastestProduct(Product $product)
    {
        //
        $products = Product::orderBy('id', 'desc')->take(5)->get();

        return $this->sendResponse($products->toArray(), '5 lastest products retrieved successfully.');
    }
}
