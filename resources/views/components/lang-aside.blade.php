<aside class="fixed ml-4 top-[40%]">
    <a href="{{route('change.language','en')}}" id="ka" class="border-solid border-2 w-14 h-14 text-2xl grid place-items-center mb-2 rounded-full text-white">en</a>   
    <a href="{{route('change.language','ka')}}" id="en" class="border-solid border-2 w-14 h-14 text-2xl grid place-items-center mb-2 rounded-full text-white">Ka</a>   

    @if (App::currentLocale()=='en')
        <script>
            document.getElementById('ka').classList.add('bg-white','text-[#171717]');
            document.getElementById('ka').classList.remove('text-white');
        </script>
    @else
        <script>
            document.getElementById('en').classList.add('bg-white','text-[#171717]');
            document.getElementById('en').classList.remove('text-white');
        </script>
    @endif


</aside>
{{-- bg-white text-[#171717] --}}

{{-- border-white  hover:bg-slate-200 w-14 h-14 text-2xl grid place-items-center rounded-full  --}}