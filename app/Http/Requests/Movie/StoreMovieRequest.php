<?php

namespace App\Http\Requests\Movie;

use Illuminate\Validation\Rule;

class StoreMovieRequest extends MovieRequest
{
	public function rules(): array
	{
		return [
			'title_en'       => ['required', 'min:4'],
			'slug'           => [Rule::unique('movies', 'slug')],
			'title_ka'       => ['required', 'min:4'],
		];
	}
}