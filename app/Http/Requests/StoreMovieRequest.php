<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class StoreMovieRequest extends FormRequest
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