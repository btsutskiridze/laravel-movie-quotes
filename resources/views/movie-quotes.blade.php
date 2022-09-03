<x-layout class="h-screen">
    @include('_header')
    <x-section class="justify-items-start mt-28">
        <div >
            <h1 class="text-3xl self-start font-normal mb-[60px]">
                <a class="text-white cursor-pointer">
                    {{$movie->title}}
                </a>
            </h1>
            @foreach ($quotes as $quote)
                {{-- single quote --}}
                <div class="bg-white rounded-lg  border-2 mb-[67px] border-black">
                    <img src="{{asset('storage/' . $quote->thumbnail)}}" class="rounded-t-md border-b-2 z-10 w-full h-72 border-black object-cover"  alt="">
                    <p class="text-center text-xl font-normal px-3 py-4">"{{$quote->title}}"</p>
                </div>
            @endforeach
        </div>
    </x-section>
</x-layout>