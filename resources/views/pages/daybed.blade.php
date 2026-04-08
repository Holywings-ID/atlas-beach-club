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
                    <x-video
                        video-desktop="https://atlasbeachfest.s3.ap-southeast-3.amazonaws.com/production/atlas/page/2025/9/1/6K36WKEx34zUaVwRC1D8mLBzvoVx2bpfwIdaCGVD.webm"
                        video-mobile="https://atlasbeachfest.s3.ap-southeast-3.amazonaws.com/production/atlas/page/2025/9/1/6K36WKEx34zUaVwRC1D8mLBzvoVx2bpfwIdaCGVD.webm"
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
                        <img src="{{ asset('assets/image/daybed.png') }}" alt="The Biggest Beach Club In The World" class="w-dvw h-[800px] object-cover object-top" />
                        <div class="absolute inset-0 h-dvh w-dvw z-10 bg-gradient-to-t from-transparent via-transparent to-[#A74423]"></div>
                    </section>
                </div>
            </div>
        </div>
    </main>

</x-layouts.app>
