<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Movie;
use Illuminate\View\View;

class QuoteController extends Controller
{
	public function index(): View
	{
		return view('random-quote', [
			'quote'=> Quote::inRandomOrder()->first(), //just testing will make random soon
		]);
	}

	public function show(Movie $movie): View
	{
		return view('movie-quotes', [
			'movie'  => $movie,
			'quotes' => $movie->quotes,
		]);
	}
}