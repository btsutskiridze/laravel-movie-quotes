<x-layout>

    @include('_header')
    <x-setting heading="Publish New Post">
        <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        
        <x-form.input name="quote_title_en"/>
        <x-form.input name="quote_title_ka"/>
        <x-form.input name="slug" />
        <x-form.input name="thumbnail" type="file"/>
        
        <label for="movie_id" class="block mb-1  text-base text-white">{{__('texts.movie_title' )}}</label>
        <select name="movie_id" id="movie_id" class="py-2 px-1  rounded focus:outline-none w-full">
                @foreach ($movies as $movie)
                    <option value="{{$movie->id }}" {{old('movie_id') == $movie->id ? 'selected' : '' }}   >{{ucwords($movie->title_en)}}</option>
                @endforeach
        </select>

        <x-form.button>Add quote</x-form.button>
        </form>
    </x-setting>
</x-layout>