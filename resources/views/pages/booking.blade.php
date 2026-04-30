<x-layouts.app title="Booking">
    <main class="bg-[#EBE1D5] -mt-24 pb-24 pt-32">
        <div class="flex justify-center mb-6">
            <a href={{ route('home') }}>
                <img src="{{ asset('assets/logo/logo-secondary.png') }}"
                    alt="logo"
                    class="w-24 lg:w-36 object-contain transition-all duration-300" />
            </a>
        </div>
        <div class="container mx-auto px-4 py-6">

            {{-- ── Map ── --}}
            <div class="relative rounded overflow-hidden mb-6 lg:h-[600px]">
                <img
                    src="{{ asset('assets/image/PHOTO.png') }}"
                    alt="Resort Map"
                    class="w-full h-full object-cover" />
            </div>

            <div class="border-b border-[#963D20] text-[#963D20] pb-4 flex gap-4 flex-col lg:flex-row lg:items-center lg:justify-between">
                <div class="flex gap-2">
                    <p>Atlas Beach Club <span>|</span></p>
                    <p>Copacabana</p>
                    <p>(<span>Left Side A</span>)</p>
                </div>
                <div x-data="calendarPicker()" class="relative shrink-0 ml-4">
                    {{-- Trigger Button --}}
                    <button @click="open = !open" class="flex items-center gap-1.5 bg-[#963D20] hover:bg-[#7A3118] text-[#EBE1D5] font-medium tracking-wide px-3 py-2 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span x-text="selected ? selected : 'Calendar'"></span>
                    </button>

                    {{-- Modal Overlay --}}
                    <div x-show="open" @click.outside="open = false" x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4">
                        <div class="bg-[#EBE1D5] rounded-xl border border-[#D4C8B8] shadow-2xl w-full max-w-3xl overflow-hidden flex relative"
                            @click.stop>

                            {{-- Left: Calendar --}}
                            <div class="flex-1 p-6 border-r border-[#D4C8B8]">
                                {{-- Month Header --}}
                                <div class="flex items-center justify-center gap-4 mb-5">
                                    <button @click="prevMonth()"
                                        class="w-7 h-7 rounded-full border border-[#963D20] text-[#963D20] hover:bg-[#963D20] hover:text-[#EBE1D5] flex items-center justify-center transition-colors">
                                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </button>
                                    <span class="text-[#963D20] font-medium text-base min-w-[130px] text-center" x-text="monthLabel"></span>
                                    <button @click="nextMonth()"
                                        class="w-7 h-7 rounded-full border border-[#963D20] text-[#963D20] hover:bg-[#963D20] hover:text-[#EBE1D5] flex items-center justify-center transition-colors">
                                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>

                                {{-- Day Grid --}}
                                <div class="grid grid-cols-7 text-center text-sm">
                                    <template x-for="d in ['MON','TUE','WED','THU','FRI','SAT','SUN']">
                                        <span x-text="d" class="py-1 text-[10px] font-medium text-[#8a7060]"></span>
                                    </template>
                                    <template x-for="blank in startDay">
                                        <span class="aspect-square bg-[#E0D4C4] rounded-md"></span>
                                    </template>
                                    <template x-for="day in daysInMonth">
                                        <button @click="selectDate(day)"
                                            :class="isSelected(day)
                                    ? 'bg-[#963D20] text-[#EBE1D5]'
                                    : hasEvent(day)
                                        ? 'bg-[#963D20]/10 text-[#4a3828] hover:bg-[#963D20]/20'
                                        : 'text-[#4a3828] hover:bg-[#963D20]/10'"
                                            class="aspect-square flex flex-col items-center justify-center rounded-md text-sm transition-colors cursor-pointer relative">
                                            <span x-text="day"></span>
                                            <span x-show="hasEvent(day)"
                                                :class="isSelected(day) ? 'bg-[#EBE1D5]' : 'bg-[#963D20]'"
                                                class="w-1 h-1 rounded-full mt-0.5"></span>
                                        </button>
                                    </template>
                                    <template x-for="blank in trailingDays">
                                        <span class="aspect-square bg-[#E0D4C4] rounded-md"></span>
                                    </template>
                                </div>
                            </div>

                            {{-- Right: Events Panel --}}
                            <div class="w-72 mt-5 p-6 flex flex-col gap-3 overflow-y-auto max-h-[520px]">
                                <div class="flex items-center justify-between pb-2 border-b border-[#D4C8B8]">
                                    <span class="text-[#4a3828] font-medium" x-text="showingAll ? 'Upcoming Events' : 'Events'"></span>
                                    <span x-show="displayEvents.length > 0"
                                        class="text-xs text-[#963D20] bg-[#963D20]/10 px-2 py-0.5 rounded-full"
                                        x-text="displayEvents.length + ' Event' + (displayEvents.length > 1 ? 's' : '')"></span>
                                </div>

                                <p class="text-xs text-[#7a6858]" x-text="showingAll ? 'All upcoming events' : selectedDateLabel"></p>

                                <template x-if="displayEvents.length === 0">
                                    <p class="text-sm text-[#8a7060]" x-text="showingAll ? 'No upcoming events.' : 'No events scheduled for this date.'"></p>
                                </template>

                                <template x-for="event in displayEvents" :key="event.id">
                                    <div class="flex gap-3 bg-[#F5EEE4] border border-[#D4C8B8] rounded-lg overflow-hidden">
                                        <img :src="event.image" :alt="event.name"
                                            class="w-16 h-20 object-cover flex-shrink-0 bg-[#D4C8B8]"
                                            onerror="this.style.background='#D4C8B8'">
                                        <div class="py-2 pr-3 flex flex-col justify-center gap-1">
                                            <p class="text-sm font-medium text-[#4a3828]" x-text="event.name"></p>
                                            <p class="text-xs text-[#7a6858] flex items-center gap-1">
                                                <svg class="w-3 h-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" />
                                                    <line x1="16" y1="2" x2="16" y2="6" />
                                                    <line x1="8" y1="2" x2="8" y2="6" />
                                                    <line x1="3" y1="10" x2="21" y2="10" />
                                                </svg>
                                                <span x-text="event.date"></span>
                                            </p>
                                            <p class="text-xs text-[#7a6858] flex items-center gap-1">
                                                <svg class="w-3 h-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <polyline points="12 6 12 12 16 14" />
                                                </svg>
                                                <span x-text="event.time"></span>
                                            </p>
                                        </div>
                                    </div>
                                </template>
                            </div>

                            {{-- Close Button --}}
                            <button @click="open = false"
                                class="absolute top-3 right-3 w-7 h-7 flex items-center justify-center text-[#7a6858] hover:text-[#963D20] transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-2xl font-semibold lg:text-right">Friday</p>
                    <p class="lg:text-right">26 February 2026</p>
                </div>
                <div>
                    <p class="text-2xl font-semibold lg:text-right">IDR 4.000.000</p>
                    <p class="lg:text-right">Max 3 Adult</p>
                </div>
            </div>

            <div class="py-8 flex flex-col lg:flex-row gap-8 lg:gap-12 border-b border-[#963D20]">
                <div class="w-full lg:w-[38%] space-y-0">
                    <div class="flex items-center justify-between py-3 border-b border-black/10">
                        <span class="text-black">{{ __('nav.check_in') }}</span>
                        <span class="text-[#963D20]">15:30</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-black/10">
                        <span class="text-black">{{ __('nav.check_out') }}</span>
                        <span class="text-[#963D20]">12:00</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-black/10">
                        <span class="text-black">{{ __('nav.occupancy') }}</span>
                        <span class="text-[#963D20]">Maximum 4</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-black/10">
                        <span class="text-black">{{ __('nav.type') }}</span>
                        <span class="text-[#963D20]">Daybed</span>
                    </div>
                </div>

                {{-- Right Column: Benefits + T&C --}}
                <div class="w-full lg:w-[62%] space-y-6">
                    <div>
                        <h4 class="text-xl font-semibold text-[#963D20] mb-3">{{ __('nav.daybed_benefits') }}</h4>
                        <ul class="space-y-1.5">
                            <template x-for="b in ['One-time picnic by the beach for 2 persons (min.3 nights stay) (Valid for 14.00-16.00 session)', 'One-time flower bath upon arrival', 'One-time in-room breakfast', '10% Spa discount on in-room treatments and Spa on the Rocks treatments', '10% Discount on food and beverages including Rock Bar, BALI']" :key="b">
                                <li class="text-[#963D20] leading-[1.7] flex items-start gap-2">
                                    <span class="text-[#963D20] mt-0.5">•</span>
                                    <span x-text="b"></span>
                                </li>
                            </template>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-[#963D20] mb-3">{{ __('nav.terms_conditions') }}</h4>
                        <ul class="space-y-1.5">
                            <template x-for="t in ['Package offer requires a minimum 2 nights stay.', 'Package rates are subject to 21% government tax and service charges', 'Package offer only valid for direct bookings through our website', 'Credit card and deposit are required upon arrival to complete the check-in process', 'All benefit inclusions are for 2 (two) persons per room', 'All reservations are subject to room availability', 'This offer cannot be combined with other promotions or discounts']" :key="t">
                                <li class="text-[#963D20] leading-[1.7] flex items-start gap-2">
                                    <span class="text-[#963D20] mt-0.5">•</span>
                                    <span x-text="t"></span>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-12 mt-12">
                <div class="lg:w-1/2">
                    <div class="grid grid-cols-2 gap-x-6 gap-y-6">

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">{{ __('pages.name') }}</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <input type="text" placeholder="Ex. John Doe" class="bg-transparent outline-none w-full text-[#963D20] placeholder-[#963D20]/50 " />
                            </div>
                        </div>

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">{{ __('pages.date_of_birth') }}</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>
                                <input type="date" placeholder="mm/dd/yy" class="bg-transparent outline-none w-full text-[#963D20] placeholder-[#963D20]/50  appearance-none" />
                            </div>
                        </div>

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">{{ __('pages.phone') }}</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z" />
                                </svg>
                                <input type="tel" placeholder="Ex. 08** **** ****" class="bg-transparent outline-none w-full text-[#963D20] placeholder-[#963D20]/50 " />
                            </div>
                        </div>

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">{{ __('pages.email') }}</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                                <input type="email" placeholder="Ex. atlas@gmail.com" class="bg-transparent outline-none w-full text-[#963D20] placeholder-[#963D20]/50 " />
                            </div>
                        </div>

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">{{ __('pages.nationality') }}</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" />
                                    <line x1="4" y1="22" x2="4" y2="15" />
                                </svg>
                                <select class="bg-transparent outline-none w-full text-[#963D20] cursor-pointer appearance-none">
                                    <option value="" disabled selected>{{ __('pages.select_nationality') }}</option>
                                    <option>Indonesian</option>
                                    <option>Malaysian</option>
                                    <option>Singaporean</option>
                                    <option>Australian</option>
                                    <option>American</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">{{ __('pages.eta') }}</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <circle cx="12" cy="12" r="9" />
                                    <polyline points="12 7 12 12 15 15" />
                                </svg>
                                <select class="bg-transparent outline-none w-full text-[#963D20] cursor-pointer appearance-none">
                                    <option>07:00 AM</option>
                                    <option>08:00 AM</option>
                                    <option>09:00 AM</option>
                                    <option>10:00 AM</option>
                                    <option>11:00 AM</option>
                                    <option>12:00 PM</option>
                                    <option>01:00 PM</option>
                                    <option>02:00 PM</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label class="block font-semibold mb-2 text-black">{{ __('pages.notes') }}</label>
                            <div class="flex items-start border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                                <input type="text" placeholder="Ex. I want to know the rate for private event" class="bg-transparent outline-none w-full text-[#963D20] placeholder-[#963D20]/50 " />
                            </div>
                        </div>

                    </div>
                </div>

                <div class="lg:w-1/2 bg-white shadow-xl p-8 text-[#963D20]">
                    <h2 class="text-2xl mb-1">{{ __('pages.your_booking_order') }}</h2>
                    <p class=mb-4 leading-relaxed">
                        Your order booking summary will show up here after you fill up your visit plan
                    </p>

                    <!-- Booking Details -->
                    <div class="flex flex-col gap-2.5 mb-4">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4  shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            <span class=" font-medium ">Atlas Beach Club</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4  shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            <span class=" ">Friday, 27 February 2026</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4  shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <circle cx="12" cy="7" r="4" />
                                <path d="M4 21v-1a8 8 0 0116 0v1" />
                            </svg>
                            <span class=" ">Max 3 Pax</span>
                        </div>
                    </div>

                    <hr class="border-[#963D20] mb-3" />
                    <p class="text-center text-xl  mb-3">Copacabana – Left Side 1A</p>

                    <!-- Affiliator Code -->
                    <div class="mb-3">
                        <label class="block text-black mb-1.5">{{ __('pages.affiliator_code') }}</label>
                        <div class="flex items-center">
                            <input type="text" placeholder="Ex. ATLAS123"
                                class="flex-1 px-4 py-2.5 rounded-l-full border-2 border-[#963D20] bg-transparent text-sm focus:outline-none transition-colors" />
                            <button class="flex items-center gap-1.5 bg-[#963D20] text-white font-medium px-4 py-2.5 transition-colors shrink-0">
                                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5833 0H9.69515C9.30564 0 8.76124 0.238931 8.48603 0.530114L0.413407 9.07764C-0.137802 9.66062 -0.137802 10.6164 0.413407 11.1987L6.42413 17.5628C6.97409 18.1458 7.87593 18.1458 8.42672 17.5622L16.4993 9.01598C16.7743 8.72484 17 8.14749 17 7.73594V1.50008C17 0.675222 16.3623 0 15.5833 0ZM12.7498 6.00009C11.9674 6.00009 11.3331 5.32777 11.3331 4.50002C11.3331 3.6709 11.9674 2.99994 12.7498 2.99994C13.5322 2.99994 14.1667 3.6709 14.1667 4.50002C14.1668 5.32777 13.5322 6.00009 12.7498 6.00009Z" fill="#EEECE3" />
                                </svg>

                                Apply
                            </button>
                        </div>
                    </div>

                    <!-- Voucher Code -->
                    <div class="mb-5">
                        <label class="block text-black mb-1.5">{{ __('pages.voucher_offer_code') }}</label>
                        <div class="flex items-center">
                            <input type="text" placeholder="Ex. ATLAS123"
                                class="flex-1 px-4 py-2.5 rounded-l-full border-2 border-[#963D20] bg-transparent text-sm focus:outline-none transition-colors" />
                            <button class="flex items-center gap-1.5 bg-[#963D20] text-white font-medium px-4 py-2.5 transition-colors shrink-0">
                                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5833 0H9.69515C9.30564 0 8.76124 0.238931 8.48603 0.530114L0.413407 9.07764C-0.137802 9.66062 -0.137802 10.6164 0.413407 11.1987L6.42413 17.5628C6.97409 18.1458 7.87593 18.1458 8.42672 17.5622L16.4993 9.01598C16.7743 8.72484 17 8.14749 17 7.73594V1.50008C17 0.675222 16.3623 0 15.5833 0ZM12.7498 6.00009C11.9674 6.00009 11.3331 5.32777 11.3331 4.50002C11.3331 3.6709 11.9674 2.99994 12.7498 2.99994C13.5322 2.99994 14.1667 3.6709 14.1667 4.50002C14.1668 5.32777 13.5322 6.00009 12.7498 6.00009Z" fill="#EEECE3" />
                                </svg>

                                Apply
                            </button>
                        </div>
                    </div>

                    <!-- Summary -->
                    <h3 class="text-3xl font-nineties mb-3">{{ __('pages.summary') }}</h3>
                    <hr class="border-[#963D20] mb-3" />

                    <div class="flex flex-col gap-2.5 mb-3">
                        <div class="flex justify-between">
                            <span class=" ">{{ __('pages.subtotal') }}</span>
                            <span class=" font-medium ">IDR. 4.000.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class=" ">{{ __('pages.tax') }}</span>
                            <span class=" ">IDR. 0</span>
                        </div>
                        <div class="flex justify-between">
                            <span class=" ">{{ __('pages.service') }}</span>
                            <span class=" ">IDR. 0</span>
                        </div>
                        <div class="flex justify-between">
                            <span class=" ">{{ __('pages.discount') }}</span>
                            <span class=" ">IDR. 0</span>
                        </div>
                    </div>

                    <hr class="border-[#963D20] mb-3" />

                    <div class="flex justify-between items-center mb-3">
                        <span class=" font-semibold ">{{ __('pages.total_payment') }}</span>
                        <span class="text-lg font-bold ">IDR 4.000.000</span>
                    </div>

                    <hr class="border-[#963D20] mb-4" />

                    <!-- T&C -->
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" class="mt-0.5 w-5 h-5 shrink-0 accent-[#963D20] cursor-pointer" />
                        <span class=" text-[#963D20]">
                            {{ __('pages.agree_terms') }}
                            <a href="#" class="font-semibold underline">{{ __('pages.terms_privacy') }}</a>
                        </span>
                    </label>

                    <!-- Checkout -->
                    <button class="w-full flex items-center justify-center gap-2 bg-[#963D20] hover:brightness-110 text-white font-medium mt-5 py-3.5 rounded-full transition-colors">
                        Checkout
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </button>

                </div>
            </div>
        </div>
        </div>
    </main>

    @push('scripts')
    <script>
        function calendarPicker() {
            return {
                open: false,
                selected: null,
                currentYear: new Date().getFullYear(),
                currentMonth: new Date().getMonth(),
                selectedDayEvents: [],
                selectedDateLabel: '',
                showingAll: true,

                events: {
                    '2026-04-24': [{
                        id: 1,
                        name: 'Atlas Opening Night',
                        date: 'Thursday, 24 April 2026',
                        time: '20:00 - 02:00',
                        image: '/images/events/atlas.jpg'
                    }],
                    '2026-05-05': [{
                        id: 2,
                        name: 'French Montana',
                        date: 'Tuesday, 05 May 2026',
                        time: '13:00 - 00:00',
                        image: '/images/events/french-montana.jpg'
                    }],
                    '2026-05-14': [{
                            id: 3,
                            name: 'Backyard Vol.1 – DJ Talisha',
                            date: 'Thursday, 14 May 2026',
                            time: '12:00 - 00:00',
                            image: '/images/events/talisha.jpg'
                        },
                        {
                            id: 4,
                            name: 'Late Night Grooves',
                            date: 'Thursday, 14 May 2026',
                            time: '23:00 - 04:00',
                            image: '/images/events/grooves.jpg'
                        },
                    ],
                },

                get monthLabel() {
                    return new Date(this.currentYear, this.currentMonth, 1)
                        .toLocaleDateString('en-US', {
                            month: 'long',
                            year: 'numeric'
                        }).toUpperCase();
                },

                get startDay() {
                    let day = new Date(this.currentYear, this.currentMonth, 1).getDay();
                    return day === 0 ? 6 : day - 1; // Monday-first offset
                },

                get daysInMonth() {
                    return new Date(this.currentYear, this.currentMonth + 1, 0).getDate();
                },

                get trailingDays() {
                    const total = this.startDay + this.daysInMonth;
                    const rem = total % 7;
                    return rem === 0 ? 0 : 7 - rem;
                },

                toKey(day) {
                    return `${this.currentYear}-${String(this.currentMonth + 1).padStart(2,'0')}-${String(day).padStart(2,'0')}`;
                },

                isSelected(day) {
                    return this.selected === this.toKey(day);
                },

                get upcomingEvents() {
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    return Object.entries(this.events)
                        .filter(([key]) => new Date(key + 'T00:00:00') >= today)
                        .sort(([a], [b]) => a.localeCompare(b))
                        .flatMap(([, evts]) => evts);
                },

                get displayEvents() {
                    return this.showingAll ? this.upcomingEvents : this.selectedDayEvents;
                },

                hasEvent(day) {
                    return !!this.events[this.toKey(day)];
                },

                selectDate(day) {
                    const key = this.toKey(day);
                    if (this.selected === key) {
                        this.selected = null;
                        this.showingAll = true;
                        this.selectedDayEvents = [];
                        this.selectedDateLabel = '';
                        return;
                    }
                    this.selected = key;
                    this.showingAll = false;
                    this.selectedDayEvents = this.events[key] || [];
                    const d = new Date(this.currentYear, this.currentMonth, day);
                    this.selectedDateLabel = d.toLocaleDateString('en-US', {
                        weekday: 'long',
                        day: '2-digit',
                        month: 'long',
                        year: 'numeric'
                    });
                },

                prevMonth() {
                    if (this.currentMonth === 0) {
                        this.currentMonth = 11;
                        this.currentYear--;
                    } else this.currentMonth--;
                },

                nextMonth() {
                    if (this.currentMonth === 11) {
                        this.currentMonth = 0;
                        this.currentYear++;
                    } else this.currentMonth++;
                },
            }
        }
    </script>
    @endpush

</x-layouts.app>