<x-layouts.app title="Daybed">

    <main>
        <div id="section-one-wrapper"
            x-data="{
                contentH: 0,
                scrollY: 0,
                init() {
                    this.contentH = this.$refs.content.scrollHeight;
                    window.addEventListener('scroll', () => this.scrollY = window.scrollY, { passive: true });
                }
            }"
            :style="'height:' + (contentH + window.innerHeight) + 'px'"
            class="relative z-[1] -mt-24">
            <div id="section-one" x-ref="content" class="sticky top-0 h-screen overflow-hidden">
                <div :style="'transform:translateY(-' + Math.min(scrollY, Math.max(0, contentH - window.innerHeight)) + 'px)'">
                    <x-hero
                        background="{{ asset('assets/image/hero.png') }}"
                        title="Copacabana"
                        sub-title="Daybeds"
                        image="{{asset('assets/logo/logo.png')}}" />
                    <section class="relative text-white w-full h-12 text-center bg-[#A74423] overflow-visible">
                        <div class="absolute z-20 inset-0">
                            <h2 class="text-4xl lg:text-6xl font-nineties font-extrabold" data-reveal>Dusk Different</h2>
                            <p class="mx-auto mt-4 max-w-2xl" data-reveal>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </section>
                    <section class="relative h-full w-full">
                        <img src="{{ asset('assets/image/daybed.png') }}" alt="The Biggest Beach Club In The World" class="w-dvw h-[600px] object-cover object-top" />
                        <div class="absolute inset-0 h-full w-dvw z-10 bg-gradient-to-t from-transparent via-transparent to-[#A74423]"></div>
                    </section>
                </div>
            </div>
        </div>
        <section id="section-two" class="z-[2] relative -mt-[100vh] bg-[#EBE1D5] text-[#A74423] overflow-hidden">
            <div class="container space-y-12 text-center py-12 pb-24">
                <div x-data="{ active: 0 }">
                    <div class="border-[#A74423] border-b-2 font-semibold pb-4 flex flex-wrap items-center gap-4 lg:gap-12">
                        @foreach (config('activity') as $i => $activity)
                        <button @click="active = {{ $i }}" :class="active === {{ $i }} ? 'text-slate-400' : 'hover:text-slate-400'" class="transition">{{ $activity['category'] }}</button>
                        @endforeach
                    </div>
                    @foreach (config('activity') as $i => $activity)
                    <div x-show="active === {{ $i }}" x-transition class="py-8 text-left space-y-12">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4" data-reveal>
                            <img src="{{ asset($activity['images'][0]['img']) }}" alt="{{ $activity['images'][0]['subtitle'] }}" class="w-full aspect-square object-cover" />
                            <div class="grid grid-cols-2 gap-4">
                                <div class="relative aspect-[3/4]">
                                    <img src="{{ asset($activity['images'][1]['img']) }}" alt="{{ $activity['images'][1]['subtitle'] }}" class="w-full aspect-[3/4] object-cover" />
                                    <p class="absolute -bottom-8 right-0 left-0 font-parslay text-lg text-center">{{ $activity['images'][1]['subtitle'] }}</p>
                                </div>
                                <div class="relative aspect-[3/4]">
                                    <img src="{{ asset($activity['images'][2]['img']) }}" alt="{{ $activity['images'][2]['subtitle'] }}" class="w-full aspect-[3/4] object-cover" />
                                    <p class="absolute -bottom-8 right-0 left-0 font-parslay text-lg text-center redNew">{{ $activity['images'][2]['subtitle'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-8 lg:gap-24 text-left">
                            <div class="w-full lg:w-2/5 space-y-3" data-reveal>
                                <div class="font-nineties text-3xl">Courtside is the new</div>
                                <div class="font-parslay text-5xl">Social Club</div>
                                <div class=" pr-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostruLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</div>
                            </div>
                            <div class="relative w-full lg:w-3/5">
                                <img src="{{ asset($activity['images'][3]['img']) }}" alt="" class="w-full h-[400px] lg:h-[650px] object-top object-cover" data-reveal />
                                <img src="{{ asset($activity['images'][4]['img']) }}" alt="" class="absolute -left-12 lg:-left-24 bottom-12 w-auto aspect-square h-[200px] lg:h-[300px] object-cover" style="animation-delay: 1s;" data-reveal />
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="border-[#A74423] border-b-2 font-semibold pb-2 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4">
                    <div class="flex gap-2">
                        <p>Atlas Beach Club</p> |
                        <p>Activities</p>
                    </div>
                    <div class="flex items-center gap-4 lg:gap-8">
                        <a href="" class="items-center flex gap-3">Overview
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                <path fill="#A74423" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                <path fill="#A74423" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                <path fill="#A74423" d="M16 24h17v2H16z" />
                            </svg>
                        </a>
                        <a href="" class="items-center flex gap-3">Reserve
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                <path fill="#A74423" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                <path fill="#A74423" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                <path fill="#A74423" d="M16 24h17v2H16z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layouts.app>