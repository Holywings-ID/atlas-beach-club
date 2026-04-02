<x-layouts.app title="Home">
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
                    <x-video
                        video-desktop="https://atlasbeachfest.s3.ap-southeast-3.amazonaws.com/production/atlas/page/2025/9/1/6K36WKEx34zUaVwRC1D8mLBzvoVx2bpfwIdaCGVD.webm"
                        video-mobile="https://atlasbeachfest.s3.ap-southeast-3.amazonaws.com/production/atlas/page/2025/9/1/6K36WKEx34zUaVwRC1D8mLBzvoVx2bpfwIdaCGVD.webm"
                        title="Atlas Beach Club"
                        sub-title="Welcome To"
                        image="{{asset('assets/logo/logo.png')}}" />

                    <section class="relative text-white w-full h-48 text-center bg-[#963D20] overflow-visible">
                        <div class="absolute z-20 inset-0">
                            <h2 class="text-4xl lg:text-6xl font-nineties font-extrabold" data-reveal>Enchanted Land</h2>
                            <p class="mx-auto mt-4 max-w-2xl" data-reveal>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p class="mx-auto mt-4 max-w-2xl" data-reveal>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p class="mx-auto mt-4 max-w-2xl" data-reveal>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </section>
                    <section class="relative h-full w-full">
                        <img src="{{ asset('assets/image/enchanted.png') }}" alt="The Biggest Beach Club In The World" class="w-dvw h-[1300px] object-cover object-center" />
                        <div class="absolute inset-0 h-dvh w-dvw z-10 bg-gradient-to-t from-transparent via-transparent to-[#963D20]"></div>

                        <div class="text-white absolute inset-0 h-full w-full pt-[500px]">
                            <h3 class="relative z-20 text-xl lg:text-3xl font-nineties mb-4 text-center" data-reveal>The Biggest Beach Club In The World</h3>
                            <h4 class="relative z-20 text-4xl lg:text-6xl font-nineties flex items-center justify-center font-extrabold" data-reveal>
                                5 HIGHLIGHTS
                                <span class="font-parslay font-normal px-5 text-3xl">of</span>
                                ATLAS BEACH CLUB
                            </h4>
                            <div class="relative z-30 container flex justify-center gap-8 mt-24" data-reveal>
                                <div class="bg-[#A74423]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-44 w-80 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 01</div>
                                    <div class="font-nineties font-extrabold text-4xl">Daybeds</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </div>
                                <div class="bg-[#A74423]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-44 w-80 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 02</div>
                                    <div class="font-nineties font-extrabold text-4xl">Dining</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </div>
                                <div class="bg-[#A74423]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-44 w-80 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 03</div>
                                    <div class="font-nineties font-extrabold text-4xl">Poolbar</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </div>
                            </div>
                            <div class="relative z-30 container flex justify-center mt-8 gap-8" data-reveal>
                                <div class="bg-[#A74423]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-44 w-80 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 04</div>
                                    <div class="font-nineties font-extrabold text-4xl">Activity</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </div>
                                <div class="bg-[#A74423]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-44 w-80 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 05</div>
                                    <div class="font-nineties font-extrabold text-4xl">Group Bookings</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <section id="section-two" class="z-[2] relative -mt-[100vh]">

            <div class="marquee-container">
                <div class="marquee-content">
                    <img src="{{asset('assets/image/highlight1.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/highlight2.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/highlight3.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/highlight4.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    {{-- Duplicate for seamless loop --}}
                    <img src="{{asset('assets/image/highlight1.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/highlight2.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/highlight3.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                    <img src="{{asset('assets/image/highlight4.png')}}" alt="" class="w-96 h-64 object-cover shrink-0" />
                </div>
            </div>
            <div class="relative">
                <img src="{{asset('assets/image/highlight.png')}}" alt="" class="w-screen h-[800px] object-cover" />
                <div class="absolute top-5 left-0 right-0 w-fit mx-auto text-center font-nineties text-4xl text-white">
                    <p>No 01</p>
                    <p>Daybeds</p>
                </div>
                <div class="absolute bottom-2 left-0 right-0 w-fit mx-auto text-center font-nineties text-4xl text-white">
                    <p>4 Sections</p>
                </div>
            </div>
            <div class="container pt-24 relative bg-[#EBE1D5 redNew">
                <div class="absolute top-2 left-0 right-0 w-fit mx-auto text-center font-nineties text-4xl redNew">
                    <p>Daybed</p>
                </div>
                <p class="w-full max-w-[600px] text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostruLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr</p>
            </div>
        </section>

    </main>
</x-layouts.app>