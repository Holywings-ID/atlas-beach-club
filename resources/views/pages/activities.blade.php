<x-layouts.app title="Pool Bar">

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
                        title="Flying Fox"
                        sub-title="Activities"
                        image="{{asset('assets/logo/logo.png')}}" />
                    <section class="relative text-white w-full h-12 text-center bg-[#963D20] overflow-visible">
                        <div class="container absolute z-20 inset-0">
                            <h2 class="text-4xl lg:text-6xl font-nineties font-extrabold" data-reveal>Dusk Different</h2>
                            <p class="mx-auto mt-4 max-w-2xl" data-reveal>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </section>
                    <section class="relative h-full w-full">
                        <img src="{{ asset('assets/image/daybed.png') }}" alt="The Biggest Beach Club In The World" class="w-dvw h-[600px] object-cover object-top" />
                        <div class="absolute inset-0 h-full w-dvw z-10 bg-gradient-to-t from-transparent via-transparent to-[#963D20]"></div>
                    </section>
                </div>
            </div>
        </div>
        <section id="section-two" class="z-[2] relative -mt-[100vh] bg-[#EBE1D5] text-[#963D20] overflow-hidden">
            <div class="container space-y-12 text-center py-12 pb-24">
                @php
                    $zones = config('daybedsover');
                    foreach ($zones as &$z) {
                        foreach ($z['position'] as &$p) {
                            $p['image'] = array_map(fn($v) => str_starts_with($v, 'img:') ? $v : asset($v), $p['image']);
                            $p['layoutImage'] = asset($p['layoutImage']);
                        }
                    }
                    unset($z, $p);
                @endphp

                <div x-data="{
                    activeZone: 0,
                    activePosition: 0,
                    zones: {{ Js::from($zones) }},
                    get zone() { return this.zones[this.activeZone] },
                    get position() { return this.zone.position[this.activePosition] },
                    selectZone(i) { this.activeZone = i; this.activePosition = 0; }
                }" class="text-left space-y-10">

                    <div class="border-b border-[#963D20]">
                        <div class="flex items-center gap-8 pb-3">
                            <template x-for="(z, i) in zones" :key="i">
                                <button @click="selectZone(i)" class transition-all"
                                    :class="activeZone === i ? 'text-[#963D20] font-semibold' : 'text-[#3A3530]/60 hover:text-[#3A3530]'"
                                    x-text="z.name"></button>
                            </template>
                        </div>
                    </div>

                    <div class="flex items-center gap-6 pb-3">
                        <template x-for="(p, i) in zone.position" :key="p.id">
                            <button @click="activePosition = i" class="flex items-center gap-2 transition-all"
                                :class="activePosition === i ? 'text-[#963D20] font-semibold' : 'text-[#3A3530]/60 hover:text-[#3A3530]'">
                                <span x-text="p.name"></span>
                                <span class="w-5 h-5 rounded-full border border-current flex items-center justify-center text-[10px]" x-html="activePosition === i ? '↓' : '→'"></span>
                            </button>
                        </template>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 h-[800px] lg:h-[500px]">
                        <div class="relative overflow-hidden">
                            <img :src="position.image[1]" alt="" class="w-full h-full object-cover" />
                            <div class="absolute inset-0 flex items-end p-8 text-white bg-gradient-to-b from-transparent via-transparent to-black/80">
                                <p class="text-3xl font-bold font-nineties" x-text="position.name"></p>
                            </div>
                        </div>
                        <div class="relative overflow-hidden">
                            <img :src="position.image[3]" alt="" class="w-full h-full object-cover" />
                            <div class="absolute inset-0 flex items-end p-8 text-right text-white bg-gradient-to-b from-transparent via-transparent to-black/80">
                                <p class="lg:text-lg" x-text="position.description"></p>
                            </div>
                        </div>
                    </div>

                    <div class="border-b border-[#963D20] font-semibold pb-4 flex items-center justify-between">
                        <div class="lg:flex gap-2">
                            <p>Atlas Beach Club <span>|</span></p>
                            <p x-text="zone.name"></p>
                            <p>(<span x-text="position.name"></span>)</p>
                        </div>
                        <a href="{{ route('reserve') }}" class="inline-flex items-center gap-2 text-sm bg-[#963D20] text-white uppercase rounded-full px-6 py-2.5 hover:bg-[#9a3828] transition">
                            Reserve <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                <path fill="#ffffff" d="M16 24h17v2H16z" />
                            </svg></span>
                        </a>
                    </div>

                    <div class="pt-8 flex flex-col lg:flex-row gap-8 lg:gap-12">
                        <div class="w-full lg:w-[38%] space-y-0">
                            <div class="flex items-center justify-between py-3 border-b border-black/10">
                                <span class="text-black">Check-in</span>
                                <span class="text-[#963D20]" x-text="position.checkIn"></span>
                            </div>
                            <div class="flex items-center justify-between py-3 border-b border-black/10">
                                <span class="text-black">Check-out</span>
                                <span class="text-[#963D20]" x-text="position.checkout"></span>
                            </div>
                            <div class="flex items-center justify-between py-3 border-b border-black/10">
                                <span class="text-black">Occupancy</span>
                                <span class="text-[#963D20]" x-text="position.Occupancy || '—'"></span>
                            </div>
                            <div class="flex items-center justify-between py-3 border-b border-black/10">
                                <span class="text-black">Type</span>
                                <span class="text-[#963D20]" x-text="position.type || '—'"></span>
                            </div>
                        </div>

                        {{-- Right Column: Benefits + T&C --}}
                        <div class="w-full lg:w-[62%] space-y-6">
                            <div>
                                <h4 class="text-xl font-semibold text-[#963D20] mb-3">Daybed Benefits</h4>
                                <ul class="space-y-1.5">
                                    <template x-for="b in position.benefits" :key="b">
                                        <li class="text-[#963D20] leading-[1.7] flex items-start gap-2">
                                            <span class="text-[#963D20] mt-0.5">•</span>
                                            <span x-text="b"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-[#963D20] mb-3">Terms & Conditions</h4>
                                <ul class="space-y-1.5">
                                    <template x-for="t in position.tnc" :key="t">
                                        <li class="text-[#963D20] leading-[1.7] flex items-start gap-2">
                                            <span class="text-[#963D20] mt-0.5">•</span>
                                            <span x-text="t"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Floorplan / Layout --}}
                    <div class="pt-10">
                        <p class="text-xl font-semibold text-[#963D20] mb-4">Layout</p>
                        <img :src="position.layoutImage" alt="Floor plan" class="w-full" />
                    </div>

                </div>
            </div>
        </section>
    </main>

</x-layouts.app>