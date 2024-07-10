<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    @include('layouts.navbar')
    <div style="background-image: url('/assets/images/background.png')" class="min-h-screen bg-no-repeat bg-cover">
        <div class="container mx-auto flex items-center justify-center min-h-[80vh]">
            @yield('content')
        </div>
    </div>
</body>

</html>
