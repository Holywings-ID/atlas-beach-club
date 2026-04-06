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

                    <section class="relative text-white w-full h-12 text-center bg-[#963D20] overflow-visible">
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
                        <img src="{{ asset('assets/image/enchanted.png') }}" alt="The Biggest Beach Club In The World" class="w-dvw h-[1500px] object-cover object-center" />
                        <div class="absolute inset-0 h-dvh w-dvw z-10 bg-gradient-to-t from-transparent via-[#963D20]/30 to-[#963D20]"></div>

                        <div class="text-white absolute inset-0 h-full w-full pt-[700px]">
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

        <section id="section-two" class="z-[2] relative -mt-[100vh] bg-[#EBE1D5]">

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
            <div class="container pt-24 relative bg-[#EBE1D5 redNew space-y-5" data-reveal>
                <p class="w-full max-w-[600px] text-center text-lg mx-auto">What’s Included? </p>
                <div class="flex items-center gap-3 justify-center">
                    <p class="w-max text-center">Lorem Ipsum </p>
                    <p class="w-max text-center">Lorem Ipsum </p>
                    <p class="w-max text-center">Lorem Ipsum </p>
                </div>
                <div class="flex items-center gap-16 justify-center">
                    @foreach (config('daybeds') as $daybed)
                    <a @click.prevent="window.scrollTo({ top: document.getElementById('{{ Str::slug($daybed['title']) }}').getBoundingClientRect().top + window.scrollY - 250, behavior: 'smooth' })" class="group text-center border-b pb-2 hover:text-slate-400 hover:border-slate-400 border-[#963D20] flex items-center gap-8 w-48 justify-between cursor-pointer">{{ $daybed['title'] }}
                        <span class="group-hover:rotate-90 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m16.172 11l-5.364-5.364l1.414-1.414L20 12l-7.778 7.778l-1.414-1.414L16.172 13H4v-2z" />
                            </svg>
                        </span>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="container py-24 space-y-24">
                @foreach (config('daybeds') as $daybed)
                <div class="space-y-12" x-data data-reveal>
                    <div class="flex justify-between gap-12" id="{{ Str::slug($daybed['title']) }}">
                        <div class="w-1/3 flex flex-col gap-24">
                            <h3 class="redNew font-parslay text-6xl">{{ $daybed['title'] }}</h3>
                            <p class="font-nineties redNew w-full lg:w-72 text-2xl">{{ $daybed['description'] }}</p>
                            <div class="flex justify-end gap-2">
                                <button @click="$refs.scroller.scrollBy({ left: -300, behavior: 'smooth' })">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                        <path fill="#A74423" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                        <path fill="#A74423" d="M25.3 34.7L15.6 25l9.7-9.7l1.4 1.4l-8.3 8.3l8.3 8.3z" />
                                        <path fill="#A74423" d="M17 24h17v2H17z" />
                                    </svg>
                                </button>
                                <div @click="$refs.scroller.scrollBy({ left: 300, behavior: 'smooth' })" class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                        <path fill="#A74423" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                        <path fill="#A74423" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                        <path fill="#A74423" d="M16 24h17v2H16z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div x-ref="scroller" class="w-2/3 flex gap-3 justify-start overflow-x-auto">
                            @foreach ($daybed['images'] as $image)
                            <div class="relative h-72 odd:translate-y-16 shrink-0">
                                <img src="{{ asset($image['img']) }}" alt="{{ $image['subtitle'] }}" class="w-64 h-72 object-cover" />
                                <p class="absolute -bottom-12 right-0 left-0 text-[#10496E] font-parslay text-lg text-center">{{ $image['subtitle'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="border-b-2 border-[#A74423] font-semibold text-[#A74423] pb-2 flex items-center justify-between">
                        <div class="flex gap-2">
                            <p>Atlas Beach Club</p> |
                            <p>{{ $daybed['title'] }}</p>
                        </div>
                        <div class="flex items-center gap-8">
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
                @endforeach
            </div>
        </section>
    </main>
</x-layouts.app>