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

/* Route::prefix('categories')->group(function() {
    Route::get('/', 'CategoriesController@index');
}); */

Route::get('/categories', [Modules\Categories\Http\Controllers\CategoriesController::class, 'index']);

Route::get('/categories/create', [Modules\Categories\Http\Controllers\CategoriesController::class, 'create']);

Route::post('/categories/create', [Modules\Categories\Http\Controllers\CategoriesController::class, 'store']);

Route::get('/categories/delete/{id}', [Modules\Categories\Http\Controllers\CategoriesController::class, 'delete']);

Route::get('/categories/update/{id}', [Modules\Categories\Http\Controllers\CategoriesController::class, 'edit']);
Route::post('/categories/update/{id}', [Modules\Categories\Http\Controllers\CategoriesController::class, 'update']);