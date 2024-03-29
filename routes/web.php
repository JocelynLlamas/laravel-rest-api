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

Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');

Route::get('/products/create', function(){
    return view('products.create');
});

Route::get('/products/{product}', 'ProductController@show');
Route::put('/products/{product}', 'ProductController@update');
Route::delete('/products/{product}', 'ProductController@destroy');

Route::get('/categories', 'CategoryController');


