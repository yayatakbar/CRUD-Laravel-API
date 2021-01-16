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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('product', 'apicontroller@index');
Route::post('product', 'apicontroller@create');
Route::put('/product/{id}', 'apicontroller@update');
Route::delete('/product/{id}', 'apicontroller@delete');

/*Route::get('product', 'ProductController@index')->name('products.index');*/
/*Route::post('/category', 'CategoryController@store')->name('category.store');
Route::get('/category/{category_id}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('/category/{category_id}', 'CategoryController@update')->name('category.update');
Route::delete('/category/{category_id}', 'CategoryController@destroy')->name('category.destroy');*/
