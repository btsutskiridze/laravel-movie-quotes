<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthController extends Controller
{
	public function create(): View
	{
		return view('login');
	}

	public function login(AuthRequest $request): RedirectResponse
	{
		if (!auth()->attempt([
			$this->usernameOrEmail($request->username)   => $request->username,
			'password'                                   => $request->password, ])
		) {
			throw ValidationException::withMessages([
				'password'=> 'invalid password',
			]);
		}

		// session()->flash('sucess','Welcome back!');
		return redirect('/')->with('success', 'welcome_back_2');
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect('/')->with('success', 'successfully_logged_out');
	}

	protected function usernameOrEmail($par): string
	{
		return filter_var($par, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
	}
}