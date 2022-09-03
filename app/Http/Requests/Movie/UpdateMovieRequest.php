<?php

namespace App\Http\Requests\Movie;

use Illuminate\Validation\Rule;

class UpdateMovieRequest extends MovieRequest
{
	public function rules(): array
	{
		return [
			'title_en' => ['required'],
			'slug'     => ['required', Rule::unique('movies', 'slug')->ignore($this->movie)],
			'title_ka' => ['required'],
		];
	}
}