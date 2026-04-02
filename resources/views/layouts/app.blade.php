<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'ABC' }} — ABC</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans text-gray-800 antialiased">

    <x-header />
    <x-mobile-menu />

    {{ $slot }}

    <x-footer />
    <x-back-to-top />

    @livewireScripts
</body>
</html>
