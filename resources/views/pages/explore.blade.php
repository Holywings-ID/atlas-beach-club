<x-layouts.app title="Explore">

    <x-hero
        title="Explore"
        subtitle="Discover the beauty around you"
        bg="https://placehold.co/1920x800/533483/ffffff?text=Explore"
    />

    <main>
        <section class="page-section" data-reveal>
            <h2 class="text-3xl font-bold">Things to Do</h2>
            <p class="mt-4 max-w-3xl text-gray-600">
                Adventures and experiences waiting just for you.
            </p>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @php
                    $activities = [
                        ['title' => 'Snorkelling Tour', 'desc' => 'Discover vibrant coral reefs.', 'icon' => '🤿'],
                        ['title' => 'Sunset Cruise', 'desc' => 'Sail into the golden hour.', 'icon' => '⛵'],
                        ['title' => 'Nature Walk', 'desc' => 'Guided trek through lush trails.', 'icon' => '🌿'],
                    ];
                @endphp

                @foreach ($activities as $a)
                    <div class="rounded-2xl border p-8 text-center transition hover:shadow-lg" data-reveal>
                        <span class="text-4xl">{{ $a['icon'] }}</span>
                        <h3 class="mt-4 text-xl font-semibold">{{ $a['title'] }}</h3>
                        <p class="mt-2 text-sm text-gray-500">{{ $a['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

</x-layouts.app>
