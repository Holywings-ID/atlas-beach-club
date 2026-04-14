<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Atlas Beach Club' }} — Atlas Beach Club</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .page-transition {
            transition: filter 0.5s ease, transform 0.5s ease, opacity 0.5s ease;
        }

        .page-leaving {
            filter: blur(12px);
            transform: translateY(-100px);
            opacity: 0;
        }

        @keyframes page-enter {
            from {
                filter: blur(12px);
                transform: translateY(40px);
                opacity: 0;
            }

            to {
                filter: blur(0);
                transform: translateY(0);
                opacity: 1;
            }
        }

        .page-transition {
            animation: page-enter 0.5s ease;
        }
    </style>
    @livewireStyles
</head>

<body class="font-body antialiased"
    x-data="{
        leaving: false,
        navigate(url) {
            this.leaving = true;
            setTimeout(() => window.location.href = url, 500);
        }
    }"
    x-init="document.addEventListener('click', (e) => {
        const a = e.target.closest('a[href]');
        if (!a || a.target === '_blank' || a.origin !== location.origin) return;
        e.preventDefault();
        navigate(a.href);
    })">

    <div class="page-transition" :class="leaving && 'page-leaving'">
        <x-header />
        <x-mobile-menu />

        {{ $slot }}

        <x-footer />
        <x-contact />
    </div>

    @livewireScripts
</body>

</html>