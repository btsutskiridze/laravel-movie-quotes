<x-layout class="h-screen overflow-y-hidden">
    @include('_header')
    <x-setting :heading=" 'Edit quote: ' . $quote->title" >
        <form action="{{route('quote.update',$quote)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")

            <x-form.input name="title_en" text="quote_title_en" :value="old('title_en',$quote->getTranslation('title','en'))"/>

            <x-form.input name="title_ka" text="quote_title_ka" :value="old('title_ka',$quote->getTranslation('title','ka'))"/>        

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" />
                </div>
                <img src="{{asset('storage/' . $quote->thumbnail)}}" alt="" class="rounded-xl ml-6 w-[100px] h-[100px] object-cover">
            </div>

            <label for="movie_id" class="block mb-1  text-base text-white">{{__('texts.movie_title' )}}</label>
            <select name="movie_id" id="movie_id" class="py-2 px-1  rounded focus:outline-none w-full">
                @foreach ($movies as $movie)
                    <option value="{{$movie->id }}" {{old('movie_id', $quote->movie_id) == $movie->id ? 'selected' : '' }}   >{{ucwords($movie->title)}}</option>
                @endforeach
            </select>

            <x-form.button>Edit quote</x-form.button>
        </form>
    </x-setting>
</x-layout>