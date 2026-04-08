<x-layouts.app title="Pool Bar">

    <x-hero
        title="Pool Bar"
        subtitle="Refreshing drinks, stunning views"
        bg="https://placehold.co/1920x800/1a508b/ffffff?text=Pool+Bar"
    />

    <main>
        <section class="page-section" data-reveal>
            <h2 class="text-3xl font-bold">Drinks &amp; Bites</h2>
            <p class="mt-4 max-w-3xl text-gray-600">
                Enjoy handcrafted cocktails and light bites right by the pool.
            </p>

            <div class="mt-10 grid gap-6 lg:grid-cols-2">
                @php
                    $menu = [
                        ['name' => 'Tropical Sunset', 'type' => 'Cocktail', 'price' => '$18'],
                        ['name' => 'Ocean Breeze', 'type' => 'Mocktail', 'price' => '$12'],
                        ['name' => 'Grilled Sliders', 'type' => 'Bites', 'price' => '$16'],
                        ['name' => 'Fresh Fruit Platter', 'type' => 'Bites', 'price' => '$14'],
                    ];
                @endphp

                @foreach ($menu as $m)
                    <div class="flex items-center justify-between rounded-xl border p-5 transition hover:shadow-md" data-reveal>
                        <div>
                            <h3 class="font-semibold">{{ $m['name'] }}</h3>
                            <p class="text-sm text-gray-500">{{ $m['type'] }}</p>
                        </div>
                        <span class="text-lg font-bold">{{ $m['price'] }}</span>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

</x-layouts.app>
