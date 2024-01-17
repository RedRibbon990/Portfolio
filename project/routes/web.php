<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CompanyController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/we', [PublicController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'service'])->name('company.service');
Route::get('/services/{nome}', [CompanyController::class, 'detail'])->name('company.detail');
Route::get('/contact',  [PublicController::class, 'contact'])->name('contact');
Route::get('/detail',  [PublicController::class, 'detail'])->name('detail');

/* Email Test */
Route::view('/preview-email', 'contact/email')->name('preview');
