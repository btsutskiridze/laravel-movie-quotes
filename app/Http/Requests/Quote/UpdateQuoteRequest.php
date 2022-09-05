<?php

namespace App\Http\Requests\Quote;

class UpdateQuoteRequest extends QuoteRequest
{
	public function rules(): array
	{
		return [
			'title_en'       => ['required', 'min:4'],
			'title_ka'       => ['required', 'min:4'],
			'thumbnail'      => ['image'],
			'movie_id'       => ['required'],
		];
	}
}