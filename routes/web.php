<?php

use App\Http\Controllers\DashboardConroller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class,'show'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/post', [PostController::class, 'index'])->name('post_index');
    Route::post('/post', [PostController::class, 'create'])->name('post_create');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post_edit');
    Route::put('/post/edit/{id}',[PostController::class,'update'])->name('post_update');
    Route::get('/post/delete/{id}',[PostController::class,'destroy'])->name('post_delete');

    Route::get('/dashboard', [DashboardConroller::class, 'show'])->name('dashboard');
});


require __DIR__ . '/auth.php';
