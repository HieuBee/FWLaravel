<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('/homeshop', [App\Http\Controllers\FrontEndController::class, 'index']);


// Add to cart
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index']);

Route::get('addToCart/{productgallery_id}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('addTocart');
Route::get('oder', [App\Http\Controllers\CartController::class, 'oder'])->name('oder');
Route::patch('update-cart', [App\Http\Controllers\CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\CartController::class, 'remove'])->name('remove.from.cart');

/* Route::get('/cart/add-to-cart/{id}', [App\Http\Controllers\CartController::class, 'addTocart'])->name('addTocart');
Route::get('/cart/show-cart', [App\Http\Controllers\CartController::class, 'showCart'])->name('showCart');

Route::get('/cart/delete-to-cart/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('delete'); */

//login
Route::get('/shop-login', [LoginController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/shop-registration', [LoginController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[LoginController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[LoginController::class, 'loginUser'])->name('login-user');
Route::get('/logout',[LoginController::class,'logout']);

// checkout
Route::post('cart',[CartController::class,'postCheckOut'])->name('checkout');

//Products gallery details
Route::get('/products-details/{id}', [App\Http\Controllers\ProductsGalleryDetailsController::class, 'index']);

//frontend

Route::get('/blog', [App\Http\Controllers\FrontEndController::class, 'blog']);
Route::get('/blog-single/{id}', [App\Http\Controllers\FrontEndController::class, 'blog_single']);
Route::get('/contact-us', [App\Http\Controllers\FrontEndController::class, 'contact_us']);
Route::get('/shop', [App\Http\Controllers\FrontEndController::class, 'shop']);
Route::get('/404', [App\Http\Controllers\FrontEndController::class, 'bonkhongbon']);

// Products Details

