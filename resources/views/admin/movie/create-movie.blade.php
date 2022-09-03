<x-layout class="h-screen  ">
    @include('_header')
    <x-setting heading="add new movie">
        <form action="{{route('movie.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @error('slug')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
            <x-form.input name="title_en" text="movie_title_en" value="{{old('title_en')}}"/>

            <x-form.input name="title_ka" text="movie_title_ka" value="{{old('title_ka')}}"/>

            <x-form.button>Add Movie</x-form.button>

        </form>
    </x-setting>
</x-layout>