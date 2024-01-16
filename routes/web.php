<?php

use App\Product;
use App\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ProductResource;
use App\Http\Resources\CategoryResource;
use App\Models\Product as ModelsProduct;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('categories');
    return view('welcome');
});

Route::get('/products', function(){
    $products = ModelsProduct::orderby('name')->get();
    return ProductResource::collection($products);
});

Route::get('/products/create', function(){
    return view('products.create');
});

Route::get('/products/{product}', function($product){
    return view('products.show',compact('product'));
});

Route::get('/categories', function(){
    return response()->json(["Category 1","Category 2"]);
});


