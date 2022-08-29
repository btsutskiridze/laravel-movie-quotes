<x-lang-aside/>   
@auth

    <aside class=" font-sans fixed right-0 top-4  mr-5 ">
        {{-- dropdown --}}
        <x-dropdown>
            <x-slot name="trigger">
                <button  class="hover:text-stone-300 rounded-lg px-4 py-3 text-2xl text-white cursor-pointer" >Welcome Back! {{auth()->user()->username}}</button>
            </x-slot>

            <x-dropdown-item href="#"  >All movies</x-dropdown-item>
            <x-dropdown-item href="#" >All quotes</x-dropdown-item>
            <x-dropdown-item href="#" >Add new</x-dropdown-item>
            <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>
        </x-dropdown>
        {{-- for logout --}}
        <form action="/logout" id="logout-form" method="post">
            @csrf
        </form>

    </aside>
@else 
    <x-login-aside/>
@endauth