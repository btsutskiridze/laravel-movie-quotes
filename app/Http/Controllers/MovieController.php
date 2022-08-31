<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function show()
	{
		return view('admin.all-movies', [
			'movies' => Movie::all(),
		]);
	}
}