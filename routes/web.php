<?php

use App\Http\Controllers\Admin\Market\CategoryController;
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

/* ------------------------------ market routes ----------------------------- */
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
