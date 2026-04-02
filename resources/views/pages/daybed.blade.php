<x-layouts.app title="Daybed">

    <x-hero
        title="Daybed"
        subtitle="Unwind in luxury by the water"
        bg="https://placehold.co/1920x800/16213e/ffffff?text=Daybed"
    />

    <main>
        <section class="page-section" data-reveal>
            <h2 class="text-3xl font-bold">Reserve Your Daybed</h2>
            <p class="mt-4 max-w-3xl text-gray-600">
                Choose from our selection of premium daybeds, each offering stunning views and personalised service.
            </p>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @php
                    $daybeds = [
                        ['name' => 'Oceanfront Cabana', 'capacity' => '2 guests', 'price' => '$150/day'],
                        ['name' => 'Garden Retreat', 'capacity' => '4 guests', 'price' => '$200/day'],
                        ['name' => 'VIP Pavilion', 'capacity' => '6 guests', 'price' => '$350/day'],
                    ];
                @endphp

                @foreach ($daybeds as $d)
                    <div class="rounded-2xl border p-6 transition hover:shadow-lg" data-reveal>
                        <h3 class="text-xl font-semibold">{{ $d['name'] }}</h3>
                        <p class="mt-2 text-sm text-gray-500">{{ $d['capacity'] }}</p>
                        <p class="mt-1 text-lg font-bold">{{ $d['price'] }}</p>
                        <a href="{{ route('reserve') }}" class="mt-4 inline-block text-sm font-medium text-blue-600 hover:underline">Book Now →</a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

</x-layouts.app>
