<?php

namespace App\Http\Requests;

use App\Models\Quote;
use Illuminate\Foundation\Http\FormRequest;

class UpdateQuoteRequest extends FormRequest
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
	public function rules(Quote $quote)
	{
		return [
			'title_en'       => ['required'],
			'title_ka'       => ['required'],
			'thumbnail'      => $quote->exists ? ['image'] : ['required', 'image'],
			'movie_id'       => ['required'],
		];
	}
}