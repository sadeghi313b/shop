<?php

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
