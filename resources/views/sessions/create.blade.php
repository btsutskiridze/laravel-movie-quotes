<x-layout class="h-screen  grid place-items-center">
    <form action="/sessions"  method="POST" class="w-1/4">
        @csrf

        <div>
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-white">username</label>
            <input
                type="text" 
                class="focus:outline-none focus:bg-zinc-300 border border-gray-200 p-2 w-full rounded"
                name="username" id="username" 
                value="{{ old('username') }}" 
                required
            >
            @error('username')
                <p class="text-red-500 text-xs mb-4">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-white  mt-6">password</label>
            <input type="password" class="focus:outline-none focus:bg-zinc-300 border border-gray-200 p-2 w-full rounded" name="password" id="password" required>    

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>
        <button class="bg-yellow-700 hover:bg-yellow-800 rounded text-white text-2xl pl-2 pr-2 py-1  mt-6" type="submit">Log In</button>
    </form>


</x-layout>