<x-layout class="h-screen">      
    @include('_header')
    <x-section class="justify-center">

        <article id="container" class="w-1/2 text-white">
            <img src="/images/samurai-champloo.jpg" class="mx-auto mt-0 mb-16 rounded-xl" width="550px"  alt="">
            <p class="text-center text-3xl font-normal mb-20">"{{$quote->title_en}}"</p>
            <h1 class="text-center text-3xl font-normal">
                <a 
                    class="underline" 
                    href="{{route('quotes.show',['movie'=> $quote->movie->slug,])}}"
                >
                    {{$quote->movie->title_en}}
                </a>
            </h1>
        </article>

    </x-section>

</x-layout>

