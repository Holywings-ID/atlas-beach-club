<x-layouts.app title="Home">

    <x-video
        video-desktop="https://atlasbeachfest.s3.ap-southeast-3.amazonaws.com/production/atlas/page/2025/9/1/6K36WKEx34zUaVwRC1D8mLBzvoVx2bpfwIdaCGVD.webm"
        video-mobile="https://atlasbeachfest.s3.ap-southeast-3.amazonaws.com/production/atlas/page/2025/9/1/6K36WKEx34zUaVwRC1D8mLBzvoVx2bpfwIdaCGVD.webm"
        title="Atlas Beach Club"
        sub-title="Welcome To"
        image="{{asset('assets/logo/logo.png')}}" />

    <main>
        <section class="relative text-white w-full h-48 text-center bg-[#963D20] overflow-visible">
            <div class="absolute z-20 inset-0">
                <h2 class="text-4xl lg:text-6xl font-nineties font-extrabold">Enchanted Land</h2>
                <p class="mx-auto mt-4 max-w-2xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="mx-auto mt-4 max-w-2xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="mx-auto mt-4 max-w-2xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </section>
        <section class="relative h-full w-full text-center">
            <img src="{{ asset('assets/image/enchanted.png') }}" alt="The Biggest Beach Club In The World" class="w-dvw h-[1800px] object-cover object-center" />
            <div class="absolute inset-0 h-dvh w-dvw z-10 bg-gradient-to-t from-transparent via-transparent to-[#963D20]"></div>

            <div class="text-white absolute inset-0 h-full w-full pt-[500px]">
                <h3 class="relative z-20 text-2xl lg:text-4xl font-nineties mb-4">The Biggest Beach Club In The World</h3>
                <h4 class="relative z-20 text-4xl lg:text-6xl font-nineties flex items-center justify-center font-extrabold">
                    5 HIGHLIGHTS
                    <span class="font-parslay font-normal px-5 text-3xl">of</span>
                    ATLAS BEACH CLUB
                </h4>
            </div>
        </section>

        <section class="page-section">
            <div class="grid gap-8 lg:grid-cols-2 grid-cols-3">
                @php
                $features = [
                ['title' => 'Daybed', 'desc' => 'Relax in style by the shore.', 'route' => 'daybed', 'icon' => '☀️'],
                ['title' => 'Dining', 'desc' => 'Savour world‑class cuisine.', 'route' => 'dining', 'icon' => '🍽️'],
                ['title' => 'Pool Bar', 'desc' => 'Sip cocktails poolside.', 'route' => 'poolbar', 'icon' => '🍹'],
                ['title' => 'Explore', 'desc' => 'Discover hidden gems.', 'route' => 'explore', 'icon' => '🗺️'],
                ['title' => "What's On", 'desc' => 'Events & entertainment.', 'route' => 'whatson', 'icon' => '🎶'],
                ['title' => 'Offers', 'desc' => 'Exclusive deals for you.', 'route' => 'offer', 'icon' => '🎁'],
                ];
                @endphp

                @foreach ($features as $f)
                <a href="{{ route($f['route']) }}"
                    class="group rounded-2xl border p-8 text-center transition hover:shadow-lg"
                    data-reveal>
                    <span class="text-4xl">{{ $f['icon'] }}</span>
                    <h3 class="mt-4 text-xl font-semibold group-hover:text-blue-600">{{ $f['title'] }}</h3>
                    <p class="mt-2 text-sm text-gray-500">{{ $f['desc'] }}</p>
                </a>
                @endforeach
            </div>
        </section>
    </main>

</x-layouts.app>