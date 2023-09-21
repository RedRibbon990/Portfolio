<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'about'] )->name('chisiamo');

Route::get('/contattaci', [PublicController::class, 'contact'])->name('contattaci');

Route::post('/invia-email', [PublicController::class, 'send'])->name('invia');


Route::get('/servizi-offerti', [CompanyController::class, 'service'] )->name('serviziofferti');

Route::get('/servizi/{nome}', [CompanyController::class, 'detail'] )->name('dettaglio');