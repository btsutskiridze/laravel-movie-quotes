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
Route::controller(QuoteController::class)->group(function () {
	Route::get('/', 'index')->name('random.quote');
	Route::get('movie/{movie:slug}/quotes', 'show')->name('movie.show_quotes');
});

Route::controller(AuthController::class)->group(function () {
	Route::get('login', 'create')->middleware('guest')->name('login.create');
	Route::post('login', 'login')->middleware('guest')->name('login');
	Route::post('logout', 'logout')->name('logout');
});

Route::get('language/{locale}', [LanguageController::class, 'change'])->name('language.change');

Route::middleware('admin')->group(function () {
	Route::controller(AdminQuoteController::class)->group(function () {
		Route::get('admin/quotes/create', 'create')->name('quotes.create');
		Route::get('admin/quotes', 'show')->name('quotes.show');
		Route::post('admin/quote', 'store')->name('quote.store');
		Route::get('admin/quotes/{quote}/edit', 'edit')->name('quote.edit');
		Route::patch('admin/quotes/{quote}', 'update')->name('quote.update');
		Route::delete('admin/quotes/{quote}', 'destroy')->name('quote.destroy');
	});
	Route::controller(AdminMovieController::class)->group(function () {
		Route::get('admin/movies/create', 'create')->name('movies.create');
		Route::get('admin/movies', 'show')->name('movies.show');
		Route::post('admin/movie', 'store')->name('movie.store');
		Route::get('admin/movies/{movie:slug}/edit', 'edit')->name('movie.edit');
		Route::patch('admin/movies/{movie:slug}', 'update')->name('movie.update');
		Route::delete('admin/movies/{movie:slug}', 'destroy')->name('movie.destroy');
	});
});