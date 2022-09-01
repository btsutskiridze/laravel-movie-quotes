<?php

use App\Http\Controllers\QuoteController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\AdminMovieController;

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
Route::get('/movies/{movie:slug}', [QuoteController::class, 'show'])->name('quotes.show');

Route::get('login', [AuthController::class, 'create'])->middleware('guest')->name('login.create');
Route::post('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('language/{locale}', [LanguageController::class, 'change'])->name('change.language');

Route::get('admin/quotes/create', [AdminQuoteController::class, 'create'])->middleware('admin')->name('quotes.create');
Route::get('admin/quotes', [AdminQuoteController::class, 'show'])->middleware('admin')->name('quotes.show_immigrant');

Route::get('admin/movies/create', [AdminMovieController::class, 'create'])->middleware('admin')->name('movies.create');
Route::get('admin/movies', [AdminMovieController::class, 'show'])->middleware('admin')->name('movies.show');