@props(['name','type'=>'text'])
<div>
    <label for="{{$name}}" class="block mb-2 uppercase text-xs text-white">{{__('texts.'. $name )}}</label>
    <textarea type="text" class="focus:outline-none focus:bg-zinc-300 border border-gray-200 p-2 w-full rounded" name="{{$name}}" id="{{$name}}" {{$attributes}} required>{{$slot ?? old($name)}}</textarea>

    @error('$name')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
</div>

