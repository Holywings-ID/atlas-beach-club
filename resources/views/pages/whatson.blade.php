<x-layouts.app title="What's On">

    <x-hero
        title="What's On"
        subtitle="Events, entertainment & happenings"
        bg="https://placehold.co/1920x800/e94560/ffffff?text=Whats+On"
    />

    <main>
        <section class="page-section" data-reveal>
            <h2 class="text-3xl font-bold">Upcoming Events</h2>
            <p class="mt-4 max-w-3xl text-gray-600">
                Stay up to date with everything happening at ABC.
            </p>

            <div class="mt-10 space-y-6">
                @php
                    $events = [
                        ['title' => 'Live Jazz Night', 'date' => 'Every Friday', 'time' => '7 PM', 'location' => 'Pool Bar'],
                        ['title' => 'Wine Tasting', 'date' => 'Saturdays', 'time' => '5 PM', 'location' => 'The Grand Table'],
                        ['title' => 'Beach Yoga', 'date' => 'Daily', 'time' => '7 AM', 'location' => 'Main Beach'],
                    ];
                @endphp

                @foreach ($events as $e)
                    <div class="flex items-start gap-6 rounded-xl border p-6 transition hover:shadow-md" data-reveal>
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-gray-100 text-xl">🎤</div>
                        <div>
                            <h3 class="text-lg font-semibold">{{ $e['title'] }}</h3>
                            <p class="text-sm text-gray-500">{{ $e['date'] }} · {{ $e['time'] }} · {{ $e['location'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

</x-layouts.app>
