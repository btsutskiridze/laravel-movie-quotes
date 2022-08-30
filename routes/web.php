<?php

use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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

Route::get('/', [QuoteController::class, 'index'])->name('random.quote');

Route::get('quotes', [QuoteController::class, 'show'])->name('quotes.show');

Route::get('login', [SessionController::class, 'create'])->name('login.view')->middleware('guest');
Route::post('sessions', [SessionController::class, 'store'])->name('login')->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->name('logout');

Route::get('language/{locale}', [LanguageController::class, 'change'])->name('change.language');