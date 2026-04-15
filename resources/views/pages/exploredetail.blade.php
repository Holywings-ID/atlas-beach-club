<x-layouts.app title="Explore Detail">
    <main class="bg-[#EBE1D5] -mt-24 text-[#963D20] antialiased">
        <div class="container mx-auto pt-40 pb-6 text-center overflow-hidden">

            <h1 class=" text-5xl md:text-6xl font-extrabold font-nineties text-[#963D20] mb-5 tracking-tight">
                Family Getaway
            </h1>

            <div class="flex items-center gap-3 mb-7">
                <div class="flex-1 h-0.5 bg-[#963D20]"></div>
                <span class="w-1.5 h-1.5 -full bg-[#963D20]"></span>
                <span class="w-1.5 h-1.5 -full bg-[#963D20]"></span>
                <span class="w-1.5 h-1.5 -full bg-[#963D20]"></span>
                <div class="flex-1 h-0.5 bg-[#963D20]"></div>
            </div>

            <div class="flex flex-wrap justify-center gap-x-8 text-black mb-10">
                <span>Venue : <strong class="font-medium text-[#963D20]">Beach Club</strong></span>
                <span>Vibe Tags : <strong class="font-medium text-[#963D20]">Photography / Dining / Relaxation</strong></span>
                <span>Best for : <strong class="font-medium text-[#963D20]">Couple / Family / Friends</strong></span>
            </div>

            <div class="relative w-full h-[340px] md:h-[650px]">

                {{-- Main center --}}
                <div class="absolute left-0 right-0 top-0 w-full h-full">
                    <img src="{{ asset('assets/image/family1.png') }}"
                        alt="Pool lounge" class="w-full h-full object-cover">
                </div>

                {{-- Thumb top-left --}}
                <div class="absolute float-image top-[4%] hidden lg:block -left-12 overflow-hidden border-4 border-[#10496E] shadow-lg" style="--float-rotate:0deg; animation-delay:0s">
                    <img src="{{ asset('assets/image/family2.png') }}" alt="" class="w-56 h-64 object-cover">
                </div>

                {{-- Thumb mid-left --}}
                <div class="absolute float-image top-[38%] hidden lg:block -left-44 overflow-hidden border-4 border-[#10496E] shadow-lg" style="--float-rotate:0deg; animation-delay:1.5s">
                    <img src="{{ asset('assets/image/family3.png') }}" alt="" class="w-56 h-32 object-cover">
                </div>

                {{-- Thumb bottom-left --}}
                <div class="absolute float-image -bottom-8 hidden lg:block -left-24 overflow-hidden border-4 border-[#10496E] shadow-lg" style="--float-rotate:0deg; animation-delay:0.8s">
                    <img src="{{ asset('assets/image/family4.png') }}" alt="" class="w-56 h-44 object-cover">
                </div>

                {{-- Thumb top-right --}}
                <div class="absolute float-image top-[16%] hidden lg:block -right-16 overflow-hidden border-4 border-[#10496E] shadow-lg" style="--float-rotate:0deg; animation-delay:2s">
                    <img src="{{ asset('assets/image/family5.png') }}" alt="" class="w-32 h-44 object-cover">
                </div>

                {{-- Thumb bottom-right --}}
                <div class="absolute float-image bottom-[4%] hidden lg:block -right-32 overflow-hidden border-4 border-[#10496E] shadow-lg" style="--float-rotate:0deg; animation-delay:0.5s">
                    <img src="{{ asset('assets/image/family6.png') }}" alt="" class="w-56 h-64 object-cover">
                </div>

            </div>
        </div>

        <div class="max-w-3xl mx-auto px-8 py-10 text-center">
            <p class="text-[#963D20]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            </p>
        </div>

        <div class="container mx-auto px-6 py-8">
            <div class="flex lg:flex-row flex-col gap-8">

                <div class="lg:w-1/5">
                    <p class="font-semibold uppercase text-[#963D20]">
                        Choose your<br>daybed
                    </p>
                </div>

                <div class="lg:w-4/5 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-4 flex-1">

                    @php
                    $daybeds = [
                    ['name' => 'Copacabana', 'img' => 'assets/image/highlight1.png'],
                    ['name' => 'Surf Side', 'img' => 'assets/image/highlight1.png'],
                    ['name' => 'Backstage', 'img' => 'assets/image/highlight1.png'],
                    ['name' => 'Pavilion', 'img' => 'assets/image/highlight1.png']
                    ];
                    @endphp

                    @foreach($daybeds as $daybed)
                    <div class="group">
                        <div class="overflow-hidden mb-2 aspect-[4/3]">
                            <img src="{{ asset($daybed["img"]) }}" alt="{{ $daybed['name'] }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex lg:flex-row flex-col lg:items-center justify-between gap-2">
                            <div>
                                <p class="font-parslay text-[#963D20] text-2xl mb-0.5">
                                    {{ $daybed['name'] }}
                                </p>
                                <p class="">Capacity : 3000 pax</p>
                            </div>
                            <a href="#"
                                class="shrink-0 inline-flex w-fit items-center gap-2 bg-[#963D20] hover:brightness-110 text-sm text-white uppercase px-3.5 py-2 rounded-full transition-colors whitespace-nowrap">
                                I'm Interested
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-3 h-3 shrink-0">
                                    <path d="M3 8h10M9 4l4 4-4 4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="container mx-auto pt-6 pb-16">
            <div class="flex lg:flex-row flex-col gap-8">

                <div class="lg:w-1/5">
                    <p class="font-semibold uppercase text-[#963D20]">
                        Location<br>Guide
                    </p>
                    <h2 class="mt-12 lg:mt-44 font-extrabold font-nineties text-[#963D20] text-5xl">
                        Ocean<br>Beach<br>Pool
                    </h2>
                </div>

                <div class="lg:w-4/5 flex-1">

                    <div class="relative -lg overflow-hidden aspect-[4/3] mb-4">
                        <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?w=900&q=80"
                            alt="Resort map" class="w-full h-full object-cover">

                        <div class="absolute top-[38%] left-[28%] bg-[#10496E] rounded-lg text-white -lg px-3.5 py-2.5 max-w-[250px] shadow-xl">
                            <p class="font-semibold font-nineties text-xl mb-0.5">Poolbar</p>
                            <p class="text-xs mb-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <a href="#"
                                class="inline-flex items-center gap-1 rounded-full bg-[#963D20] hover:bg-[#7A3118] text-white font-medium uppercase tracking-widest px-2.5 py-1 text-xs transition-colors">
                                Overview →
                            </a>
                            <div class="absolute -bottom-2 left-4 w-0 h-0 border-l-[8px] border-l-transparent border-r-[8px] border-r-transparent border-t-[8px] border-t-[#1a2744]"></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-x-8 mb-4">
                        <div class="py-3 border-b border-[#963D20]">1. Pool</div>
                        <div class="py-3 border-b border-[#963D20]">3. Pavilion</div>
                        <div class="py-3 border-b border-[#963D20]">5. Main Bar</div>
                        <div class="py-3 border-b border-[#963D20]">7. Ocean Beach Pool</div>
                        <div class="py-3 border-b border-[#963D20]">2. Daybed</div>
                        <div class="py-3 border-b border-[#963D20]">4. Flying Fox</div>
                        <div class="py-3 border-b border-[#963D20]">6. Atlas Indoor Pool</div>
                        <div class="py-3 border-b border-[#963D20]">10. Photobooth</div>
                    </div>

                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
        </div>
        <x-feature-card
            color="#EEECE3"
            text="#963D20"
            title="08:00"
            subtitle="Day Breakfast at Atlas Beach Club"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet,"
            image="assets/image/cardAct.png"
            link="/dining" />
        <x-feature-card
            color="#EEECE3"
            text="#963D20"
            title="10:00"
            subtitle="Rally, Smash, Repeat"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet,"
            image="assets/image/cardAct.png"
            link="/dining" />
        <x-feature-card
            color="#963D20"
            text="#ffffff"
            title="08:00"
            subtitle="Day Breakfast at Atlas Beach Club"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet,"
            image="assets/image/cardAct.png"
            link="/dining" />
        <x-feature-card
            color="#963D20"
            text="#ffffff"
            title="10:00"
            subtitle="Rally, Smash, Repeat"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet,"
            image="assets/image/cardAct.png"
            link="/dining" />
        <x-feature-card
            color="#10496E"
            text="#ffffff"
            title="08:00"
            subtitle="Day Breakfast at Atlas Beach Club"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet,"
            image="assets/image/cardAct.png"
            link="/dining" />
        <x-feature-card
            color="#10496E"
            text="#ffffff"
            title="10:00"
            subtitle="Rally, Smash, Repeat"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet,"
            image="assets/image/cardAct.png"
            link="/dining" />
        <x-feature-card
            color="#2B2B2B"
            text="#ffffff"
            title="08:00"
            subtitle="Day Breakfast at Atlas Beach Club"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet,"
            image="assets/image/cardAct.png"
            link="/dining" />
        <x-feature-card
            color="#2B2B2B"
            text="#ffffff"
            title="10:00"
            subtitle="Rally, Smash, Repeat"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet,"
            image="assets/image/cardAct.png"
            link="/dining" />
    </main>
</x-layouts.app>