<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
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