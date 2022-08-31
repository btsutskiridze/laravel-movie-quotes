<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{__('texts.movie_quotes')}}</title>
    @vite('resources/css/app.css')
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background: radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%);
        }
    
    </style>
</head>
<body {{$attributes(['class' =>"font-sansation"])}}>

    {{ $slot }}

    @if(session()->has('success'))
        <div 
            x-data ="{show: true}"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            class="fixed bg-stone-900 text-white pt-2 pb-1 px-4 rounded-xl bottom-3 right-3 text-lg"
        >
            <p>
                {{ __('texts.' . session()->get('success')) }}
            </p>
        </div>
    @endif
</body>
</html>