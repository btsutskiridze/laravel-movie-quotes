@props(['active'=>false])

@php
    $classes ="block text-left px-3 py-1 
    text-1px rounded-xl leading-6 
    text-white hover:bg-stone-500 focus:bg-stone-600 
    hover:text-white focus:text-white";
    
    if($active) $classes .= " bg-stone-500 text-white";
    
@endphp

<a  {{$attributes(['class'=>$classes])}}>
    {{$slot}}
</a>
