<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Atlas Beach Club' }} — Atlas Beach Club</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://atlasbeachfest.s3.ap-southeast-3.amazonaws.com">
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
        if (a.hash && (a.pathname === location.pathname || (a.pathname === '/' && location.pathname === '/'))) return;
        e.preventDefault();
        navigate(a.href);
    })">

    <div class="page-transition" :class="leaving && 'page-leaving'">
        <x-header />
        <x-mobile-menu />

        {{ $slot }}

        <x-footer />
    </div>

    {{-- Splash Screen --}}
    <style>
        #splash {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: #963D20;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            transition: opacity .8s ease
        }

        #splash .logo {
            max-width: 220px;
            opacity: 0;
            animation: splash-in .3s ease forwards
        }

        #splash.out .logo {
            animation: splash-logo-out .6s cubic-bezier(.55, .06, .68, .19) forwards
        }

        #splash.fade {
            opacity: 0
        }

        @keyframes splash-in {
            from {
                opacity: 0;
                transform: scale(.8)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        @keyframes splash-logo-out {
            0% {
                transform: scale(1) rotate(0);
                opacity: 1;
                filter: blur(0)
            }

            30% {
                transform: scale(.85) rotate(-5deg);
                opacity: 1;
                filter: blur(0)
            }

            70% {
                transform: scale(1.8) rotate(10deg);
                opacity: .5;
                filter: blur(4px)
            }

            100% {
                transform: scale(3) rotate(-3deg) translateY(-60px);
                opacity: 0;
                filter: blur(12px)
            }
        }
    </style>
    <div id="splash">
        <img src="{{ asset('assets/logo/logo.png') }}" alt="Logo" class="logo">
    </div>
    <script>
        (function() {
            var s = document.getElementById('splash');
            if (sessionStorage.getItem('splashShown')) {
                s.remove();
                return
            }
            sessionStorage.setItem('splashShown', '1');
            setTimeout(function() {
                s.classList.add('out');
                setTimeout(function() {
                    s.classList.add('fade')
                }, 600);
                setTimeout(function() {
                    s.remove()
                }, 1400);
            }, 3500);
        })();
    </script>

    @livewireScripts
    @stack('scripts')
</body>

</html>