<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Http\Requests\Quote\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class QuoteController extends Controller
{
	public function create()
	{
		return view('admin.create-quote', [
			'movies'=> Movie::all(),
		]);
	}

	public function show()
	{
		return view('admin.all-quotes', [
			'quotes'=> Quote::all(),
		]);
	}

	public function store(StoreQuoteRequest $request)
	{
		$quote = new Quote();
		$quote->movie_id = $request->movie_id;
		$quote->thumbnail = $request->file('thumbnail')->store('thumbnails');
		$quote->setTranslation('title', 'en', $request->title_en);
		$quote->setTranslation('title', 'ka', $request->title_ka);
		$quote->save();

		return redirect()->route('quotes.show');
	}

	public function edit(Quote $quote)
	{
		return view('admin.edit-quote', [
			'quote'  => $quote,
			'movies' => Movie::all(),
		]);
	}

	public function update(UpdateQuoteRequest $request, Quote $quote)
	{
		$quote->movie_id = $request->movie_id;

		if (isset($request->thumbnail))
		{
			$quote->thumbnail = $request->file('thumbnail')->store('thumbnails');
		}

		$quote->setTranslation('title', 'en', $request->title_en);
		$quote->setTranslation('title', 'ka', $request->title_ka);
		$quote->update();

		return redirect()->route('quotes.show');
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();
		return redirect()->back();
	}
}