<x-layout class="h-screen  grid place-items-center">
    <form action="{{route('login')}}"  method="POST" class="w-1/4">
        @csrf

        <div>
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-white">{{__('texts.username')}}</label>
            <input
                type="text" 
                class="focus:outline-none focus:bg-zinc-300 border border-gray-200 p-2 w-full rounded"
                name="username" id="username" 
                value="{{ old('username') }}" 
                required
            >
            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ __('texts.invalid_username') }}</p>
            @enderror
        </div>
        <div>
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-white  mt-6">{{__('texts.password')}}</label>
            <input type="password" class="focus:outline-none focus:bg-zinc-300 border border-gray-200 p-2 w-full rounded" name="password" id="password" required>    

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ __('texts.invalid_password') }}</p>
            @enderror

        </div>
        <x-form.button>{{__('texts.log_in')}}</x-form.button>
    </form>


</x-layout>