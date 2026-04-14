<x-layouts.app title="What's On">
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
                        background="{{ asset('assets/image/whatson.png') }}"
                        title="Meet"
                        text="the sound"
                        sub-title="Backyard"
                        color="black" />

                    <div class="relative text-white w-full h-12 text-center bg-black overflow-visible">

                    </div>
                    <section class="relative h-full w-full">
                        <img src="{{ asset('assets/image/whatson2.png') }}" alt="The Biggest Beach Club In The World" class="w-dvw h-[1000px] object-cover object-center" />
                        <div class="absolute inset-0 h-dvh w-dvw z-10 bg-gradient-to-t from-transparent via-black/30 to-black"></div>

                        <div class="text-white absolute inset-0 h-full w-full">
                            <h3 class="relative z-20 text-2xl lg:text-5xl font-nineties mb-4 text-center" data-reveal>Event Highlight</h3>
                            <div class="relative z-30 container mt-12 lg:mt-24 px-4" data-reveal
                                x-data="{
                                    real: 3,
                                    pos: 1,
                                    animate: true,
                                    dragging: false,
                                    startX: 0,
                                    dx: 0,
                                    get slides() {
                                        return [2, 0, 1, 2, 0];
                                    },
                                    realIndex() { return this.slides[this.pos]; },
                                    go(i) {
                                        this.animate = true;
                                        this.pos = i;
                                        this.dx = 0;
                                    },
                                    settle() {
                                        if (this.pos <= 0) {
                                            this.animate = false;
                                            this.pos = this.real;
                                        } else if (this.pos >= this.real + 1) {
                                            this.animate = false;
                                            this.pos = 1;
                                        }
                                    },
                                    onDown(e) { this.dragging = true; this.startX = (e.touches ? e.touches[0] : e).clientX; },
                                    onMove(e) { if (!this.dragging) return; this.dx = (e.touches ? e.touches[0] : e).clientX - this.startX; },
                                    onUp() {
                                        if (!this.dragging) return;
                                        this.dragging = false;
                                        if (Math.abs(this.dx) > 50) this.go(this.pos + (this.dx < 0 ? 1 : -1));
                                        this.dx = 0;
                                    },
                                    offset() {
                                        const s = 100 / 3;
                                        const shift = -(this.pos - 1) * s;
                                        const gapShift = -(this.pos - 1) * 16;
                                        return `translateX(calc(${shift}% + ${gapShift}px + ${this.dragging ? this.dx : 0}px))`;
                                    }
                                }">
                                <div class="flex items-center justify-center gap-4 lg:gap-8">
                                    <button @click="go(pos - 1)" class="shrink-0 cursor-pointer z-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                            <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                            <path fill="#ffffff" d="M25.3 34.7L15.6 25l9.7-9.7l1.4 1.4l-8.3 8.3l8.3 8.3z" />
                                            <path fill="#ffffff" d="M17 24h17v2H17z" />
                                        </svg>
                                    </button>

                                    <div id="scrollableEvent-wrapper" class="overflow-hidden w-full"
                                        @mousedown.prevent="onDown($event)"
                                        @mousemove.prevent="onMove($event)"
                                        @mouseup.window="onUp()"
                                        @mouseleave="onUp()"
                                        @touchstart.passive="onDown($event)"
                                        @touchmove.passive="onMove($event)"
                                        @touchend="onUp()">
                                        <div class="flex gap-4"
                                            :class="dragging || !animate ? '' : 'transition-transform duration-500 ease-out'"
                                            :style="'transform:' + offset()"
                                            @transitionend="settle()">
                                            {{-- Clone: last slide --}}
                                            <div class="w-1/3 shrink-0 flex flex-col items-center gap-4 transition-all duration-500"
                                                :class="realIndex() === 2 ? 'scale-100 opacity-100' : 'scale-[0.85] opacity-50'">
                                                <img src="{{ asset('assets/image/event3.png') }}" alt="Event" class="w-full h-[600px] aspect-[9/16] object-cover" />
                                                <p class="font-semibold text-xl text-center">Wed | 28 Feb</p>
                                                <a href="{{ route('reserve') }}" class="inline-flex items-center gap-2 text-sm bg-[#A74423] text-white uppercase rounded-full px-6 py-2.5 hover:bg-[#9a3828] transition">
                                                    Reserve
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                                            <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                                            <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                                            <path fill="#ffffff" d="M16 24h17v2H16z" />
                                                        </svg></span>
                                                </a>
                                            </div>
                                            {{-- Slide 0 --}}
                                            <div class="w-1/3 shrink-0 flex flex-col items-center gap-4 transition-all duration-500"
                                                :class="realIndex() === 0 ? 'scale-100 opacity-100' : 'scale-[0.85] opacity-50'">
                                                <img src="{{ asset('assets/image/event1.png') }}" alt="Event" class="w-full h-[600px] aspect-[9/16] object-cover" />
                                                <p class="font-semibold text-xl text-center">Wed | 28 Feb</p>
                                                <a href="{{ route('reserve') }}" class="inline-flex items-center gap-2 text-sm bg-[#A74423] text-white uppercase rounded-full px-6 py-2.5 hover:bg-[#9a3828] transition">
                                                    Reserve
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                                            <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                                            <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                                            <path fill="#ffffff" d="M16 24h17v2H16z" />
                                                        </svg></span>
                                                </a>
                                            </div>
                                            {{-- Slide 1 --}}
                                            <div class="w-1/3 shrink-0 flex flex-col items-center gap-4 transition-all duration-500"
                                                :class="realIndex() === 1 ? 'scale-100 opacity-100' : 'scale-[0.85] opacity-50'">
                                                <img src="{{ asset('assets/image/event2.png') }}" alt="Event" class="w-full h-[600px] aspect-[9/16] object-cover" />
                                                <p class="font-semibold text-xl text-center">Wed | 28 Feb</p>
                                                <a href="{{ route('reserve') }}" class="inline-flex items-center gap-2 text-sm bg-[#A74423] text-white uppercase rounded-full px-6 py-2.5 hover:bg-[#9a3828] transition">
                                                    Reserve
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                                            <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                                            <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                                            <path fill="#ffffff" d="M16 24h17v2H16z" />
                                                        </svg></span>
                                                </a>
                                            </div>
                                            {{-- Slide 2 --}}
                                            <div class="w-1/3 shrink-0 flex flex-col items-center gap-4 transition-all duration-500"
                                                :class="realIndex() === 2 ? 'scale-100 opacity-100' : 'scale-[0.85] opacity-50'">
                                                <img src="{{ asset('assets/image/event3.png') }}" alt="Event" class="w-full h-[600px] aspect-[9/16] object-cover" />
                                                <p class="font-semibold text-xl text-center">Wed | 28 Feb</p>
                                                <a href="{{ route('reserve') }}" class="inline-flex items-center gap-2 text-sm bg-[#A74423] text-white uppercase rounded-full px-6 py-2.5 hover:bg-[#9a3828] transition">
                                                    Reserve
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                                            <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                                            <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                                            <path fill="#ffffff" d="M16 24h17v2H16z" />
                                                        </svg></span>
                                                </a>
                                            </div>
                                            {{-- Clone: first slide --}}
                                            <div class="w-1/3 shrink-0 flex flex-col items-center gap-4 transition-all duration-500"
                                                :class="realIndex() === 0 ? 'scale-100 opacity-100' : 'scale-[0.85] opacity-50'">
                                                <img src="{{ asset('assets/image/event1.png') }}" alt="Event" class="w-full h-[600px] aspect-[9/16] object-cover" />
                                                <p class="font-semibold text-xl text-center">Wed | 28 Feb</p>
                                                <a href="{{ route('reserve') }}" class="inline-flex items-center gap-2 text-sm bg-[#A74423] text-white uppercase rounded-full px-6 py-2.5 hover:bg-[#9a3828] transition">
                                                    Reserve
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                                            <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                                            <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                                            <path fill="#ffffff" d="M16 24h17v2H16z" />
                                                        </svg></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <button @click="go(pos + 1)" class="shrink-0 cursor-pointer z-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                            <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                            <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                            <path fill="#ffffff" d="M16 24h17v2H16z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <section id="section-two" class="z-[2] relative -mt-[100vh] bg-[#EBE1D5]">

            <div class="marquee-container">
                <div class="marquee-content">
                    <img src="{{asset('assets/image/dj1.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/dj2.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/dj3.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/dj4.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    {{-- Duplicate for seamless loop --}}
                    <img src="{{asset('assets/image/dj1.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/dj2.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/dj3.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/dj4.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                </div>
            </div>
            <div class="relative">
                <img src="{{asset('assets/image/genre.png')}}" alt="" class="w-screen h-[1400px] object-cover" />
                <div class="container absolute top-12 left-0 right-0 w-full text-white">
                    <div class="flex gap-8">
                        <p class="font-extrabold font-nineties text-5xl whitespace-break-spaces text-right">Genre Master</p>
                        <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    </div>
                </div>
                <div class="absolute top-96 left-56">
                    <div class="w-64 space-y-4 text-white">
                        <p class="font-nineties text-5xl">Hip Hop</p>
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="absolute bottom-96 left-32">
                    <div class="w-64 space-y-4 text-white">
                        <p class="font-nineties text-5xl">R&B</p>
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="absolute top-96 right-44">
                    <div class="w-64 space-y-4 text-white">
                        <p class="font-nineties text-5xl">Techno</p>
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="absolute bottom-96 right-64">
                    <div class="w-64 space-y-4 text-white">
                        <p class="font-nineties text-5xl">EDM</p>
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="relative bg-[#333333] py-24">
                <p class="absolute font-nineties text-5xl left-0 right-0 text-center -top-24 z-10">Activity Highlight</p>
                <div class="container text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostruLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr</p>
                </div>
            </div>
            <x-feature-card
                color="#333333"
                title="Live BBQ Grill"
                subtitle="Fired Up Flavor"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet,"
                image="assets/image/cardAct.png"
                link="/dining" />
            <x-feature-card
                color="#333333"
                title="Bar Takeover"
                subtitle="Raised by Spirits"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet,"
                image="assets/image/cardAct.png"
                link="/dining" />
        </section>
    </main>
</x-layouts.app>