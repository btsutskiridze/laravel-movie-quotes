@props(['heading'])

<section class="px-6 py-8v max-w-4xl mx-auto  mt-20 font-sans">
    <h1 class="text-2xl font-bold text-white mb-8 p-2 bg-stone-500 rounded-lg">
        {{ucwords($heading)}}
    </h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class=" text-white rounded text-2xl border-stone-300 mb-4">Links</h4>
            <ul class="text-xl">
                <li class="{{request()->is('admin/movies') ? ' text-orange-200' : '' }} text-white" >
                    <a href="{{route('movies.show')}}">All Movies</a>
                </li>
                <li class="{{request()->is('admin/quotes') ? ' text-orange-200' : '' }} text-white" >
                    <a href="{{route('quotes.show')}}">All Quotes</a>
                </li>
                <li class="{{request()->is('admin/movies/create') ? ' text-orange-200' : '' }} text-white" >
                    <a href="{{route('movies.create')}}" >New Movie</a>
                </li>
                <li class="{{request()->is('admin/quotes/create') ? ' text-orange-200' : '' }} text-white" >
                    <a href="{{route('quotes.create')}}" >New Quote</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{$slot}}
            </x-panel>
        </main>
    </div>
</section>