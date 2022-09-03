<x-layout class="h-screen ">
    @include('_header')
    <x-setting heading="{{__('texts.all_movies')}}">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        
                        <tbody class="divide-y divide-gray-400 bg-white">

                            @foreach ($movies as $movie)
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                <div class="flex items-center">

                                    <div class=" text-gray-900"><a href="{{route('movie.show_quotes',['movie'=> $movie->slug,])}}">{{ucwords($movie->title)}}</a></div>

                                </div>
                                </td>

                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-600">{{__('texts.published')}}</span>
                                </td>

                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <a href="{{route('movie.edit',$movie)}}" class="text-blue-500 hover:text-blue-700">{{__('texts.edit')}}</a>
                                </td>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    {{-- <a href="/admin/posts/{{$post->id}}/edit" class="text-blue-500 hover:text-blue-700">Delete</a> --}}
                                    <form action="{{route('movie.destroy',$movie)}}" method="POST" class="grid place-items-center">
                                        @csrf
                                        @method("DELETE")
                                        
                                        <button class="text-xs text-red-600 "><x-delete-icon/></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>