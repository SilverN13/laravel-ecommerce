<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::get('/dashboard', [HomeController::class, 'home'])->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

Route::get('category', [AdminController::class, 'category'])->middleware(['auth', 'admin']);
Route::post('add_category', [AdminController::class, 'add_category'])->middleware(['auth', 'admin']);
Route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->middleware(['auth', 'admin']);
Route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->middleware(['auth', 'admin']);
Route::post('update_category/{id}', [AdminController::class, 'update_category'])->middleware(['auth', 'admin']);

Route::get('add_product', [ProductController::class, 'add_product'])->middleware(['auth', 'admin']);
Route::post('upload_product', [ProductController::class, 'upload_product'])->middleware(['auth', 'admin']);
Route::get('view_product', [ProductController::class, 'view_product'])->middleware(['auth', 'admin']);
Route::get('delete_product/{id}', [ProductController::class, 'delete_product'])->middleware(['auth', 'admin']);
Route::get('edit_product/{id}', [ProductController::class, 'edit_product'])->middleware(['auth', 'admin']);
Route::post('update_product/{id}', [ProductController::class, 'update_product'])->middleware(['auth', 'admin']);
Route::get('search_product', [ProductController::class, 'search_product'])->middleware(['auth', 'admin']);

Route::get('details/{id}',[HomeController::class,'details']);
