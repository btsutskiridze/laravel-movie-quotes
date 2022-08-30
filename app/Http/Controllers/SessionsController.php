<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
	public function create()
	{
		return view('sessions.create');
	}

	public function store()
	{
		$attributes = request()->validate([
			'username'          => ['required', 'exists:users,username'],
			'password'          => 'required',
		]);

		if (!auth()->attempt($attributes))
		{
			return back()->withInput()->withErrors([
				'username'=> 'invalid username',
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
