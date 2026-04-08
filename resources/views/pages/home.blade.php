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

                    <section class="relative text-white w-full h-12 text-center bg-[#A74423] overflow-visible">
                        <div class="absolute z-20 inset-0">
                            <h2 class="text-3xl lg:text-5xl font-nineties font-extrabold" data-reveal>Enchanted Land</h2>
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
                        <div class="absolute inset-0 h-dvh w-dvw z-10 bg-gradient-to-t from-transparent via-[#A74423]/30 to-[#A74423]"></div>

                        <div class="text-white absolute inset-0 h-full w-full pt-[700px]">
                            <h3 class="relative z-20 text-xl lg:text-3xl font-nineties mb-4 text-center" data-reveal>The Biggest Beach Club In The World</h3>
                            <h4 class="relative z-20 text-3xl lg:text-5xl font-nineties flex flex-col lg:flex-row items-center justify-center font-extrabold" data-reveal>
                                5 HIGHLIGHTS
                                <span class="font-parslay font-normal px-5 text-3xl">of</span>
                                ATLAS BEACH CLUB
                            </h4>
                            <div class="relative z-30 container flex flex-col lg:flex-row justify-center gap-4 lg:gap-8 mt-12 lg:mt-24 px-4" data-reveal>
                                <div class="bg-[#A74423]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-36 lg:h-44 w-full lg:w-80 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 01</div>
                                    <div class="font-nineties font-extrabold text-4xl">Daybeds</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </div>
                                <div class="bg-[#A74423]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-36 lg:h-44 w-full lg:w-80 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 02</div>
                                    <div class="font-nineties font-extrabold text-2xl lg:text-4xl">Dining</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </div>
                                <div class="bg-[#A74423]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-36 lg:h-44 w-full lg:w-80 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 03</div>
                                    <div class="font-nineties font-extrabold text-2xl lg:text-4xl">Poolbar</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </div>
                            </div>
                            <div class="relative z-30 container flex flex-col lg:flex-row justify-center mt-4 lg:mt-8 gap-4 lg:gap-8 px-4" data-reveal>
                                <div class="bg-[#A74423]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-36 lg:h-44 w-full lg:w-80 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 04</div>
                                    <div class="font-nineties font-extrabold text-2xl lg:text-4xl">Activity</div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                </div>
                                <div class="bg-[#A74423]/60 cursor-pointer transition-all duration-300 justify-center flex flex-col h-36 lg:h-44 w-full lg:w-80 p-4 rounded-3xl hover:bg-[#10496E]/60">
                                    <div>No 05</div>
                                    <div class="font-nineties font-extrabold text-2xl lg:text-4xl">Group Bookings</div>
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
            <div class="container pt-24 relative bg-[#EBE1D5] redNew">
                <div class="absolute top-2 left-0 right-0 w-fit mx-auto text-center font-nineties text-4xl redNew">
                    <p>Daybed</p>
                </div>
                <p class="w-full max-w-[600px] text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostruLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr</p>
            </div>
            <div class="container pt-24 relative redNew space-y-5" data-reveal>
                <p class="w-full max-w-[600px] text-center text-lg mx-auto">What’s Included? </p>
                <div class="flex items-center gap-3 justify-center flex-wrap">
                    <p class="w-max text-center">Lorem Ipsum </p>
                    <p class="w-max text-center">Lorem Ipsum </p>
                    <p class="w-max text-center">Lorem Ipsum </p>
                </div>
                <div class="flex flex-col lg:flex-row items-center gap-4 lg:gap-16 justify-center">
                    @foreach (config('daybeds') as $daybed)
                    <a @click.prevent="window.scrollTo({ top: document.getElementById('{{ Str::slug($daybed['title']) }}').getBoundingClientRect().top + window.scrollY - 250, behavior: 'smooth' })" class="group text-center border-b pb-2 hover:text-slate-400 hover:border-slate-400 border-[#A74423] flex items-center gap-8 w-48 justify-between cursor-pointer">{{ $daybed['title'] }}
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
                    <div class="flex flex-col lg:flex-row justify-between gap-6 lg:gap-12" id="{{ Str::slug($daybed['title']) }}">
                        <div class="w-full lg:w-1/3 flex flex-col gap-8 lg:gap-24">
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
                        <div x-ref="scroller" class="w-full lg:w-2/3 flex gap-3 justify-start overflow-x-auto h-[400px] lg:h-[500px]">
                            @foreach ($daybed['images'] as $image)
                            <div class="relative h-96 odd:translate-y-16 shrink-0">
                                <img src="{{ asset($image['img']) }}" alt="{{ $image['subtitle'] }}" class="w-72 h-96 object-cover" />
                                <p class="absolute -bottom-8 right-0 left-0 text-[#10496E] font-parslay text-lg text-center">{{ $image['subtitle'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="border-b-2 border-[#A74423] font-semibold text-[#A74423] pb-2 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4">
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

        <section class="relative z-10 ">
            <div class="relative bg-[#A74423] overflow-hidden">
                <!-- image floating -->
                <img src="{{ asset('assets/image/food1.png') }}" alt="" class="float-image w-96 h-72 absolute -top-24 -right-12 object-cover rounded-3xl rotate-6" style="--float-rotate:6deg; animation-delay:0s" />
                <img src="{{ asset('assets/image/food3.png') }}" alt="" class="float-image w-32 h-24 absolute top-52 right-52 blur-sm object-cover rounded-3xl" style="--float-rotate:-12deg; animation-delay:1.5s" />
                <img src="{{ asset('assets/image/food2.png') }}" alt="" class="float-image w-72 h-64 absolute top-64 -right-24 object-cover rounded-3xl" style="--float-rotate:-6deg; animation-delay:0.8s" />

                <img src="{{ asset('assets/image/food1.png') }}" alt="" class="float-image w-32 h-24 absolute top-8 left-52 blur-sm object-cover rounded-3xl" style="--float-rotate:12deg; animation-delay:2s" />
                <img src="{{ asset('assets/image/food4.png') }}" alt="" class="float-image w-96 h-72 absolute top-12 -left-52 object-cover rounded-3xl" style="--float-rotate:-6deg; animation-delay:0.5s" />
                <img src="{{ asset('assets/image/food3.png') }}" alt="" class="float-image w-72 h-52 absolute top-96 -left-12 object-cover rounded-3xl" style="--float-rotate:12deg; animation-delay:1.2s" />
                <!-- image floating -->

                <div class="container space-y-12 text-center py-8 pb-24">
                    <div class="">
                        <p class="font-nineties text-4xl">No 02</p>
                        <p class="font-nineties text-4xl">Dining</p>
                    </div>
                    <div class="space-y-5">
                        <p class="font-nineties text-4xl" data-reveal>World Class Dining</p>
                        <p class="font-parslay ml-32 text-5xl" data-reveal>
                            <span class="pr-32">Come Hungry</span>
                            <span class="ml-32"><br />Leave Iconic</span>
                        </p>
                        <p class="font-nineties text-2xl" data-reveal>find your taste only at pavilion</p>
                        <button class="bg-white hover:scale-110 transition-all duration-300 rounded-full py-2 px-6 redNew flex items-center gap-2 mx-auto" data-reveal>
                            Overview
                            <span class="group-hover:rotate-90 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m16.172 11l-5.364-5.364l1.414-1.414L20 12l-7.778 7.778l-1.414-1.414L16.172 13H4v-2z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="max-w-[800px] mx-auto" data-reveal>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostruLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                        </p>
                    </div>
                    <div class="pt-12">
                        <div class="flex justify-between">
                            <button @click="$refs.scrollersec.scrollBy({ left: -300, behavior: 'smooth' })">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                    <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                    <path fill="#ffffff" d="M25.3 34.7L15.6 25l9.7-9.7l1.4 1.4l-8.3 8.3l8.3 8.3z" />
                                    <path fill="#ffffff" d="M17 24h17v2H17z" />
                                </svg>
                            </button>
                            <div @click="$refs.scrollersec.scrollBy({ left: 300, behavior: 'smooth' })" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                    <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                    <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                    <path fill="#ffffff" d="M16 24h17v2H16z" />
                                </svg>
                            </div>
                        </div>
                        <div x-ref="scrollersec" class="w-full flex gap-5 justify-start overflow-x-auto h-[650px]" data-reveal>
                            @foreach (config('dining') as $image)
                            <div class="relative h-96 odd:h-[480px] shrink-0">
                                <img src="{{ asset($image['img']) }}" alt="{{ $image['subtitle'] }}" class="w-80 h-full object-cover" />
                                <p class="absolute -bottom-8 right-0 left-0 font-parslay text-lg text-center">{{ $image['subtitle'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex gap-24 text-left flex-col lg:flex-row">
                        <div class="w-full lg:w-2/5 space-y-3" data-reveal>
                            <div class="font-nineties text-3xl">Taste the</div>
                            <div class="font-parslay text-5xl">Extraordinary</div>
                            <div class=" pr-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostruLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</div>
                        </div>
                        <div class="relative w-full lg:w-3/5">
                            <img src="{{ asset('assets/image/chef.png') }}" alt="" class="w-full h-[400px] lg:h-[650px] object-top object-cover" data-reveal />
                            <img src="{{ asset('assets/image/food2.png') }}" alt="" class="absolute -left-12 lg:-left-24 bottom-12 w-auto aspect-square h-[200px] lg:h-[300px] object-cover" style="animation-delay: 1s;" data-reveal />
                        </div>
                    </div>
                    <div class="border-b-2 font-semibold pb-2 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4">
                        <div class="flex gap-2">
                            <p>Atlas Beach Club</p> |
                            <p>Dining</p>
                        </div>
                        <div class="flex items-center gap-4 lg:gap-8">
                            <a href="" class="items-center flex gap-3">Overview
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                    <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                    <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                    <path fill="#ffffff" d="M16 24h17v2H16z" />
                                </svg>
                            </a>
                            <a href="" class="items-center flex gap-3">Reserve
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                    <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                    <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                    <path fill="#ffffff" d="M16 24h17v2H16z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bg-[#EBE1D5] space-y-12 pb-12">
                <div class="relative text-center h-[700px]" style="clip-path: ellipse(100% 100% at 50% 0%);">
                    <img src="{{ asset("assets/image/poolbar.png") }}" alt="Poolbar" class="fixed -z-10 top-0 left-0 rig w-dvw h-dvh object-cover" />
                    <div class="absolute top-5 left-0 right-0 text-center">
                        <p class="font-nineties text-4xl">No 03</p>
                        <p class="font-nineties text-4xl">Poolbar</p>
                    </div>
                    <div class="absolute bottom-32 right-4 lg:right-44 space-y-5 text-right" data-reveal>
                        <p class="font-nineties text-4xl font-extrabold">Sip and Relax
                            <span class="font-parslay text-xl">
                                by the pool
                            </span>
                        </p>
                        <p class="text-xl max-w-[700px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="relative z-10 container flex flex-col lg:flex-row redNew gap-6 lg:gap-12 py-12">
                    <div class="w-full lg:w-2/5 flex flex-col">
                        <div class="text-4xl font-nineties font-semibold">Special Just For You</div>
                        <div id="accordion" x-data="{ open: null }" class="mt-4 grow">
                            @foreach (['PoolTime', 'Bar by the sea', 'Lorem Ipsum'] as $i => $title)
                            <div class="border-b border-current">
                                <button @click="open = open === {{ $i }} ? null : {{ $i }}" class="w-full py-4 flex items-center justify-between text-left text-lg font-semibold">
                                    {{ $title }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="shrink-0 transition-transform duration-300" :class="open === {{ $i }} ? 'rotate-180' : ''">
                                        <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6z" />
                                    </svg>
                                </button>
                                <div x-show="open === {{ $i }}" x-collapse>
                                    <p class="pb-4 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="flex justify-end gap-2">
                            <button @click="$refs.scrollerPool.scrollBy({ left: -600, behavior: 'smooth' })">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                    <path fill="#A74423" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                    <path fill="#A74423" d="M25.3 34.7L15.6 25l9.7-9.7l1.4 1.4l-8.3 8.3l8.3 8.3z" />
                                    <path fill="#A74423" d="M17 24h17v2H17z" />
                                </svg>
                            </button>
                            <div @click="$refs.scrollerPool.scrollBy({ left: 600, behavior: 'smooth' })" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                    <path fill="#A74423" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                    <path fill="#A74423" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                    <path fill="#A74423" d="M16 24h17v2H16z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-3/5" data-reveal>
                        <div x-ref="scrollerPool" class="flex gap-8 justify-start overflow-x-auto h-[600px]">
                            @foreach (config('daybeds') as $daybed)
                            <div class="relative h-[600px] shrink-0">
                                <img src="{{ asset($image['img']) }}" alt="{{ $image['subtitle'] }}" class="aspect-square h-[600px] object-cover" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="container border-b-2 border-[#A74423] font-semibold text-[#A74423] pb-2 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4">
                    <div class="flex gap-2">
                        <p>Atlas Beach Club</p> |
                        <p>Pool Bar</p>
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
        </section>
        <section>
            <div class="relative bg-[#EBE1D5] text-[#A74423] overflow-hidden">
                <!-- image floating -->
                <img src="{{ asset('assets/image/sport3.png') }}" alt="" class="float-image w-24 h-32 absolute top-32 right-52 blur-sm object-cover rounded-3xl" style="--float-rotate:16deg; animation-delay:1.1s" />
                <img src="{{ asset('assets/image/sport1.png') }}" alt="" class="float-image w-64 h-72 absolute top-64 -right-24 object-cover rounded-3xl" style="--float-rotate:-10deg; animation-delay:0.8s" />

                <img src="{{ asset('assets/image/sport2.png') }}" alt="" class="float-image w-24 h-32 absolute top-8 left-52 blur-sm object-cover rounded-3xl" style="--float-rotate:-16deg; animation-delay:0.8s" />
                <img src="{{ asset('assets/image/sport4.png') }}" alt="" class="float-image w-72 h-96 absolute top-32 -left-10 object-cover rounded-3xl" style="--float-rotate:8deg; animation-delay:0.2s" />
                <!-- image floating -->

                <div class="container space-y-12 text-center py-8 pb-24">
                    <div class="">
                        <p class="font-nineties text-4xl">No 04</p>
                        <p class="font-nineties text-4xl">Activity</p>
                    </div>
                    <div class="space-y-5">
                        <p class="font-nineties text-4xl" data-reveal>Art of Padel</p>
                        <p class="font-parslay ml-32 text-5xl" data-reveal>
                            <span class="pr-32">Highter</span>
                            <span class="ml-32"><br />Standards</span>
                        </p>
                        <p class="font-nineties text-2xl" data-reveal>for those who value health</p>
                        <button class="bg-[#A74423] text-white hover:scale-110 transition-all duration-300 rounded-full py-2 px-6 flex items-center gap-2 mx-auto" data-reveal>
                            Overview
                            <span class="group-hover:rotate-90 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m16.172 11l-5.364-5.364l1.414-1.414L20 12l-7.778 7.778l-1.414-1.414L16.172 13H4v-2z" />
                                </svg>
                            </span>
                        </button>
                    </div>

                    <div x-data="{ active: 0 }" class="pt-32">
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
            </div>
        </section>
        <section class="relative overflow-hidden bg-white">
            <div class="absolute top-0 left-0 right-0 py-24 bg-[#A74423] rounded-b-[50%] z-20">
                <div class="container relative z-20 text-center">
                    <p class="text-white text-2xl font-nineties uppercase mb-6">Explore Atlas Beach Club</p>
                    <h1 class="text-white text-5xl font-extrabold font-nineties mb-6">Group Bookings</h1>
                    <p class="text-white max-w-2xl mx-auto leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad
                    </p>
                    <a href="{{ route('explore') }}"
                        class="inline-block bg-white hover:bg-[#EBE1D5] text-[#A74423] font-semibold tracking-widest capitalize px-12 lg:px-32 py-3 rounded-full transition-colors duration-200 no-underline">
                        Explore Now
                    </a>
                </div>
            </div>

            {{-- Image Slider --}}
            <div class="z-10 h-full w-full" x-data="{
                ...imageSlider(),
                slides: [
                    '{{ asset('assets/image/highlight1.png') }}',
                    '{{ asset('assets/image/highlight2.png') }}',
                    '{{ asset('assets/image/highlight3.png') }}',
                    '{{ asset('assets/image/highlight4.png') }}',
                ]
            }">
                {{-- Slides --}}
                <div class="relative w-full h-[1300px] overflow-hidden">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div class="absolute inset-0 transition-opacity duration-700"
                            :class="index === current ? 'opacity-100' : 'opacity-0'">
                            <img :src="slide" alt="Slide image" class="w-full h-full object-cover">
                        </div>
                    </template>
                </div>
            </div>

        </section>

    </main>
</x-layouts.app>