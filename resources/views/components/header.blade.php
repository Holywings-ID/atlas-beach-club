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
    <div class="mx-auto flex items-center justify-between pt-4 px-8">
        <button @click="open = !open" class="tracking-tight">
            <img x-show="!open" src="{{ asset('assets/logo/menu.png') }}" alt="Menu" class="w-12 h-12 object-contain transition-all duration-300" :class="dark && 'brightness-0'" />
            <img x-show="open" x-cloak src="{{ asset('assets/logo/atlas.png') }}" alt="Close" class="w-12 h-12 object-contain transition-all duration-300" :class="dark && 'brightness-0'" />
        </button>

        <nav x-show="open" x-cloak x-transition class="border-b pb-4 transition-colors duration-300" :class="dark ? 'border-black' : 'border-white'">
            @foreach ($navItems as $item)
            <a href="{{ route($item['route']) }}"
                class="nav-link {{ request()->routeIs($item['route']) ? 'active' : '' }} transition-colors duration-300"
                :class="dark && '{{ request()->routeIs($item['route']) ? '!text-slate-400' : '!text-black hover:!text-[#7a3018]' }}'">
                {{ $item['label'] }}
            </a>
            @endforeach
        </nav>

        <a href="{{ route('reserve') }}" class="nav-link transition-colors duration-300" :class="dark && '!text-black hover:!text-[#7a3018]'">
            Reserve
        </a>
    </div>
</header>