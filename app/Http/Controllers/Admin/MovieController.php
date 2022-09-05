<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Movie\StoreMovieRequest;
use App\Http\Requests\Movie\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function show(): View
	{
		return view('admin.movie.all-movies', [
			'movies'=> Movie::all(),
		]);
	}

	public function create(): View
	{
		return view('admin.movie.create-movie');
	}

	public function store(StoreMovieRequest $request): RedirectResponse
	{
		$movie = new Movie();
		$movie->slug = Str::slug($request->title_en);
		$movie->setTranslation('title', 'en', $request->title_en);
		$movie->setTranslation('title', 'ka', $request->title_ka);
		$movie->save();
		return redirect()->route('movies.show');
	}

	public function edit(Movie $movie): View
	{
		return view('admin.movie.edit-movie', [
			'movie' => $movie,
		]);
	}

	public function update(Movie $movie, UpdateMovieRequest $request): RedirectResponse
	{
		$movie->slug = Str::slug($request->title_en);
		$movie->setTranslation('title', 'en', $request->title_en);
		$movie->setTranslation('title', 'ka', $request->title_ka);
		$movie->update();
		return redirect()->route('movies.show');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return redirect()->back();
	}
}