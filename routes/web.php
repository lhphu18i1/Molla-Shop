<?php

use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\CheckOutController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\ShopController;
use Illuminate\Support\Facades\Route;


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

Route::pattern('id', '[0-9]+');
Route::pattern('slug', ('.*'));

Route::get('/blog', [HomeController::class, 'viewBlog'])->name('get.view.blog');
Route::get('/checkout', [HomeController::class, 'viewCheckout'])->name('get.view.checkout');
Route::get('/contact', [HomeController::class, 'viewContact'])->name('get.view.contact');
Route::get('/shop/product/{id}', [ShopController::class, 'viewProduct'])->name('web.view.product');
//Login And Register User
Route::prefix('/')->group(function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('get.user.login');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('post.user.login');
    Route::get('/register', [LoginController::class, 'showRegister'])->name('get.user.register');
    Route::post('/register', [LoginController::class, 'postRegister'])->name('post.user.register');
});
// Route::middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'viewHome'])->name('get.view.home');
    Route::get('/logout', [LoginController::class, 'logout'])->name('get.user.logout');
// });
//Shop
Route::prefix('shop')->group(function(){
    Route::get('/', [ShopController::class, 'viewShop'])->name('get.view.shop');
    Route::get('/{categoryName}', [ShopController::class, 'viewCategory'])->name('web.view.category');
});
//Cart
Route::prefix('cart')->group(function(){
    Route::get('/', [CartController::class, 'viewCart'])->name('get.view.cart');
    Route::get('add/{id}', [CartController::class, 'addCart'])->name('get.add.cart');
    Route::get('delete/{rowId}', [CartController::class, 'deleteCart'])->name('get.delete.cart');
    Route::get('/destroy', [CartController::class, 'destroyCart'])->name('get.destroy.cart');
    Route::get('/update', [CartController::class, 'updateCart'])->name('get.update.cart');
});
//Check Out
Route::prefix('checkout')->group(function(){
    Route::get('/', [CheckOutController::class, 'viewCheckOut'])->name('get.view.checkout');
    Route::post('/', [CheckOutController::class, 'addOrder'])->name('get.add.order');
    Route::get('/notification', [CheckOutController::class, 'returnNotification'])->name('get.redirect.nitification');
});

