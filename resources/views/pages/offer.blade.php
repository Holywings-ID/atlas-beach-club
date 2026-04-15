<x-layouts.app title="Offers">

    <x-hero
        title="Special Offers"
        subtitle="Exclusive deals crafted for you"
        bg="https://placehold.co/1920x800/c70039/ffffff?text=Offers"
    />

    <main>
        <section class="page-section" data-reveal>
            <h2 class="text-3xl font-bold">Current Promotions</h2>
            <p class="mt-4 max-w-3xl text-gray-600">
                Take advantage of our limited‑time offers.
            </p>

            <div class="mt-10 grid gap-6 lg:grid-cols-3">
                @php
                    $offers = [
                        ['title' => 'Early Bird Special', 'desc' => '20% off bookings made 30 days in advance.', 'badge' => '20% OFF'],
                        ['title' => 'Stay 3, Pay 2', 'desc' => 'Complimentary third night on us.', 'badge' => 'FREE NIGHT'],
                        ['title' => 'Honeymoon Package', 'desc' => 'Romantic dinner, spa & champagne included.', 'badge' => 'EXCLUSIVE'],
                    ];
                @endphp

                @foreach ($offers as $o)
                    <div class="relative rounded-2xl border p-6 transition hover:shadow-lg" data-reveal>
                        <span class="absolute right-4 top-4 rounded-full bg-black px-3 py-1 text-xs font-bold text-white">{{ $o['badge'] }}</span>
                        <h3 class="mt-4 text-xl font-semibold">{{ $o['title'] }}</h3>
                        <p class="mt-2 text-sm text-gray-500">{{ $o['desc'] }}</p>
                        <a href="{{ route('reserve') }}" class="mt-4 inline-block text-sm font-medium text-blue-600 hover:underline">Book This Offer <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                                <path fill="#963D20" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                <path fill="#963D20" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                <path fill="#963D20" d="M16 24h17v2H16z" />
                            </svg></a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

</x-layouts.app>
