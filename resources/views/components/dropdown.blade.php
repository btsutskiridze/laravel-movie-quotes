@props(['trigger'])

<div x-data="{ show: false}" @click.away="show=false" class="relative">
    {{-- trigger --}}
    <div @click="show = !show">
        {{$trigger}}
    </div>
    
    {{-- links --}}
    <div x-show = "show" 
        class="px-2 py-3 absolute bg-neutral-800 w-full mt-0 rounded-2xl  z-50 overflow-auto max-h-fit " 
        style="display:none"
    >
        {{$slot}}
    </div>

</div>