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
            <a href="{{ route($item['route']) }}"
               class="block px-6 py-3 text-lg {{ request()->routeIs($item['route']) ? 'font-bold text-black' : 'text-gray-600' }}">
                {{ $item['label'] }}
            </a>
        @endforeach
    </nav>
</div>
