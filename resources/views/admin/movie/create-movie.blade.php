<x-layout class="h-screen  ">
    @include('_header')
    <x-setting heading="{{__('texts.add_new_movie')}}">
        <form action="{{route('movie.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @error('slug')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
            <x-form.input name="title_en" text="movie_title_en" value="{{old('title_en')}}"/>

            <x-form.input name="title_ka" text="movie_title_ka" value="{{old('title_ka')}}"/>

            <x-form.button>{{__('texts.add_movie')}}</x-form.button>

        </form>
    </x-setting>
</x-layout>