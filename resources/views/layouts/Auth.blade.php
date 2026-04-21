<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Login ecoGreen E-outsourcing' }}</title>

    @vite('resources/css/app.css')
    @livewireStyles
    <link rel="stylesheet" href={{ asset('css/login.css')}}>
    
</head>
<body class="min-h-screen">

    @yield('content')

    @livewireScripts
    <script src="{{ asset('js/login.js')}}"></script>
</body>
</html>
