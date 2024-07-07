<?php

use App\Http\Controllers\Admin\Market\BrandController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\CouponController;
use App\Http\Controllers\Admin\Market\DeliveryController;
use App\Http\Controllers\Admin\Market\MarketCommentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* --------------------------- admin-panel routes --------------------------- */
Route::resource('admin', AdminController::class)->names([
    'index' => 'admin.index',
    'create' => 'admin.create',
    'store' => 'admin.store',
    'show' => 'admin.show',
    'edit' => 'admin.edit',
    'update' => 'admin.update',
    'destroy' => 'admin.destroy'
]);

/* --------------------------- market categories routes --------------------- */
// Route::prefix('admin/market')->namespace('Admin\Market')->group(function(){
Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::prefix('market')->namespace('Market')->group(function(){
        Route::prefix('category')->group(function(){
            Route::get('/', [CategoryController::class, 'index'])->name('admin.market.category.index');
            Route::get('show/{id}', [CategoryController::class, 'show'])->name('admin.market.category.show');
            Route::get('create', [CategoryController::class, 'create'])->name('admin.market.category.create');
            Route::post('store', [CategoryController::class, 'store'])->name('admin.market.category.store');
            Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('admin.market.category.edit');
            Route::put('update/{id}', [CategoryController::class, 'update'])->name('admin.market.category.update');
            Route::delete('delete/{id}', [CategoryController::class, 'destroy'])->name('admin.market.category.destroy');
        });
    });
});

/* -------------------------- market/brands routes -------------------------- */
Route::resource('admin/market/brand', BrandController::class)->names(
    [
        'index' => 'admin.market.brand.index',
        'create' => 'admin.market.brand.create',
        'store' => 'admin.market.brand.store',
        'show' => 'admin.market.brand.show',
        'edit' => 'admin.market.brand.edit',
        'update' => 'admin.market.brand.update',
        'destroy' => 'admin.market.brand.destroy'
    ]
);

/* -------------------------- market/comments routes ----------------------- */
Route::resource('admin/market/comment', MarketCommentController::class)->names(
    [
        'index' => 'admin.market.comment.index',
        'create' => 'admin.market.comment.create',
        'store' => 'admin.market.comment.store',
        'show' => 'admin.market.comment.show',
        'edit' => 'admin.market.comment.edit',
        'update' => 'admin.market.comment.update',
        'destroy' => 'admin.market.comment.destroy'
    ]
);

/* -------------------------- market/delivery routes ----------------------- */
Route::resource('admin/market/delivery', DeliveryController::class)->names(
    [
        'index' => 'admin.market.delivery.index',
        'create' => 'admin.market.delivery.create',
        'store' => 'admin.market.delivery.store',
        'show' => 'admin.market.delivery.show',
        'edit' => 'admin.market.delivery.edit',
        'update' => 'admin.market.delivery.update',
        'destroy' => 'admin.market.delivery.destroy'
    ]
);

/* -------------------------- market/delivery routes ----------------------- */
Route::resource('admin/market/coupon', CouponController::class)->names(
    [
        'index' => 'admin.market.coupon.index',
        'create' => 'admin.market.coupon.create',
        'store' => 'admin.market.coupon.store',
        'show' => 'admin.market.coupon.show',
        'edit' => 'admin.market.coupon.edit',
        'update' => 'admin.market.coupon.update',
        'destroy' => 'admin.market.coupon.destroy'
    ]
);
