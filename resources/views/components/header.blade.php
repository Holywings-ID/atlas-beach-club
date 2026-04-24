@php
$navItems = [
    ['label' => 'Home', 'href' => route('home')],
    ['label' => 'Daybed', 'href' => route('daybed')],
    ['label' => 'Dining', 'href' => route('dining'), 'children' => [
        ['label' => 'Overview', 'href' => route('dining')],
        ['label' => 'Menu', 'href' => route('menu')],
    ]],
    ['label' => 'Pool Bar', 'href' => route('poolbar')],
    ['label' => 'Activities', 'href' => route('activities')],
    ['label' => 'Explore', 'href' => route('explore'), 'children' => [
        ['label' => 'Family', 'href' => route('explore.family')],
        ['label' => 'Couple', 'href' => route('explore.couple')],
        ['label' => 'Friends', 'href' => route('explore.friends')],
        ['label' => 'Group', 'href' => route('explore.group')],
    ]],
    ['label' => "What's On", 'href' => route('whatson'), 'children' => [
        ['label' => 'Event Highlight', 'href' => route('whatson') . '#event-highlight'],
        ['label' => 'BBQ Grill', 'href' => route('whatson') . '#bbq-grill'],
        ['label' => 'Bar Takeover', 'href' => route('whatson') . '#bar-takeover'],
        ['label' => 'Parade', 'href' => route('whatson') . '#parade'],
    ]],
    ['label' => 'Offer', 'href' => route('offer')],
    ['label' => 'Support', 'href' => route('support'), 'children' => [
        ['label' => 'Support', 'href' => route('support')],
        ['label' => 'Q&A', 'href' => route('support.qa')],
        ['label' => 'Terms & Conditions', 'href' => route('support.terms')],
    ]],
];
@endphp

