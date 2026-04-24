<x-layouts.app title="Explore">

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
                        background="{{ asset('assets/image/seaside.png') }}"
                        title="Seaside Bliss"
                        sub-title="Welcome To"
                        image="{{asset('assets/logo/logo.png')}}" />
                    <section class="relative text-white w-full h-12 text-center bg-[#963D20] overflow-visible">
                        <div class="container absolute z-20 inset-0">
                            <h2 class="text-4xl lg:text-6xl font-nineties font-extrabold" data-reveal>Beach Club<br /> Journey</h2>
                            <p class="mx-auto mt-4 max-w-2xl" data-reveal>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </section>
                    <section class="relative h-full w-full">
                        <img src="{{ asset('assets/image/explore.png') }}" alt="The Biggest Beach Club In The World" class="w-dvw h-[1400px] lg:h-[1000px] object-cover object-bottom" />
                        <div class="absolute inset-0 h-full w-dvw z-10 bg-gradient-to-t from-transparent via-transparent to-[#963D20]"></div>

                        <div class="text-white absolute z-[20] inset-0 h-full w-full lg:pt-[200px] pt-[400px]" data-reveal>
                            <div class="relative z-30 container flex flex-col lg:flex-row justify-center gap-4 lg:gap-8 mt-12 lg:mt-24 px-4" data-reveal>
                                <a href="{{ route('explore') . '#family-gateaway' }}" class="bg-[#963D20]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-36 lg:h-44 w-full lg:w-96 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 01</div>
                                    <div class="font-nineties font-extrabold text-2xl lg:text-4xl">Family Getaway</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </a>
                                <a href="{{ route('explore') . '#romantic-bliss' }}" class="bg-[#963D20]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-36 lg:h-44 w-full lg:w-96 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 02</div>
                                    <div class="font-nineties font-extrabold text-2xl lg:text-4xl">Romantic Bliss</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </a>
                            </div>
                            <div class="relative z-30 container flex flex-col lg:flex-row justify-center mt-4 lg:mt-8 gap-4 lg:gap-8 px-4" data-reveal>
                                <a href="{{ route('explore') . '#friend-madness' }}" class="bg-[#963D20]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-36 lg:h-44 w-full lg:w-96 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 03</div>
                                    <div class="font-nineties font-extrabold text-2xl lg:text-4xl">Friend Madness</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </a>
                                <a href="{{ route('explore') . '#party-anthem' }}" class="bg-[#963D20]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-36 lg:h-44 w-full lg:w-96 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 04</div>
                                    <div class="font-nineties font-extrabold text-2xl lg:text-4xl">Party Anthem</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </a>
                            </div>
                            <h3 class="relative z-20 text-2xl lg:text-4xl font-nineties mt-12 text-center" data-reveal>The Biggest Beach Club In The World</h3>

                        </div>
                    </section>
                </div>
            </div>
        </div>
        <section id="section-two" class="z-[2] relative -mt-[100vh] bg-[#EBE1D5] text-[#963D20] overflow-hidden">
            <div class="container py-16 space-y-12">
                <div id="family-gateaway" class="grid grid-cols-1 lg:grid-cols-2 border-b-2 border-[#963D20] py-12">
                    <img src="{{ asset('assets/image/explore.png') }}" alt="" class="h-full w-full object-cover lg:aspect-auto aspect-square" />
                    <div>
                        <img src="{{ asset('assets/image/enchanted.png') }}" alt="" class="w-full aspect-square object-cover" />
                        <div class="space-y-6 pt-4 lg:pl-4">
                            <div class="flex justify-between gap-8">
                                <p class="w-1/3 text-2xl flex flex-col">
                                    No 01<span class="font-nineties font-3xl font-extrabold">Family</span>
                                </p>
                                <p class="text-4xl lg:text-5xl w-2/3 font-extrabold text-right font-nineties">
                                    Family Getaway
                                </p>
                            </div>
                            <p class="text-right">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="pt-24">
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Venue</div>
                                    <div>Beach Club</div>
                                </div>
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Vibe Tags</div>
                                    <div>Photography / Dining / Relaxation</div>
                                </div>
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Best for</div>
                                    <div>Couple / Family / Friends</div>
                                </div>
                                <div>
                                    <a href="{{ route('explore.family') }}" class="bg-[#963D20] hover:brightness-110 text-white flex items-center justify-end gap-4 w-full p-2 text-xl">Details
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                                <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                                <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                                <path fill="#ffffff" d="M16 24h17v2H16z" />
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="romantic-bliss" class="grid grid-cols-1 lg:grid-cols-2 border-b-2 border-[#963D20] py-12">
                    <img src="{{ asset('assets/image/highlight2.png') }}" alt="" class="h-full w-full object-cover lg:aspect-auto aspect-square" />
                    <div>
                        <img src="{{ asset('assets/image/highlight1.png') }}" alt="" class="w-full aspect-square object-cover" />
                        <div class="space-y-6 pt-4 lg:pl-4">
                            <div class="flex justify-between gap-8">
                                <p class="w-1/3 text-2xl flex flex-col">
                                    No 02<span class="font-nineties font-3xl font-extrabold">Couple</span>
                                </p>
                                <p class="text-4xl lg:text-5xl w-2/3 font-extrabold text-right font-nineties">
                                    Romantic Bliss
                                </p>
                            </div>
                            <p class="text-right">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="pt-24">
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Venue</div>
                                    <div>Beach Club</div>
                                </div>
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Vibe Tags</div>
                                    <div>Photography / Dining / Relaxation</div>
                                </div>
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Best for</div>
                                    <div>Couple / Family / Friends</div>
                                </div>
                                <div>
                                    <a href="{{ route('explore.couple') }}" class="bg-[#963D20] hover:brightness-110 text-white flex items-center justify-end gap-4 w-full p-2 text-xl">Details
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                                <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                                <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                                <path fill="#ffffff" d="M16 24h17v2H16z" />
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="friend-madness" class="grid grid-cols-1 lg:grid-cols-2 border-b-2 border-[#963D20] py-12">
                    <img src="{{ asset('assets/image/highlight2.png') }}" alt="" class="h-full w-full object-cover lg:aspect-auto aspect-square" />
                    <div>
                        <img src="{{ asset('assets/image/highlight1.png') }}" alt="" class="w-full aspect-square object-cover" />
                        <div class="space-y-6 pt-4 lg:pl-4">
                            <div class="flex justify-between gap-8">
                                <p class="w-1/3 text-2xl flex flex-col">
                                    No 03<span class="font-nineties font-3xl font-extrabold">Friends</span>
                                </p>
                                <p class="text-4xl lg:text-5xl w-2/3 font-extrabold text-right font-nineties">
                                    Friend Madness
                                </p>
                            </div>
                            <p class="text-right">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="pt-24">
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Venue</div>
                                    <div>Beach Club</div>
                                </div>
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Vibe Tags</div>
                                    <div>Photography / Dining / Relaxation</div>
                                </div>
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Best for</div>
                                    <div>Couple / Family / Friends</div>
                                </div>
                                <div>
                                    <a href="{{ route('explore.couple') }}" class="bg-[#963D20] hover:brightness-110 text-white flex items-center justify-end gap-4 w-full p-2 text-xl">Details
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                                <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                                <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                                <path fill="#ffffff" d="M16 24h17v2H16z" />
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="party-anthem" class="grid grid-cols-1 lg:grid-cols-2 border-b-2 border-[#963D20] py-12">
                    <img src="{{ asset('assets/image/highlight2.png') }}" alt="" class="h-full w-full object-cover lg:aspect-auto aspect-square" />
                    <div>
                        <img src="{{ asset('assets/image/highlight1.png') }}" alt="" class="w-full aspect-square object-cover" />
                        <div class="space-y-6 pt-4 lg:pl-4">
                            <div class="flex justify-between gap-8">
                                <p class="w-1/3 text-2xl flex flex-col">
                                    No 04<span class="font-nineties font-3xl font-extrabold">Group</span>
                                </p>
                                <p class="text-4xl lg:text-5xl w-2/3 font-extrabold text-right font-nineties">
                                    Party Anthem
                                </p>
                            </div>
                            <p class="text-right">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="pt-24">
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Venue</div>
                                    <div>Beach Club</div>
                                </div>
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Vibe Tags</div>
                                    <div>Photography / Dining / Relaxation</div>
                                </div>
                                <div class="flex justify-between border-b border-[#963D20] py-3">
                                    <div class="text-black">Best for</div>
                                    <div>Couple / Family / Friends</div>
                                </div>
                                <div>
                                    <a href="{{ route('explore.couple') }}" class="bg-[#963D20] hover:brightness-110 text-white flex items-center justify-end gap-4 w-full p-2 text-xl">Details
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                                <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                                <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                                <path fill="#ffffff" d="M16 24h17v2H16z" />
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layouts.app>