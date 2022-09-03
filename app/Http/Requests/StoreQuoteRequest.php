<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
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
			'title_ka'       => ['required', 'min:4'],
			'thumbnail'      => ['required', 'image'],
			'movie_id'       => ['required'],
		];
	}

	public function attributes()
	{
		return[
			'title_en' => 'Quote',
			'title_ka' => 'Quote',
		];
	}
}