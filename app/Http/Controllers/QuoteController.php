<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Movie;

class QuoteController extends Controller
{
	public function index()
	{
		return view('random-quote', [
			'quote'=> Quote::first(),
		]);
	}

	public function show(Movie $movie)
	{
		return view('movie-quotes', [
			'movie'  => $movie,
			'quotes' => $movie->quotes,
		]);
	}
}