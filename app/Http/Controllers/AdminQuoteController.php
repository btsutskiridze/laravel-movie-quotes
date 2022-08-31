<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class AdminQuoteController extends Controller
{
	public function create()
	{
		return view('admin.create-quote');
	}

	public function show()
	{
		return view('admin.all-quotes', [
			'quotes'=> Quote::all(),
		]);
	}
}