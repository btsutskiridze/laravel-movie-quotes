<x-layout class="h-screen">      
    @include('_header')
    <x-section class="justify-center">

    @if (empty($quote))
        <p class="text-2xl text-white">No quotes yet!</p>
    @else
    <article id="container" class="w-1/2 text-white">
        <img src="/images/samurai-champloo.jpg" class="mx-auto mt-0 mb-16 rounded-xl" width="550px"  alt="">
        <p class="text-center text-3xl font-normal mb-20">"{{$quote->title}}"</p>
        <h1 class="text-center text-3xl font-normal">
            <a 
                class="underline" 
                href="{{route('movie.show_quotes',['movie'=> $quote->movie->slug,])}}"
            >
                {{$quote->movie->title}}
            </a>
        </h1>
    </article>
    @endif

    </x-section>

</x-layout>

