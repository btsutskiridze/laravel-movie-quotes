<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class MovieRequest extends FormRequest
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
	public function attributes()
	{
		return[
			'title_ka' => 'Movie name',
			'title_en' => 'Movie name',
			'slug'     => 'Movie name',
		];
	}

	protected function prepareForValidation()
	{
		$this->merge([
			'slug' => Str::slug($this->title_en),
		]);
	}
}