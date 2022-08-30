<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	public function create()
	{
		return view('sessions.create');
	}

	public function store(SessionRequest $request)
	{
		if (!auth()->attempt(['username' => $request->username, 'password' => $request->password]))
		{
			throw ValidationException::withMessages([
				'password'=> 'invalid password',
			]);
		}

		// session()->flash('sucess','Welcome back!');
		return redirect('/')->with('success', 'welcome_back_2');
	}

	public function destroy()
	{
		auth()->logout();
		return redirect('/')->with('success', 'successfully_logged_out');
	}
}