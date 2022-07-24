<?php

use App\Http\Controllers\Admin\Auth\LoginController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\Auth\LoginController as AuthLoginController;
use Illuminate\Support\Facades\Route;

//Login And Register
//Admin
Route::prefix('/')->group(function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('get.admin.login');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('post.admin.login');
});
Route::middleware('auth:admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('get.dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('get.admin.logout');
});

//Admin
Route::prefix('/product')->group(function () {
    Route::get('/', [ProductController::class, 'viewProduct'])->name('get.view.product');
    Route::get('/add', [ProductController::class, 'showAddProduct'])->name('get.add.product');
    Route::post('/add', [ProductController::class, 'postProduct'])->name('post.add.product');
    Route::get('delete/{id}', [ProductController::class, 'deleteProduct'])->name('get.delete.product');
    Route::get('edit/{id}', [ProductController::class, 'showEditProduct'])->name('get.edit.product');
    Route::put('update/{id}', [ProductController::class, 'editProduct'])->name('put.update.product');
});
//Category
Route::prefix('/category')->group(function () {
    Route::get('/', [CategoryController::class, 'viewCategory'])->name('get.view.category');
    Route::get('/add', [CategoryController::class, 'showAddCategory'])->name('get.add.category');
    Route::post('/add', [CategoryController::class, 'postCategory'])->name('post.add.category');
    Route::get('delete/{id}', [CategoryController::class, 'deleteCategory'])->name('get.delete.category');
    Route::get('edit/{id}', [CategoryController::class, 'showEditCategory'])->name('get.edit.category');
    Route::put('update/{id}', [CategoryController::class, 'editCategory'])->name('put.update.category');
});
