<?php

namespace App\Http\Controllers;

class QuoteController extends Controller
{
	public function index()
	{
		return view('random-quote');
	}

	public function show()
	{
		return view('movie-quotes');
	}
}
