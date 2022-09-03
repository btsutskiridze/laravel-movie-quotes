<?php

namespace App\Http\Requests\Movie;

use Illuminate\Validation\Rule;

class StoreMovieRequest extends MovieRequest
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
			'title_en'       => ['required', 'min:4'],
			'slug'           => [Rule::unique('movies', 'slug')],
			'title_ka'       => ['required', 'min:4'],
		];
	}
}