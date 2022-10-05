<?php

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

Route::prefix('products')->group(function() {
    Route::get('/', 'ProductsController@index');
});

Route::get('/products', [Modules\Products\Http\Controllers\ProductsController::class, 'index']);

Route::get('/products/create', [Modules\Products\Http\Controllers\ProductsController::class, 'create']);
// Thêm dòng dưới đây vào
Route::post('/products/create', [Modules\Products\Http\Controllers\ProductsController::class, 'store']);

Route::get('/products/delete/{id}', [Modules\Products\Http\Controllers\ProductsController::class, 'delete']);

Route::get('/products/update/{id}', [Modules\Products\Http\Controllers\ProductsController::class, 'edit']);
Route::post('/products/update/{id}', [Modules\Products\Http\Controllers\ProductsController::class, 'update']);