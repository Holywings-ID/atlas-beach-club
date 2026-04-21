<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Atlas Beach Club' }} — Atlas Beach Club</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased">

    <x-header />
    <x-mobile-menu />

    <div class="relative ">
        {{ $slot }}
    </div>

    <x-footer />

    @livewireScripts
</body>

</html>