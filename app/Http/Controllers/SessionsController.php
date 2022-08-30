<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionsRequest;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
	public function create()
	{
		return view('sessions.create');
	}

	public function store(SessionsRequest $request)
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
