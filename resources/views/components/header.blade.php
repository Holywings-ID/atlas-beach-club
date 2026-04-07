@php
$navItems = [
['label' => 'Home', 'route' => 'home'],
['label' => 'Daybed', 'route' => 'daybed'],
['label' => 'Dining', 'route' => 'dining'],
['label' => 'Pool Bar', 'route' => 'poolbar'],
['label' => 'Activities', 'route' => 'activities'],
['label' => 'Explore', 'route' => 'explore'],
['label' => "What's On", 'route' => 'whatson'],
['label' => 'Offer', 'route' => 'offer'],
['label' => 'Support', 'route' => 'support'],
];
@endphp

<header id="header" class="sticky top-0 bg-transparent z-[9999]" x-data="{ open: false }">
    <div class="mx-auto flex items-center justify-between pt-4 px-8">
        <button @click="open = !open" class="tracking-tight">
            <img x-show="!open" src="{{ asset('assets/logo/menu.png') }}" alt="Menu" class="w-12 h-12 object-contain" />
            <img x-show="open" x-cloak src="{{ asset('assets/logo/atlas.png') }}" alt="Close" class="w-12 h-12 object-contain" />
        </button>

        <nav x-show="open" x-cloak x-transition class="border-b border-white pb-4">
            @foreach ($navItems as $item)
            <a href="{{ route($item['route']) }}"
                class="nav-link {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                {{ $item['label'] }}
            </a>
            @endforeach
        </nav>

        <a href="{{ route('reserve') }}" class="nav-link">
            Reserve
        </a>
    </div>
</header>