<?php

use App\Http\Controllers\QuoteController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\admin\MovieController as AdminMovieController;
use App\Http\Controllers\admin\QuoteController as AdminQuoteController;

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
Route::get('movie/{movie:slug}/quotes', [QuoteController::class, 'show'])->name('movie.show_quotes');

Route::get('login', [AuthController::class, 'create'])->middleware('guest')->name('login.create');
Route::post('login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('language/{locale}', [LanguageController::class, 'change'])->name('language.change');

Route::get('admin/quotes/create', [AdminQuoteController::class, 'create'])->middleware('admin')->name('quotes.create');
Route::get('admin/quotes', [AdminQuoteController::class, 'show'])->middleware('admin')->name('quotes.show');
Route::post('admin/quote', [AdminQuoteController::class, 'store'])->middleware('admin')->name('quote.store');
Route::get('admin/quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->middleware('admin')->name('quote.edit');
Route::patch('admin/quotes/{quote}', [AdminQuoteController::class, 'update'])->middleware('admin')->name('quote.update');

Route::get('admin/movies/create', [AdminMovieController::class, 'create'])->middleware('admin')->name('movies.create');
Route::get('admin/movies', [AdminMovieController::class, 'show'])->middleware('admin')->name('movies.show');
Route::post('admin/movie', [AdminMovieController::class, 'store'])->middleware('admin')->name('movie.store');
Route::get('admin/movies/{movie:slug}/edit', [AdminMovieController::class, 'edit'])->middleware('admin')->name('movie.edit');
Route::patch('admin/movies/{movie:slug}', [AdminMovieController::class, 'update'])->middleware('admin')->name('movie.update');
Route::delete('admin/movies/{movie:slug}', [AdminMovieController::class, 'destroy'])->middleware('admin')->name('movie.delete');