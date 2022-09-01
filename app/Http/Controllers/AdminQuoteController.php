<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Movie;

class AdminQuoteController extends Controller
{
	public function create()
	{
		return view('admin.create-quote', [
			'movies'=> Movie::all(),
		]);
	}

	public function show()
	{
		return view('admin.all-quotes', [
			'quotes'=> Quote::all(),
		]);
	}
}