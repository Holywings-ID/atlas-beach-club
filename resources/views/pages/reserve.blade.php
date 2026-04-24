<x-layouts.app title="Reserve">
    <main class="bg-[#EBE1D5] -mt-24 pb-24 pt-32">
        <div class="flex justify-center mb-6">
            <a href={{ route('home') }}>
                <img src="{{ asset('assets/logo/logo-secondary.png') }}"
                    alt="logo"
                    class="w-24 lg:w-36 object-contain transition-all duration-300" />
            </a>
        </div>
        <div class="container mx-auto px-4 py-6">

            {{-- ── Map ── --}}
            <div class="relative rounded overflow-hidden mb-6 h-full">
                <img
                    src="{{ asset('assets/image/map.png') }}"
                    alt="Resort Map"
                    class="w-full h-full object-cover" />
            </div>

            {{-- ── Exclusive Offers ── --}}
            <div class="lg:flex justify-between items-center gap-2 mb-6">
                <div class="flex lg:flex-col flex-row gap-2 lg:gap-0 lg:justify-normal justify-center mb-4 lg:mb-0 shrink-0">
                    <p class="text-[#963D20] text-lg leading-tight">Exclusive</p>
                    <p class="text-[#963D20] text-lg leading-tight">Offer</p>
                </div>

                <div class="flex items-center gap-2 min-w-0 flex-1">
                    <button onclick="document.getElementById('offer-scroll').scrollBy({left:-(document.querySelector('#offer-scroll span')?.offsetWidth+8||200),behavior:'smooth'})" class="w-7 h-7 rounded-full border border-[#963D20] text-[#963D20] hover:bg-[#963D20] hover:text-[#EBE1D5] flex items-center justify-center transition-colors shrink-0 ml-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <div id="offer-scroll" class="flex gap-2 overflow-x-auto min-w-0 flex-1 scroll-smooth [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                        @foreach([
                        ['key' => 'dining', 'label' => '10% OFF DINING'],
                        ['key' => 'daybed', 'label' => 'BUY 1 GET 1 DAYBED'],
                        ['key' => 'spa', 'label' => '25% OFF SPA'],
                        ['key' => 'freespa', 'label' => 'FREE SPA TREATMENT'],
                        ['key' => 'dining', 'label' => '10% OFF DINING'],
                        ['key' => 'daybed', 'label' => 'BUY 1 GET 1 DAYBED'],
                        ['key' => 'spa', 'label' => '25% OFF SPA'],
                        ['key' => 'freespa', 'label' => 'FREE SPA TREATMENT'],
                        ] as $offer)
                        <span
                            onclick="openOfferModal('{{ $offer['key'] }}')"
                            class="bg-[#963D20] hover:bg-[#7A3118] text-[#EBE1D5] font-medium tracking-widest px-4 py-2.5 whitespace-nowrap shrink-0 cursor-pointer transition-colors">
                            {{ $offer['label'] }}
                        </span>
                        @endforeach
                    </div>

                    <button onclick="document.getElementById('offer-scroll').scrollBy({left:(document.querySelector('#offer-scroll span')?.offsetWidth+8||200),behavior:'smooth'})" class="w-7 h-7 rounded-full border border-[#963D20] text-[#963D20] hover:bg-[#963D20] hover:text-[#EBE1D5] flex items-center justify-center transition-colors shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <hr class="border-[#DDD0C2] mb-4">

            {{-- ── Section Tabs ── --}}
            <div class="flex items-center justify-between mb-5">
                <div class="flex gap-6 overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                    @foreach(['Daybed', 'Dining', 'Poolbar', 'Activities'] as $i => $tab)
                    <button
                        onclick="setSection(this)"
                        class="section-tab pb-2 border-b-2 whitespace-nowrap transition-colors
                               {{ $i === 0
                                  ? 'border-[#963D20] text-[#963D20] font-medium'
                                  : 'border-transparent text-[#8a7a6a] hover:text-[#963D20]' }}">
                        {{ $tab }}
                    </button>
                    @endforeach
                </div>

                <div x-data="calendarPicker()" class="relative shrink-0 ml-4">
                    <button @click="open = !open" class="flex items-center gap-1.5 bg-[#963D20] hover:bg-[#7A3118] text-[#EBE1D5] font-medium tracking-wide px-3 py-2 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span x-text="selected ? selected : 'Calendar'"></span>
                    </button>

                    <div x-show="open" @click.outside="open = false" x-transition
                        class="absolute right-0 top-full mt-2 w-72 bg-[#EBE1D5] border border-[#DDD0C2] shadow-xl z-50 p-4">
                        <div class="flex items-center justify-between mb-3">
                            <button @click="prevMonth()" class="w-7 h-7 rounded-full border border-[#963D20] text-[#963D20] hover:bg-[#963D20] hover:text-[#EBE1D5] flex items-center justify-center transition-colors">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <span class="text-[#963D20] font-medium" x-text="monthLabel"></span>
                            <button @click="nextMonth()" class="w-7 h-7 rounded-full border border-[#963D20] text-[#963D20] hover:bg-[#963D20] hover:text-[#EBE1D5] flex items-center justify-center transition-colors">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>

                        <div class="grid grid-cols-7 text-center text-sm">
                            <template x-for="d in ['Su','Mo','Tu','We','Th','Fr','Sa']">
                                <span x-text="d" class="py-1 text-xs text-[#8a7a6a]"></span>
                            </template>
                            <template x-for="blank in startDay">
                                <span></span>
                            </template>
                            <template x-for="day in daysInMonth">
                                <button @click="selectDate(day)"
                                    :class="isSelected(day) ? 'bg-[#963D20] text-[#EBE1D5]' : 'text-[#6a5a4a] hover:bg-[#963D20]/10'"
                                    class="w-8 h-8 mx-auto rounded-full flex items-center justify-center transition-colors cursor-pointer"
                                    x-text="day"></button>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ── Venue Tabs ── --}}
            <div class="flex gap-5 mb-6 overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                @foreach([
                ['name' => 'Copacabana', 'active' => true],
                ['name' => 'Surf Side', 'active' => false],
                ['name' => 'Sultan', 'active' => false],
                ['name' => 'Backstage', 'active' => false],
                ] as $venue)
                <button
                    onclick="setVenue(this)"
                    class="venue-tab flex items-center gap-1.5 whitespace-nowrap transition-colors
                           {{ $venue['active']
                              ? 'text-[#963D20] font-medium'
                              : 'text-[#8a7a6a] hover:text-[#963D20]' }}">
                    {{ $venue['name'] }}
                    <span class="venue-icon w-5 h-5 rounded-full border border-current flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="{{ $venue['active'] ? 'M19 9l-7 7-7-7' : 'M9 5l7 7-7 7' }}" />
                        </svg>
                    </span>
                </button>
                @endforeach
            </div>

            {{-- ── Daybed Cards ── --}}
            @php
            $daybeds = [
            ['zone' => 'Left Side A', 'capacity' => 3, 'price' => 4000000, 'nonmember' => 15000000, 'img' => 'assets/image/pool1.png'],
            ['zone' => 'Right Side A','capacity' => 6, 'price' => 6000000, 'nonmember' => 15000000, 'img' => 'assets/image/pool1.png'],
            ['zone' => 'Back', 'capacity' => 12, 'price' => 10000000, 'nonmember' => 15000000, 'img' => 'assets/image/pool1.png'],
            ['zone' => 'Middle', 'capacity' => 14, 'price' => 11000000, 'nonmember' => 15000000, 'img' => 'assets/image/pool1.png'],
            ['zone' => 'Right Left', 'capacity' => 16, 'price' => 14000000, 'nonmember' => 15000000, 'img' => 'assets/image/pool1.png'],
            ['zone' => 'Right B', 'capacity' => 20, 'price' => 15000000, 'nonmember' => 15000000, 'img' => 'assets/image/pool1.png'],
            ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @foreach($daybeds as $daybed)
                <div class="bg-[#f5ede4] border border-[#DDD0C2] overflow-hidden hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <img
                        src="{{ asset($daybed['img']) }}"
                        alt="Copacabana {{ $daybed['zone'] }}"
                        class="w-full h-56 object-cover block"
                        onerror="this.src='https://placehold.co/400x160/c9b9a8/963D20?text=Copacabana'" />
                    <div class="p-4">
                        <p class="text-[#963D20] text-2xl font-semibold font-nineties mb-0.5">Copacabana</p>
                        <p class="text-[#8a7a6a] mb-1">{{ $daybed['zone'] }}</p>
                        <p class="flex items-center gap-1.5 text-[#6a5a4a] mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Max {{ $daybed['capacity'] }} Adult
                        </p>
                        <p class="text-[#963D20] text-xl font-semibold">
                            IDR {{ number_format($daybed['price'], 0, ',', '.') }}
                        </p>
                        <p class="text-[#8a7a6a] mt-0.5 mb-3">
                            Non-member: IDR {{ number_format($daybed['nonmember'], 0, ',', '.') }}
                        </p>
                        <a href="{{ route('booking') }}" class="inline-flex items-center gap-1.5 bg-[#963D20] hover:bg-[#7A3118] text-[#EBE1D5] font-medium tracking-wide px-4 py-2 transition-colors">
                            Select
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    {{-- ── Offer Modal ── --}}
    <div
        id="offer-overlay"
        class="fixed inset-0 bg-black/50 z-[9999] hidden items-center justify-center"
        onclick="if(event.target===this) closeOfferModal()">

        <div class="overflow-y-auto h-full max-w-[650px]" style="animation: offerSlideUp 0.2s ease">
            <div class="w-full h-auto relative bg-[#EBE1D5] my-12 lg:my-24 pt-12">

                {{-- Close button --}}
                <button
                    onclick="closeOfferModal()"
                    class="absolute top-3 right-3 flex items-center justify-center z-10 transition-colors">
                    <svg width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 1L1 13M1 1L13 13" stroke="#A74423" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                {{-- Offer pills --}}
                <div class="flex gap-1.5 px-5 border-b border-[#EBE1D5] flex-wrap">
                    @foreach([
                    ['key' => 'dining', 'label' => '10% OFF DINING'],
                    ['key' => 'daybed', 'label' => 'BUY 1 GET 1 DAYBED'],
                    ['key' => 'spa', 'label' => '25% OFF SPA'],
                    ['key' => 'freespa', 'label' => 'FREE SPA TREATMENT'],
                    ] as $pill)
                    <span
                        onclick="switchOffer('{{ $pill['key'] }}')"
                        data-key="{{ $pill['key'] }}"
                        class="offer-modal-pill bg-[#963D20] text-[#EBE1D5] tracking-wide px-2.5 py-1.5 cursor-pointer transition-all whitespace-nowrap opacity-50 hover:opacity-100">
                        {{ $pill['label'] }}
                    </span>
                    @endforeach
                </div>

                {{-- Hero image --}}
                <div class="p-5">
                    <img
                        id="modal-img"
                        src=""
                        alt=""
                        class="w-full h-full object-contain block" />
                </div>
                {{-- Body --}}
                <div class="p-5">

                    {{-- Title + Voucher --}}
                    <div class="flex justify-between items-start mb-4">
                        <h2 id="modal-title" class="text-[#963D20] text-4xl font-nineties leading-snug"></h2>
                        <div class="text-right ml-3 shrink-0">
                            <p class="text-[#963D20]">Voucher Code</p>
                            <p id="modal-code" class="font-semibold text-[#963D20]"></p>
                        </div>
                    </div>

                    {{-- Description --}}
                    <p id="modal-desc" class="text-[#6a5a4a] leading-relaxed mb-4"></p>

                    {{-- Details table --}}
                    <table class="w-full border-collapse mb-5">
                        <tr class="border-b border-[#DDD0C2]">
                            <td class="text-[#963D20] py-2.5 w-36 pr-3 align-top">Categories</td>
                            <td id="modal-cat" class="py-2.5 text-[#963D20]"></td>
                        </tr>
                        <tr class="border-b border-[#DDD0C2]">
                            <td class="text-[#963D20] py-2.5 align-top">Terms &amp; Conditions</td>
                            <td class="py-2.5">
                                <ul id="modal-terms" class="space-y-1"></ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-[#963D20] py-2.5 align-top">Valid</td>
                            <td id="modal-valid" class="py-2.5 text-[#963D20]"></td>
                        </tr>
                    </table>

                    {{-- CTA --}}
                    <button class="w-full bg-[#963D20] hover:bg-[#7A3118] text-[#EBE1D5] py-3.5 text-[15px] font-medium tracking-wide transition-colors rounded-sm">
                        Reserve Now
                    </button>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <style>
        @keyframes offerSlideUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <script>
        /* ── Offer data ── */
        const offerData = {
            dining: {
                title: 'Cerita Rasa Nuansa Bali',
                code: 'ACR108',
                img: '{{ asset("assets/image/event1.png") }}',
                imgFallback: 'https://placehold.co/460x224/c9b9a8/963D20?text=10%25+OFF+DINING',
                desc: 'Enjoy an authentic Balinese culinary experience featuring curated menus inspired by traditional flavors of Bali. Available for dine-in guests with a minimum purchase at participating outlets.',
                cat: 'Food & Beverages',
                terms: ['Valid on regular days', 'Maximum 2 person', 'Minimum purchase IDR 500.000'],
                valid: '1–31 October 2026',
            },
            daybed: {
                title: 'Buy 1 Get 1 Daybed',
                code: 'DAY01',
                img: '{{ asset("assets/image/event2.png") }}',
                imgFallback: 'https://placehold.co/460x224/c9b9a8/963D20?text=BUY+1+GET+1+DAYBED',
                desc: 'Reserve a premium daybed and bring a friend for free! This exclusive offer applies to selected daybed zones and is available on weekdays only. Subject to availability.',
                cat: 'Pool & Recreation',
                terms: ['Weekdays only (Mon–Thu)', 'Valid for 2 guests per daybed', 'Subject to availability'],
                valid: '1–30 November 2026',
            },
            spa: {
                title: '25% Off Spa Treatment',
                code: 'SPA25',
                img: '{{ asset("assets/image/event3.png") }}',
                imgFallback: 'https://placehold.co/460x224/c9b9a8/963D20?text=25%25+OFF+SPA',
                desc: 'Indulge in our world-class spa treatments at 25% off. Choose from a wide range of massages and body treatments inspired by traditional Indonesian wellness rituals.',
                cat: 'Wellness & Spa',
                terms: ['Valid on selected treatments only', 'Advance booking required', 'Not combinable with other offers'],
                valid: '1–31 October 2026',
            },
            freespa: {
                title: 'Free Spa Treatment',
                code: 'FSPA99',
                img: '{{ asset("assets/image/event1.png") }}',
                imgFallback: 'https://placehold.co/460x224/c9b9a8/963D20?text=FREE+SPA+TREATMENT',
                desc: 'Get a complimentary 30-minute spa treatment with any daybed or dining reservation. A perfect way to elevate your resort experience.',
                cat: 'Wellness & Spa',
                terms: ['One treatment per booking', 'Valid with daybed or dining reservation', 'Minimum spend IDR 1.000.000'],
                valid: '15 Oct – 15 Nov 2026',
            },
        };

        /* ── Render offer content into modal ── */
        function renderOffer(key) {
            const o = offerData[key];

            document.getElementById('modal-title').textContent = o.title;
            document.getElementById('modal-code').textContent = o.code;
            document.getElementById('modal-desc').textContent = o.desc;
            document.getElementById('modal-cat').textContent = o.cat;
            document.getElementById('modal-valid').textContent = o.valid;

            /* Image with fallback */
            const img = document.getElementById('modal-img');
            img.src = o.img;
            img.alt = o.title;
            img.onerror = () => {
                img.src = o.imgFallback;
                img.onerror = null;
            };

            /* Terms list */
            document.getElementById('modal-terms').innerHTML = o.terms
                .map(t => `<li class="flex items-start gap-1.5 text-[#6a5a4a]">
                               <span class="text-[#963D20] mt-px shrink-0">•</span>${t}
                           </li>`)
                .join('');

            /* Active pill highlight */
            document.querySelectorAll('.offer-modal-pill').forEach(p => {
                const isActive = p.dataset.key === key;
                p.classList.toggle('opacity-50', !isActive);
                p.classList.toggle('opacity-100', isActive);
            });
        }

        /* ── Open modal ── */
        function openOfferModal(key) {
            renderOffer(key);
            const overlay = document.getElementById('offer-overlay');
            overlay.classList.remove('hidden');
            overlay.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        /* ── Close modal ── */
        function closeOfferModal() {
            const overlay = document.getElementById('offer-overlay');
            overlay.classList.add('hidden');
            overlay.classList.remove('flex');
            document.body.style.overflow = '';
        }

        /* ── Switch offer from inside modal ── */
        function switchOffer(key) {
            renderOffer(key);
        }

        /* ── Close on Escape key ── */
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeOfferModal();
        });

        /* ── Section tabs ── */
        function setSection(el) {
            document.querySelectorAll('.section-tab').forEach(t => {
                t.classList.remove('border-[#963D20]', 'text-[#963D20]');
                t.classList.add('border-transparent', 'text-[#8a7a6a]');
            });
            el.classList.remove('border-transparent', 'text-[#8a7a6a]');
            el.classList.add('border-[#963D20]', 'text-[#963D20]');
        }

        /* ── Calendar picker ── */
        function calendarPicker() {
            const now = new Date();
            return {
                open: false,
                month: now.getMonth(),
                year: now.getFullYear(),
                selected: null,
                selectedDay: null,
                selectedMonth: null,
                selectedYear: null,
                get monthLabel() {
                    return new Date(this.year, this.month).toLocaleString('en-US', {
                        month: 'long',
                        year: 'numeric'
                    });
                },
                get startDay() {
                    return new Date(this.year, this.month, 1).getDay();
                },
                get daysInMonth() {
                    return new Date(this.year, this.month + 1, 0).getDate();
                },
                prevMonth() {
                    if (this.month === 0) {
                        this.month = 11;
                        this.year--;
                    } else {
                        this.month--;
                    }
                },
                nextMonth() {
                    if (this.month === 11) {
                        this.month = 0;
                        this.year++;
                    } else {
                        this.month++;
                    }
                },
                selectDate(day) {
                    this.selectedDay = day;
                    this.selectedMonth = this.month;
                    this.selectedYear = this.year;
                    this.selected = new Date(this.year, this.month, day).toLocaleDateString('en-US', {
                        day: 'numeric',
                        month: 'short',
                        year: 'numeric'
                    });
                    this.open = false;
                },
                isSelected(day) {
                    return day === this.selectedDay && this.month === this.selectedMonth && this.year === this.selectedYear;
                },
            };
        }

        /* ── Venue tabs ── */
        function setVenue(el) {
            document.querySelectorAll('.venue-tab').forEach(t => {
                t.classList.remove('text-[#963D20]');
                t.classList.add('text-[#8a7a6a]');
                t.querySelector('.venue-icon path').setAttribute('d', 'M9 5l7 7-7 7');
            });
            el.classList.remove('text-[#8a7a6a]');
            el.classList.add('text-[#963D20]');
            el.querySelector('.venue-icon path').setAttribute('d', 'M19 9l-7 7-7-7');
        }
    </script>
    @endpush

</x-layouts.app>