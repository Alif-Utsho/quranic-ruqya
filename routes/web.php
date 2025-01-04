<?php

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

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

