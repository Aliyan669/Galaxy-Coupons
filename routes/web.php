<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;




Route::get('/admin', [AdminController::class, "Home"]);
Route::resource('/admin/categories', CategoriesController::class);
Route::resource('/admin/store', StoreController::class);
Route::resource('/admin/coupon', CouponController::class);
Route::resource('/admin/blog', BlogController::class);


