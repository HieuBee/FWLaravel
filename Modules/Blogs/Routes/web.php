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

Route::prefix('blogs')->group(function() {
    Route::get('/', 'BlogsController@index');
});

Route::get('/blogs', [Modules\Blogs\Http\Controllers\BlogsController::class, 'index']);

Route::get('/blogs/create', [Modules\Blogs\Http\Controllers\BlogsController::class, 'create']);
// Thêm dòng dưới đây vào
Route::post('/blogs/create', [Modules\Blogs\Http\Controllers\BlogsController::class, 'store']);

Route::get('/blogs/delete/{id}', [Modules\Blogs\Http\Controllers\BlogsController::class, 'delete']);

Route::get('/blogs/update/{id}', [Modules\Blogs\Http\Controllers\BlogsController::class, 'edit']);
Route::post('/blogs/update/{id}', [Modules\Blogs\Http\Controllers\BlogsController::class, 'update']);
