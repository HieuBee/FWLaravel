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

Route::prefix('bookings')->group(function() {
    Route::get('/', 'BookingsController@index');
});

/* Route::post('index',[Modules\Categories\Http\Controllers\BookingsController::class,'postCheckOut'])->name('checkout');
 */