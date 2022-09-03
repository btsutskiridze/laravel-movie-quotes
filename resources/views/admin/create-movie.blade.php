<x-layout class="h-screen overflow-y-hidden">
    @include('_header')
    <x-setting heading="Publish New Post">
        <form action="{{route('movie.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title_en" text="movie_title_en"/>

            <x-form.input name="title_ka" text="movie_title_ka"/>

            <x-form.button>Add Movie</x-form.button>

        </form>
    </x-setting>
</x-layout>