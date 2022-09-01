<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Quote;

class QuoteController extends Controller
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