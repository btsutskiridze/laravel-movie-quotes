<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use Illuminate\Support\Str;

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

	public function store(StoreMovieRequest $request)
	{
		$movie = new Movie();
		$movie->slug = Str::slug($request->title_en);
		$movie->setTranslation('title', 'en', $request->title_en);
		$movie->setTranslation('title', 'ka', $request->title_ka);
		$movie->save();

		return redirect()->route('movies.show');
	}
}