<header id="header" class="sticky top-0 bg-transparent z-[9999]" x-data="{
    open: false,
    dark: false,
    hasImage(el) {
        let node = el;
        for (let i = 0; i < 3 && node && node !== document.documentElement; i++, node = node.parentElement) {
            const tag = node.tagName;
            if (tag === 'IMG' || tag === 'VIDEO' || tag === 'CANVAS') return true;
            const s = getComputedStyle(node);
            if (s.backgroundImage && s.backgroundImage !== 'none') return true;
        }
        return false;
    },
    getBg(el) {
        while (el && el !== document.documentElement) {
            const bg = getComputedStyle(el).backgroundColor;
            if (bg && bg !== 'rgba(0, 0, 0, 0)' && bg !== 'transparent') return bg;
            el = el.parentElement;
        }
        return null;
    },
    checkBg() {
        const rect = $el.getBoundingClientRect();
        const points = [
            [rect.left + 50, rect.bottom + 5],
            [rect.left + rect.width / 2, rect.bottom + 5],
            [rect.right - 50, rect.bottom + 5],
        ];
        $el.style.pointerEvents = 'none';
        $el.style.visibility = 'hidden';
        let light = false;
        for (const [x, y] of points) {
            const target = document.elementFromPoint(x, y);
            if (!target) continue;
            if (this.hasImage(target)) { light = false; break; }
            const bg = this.getBg(target);
            if (!bg) continue;
            const m = bg.match(/\d+/g);
            if (m) {
                const [r, g, b] = m.map(Number);
                if ((r * 0.299 + g * 0.587 + b * 0.114) > 140) { light = true; break; }
            }
        }
        $el.style.pointerEvents = '';
        $el.style.visibility = '';
        this.dark = light;
    },
    init() {
        this.checkBg();
        window.addEventListener('scroll', () => requestAnimationFrame(() => this.checkBg()), { passive: true });
        window.addEventListener('resize', () => this.checkBg(), { passive: true });
    }
}">
    <div class="mx-auto flex items-center justify-between pt-4 px-4 lg:px-8">
        <button @click="open = !open" class="tracking-tight">
            <img x-show="!open"
                :src="dark ? '{{ asset('assets/logo/menu-secondary.png') }}' : '{{ asset('assets/logo/menu.png') }}'"
                alt="Menu" class="w-10 h-10 lg:w-12 lg:h-12 object-contain transition-all duration-300" />
            <img x-show="open" x-cloak
                :src="dark ? '{{ asset('assets/logo/atlas-secondary.png') }}' : '{{ asset('assets/logo/atlas.png') }}'"
                alt="Close" class="w-10 h-10 lg:w-12 lg:h-12 object-contain transition-all duration-300" />
        </button>

        <nav x-show="open" x-cloak x-transition class="hidden lg:flex items-center border-b pb-4 transition-colors duration-300"
            :class="dark ? 'border-[#963D20]' : 'border-white'">
            @foreach ($navItems as $item)
                @if (!empty($item['children']))
                <div class="relative" x-data="{ sub: false }" @mouseenter="sub = true" @mouseleave="sub = false">
                    <a href="{{ $item['href'] }}"
                        class="nav-link transition-colors duration-300 inline-flex items-center gap-1"
                        :class="dark && '!text-[#963D20] hover:!text-[#7a3018]'">
                        {{ $item['label'] }}
                        <svg class="w-3 h-3 transition-transform" :class="sub && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div x-show="sub" x-cloak x-transition.opacity class="absolute top-full left-0 mt-2 min-w-[160px] bg-black/80 backdrop-blur-sm rounded-lg py-2 shadow-lg">
                        @foreach ($item['children'] as $child)
                        <a href="{{ $child['href'] }}" class="block px-4 py-2 text-sm text-white hover:bg-white/10 whitespace-nowrap transition-colors">{{ $child['label'] }}</a>
                        @endforeach
                    </div>
                </div>
                @else
                <a href="{{ $item['href'] }}"
                    class="nav-link transition-colors duration-300"
                    :class="dark && '!text-[#963D20] hover:!text-[#7a3018]'">
                    {{ $item['label'] }}
                </a>
                @endif
            @endforeach
        </nav>

        <!-- @if(request()->routeIs('reserve', 'booking'))
        <img x-show="!open"
            :src="dark ? '{{ asset('assets/logo/logo-secondary.png') }}' : '{{ asset('assets/logo/logo.png') }}'"
            alt="Menu" class="hidden lg:block w-24 lg:w-36 object-contain transition-all duration-300" />
        @endif -->

        {{-- Mobile nav --}}
        <nav x-show="open" x-cloak x-transition
            class="lg:hidden absolute top-full left-0 right-0 bg-black/50 backdrop-blur-sm flex flex-col items-center py-4 gap-2">
            @foreach ($navItems as $item)
                @if (!empty($item['children']))
                <div x-data="{ sub: false }" class="flex flex-col items-center">
                    <button @click="sub = !sub" class="nav-link transition-colors duration-300 py-1 inline-flex items-center gap-1">
                        {{ $item['label'] }}
                        <svg class="w-3 h-3 transition-transform" :class="sub && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="sub" x-cloak x-transition class="flex flex-col items-center gap-1 mt-1">
                        @foreach ($item['children'] as $child)
                        <a href="{{ $child['href'] }}" class="text-sm text-white/80 hover:text-white py-1 transition-colors">{{ $child['label'] }}</a>
                        @endforeach
                    </div>
                </div>
                @else
                <a href="{{ $item['href'] }}"
                    class="nav-link transition-colors duration-300 py-1">
                    {{ $item['label'] }}
                </a>
                @endif
            @endforeach
        </nav>

        <a href="{{ route('reserve') }}" class="nav-link-solo text-xs lg:text-sm transition-colors duration-300"
            :class="dark && '!text-[#963D20] hover:!text-[#7a3018]'">
            Reserve
        </a>
    </div>
</header>