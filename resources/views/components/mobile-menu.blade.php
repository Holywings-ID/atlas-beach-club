@php
    $navItems = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'Daybed', 'route' => 'daybed'],
        ['label' => 'Dining', 'route' => 'dining', 'children' => [
            ['label' => 'Overview', 'route' => 'dining'],
            ['label' => 'Menu', 'route' => 'menu'],
        ]],
        ['label' => 'Pool Bar', 'route' => 'poolbar'],
        ['label' => 'Activities', 'route' => 'activities'],
        ['label' => 'Explore', 'route' => 'explore', 'children' => [
            ['label' => 'Family', 'route' => 'explore.family'],
            ['label' => 'Couple', 'route' => 'explore.couple'],
            ['label' => 'Friends', 'route' => 'explore.friends'],
            ['label' => 'Group', 'route' => 'explore.group'],
        ]],
        ['label' => "What's On", 'route' => 'whatson', 'children' => [
            ['label' => 'Event Highlight', 'href' => '/whats-on#event-highlight'],
            ['label' => 'BBQ Grill', 'href' => '/whats-on#bbq-grill'],
            ['label' => 'Bar Takeover', 'href' => '/whats-on#bar-takeover'],
            ['label' => 'Parade', 'href' => '/whats-on#parade'],
        ]],
        ['label' => 'Offer', 'route' => 'offer'],
        ['label' => 'Support', 'route' => 'support', 'children' => [
            ['label' => 'Support', 'route' => 'support'],
            ['label' => 'Q&A', 'route' => 'support.qa'],
            ['label' => 'Terms & Conditions', 'route' => 'support.terms'],
        ]],
        ['label' => 'Reserve', 'route' => 'reserve'],
    ];
@endphp

<div
    x-data="{ open: false }"
    @toggle-mobile-menu.window="open = !open"
    x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
    x-cloak
    class="fixed inset-0 z-50 flex flex-col bg-white"
>
    <div class="flex justify-end p-4">
        <button @click="open = false" aria-label="Close menu">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
    <nav class="mt-8">
        @foreach ($navItems as $item)
            @if (!empty($item['children']))
            <div x-data="{ sub: false }">
                <button @click="sub = !sub" class="w-full flex items-center justify-between px-6 py-3 text-lg {{ request()->routeIs($item['route'].'*') ? 'font-bold text-black' : 'text-gray-600' }}">
                    {{ $item['label'] }}
                    <svg class="w-4 h-4 transition-transform" :class="sub && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="sub" x-cloak x-transition>
                    @foreach ($item['children'] as $child)
                    <a href="{{ isset($child['route']) ? route($child['route']) : $child['href'] }}"
                       class="block pl-10 pr-6 py-2 text-base {{ isset($child['route']) && request()->routeIs($child['route']) ? 'font-bold text-black' : 'text-gray-500' }}">
                        {{ $child['label'] }}
                    </a>
                    @endforeach
                </div>
            </div>
            @else
            <a href="{{ route($item['route']) }}"
               class="block px-6 py-3 text-lg {{ request()->routeIs($item['route']) ? 'font-bold text-black' : 'text-gray-600' }}">
                {{ $item['label'] }}
            </a>
            @endif
        @endforeach
    </nav>
</div>
