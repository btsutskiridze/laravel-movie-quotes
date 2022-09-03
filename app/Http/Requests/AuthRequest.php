<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
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