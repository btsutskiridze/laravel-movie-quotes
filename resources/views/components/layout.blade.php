<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie quotes</title>
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
<body {{$attributes(['class' =>"h-screen"])}}>

    {{ $slot }}

</body>
</html>