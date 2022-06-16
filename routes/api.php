<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('check', function(){
    echo "ok";
});

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('signup', 'AuthController@signup');


Route::middleware(['auth:api', 'api.role:ADMIN'])->group(function () {
//    Route::resource('products', 'API\ProductController');

    // Đăng xuất

    // Refresh token

    // Thông tin user đăng nhập

//    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
//    Route::post('resetPassword', 'ChangePasswordController@index');

    // -Admin: Danh mục sản phẩm
    Route::resource('categories', 'Admin\CategoryController')->except(['create', 'edit']);
    Route::resource('products', 'Admin\ProductController')->except(['create', 'edit']);
    Route::post('products/{product}', 'Admin\ProductController@updateProduct');
    Route::resource('blogs', 'Admin\BlogController')->except(['create', 'edit']);
    Route::post('blogs/{blog}', 'Admin\BlogController@updateBlog');
    Route::resource('users', 'Admin\UserController')->only(['index']);
    Route::get('orders', 'Admin\OrderController@index');

    Route::get('products/comments/{product}', 'Admin\ProductController@comments');
    Route::delete('products/comments/delete/{productComment}', 'Admin\ProductController@deleteComment');

});

Route::middleware(['auth:api'])->group(function () {

    Route::post('products/comments/{product}', 'User\ProductController@storeComment');
//    Route::delete('products/comments/delete/{productComment}', 'Admin\ProductController@deleteComment');
    Route::get('wishlist/{product}', 'User\ProductController@addToWishLish');
    Route::post('orders', 'User\OrderController@store');
    Route::post('me', 'AuthController@me');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
});
Route::get('public/categories', 'User\CategoryController@index');
Route::get('public/categories/{category}', 'User\CategoryController@show');

Route::get('public/products', 'User\ProductController@index');
Route::get('public/lastestproducts', 'User\ProductController@lastestProduct');
Route::get('public/products/{product}', 'User\ProductController@show');
Route::post('upload', 'ImageUploadController@store');
Route::get('upload/{filename}', 'ImageUploadController@displayImage')->name('image.displayImage');
//
//Route::group([
//
//    'middleware' => 'api',
//    // 'prefix' => 'auth'
//
//], function ($router) {
//
//
//});
