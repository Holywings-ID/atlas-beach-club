<x-layouts.app title="Q&A">
    <main class="-mt-24">
        <section class="bg-[#EBE1D5] text-[#963D20] pb-24 pt-52">
            <div class="container max-w-4xl">
                <h1 class="font-extrabold text-6xl uppercase font-nineties mb-12">Q&A</h1>

                @php
                $categories = [
                    'Booking & Reservation' => [
                        ['q' => 'How do I make a booking?', 'a' => 'You can book directly through our official website. All bookings must be completed online.'],
                        ['q' => 'Do I need to pay in advance?', 'a' => 'Yes, all bookings require full payment at the time of reservation.'],
                        ['q' => 'What payment methods are accepted?', 'a' => 'We accept credit cards (Visa, Mastercard, Amex) and bank transfers.'],
                        ['q' => 'Can I pay on arrival?', 'a' => 'No, bookings must be fully paid in advance.'],
                    ],
                    'Confirmation & Entry' => [
                        ['q' => 'What do I need to bring when I arrive?', 'a' => 'Please bring your booking confirmation (phone or print) and a valid ID.'],
                        ['q' => "What happens if I don't bring my booking confirmation?", 'a' => 'Entry may be denied without valid confirmation and ID.'],
                        ['q' => 'Can someone else use my booking?', 'a' => 'The booking must match the ID used. Otherwise, payment will need to be made again on arrival.'],
                    ],
                    'Cancellation & Refund' => [
                        ['q' => 'Can I cancel my booking?', 'a' => 'Bookings are non-refundable unless the venue is closed.'],
                        ['q' => 'What if it rains or the weather is bad?', 'a' => 'You will receive an e-voucher valid for 18 months.'],
                        ['q' => "What if I don't show up?", 'a' => 'No-shows are non-refundable.'],
                    ],
                    'Changes & Amendments' => [
                        ['q' => 'Can I change my booking date?', 'a' => 'Yes, within 2 hours after booking (subject to availability).'],
                        ['q' => 'Can I upgrade my table?', 'a' => 'Yes, upgrades are possible anytime depending on availability.'],
                    ],
                    'Group Bookings' => [
                        ['q' => 'Can I book for a large group?', 'a' => 'Yes. Groups of 13–30 pax require a group booking. Groups above 30 pax require a private area.'],
                    ],
                    'Age Policy' => [
                        ['q' => 'Is there an age restriction?', 'a' => 'Yes, Atlas Beach Club is strictly 16+.'],
                        ['q' => 'Can under 21 drink alcohol?', 'a' => 'No, the legal drinking age is 21.'],
                    ],
                    'Dress Code' => [
                        ['q' => 'Is there a dress code?', 'a' => 'Yes, smart casual is required.'],
                        ['q' => 'Can we wear matching outfits or costumes?', 'a' => 'No, matching outfits or group costumes are not allowed.'],
                    ],
                    'Behaviour & Entry Policy' => [
                        ['q' => "Can I enter if I've been drinking?", 'a' => 'Guests heavily under the influence may be denied entry.'],
                        ['q' => 'Can I be asked to leave?', 'a' => 'Yes, management may remove guests for inappropriate behavior.'],
                    ],
                    'Pool Rules' => [
                        ['q' => 'What should I wear in the pool?', 'a' => 'Proper swimwear is required.'],
                        ['q' => 'Can I bring drinks or phones into the pool?', 'a' => 'No food or electronics are allowed in the pool.'],
                        ['q' => 'Can I dive or jump into the pool?', 'a' => 'No, diving and jumping are strictly prohibited.'],
                    ],
                    'Prohibited Items' => [
                        ['q' => 'Can I bring outside food or drinks?', 'a' => 'No, outside food and beverages are not allowed.'],
                        ['q' => 'Can I bring a drone or camera?', 'a' => 'Only with prior approval from management.'],
                        ['q' => 'Are bags checked?', 'a' => 'Yes, all bags are subject to security checks.'],
                    ],
                    'Pets & Smoking' => [
                        ['q' => 'Are pets allowed?', 'a' => 'Only on beach beanbags and must be on a leash.'],
                        ['q' => 'Can I smoke anywhere?', 'a' => 'Smoking is only allowed in designated areas.'],
                    ],
                    'Safety & Liability' => [
                        ['q' => 'Is Atlas responsible for lost items?', 'a' => 'No, guests are responsible for their belongings.'],
                        ['q' => 'What if I damage something?', 'a' => 'Guests are responsible for any damages caused.'],
                    ],
                    'Photography' => [
                        ['q' => 'Can I take photos?', 'a' => 'Yes, but please respect other guests\' privacy.'],
                        ['q' => 'Will Atlas take photos of guests?', 'a' => 'Yes, for marketing purposes.'],
                    ],
                    'General' => [
                        ['q' => 'Why was I denied entry?', 'a' => 'Entry may be denied if rules are not followed (ID, behavior, dress code, etc.).'],
                        ['q' => 'Can management make exceptions?', 'a' => 'All decisions are at management discretion.'],
                        ['q' => 'How long can I stay?', 'a' => 'You can enjoy Atlas all day, from 12 PM to 12 AM during your visit.'],
                        ['q' => 'Is there a queue or waiting time?', 'a' => 'Waiting time may vary depending on the day and crowd. We recommend arriving early or making a reservation to secure your spot.'],
                        ['q' => 'Is there an entrance fee?', 'a' => 'Yes, a General Admission entrance fee applies.'],
                        ['q' => 'Is there a minimum spend? (Daybed / Sofa / Table)', 'a' => 'Yes, minimum spend applies for daybeds and sofas.'],
                        ['q' => 'Is the minimum spend consumable?', 'a' => 'Yes, the minimum spend is largely consumable on food and drinks. Kindly note that a booking fee is applied, therefore it is not fully consumable.'],
                        ['q' => 'Are prices subject to tax & service?', 'a' => 'No, prices are inclusive and not subject to additional tax and service charges.'],
                        ['q' => 'Do you require a deposit?', 'a' => 'No, we do not require a deposit during your visit.'],
                        ['q' => 'Do you have WiFi?', 'a' => 'Yes, complimentary WiFi is available.'],
                        ['q' => 'Are towels provided?', 'a' => 'Yes, towels are provided for your convenience.'],
                        ['q' => 'Do you have lockers or showers?', 'a' => 'Yes, lockers and showers are available for our guests.'],
                        ['q' => 'Is there a changing room?', 'a' => 'Yes, changing rooms are available.'],
                    ],
                ];
                @endphp

                @foreach ($categories as $category => $faqs)
                    <div class="mb-10">
                        <h2 class="font-bold text-2xl uppercase mb-4">{{ $category }}</h2>
                        <div class="space-y-3">
                            @foreach ($faqs as $i => $faq)
                                <details class="group border border-[#963D20]/30 rounded-2xl overflow-hidden">
                                    <summary class="flex items-center justify-between cursor-pointer px-6 py-4 font-semibold select-none">
                                        <span>{{ $faq['q'] }}</span>
                                        <svg class="w-5 h-5 shrink-0 transition-transform duration-300 group-open:rotate-45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                    </summary>
                                    <div class="px-6 pb-4 text-[#963D20]/80">
                                        {{ $faq['a'] }}
                                    </div>
                                </details>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </main>
</x-layouts.app>
