<?php

namespace App\Http\Requests\Movie;

use Illuminate\Validation\Rule;

class UpdateMovieRequest extends MovieRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'title_en' => ['required'],
			'slug'     => ['required', Rule::unique('movies', 'slug')->ignore($this->movie)],
			'title_ka' => ['required'],
		];
	}
}