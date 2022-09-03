@props(['heading'])

<section class="px-6 py-8v max-w-4xl mx-auto pt-24 font-sans">
    <h1 class="text-2xl font-bold text-white mb-8 p-2 bg-stone-500 rounded-lg">
        {{ucwords($heading)}}
    </h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class=" text-white rounded text-2xl border-stone-300 mb-4">Links</h4>
            <ul class="text-xl">
                <li class="{{request()->is('admin/movies') ? ' text-orange-200' : '' }} text-white" >
                    <a href="{{route('movies.show')}}">{{__('texts.all_movies')}}</a>
                </li>
                <li class="{{request()->is('admin/quotes') ? ' text-orange-200' : '' }} text-white" >
                    <a href="{{route('quotes.show')}}">{{__('texts.all_quotes')}}</a>
                </li>
                <br/>
                <li class="{{request()->is('admin/movies/create') ? ' text-orange-200' : '' }} text-white" >
                    <a href="{{route('movies.create')}}" >{{__('texts.new_movie')}}</a>
                </li>
                <li class="{{request()->is('admin/quotes/create') ? ' text-orange-200' : '' }} text-white" >
                    <a href="{{route('quotes.create')}}" >{{__('texts.new_quote')}}</a>
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