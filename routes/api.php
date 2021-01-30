<?php

use App\Models\Category;

// use Illuminate\Http\Request;
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/', function () {
//     $categories=Category::parents()->ordered()->get();

//     dd($categories); //testing to see if gets only the parents
// });

Route::resource('categories', 'Categories\CategoryController');
Route::resource('products', 'Products\ProductsController');