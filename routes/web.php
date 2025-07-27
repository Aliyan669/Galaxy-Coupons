<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteContentController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', "Home");
    Route::get('/store', "Stores");
    Route::get('/blogs', "Blogs");
    Route::get('/blog-detail/{slug}', "BlogDetail");
    Route::get('/entertainment', "Entertainment");
    Route::get('/apparel', "Apparel");
    Route::get('/travel', "Travel");

    Route::get('/categories', "Categories");
    Route::get('/store-profile/{slug}', "StoreProfile");
});

Route::get('/admin', [AdminController::class, "Home"]);
Route::resource('/admin/categories', CategoriesController::class);
Route::resource('/admin/store', StoreController::class);
Route::resource('/admin/coupon', CouponController::class);
Route::post('/admin/coupon/bulk-delete', [CouponController::class, 'bulkDelete']);
Route::post('/coupon-click/{id}', [CouponController::class, 'countClick']);
Route::resource('/admin/blog', BlogController::class);
Route::resource('/admin/banner', BannerController::class);

Route::get('/admin/store/{id}/coupons', [StoreController::class, 'getCoupons']);
Route::post('/admin/store/{id}/update-coupon-sort', [StoreController::class, 'updateCouponSort']);

Route::get('/admin/site-content', [SiteContentController::class, 'index']);
Route::post('/admin/site-content', [SiteContentController::class, 'update']);

// Login Routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// User Routes
Route::get('/admin/user', [UserController::class, 'editUser']);
Route::post('/admin/user', [UserController::class, 'updateUser']);


