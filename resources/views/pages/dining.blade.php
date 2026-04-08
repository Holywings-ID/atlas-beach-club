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
                        title="Pavilion"
                        sub-title="Dining"
                        image="{{asset('assets/logo/logo.png')}}" />
                    <section class="relative text-white w-full h-12 text-center bg-[#A74423] overflow-visible">
                        <div class="absolute z-20 inset-0">
                            <h2 class="text-4xl lg:text-6xl font-nineties font-extrabold" data-reveal>Eat. Sip.<br /> Repeat.</h2>
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
            <div class="container py-12">
                <div class="flex flex-col lg:flex-row gap-6 lg:gap-12 border-b border-[#A74423] py-16" data-reveal>
                    <div class="w-full lg:w-2/5 space-y-3">
                        <div class="font-nineties text-3xl">Italian Cuisine</div>
                        <div class="font-parslay text-3xl lg:text-5xl">Lorem Ipsum</div>
                        <div class="pr-0 lg:pr-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostruLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</div>
                        <button class="bg-[#A74423] text-white hover:scale-110 transition-all duration-300 rounded-full py-2 px-6 flex items-center gap-2" data-reveal>
                            Menu
                            <span class="group-hover:rotate-90 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m16.172 11l-5.364-5.364l1.414-1.414L20 12l-7.778 7.778l-1.414-1.414L16.172 13H4v-2z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="w-full lg:w-3/5">
                        <img src="{{ asset('assets/image/food1.png') }}" alt="Dining Image 2" class="w-full aspect-square object-cover" />
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-6 lg:gap-12 border-b border-[#A74423] py-16" data-reveal>
                    <div class="w-full lg:w-2/5 space-y-3">
                        <div class="font-nineties text-3xl">Italian Cuisine</div>
                        <div class="font-parslay text-3xl lg:text-5xl">Lorem Ipsum</div>
                        <div class="pr-0 lg:pr-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostruLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</div>
                        <button class="bg-[#A74423] text-white hover:scale-110 transition-all duration-300 rounded-full py-2 px-6 flex items-center gap-2" data-reveal>
                            Menu
                            <span class="group-hover:rotate-90 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m16.172 11l-5.364-5.364l1.414-1.414L20 12l-7.778 7.778l-1.414-1.414L16.172 13H4v-2z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="w-full lg:w-3/5">
                        <img src="{{ asset('assets/image/food1.png') }}" alt="Dining Image 2" class="w-full aspect-square object-cover" />
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-6 lg:gap-12 border-b border-[#A74423] py-16" data-reveal>
                    <div class="w-full lg:w-2/5 space-y-3">
                        <div class="font-nineties text-3xl">Italian Cuisine</div>
                        <div class="font-parslay text-3xl lg:text-5xl">Lorem Ipsum</div>
                        <div class="pr-0 lg:pr-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostruLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</div>
                        <button class="bg-[#A74423] text-white hover:scale-110 transition-all duration-300 rounded-full py-2 px-6 flex items-center gap-2" data-reveal>
                            Menu
                            <span class="group-hover:rotate-90 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m16.172 11l-5.364-5.364l1.414-1.414L20 12l-7.778 7.778l-1.414-1.414L16.172 13H4v-2z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="w-full lg:w-3/5">
                        <img src="{{ asset('assets/image/food1.png') }}" alt="Dining Image 2" class="w-full aspect-square object-cover" />
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layouts.app>