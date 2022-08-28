<x-layout class="h-screen  grid place-items-center">
    <form action="#" class="w-1/4" method="post">
        {{-- <h1 class="text-5xl mb-8 font-semibold text-white">Log In</h1> --}}
        <label for="username" class="block mb-2 uppercase font-bold text-xs text-white">username</label>
        <input type="text" class="focus:outline-none focus:bg-zinc-300 border border-gray-200 p-2 w-full rounded mb-6" name="username" id="username">

        <label for="password" class="block mb-2 uppercase font-bold text-xs text-white">password</label>
        <input type="password" class="focus:outline-none focus:bg-zinc-300 border border-gray-200 p-2 w-full rounded mb-6" name="password" id="password">

        <button class="bg-yellow-700 hover:bg-yellow-800 rounded text-white text-2xl pl-2 pr-2 py-1">Log In</button>
    </form>
</x-layout>