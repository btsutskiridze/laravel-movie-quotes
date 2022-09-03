<?php

namespace App\Http\Requests\Quote;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
	public function attributes(): array
	{
		return[
			'title_en' => 'Quote',
			'title_ka' => 'Quote',
		];
	}
}