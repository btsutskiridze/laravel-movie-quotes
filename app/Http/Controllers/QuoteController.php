<?php

namespace App\Http\Controllers;

class QuoteController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function show()
	{
		return view('show');
	}
}