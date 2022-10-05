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

Route::prefix('productsgallery')->group(function() {
    Route::get('/', 'ProductsGalleryController@index');
});

Route::get('/productsgallery', [Modules\ProductsGallery\Http\Controllers\ProductsGalleryController::class, 'index']);

Route::get('/productsgallery/create', [Modules\ProductsGallery\Http\Controllers\ProductsGalleryController::class, 'create']);

Route::post('/productsgallery/create', [Modules\ProductsGallery\Http\Controllers\ProductsGalleryController::class, 'store']);

Route::get('/productsgallery/delete/{id}', [Modules\ProductsGallery\Http\Controllers\ProductsGalleryController::class, 'delete']);

Route::get('/productsgallery/update/{id}', [Modules\ProductsGallery\Http\Controllers\ProductsGalleryController::class, 'edit']);
Route::post('/productsgallery/update/{id}', [Modules\ProductsGallery\Http\Controllers\ProductsGalleryController::class, 'update']);
