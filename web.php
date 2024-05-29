<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get(
    '/home' ,
    function () {
        $html = "<h1>Welcome to Hanoi</h1>";
        return $html;
    }
);

Route::get('/greeding', function () {
    return view('greeding', ['name' => 'James']);
});

Route::get('/customer',
'App\Http\Controllers\ProductController@index');

Route::get('/login',
'App\Http\Controllers\ProductController@login');

Route::get('/getProducts',
'App\Http\Controllers\ProductController@getProducts');

Route::get('/getProductsByBand',
'App\Http\Controllers\ProductController@getProductsByBand')
 -> name('admin.product.getProductsByBand');

 Route::get('updateProduct/{pid}',
 'App\Http\Controllers\ProductController@editProduct');

 Route::post('updateProduct/{pid}',
 'App\Http\Controllers\ProductController@updateProduct');
 Route::get('deleteProduct/{pid}',
 'App\Http\Controllers\ProductController@deleteProduct');

 Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'product'], function() {
        
    });
    Route::group(['prefix' => 'customer'], function() {
    });
 });

