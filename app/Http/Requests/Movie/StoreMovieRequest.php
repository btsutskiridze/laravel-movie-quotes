<?php

namespace App\Http\Requests\Movie;

class StoreMovieRequest extends MovieRequest
{
	public function rules(): array
	{
		return [
			'title_en'       => ['required', 'min:4'],
			'slug'           => ['unique:movies,slug'],
			'title_ka'       => ['required', 'min:4'],
		];
	}
}