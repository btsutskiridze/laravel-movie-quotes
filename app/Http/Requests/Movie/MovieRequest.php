<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class MovieRequest extends FormRequest
{
	public function attributes(): array
	{
		return[
			'title_ka' => 'Movie name',
			'title_en' => 'Movie name',
			'slug'     => 'Movie name',
		];
	}

	protected function prepareForValidation(): void
	{
		$this->merge([
			'slug' => Str::slug($this->title_en),
		]);
	}
}