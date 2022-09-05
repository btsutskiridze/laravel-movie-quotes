<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Http\Requests\Quote\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class QuoteController extends Controller
{
	public function create(): View
	{
		return view('admin.quote.create-quote', [
			'movies'=> Movie::all(),
		]);
	}

	public function show(): View
	{
		return view('admin.quote.all-quotes', [
			'quotes'=> Quote::all(),
		]);
	}

	public function store(StoreQuoteRequest $request): RedirectResponse
	{
		$quote = new Quote();
		$quote->movie_id = $request->movie_id;
		$quote->thumbnail = $request->file('thumbnail')->store('thumbnails');
		$quote->setTranslation('title', 'en', $request->title_en);
		$quote->setTranslation('title', 'ka', $request->title_ka);
		$quote->save();

		return redirect()->route('quotes.show');
	}

	public function edit(Quote $quote): View
	{
		return view('admin.quote.edit-quote', [
			'quote'  => $quote,
			'movies' => Movie::all(),
		]);
	}

	public function update(Quote $quote, UpdateQuoteRequest $request): RedirectResponse
	{
		$quote->movie_id = $request->movie_id;

		if (isset($request->thumbnail))
		{
			Storage::delete($quote->thumbnail);
			$quote->thumbnail = $request->file('thumbnail')->store('thumbnails');
		}

		$quote->setTranslation('title', 'en', $request->title_en);
		$quote->setTranslation('title', 'ka', $request->title_ka);
		$quote->update();

		return redirect()->route('quotes.show');
	}

	public function destroy(Quote $quote): RedirectResponse
	{
		$quote->delete();
		return redirect()->back();
	}
}