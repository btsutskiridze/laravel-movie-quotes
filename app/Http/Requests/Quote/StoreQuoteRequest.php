<?php

namespace App\Http\Requests\Quote;

class StoreQuoteRequest extends QuoteRequest
{
	public function rules(): array
	{
		return [
			'title_en'       => ['required', 'min:4'],
			'title_ka'       => ['required', 'min:4'],
			'thumbnail'      => ['required', 'image'],
			'movie_id'       => ['required'],
		];
	}
}