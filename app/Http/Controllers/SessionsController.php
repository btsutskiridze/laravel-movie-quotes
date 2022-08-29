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
			'username'          => ['required', !('unique:users,username')],
			'password'          => 'required',
		]);

		if (!auth()->attempt($attributes))
		{
			return back()->withInput()->withErrors([
				'username'=> 'Invalid username',
				'password'=> 'Invalid password',
			]);
		}

		// session()->flash('sucess','Welcome back!');
		return redirect('/')->with('success', 'Welcome back!');
	}

	public function destroy()
	{
		auth()->logout();
		return redirect('/')->with('success', 'Successfully Logged out ');
	}
}