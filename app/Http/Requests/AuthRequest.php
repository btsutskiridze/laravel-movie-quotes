<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'username'          => [
				'string',
				'required',
				'min:3',
				filter_var($this->username, FILTER_VALIDATE_EMAIL) ? 'exists:users,email' : 'exists:users,username',
			],

			'password'          => ['string', 'required', 'min:7'],
		];
	}
}