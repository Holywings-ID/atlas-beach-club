<footer class="bg-[#A74423] relative">

    <div class="container relative z-[90] mx-auto px-8 py-12">

        {{-- Logo --}}
        <div class="flex justify-center mb-10">
            <img src="{{ asset('assets/logo/logo.png') }}" alt="Atlas Beach Club" class="h-16 w-auto">
        </div>

        {{-- Reserve Bar --}}
        <a href="{{ route('reserve') }}"
            class="block bg-[#2B2B2B] hover:bg-[#333333] rounded-sm py-12 text-center mb-12 no-underline transition-colors duration-300">
            <span class="text-white text-lg tracking-[0.2em] uppercase">Reserve Here</span>
        </a>

        {{-- 3-Column Menu Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-14">

            {{-- Column 1: Daybeds + Dining + Poolbar --}}
            <div>

                {{-- Daybeds --}}
                <div class="mb-10">
                    <h3 class="text-white text-xl mb-3 tracking-wide">Daybeds</h3>
                    <hr class="border-white/20 mb-1">
                    @foreach ([
                    ['label' => 'Atlas Copacabana', 'route' => 'daybed'],
                    ['label' => 'Atlas Surf Side', 'route' => 'daybed'],
                    ['label' => 'Atlas Sultan', 'route' => 'daybed'],
                    ['label' => 'Atlas Backstage', 'route' => 'daybed'],
                    ] as $item)
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center justify-between py-3 border-b border-white/20 no-underline text-white text-sm font-light tracking-wide hover:opacity-65 transition-opacity duration-200">
                        <span>{{ $item['label'] }}</span>
                        <span class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </a>
                    @endforeach
                </div>

                {{-- Dining --}}
                <div class="mb-10">
                    <h3 class="text-white text-xl mb-3 tracking-wide">Dining</h3>
                    <hr class="border-white/20 mb-1">
                    @foreach ([
                    ['label' => 'Overview Cuisine', 'route' => 'dining'],
                    ['label' => 'Menu Food & Beverages', 'route' => 'dining'],
                    ] as $item)
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center justify-between py-3 border-b border-white/20 no-underline text-white text-sm font-light tracking-wide hover:opacity-65 transition-opacity duration-200">
                        <span>{{ $item['label'] }}</span>
                        <span class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </a>
                    @endforeach
                </div>

                {{-- Poolbar --}}
                <div>
                    <h3 class="text-white text-xl mb-3 tracking-wide">Poolbar</h3>
                    <hr class="border-white/20 mb-1">
                    @foreach ([
                    ['label' => 'Bar Side', 'route' => 'poolbar'],
                    ['label' => 'Surf Side', 'route' => 'poolbar'],
                    ] as $item)
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center justify-between py-3 border-b border-white/20 no-underline text-white text-sm font-light tracking-wide hover:opacity-65 transition-opacity duration-200">
                        <span>{{ $item['label'] }}</span>
                        <span class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </a>
                    @endforeach
                </div>

            </div>

            {{-- Column 2: Activities + Explore --}}
            <div>

                {{-- Activities --}}
                <div class="mb-10">
                    <h3 class="text-white text-xl mb-3 tracking-wide">Activities</h3>
                    <hr class="border-white/20 mb-1">
                    @foreach ([
                    ['label' => 'Padel', 'route' => 'activities'],
                    ['label' => 'Flying Fox', 'route' => 'activities'],
                    ['label' => 'Billiard', 'route' => 'activities'],
                    ] as $item)
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center justify-between py-3 border-b border-white/20 no-underline text-white text-sm font-light tracking-wide hover:opacity-65 transition-opacity duration-200">
                        <span>{{ $item['label'] }}</span>
                        <span class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </a>
                    @endforeach
                </div>

                {{-- Explore --}}
                <div>
                    <h3 class="text-white text-xl mb-3 tracking-wide">Explore</h3>
                    <hr class="border-white/20 mb-1">
                    @foreach ([
                    ['label' => 'Family', 'route' => 'explore'],
                    ['label' => 'Couple', 'route' => 'explore'],
                    ['label' => 'Friends', 'route' => 'explore'],
                    ['label' => 'Group', 'route' => 'explore'],
                    ] as $item)
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center justify-between py-3 border-b border-white/20 no-underline text-white text-sm font-light tracking-wide hover:opacity-65 transition-opacity duration-200">
                        <span>{{ $item['label'] }}</span>
                        <span class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </a>
                    @endforeach
                </div>

            </div>

            {{-- Column 3: What's On --}}
            <div>
                <h3 class="text-white text-xl mb-3 tracking-wide">What's On</h3>
                <hr class="border-white/20 mb-1">
                @foreach ([
                ['label' => 'Event Highlight', 'route' => 'whatson'],
                ['label' => 'Barbeque', 'route' => 'whatson'],
                ['label' => 'Bar Take Over', 'route' => 'whatson'],
                ['label' => 'Parade Entertainment', 'route' => 'whatson'],
                ] as $item)
                <a href="{{ route($item['route']) }}"
                    class="flex items-center justify-between py-3 border-b border-white/20 no-underline text-white text-sm font-light tracking-wide hover:opacity-65 transition-opacity duration-200">
                    <span>{{ $item['label'] }}</span>
                    <span class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center shrink-0">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                </a>
                @endforeach

                <div class="mt-6">
                    @foreach ([
                    ['label' => 'Journey', 'route' => 'whatson'],
                    ['label' => 'Offers', 'route' => 'offer'],
                    ['label' => 'Support', 'route' => 'support'],
                    ] as $item)
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center justify-between py-3 border-b border-white/20 no-underline text-white text-sm font-light tracking-wide hover:opacity-65 transition-opacity duration-200">
                        <span>{{ $item['label'] }}</span>
                        <span class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </a>
                    @endforeach
                </div>
            </div>

        </div>{{-- /grid --}}

        {{-- Footer Bottom Bar --}}
        <div class="border-t border-white/20 pt-8 flex flex-col lg:flex-row flex-wrap justify-between items-center gap-6">

            {{-- Social + Tagline --}}
            <div>
                <p class="text-white/60 text-[0.7rem] tracking-[0.15em] uppercase mb-4">
                    Discover the Latest Atlas Beach Club Bali
                </p>
                <div class="flex justify-center lg:justify-normal gap-3">

                    {{-- Facebook --}}
                    <a href="#" aria-label="Facebook"
                        class="w-9 h-9 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/10 transition-colors duration-200">
                        <svg class="w-4 h-4" fill="white" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                        </svg>
                    </a>

                    {{-- Instagram --}}
                    <a href="#" aria-label="Instagram"
                        class="w-9 h-9 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/10 transition-colors duration-200">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.8">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17.5" cy="6.5" r="0.8" fill="white" stroke="none" />
                        </svg>
                    </a>

                    {{-- WhatsApp --}}
                    <a href="#" aria-label="WhatsApp"
                        class="w-9 h-9 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/10 transition-colors duration-200">
                        <svg class="w-4 h-4" fill="white" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                    </a>

                    {{-- Line --}}
                    <a href="#" aria-label="Line"
                        class="w-9 h-9 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/10 transition-colors duration-200">
                        <svg class="w-4 h-4" fill="white" viewBox="0 0 24 24">
                            <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.281.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314" />
                        </svg>
                    </a>

                </div>
            </div>

            {{-- Address --}}
            <p class="text-white/70 text-xs text-center lg:text-right leading-7 font-light">
                Jalan Pantai Berawa No. 88, Desa Tibubeneng, Kec. Kuta Utara,<br>
                Kab. Badung, Bali 80361, Indonesia
            </p>

        </div>

        {{-- Copyright --}}
        <p class="mt-6 text-center text-white/35 text-[0.7rem] tracking-wide">
            &copy; {{ date('Y') }} Atlas Beach Club. All rights reserved.
        </p>

    </div>
</footer>