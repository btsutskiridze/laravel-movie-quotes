<aside class="fixed ml-4 top-[40%]">
    <a 
        href="{{route('language.change','en')}}" 
        id="ka" 
        class="
            border-solid border-2 w-14 h-14 
            text-2xl grid place-items-center 
            mb-2 rounded-full text-white
            {{App::currentLocale()=='en' ? 'bg-white text-[#171717]' : 'text-white' }}
        ">
        en
    </a>   
    <a 
        href="{{route('language.change','ka')}}" 
        id="en" 
        class="border-solid border-2 
        w-14 h-14 text-2xl grid 
        place-items-center mb-2
        rounded-full text-white
        {{App::currentLocale()=='ka' ? 'bg-white text-[#171717]' : 'text-white' }}
        ">
        Ka
    </a>  
</aside>
{{-- bg-white text-[#171717] --}}

{{-- border-white  hover:bg-slate-200 w-14 h-14 text-2xl grid place-items-center rounded-full  --}}