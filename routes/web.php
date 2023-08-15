<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Frontend\FrontendController; 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [App\Http\Controllers\frontend\FrontendController::class, 'index']);  
Route::get('tutorial/{category_slug}', [App\Http\Controllers\frontend\FrontendController::class, 'viewCategoryPost']);  
Route::get('/tutorial/{category_slug}/{post_slug}', [App\Http\Controllers\frontend\FrontendController::class, 'viewPost']);  

Route::get('/home', [HomeController::class, 'index'])->name('home');
require __DIR__.'/auth.php';

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/add-category', [CategoryController::class, 'create']);
    Route::post('/add-category', [CategoryController::class, 'store']);
    Route::get('/edit-category/{category_id}', [CategoryController::class, 'edit']);
    Route::put('/update-category/{category_id}', [CategoryController::class, 'update']);
    Route::post('/delete-category', [CategoryController::class, 'delete']);

    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/add-post', [PostController::class, 'create']);
    Route::post('/add-post', [PostController::class, 'store']);
    Route::get('/edit-post/{post_id}', [PostController::class, 'edit']);
    Route::put('/update-post/{post_id}', [PostController::class, 'update']);
    Route::get('/delete-post/{post_id}', [PostController::class, 'delete']);
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{user_id}', [UserController::class, 'edit']);
    Route::put('/update-user/{user_id}', [UserController::class, 'update']);

});
