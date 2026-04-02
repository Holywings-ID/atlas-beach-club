<x-layouts.app title="Dining">

    <x-hero
        title="Dining"
        subtitle="A culinary journey like no other"
        bg="https://placehold.co/1920x800/0f3460/ffffff?text=Dining"
    />

    <main>
        <section class="page-section" data-reveal>
            <h2 class="text-3xl font-bold">Our Restaurants</h2>
            <p class="mt-4 max-w-3xl text-gray-600">
                From fine dining to casual bites, explore our curated culinary experiences.
            </p>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @php
                    $restaurants = [
                        ['name' => 'The Grand Table', 'cuisine' => 'Fine Dining', 'hours' => '6 PM – 11 PM'],
                        ['name' => 'Seaside Grill', 'cuisine' => 'Seafood & BBQ', 'hours' => '12 PM – 10 PM'],
                        ['name' => 'Zen Garden', 'cuisine' => 'Asian Fusion', 'hours' => '11 AM – 10 PM'],
                    ];
                @endphp

                @foreach ($restaurants as $r)
                    <div class="rounded-2xl border p-6 transition hover:shadow-lg" data-reveal>
                        <h3 class="text-xl font-semibold">{{ $r['name'] }}</h3>
                        <p class="mt-2 text-sm text-gray-500">{{ $r['cuisine'] }}</p>
                        <p class="mt-1 text-sm text-gray-400">🕐 {{ $r['hours'] }}</p>
                        <a href="{{ route('reserve') }}" class="mt-4 inline-block text-sm font-medium text-blue-600 hover:underline">Reserve a Table →</a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

</x-layouts.app>
