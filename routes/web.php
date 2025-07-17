<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', "Home");
    Route::get('/store', "Stores");
    Route::get('/blogs', "Blogs");
    Route::get('/categories', "Categories");
    Route::get('/store-profile', "StoreProfile");
});

Route::get('/admin', [AdminController::class, "Home"]);
Route::resource('/admin/categories', CategoriesController::class);
Route::resource('/admin/store', StoreController::class);
Route::resource('/admin/coupon', CouponController::class);
Route::resource('/admin/blog', BlogController::class);


