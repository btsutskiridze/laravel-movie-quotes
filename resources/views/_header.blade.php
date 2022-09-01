<x-lang-aside/>   
@auth

    <aside class=" font-sans fixed right-0 top-4  mr-5 ">
        {{-- dropdown --}}
        <x-dropdown>
            <x-slot name="trigger">
                <button  class="hover:text-stone-300 rounded-lg px-4 py-3 text-1xl text-white cursor-pointer" >{{__('texts.welcome_back')}}!  {{auth()->user()->username}}</button>
            </x-slot>
            <x-dropdown-item href="{{route('random.quote')}}" >Home</x-dropdown-item>
            <x-dropdown-item href="{{route('quotes.show')}}" >Dashboard</x-dropdown-item>
            <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">{{__('texts.log_out')}}</x-dropdown-item>
        </x-dropdown>
        {{-- for logout --}}
        <form action="{{route('logout')}}" id="logout-form" method="post">
            @csrf
        </form>

    </aside>
@else 
    <x-login-aside/>
@endauth