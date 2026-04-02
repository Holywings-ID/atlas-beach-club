@php
    $navItems = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'Daybed', 'route' => 'daybed'],
        ['label' => 'Dining', 'route' => 'dining'],
        ['label' => 'Pool Bar', 'route' => 'poolbar'],
        ['label' => 'Explore', 'route' => 'explore'],
        ['label' => "What's On", 'route' => 'whatson'],
        ['label' => 'Offer', 'route' => 'offer'],
        ['label' => 'Support', 'route' => 'support'],
        ['label' => 'Reserve', 'route' => 'reserve'],
    ];
@endphp

<header id="header" class="sticky top-0 bg-transparent z-40 backdrop-blur transition-shadow">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4">
        <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tight">ABC</a>

        {{-- Desktop Nav --}}
        <nav class="hidden gap-1 lg:flex">
            @foreach ($navItems as $item)
                <a href="{{ route($item['route']) }}"
                   class="nav-link {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        {{-- Mobile Toggle --}}
        <button
            x-data
            @click="$dispatch('toggle-mobile-menu')"
            class="lg:hidden"
            aria-label="Open menu"
        >
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
</header>
