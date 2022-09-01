<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function show()
	{
		return view('admin.all-movies', [
			'movies'=> Movie::all(),
		]);
	}

	public function create()
	{
		return view('admin.create-movie');
	}
}