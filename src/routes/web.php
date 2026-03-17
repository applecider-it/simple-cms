<?php

/**
 * Webのルート
 * 
 * 認証系はauth.phpにある
 */

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DevelopmentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// 投稿
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');

// 固定ページ
Route::get('/contents/{slug}', [PageController::class, 'show'])->name('pages.show');

Route::middleware('auth')->group(function () {
    // 認証必須

    // プロファイル
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/toggle_push_notification', [ProfileController::class, 'toggle_push_notification'])->name('profile.toggle_push_notification');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/admin_auth.php';
