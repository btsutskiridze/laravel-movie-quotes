<x-layout class="h-screen">
    @include('_header')
    <x-section class="justify-items-start mt-28">
        <div >
            <h1 class="text-3xl self-start font-normal mb-[60px]">
                <a class="text-white cursor-pointer">
                    {{$movie->title_en}}
                </a>
            </h1>
            @foreach ($quotes as $quote)
                <x-quote title="{{$quote->title_en}}"/>
            @endforeach


            {{-- <x-quote title="{{$quote->title_en}}"/> --}}
            {{-- <x-quote/>
            <x-quote/>
            <x-quote/>
            <x-quote/>
            <x-quote/> --}}

        </div>
    </x-section>
</x-layout>