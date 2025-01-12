<?php

use App\Http\Controllers\Backend\AudioController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GeneralsettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{id}', [FrontendController::class, 'blogDetails'])->name('blog.details');

Route::get('/audios', [FrontendController::class, 'audios'])->name('audios');
Route::get('/ayats', [FrontendController::class, 'ayats'])->name('ayats');
Route::get('/videos', [FrontendController::class, 'videos'])->name('videos');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::middleware('guest')->group(function () {
    Route::get('admin/login', [AuthController::class, 'login'])->name('login');
    Route::post('admin/login', [AuthController::class, 'login_submit']);
});     

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('generalsetting/edit', [GeneralsettingController::class, 'edit'])->name('generalsetting.edit');
    Route::post('generalsetting/update/{id}', [GeneralsettingController::class, 'update'])->name('generalsetting.update');

    Route::get('user/add', [UserController::class, 'add'])->name('user.add');
    Route::get('user/manage', [UserController::class, 'manage'])->name('user.manage');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('user/toggle-status/{id}', [UserController::class, 'toggleStatus'])->name('user.toggleStatus');

    Route::get('audio/add', [AudioController::class, 'add'])->name('audio.add');
    Route::get('audio/manage', [AudioController::class, 'manage'])->name('audio.manage');
    Route::post('audio/store', [AudioController::class, 'store'])->name('audio.store');
    Route::get('audio/edit/{id}', [AudioController::class, 'edit'])->name('audio.edit');
    Route::post('audio/update/{id}', [AudioController::class, 'update'])->name('audio.update');
    Route::get('audio/delete/{id}', [AudioController::class, 'delete'])->name('audio.delete');
    Route::get('audio/toggle-status/{id}', [AudioController::class, 'toggleStatus'])->name('audio.toggleStatus');

    Route::get('banner/add', [BannerController::class, 'add'])->name('banner.add');
    Route::get('banner/manage', [BannerController::class, 'manage'])->name('banner.manage');
    Route::post('banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('banner/delete/{id}', [BannerController::class, 'delete'])->name('banner.delete');
    Route::get('banner/toggle-status/{id}', [BannerController::class, 'toggleStatus'])->name('banner.toggleStatus');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});