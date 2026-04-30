<x-layouts.app title="Event Reservation">
    <main class="bg-[#EBE1D5] -mt-24 pb-24 pt-32">
        <div class="flex justify-center mb-6">
            <a href={{ route('home') }}>
                <img src="{{ asset('assets/logo/logo-secondary.png') }}"
                    alt="logo"
                    class="w-24 lg:w-36 object-contain transition-all duration-300" />
            </a>
        </div>
        <div class="container mx-auto px-4 py-6">

            {{-- ── Event Hero ── --}}
            <div class="relative rounded overflow-hidden mb-6 lg:h-[500px]">
                <img
                    src="{{ asset('assets/image/' . ($eventImage ?? 'event1.png')) }}"
                    alt="{{ $eventName ?? 'Event' }}"
                    class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-8">
                    <div class="text-white">
                        <h1 class="text-4xl font-nineties mb-2">{{ $eventName ?? 'Event' }}</h1>
                        <p class="text-lg">{{ $eventDate ?? '' }}</p>
                    </div>
                </div>
            </div>

            <div class="border-b border-[#963D20] text-[#963D20] pb-4 flex gap-4 flex-col lg:flex-row lg:items-center lg:justify-between">
                <div class="flex gap-2">
                    <p>Atlas Beach Club <span>|</span></p>
                    <p>Event Reservation</p>
                </div>
                <div>
                    <p class="text-2xl font-semibold lg:text-right">{{ $eventName ?? 'Event' }}</p>
                    <p class="lg:text-right">{{ $eventDate ?? '' }}</p>
                </div>
            </div>

            <div class="py-8 flex flex-col lg:flex-row gap-8 lg:gap-12 border-b border-[#963D20]">
                <div class="w-full lg:w-[38%] space-y-0">
                    <div class="flex items-center justify-between py-3 border-b border-black/10">
                        <span class="text-black">Event</span>
                        <span class="text-[#963D20]">{{ $eventName ?? 'Event' }}</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-black/10">
                        <span class="text-black">Date</span>
                        <span class="text-[#963D20]">{{ $eventDate ?? '' }}</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-black/10">
                        <span class="text-black">Venue</span>
                        <span class="text-[#963D20]">Atlas Beach Club</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-black/10">
                        <span class="text-black">Type</span>
                        <span class="text-[#963D20]">Event</span>
                    </div>
                </div>

                <div class="w-full lg:w-[62%] space-y-6">
                    <div>
                        <h4 class="text-xl font-semibold text-[#963D20] mb-3">Event Details</h4>
                        <ul class="space-y-1.5">
                            <template x-for="b in ['Entry access to the event venue', 'Complimentary welcome drink upon arrival', 'Access to pool and beach area during the event', 'Live DJ performance and entertainment', 'Food and beverage available for purchase']" :key="b">
                                <li class="text-[#963D20] leading-[1.7] flex items-start gap-2">
                                    <span class="text-[#963D20] mt-0.5">•</span>
                                    <span x-text="b"></span>
                                </li>
                            </template>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-[#963D20] mb-3">Terms & Conditions</h4>
                        <ul class="space-y-1.5">
                            <template x-for="t in ['Reservation is non-refundable once confirmed', 'Valid ID is required upon entry', 'Dress code applies — smart casual or resort wear', 'Management reserves the right to refuse entry', 'Event schedule is subject to change without prior notice']" :key="t">
                                <li class="text-[#963D20] leading-[1.7] flex items-start gap-2">
                                    <span class="text-[#963D20] mt-0.5">•</span>
                                    <span x-text="t"></span>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- ── Table Selection ── --}}
            <div x-data="tableSelector()" class="mt-8">
                <h3 class="text-2xl font-nineties text-[#963D20] mb-4">Select Your Table</h3>

                {{-- Venue Tabs --}}
                <div class="flex gap-5 mb-6 overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                    <template x-for="(venue, idx) in venues" :key="venue">
                        <button @click="activeVenue = idx; selectedTable = null"
                            :class="activeVenue === idx ? 'text-[#963D20] font-medium' : 'text-[#8a7a6a] hover:text-[#963D20]'"
                            class="flex items-center gap-1.5 whitespace-nowrap transition-colors">
                            <span x-text="venue"></span>
                            <span class="w-5 h-5 rounded-full border border-current flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" :d="activeVenue === idx ? 'M19 9l-7 7-7-7' : 'M9 5l7 7-7 7'" />
                                </svg>
                            </span>
                        </button>
                    </template>
                </div>

                {{-- Zone Cards --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">
                    <template x-for="(table, idx) in tables[activeVenue]" :key="idx">
                        <div @click="selectedTable = idx"
                            :class="selectedTable === idx ? 'ring-2 ring-[#963D20]' : ''"
                            class="bg-[#f5ede4] border border-[#DDD0C2] overflow-hidden hover:-translate-y-1 hover:shadow-lg transition-all duration-200 cursor-pointer">
                            <img :src="table.img" :alt="table.zone"
                                class="w-full h-56 object-cover block" />
                            <div class="p-4">
                                <p class="text-[#963D20] text-2xl font-semibold font-nineties mb-0.5" x-text="venues[activeVenue]"></p>
                                <p class="text-[#8a7a6a] mb-1" x-text="table.zone"></p>
                                <p class="flex items-center gap-1.5 text-[#6a5a4a] mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Max <span x-text="table.capacity"></span> Adult</span>
                                </p>
                                <p class="text-[#963D20] text-xl font-semibold" x-text="'IDR ' + table.price.toLocaleString('id-ID')"></p>
                                <p class="text-[#8a7a6a] mt-0.5">Non-member: <span x-text="'IDR ' + table.nonmember.toLocaleString('id-ID')"></span></p>
                                <div class="mt-3">
                                    <span x-show="selectedTable === idx" class="inline-flex items-center gap-1.5 bg-[#963D20] text-[#EBE1D5] font-medium tracking-wide px-4 py-2 transition-colors">
                                        ✓ Selected
                                    </span>
                                    <span x-show="selectedTable !== idx" class="inline-flex items-center gap-1.5 border border-[#963D20] text-[#963D20] font-medium tracking-wide px-4 py-2 transition-colors hover:bg-[#963D20] hover:text-[#EBE1D5]">
                                        Select
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                {{-- No table selected message --}}
                <div x-show="selectedTable === null" class="text-center text-[#8a7a6a] py-8 border-t border-[#963D20]">
                    <p class="text-lg">Please select a table above to continue with your reservation.</p>
                </div>
            </div>

            <div x-data x-show="$store.eventTable.selected" x-transition class="flex flex-col lg:flex-row gap-12 mt-12">
                <div class="lg:w-1/2">
                    <div class="grid grid-cols-2 gap-x-6 gap-y-6">

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">Name</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <input type="text" placeholder="Ex. John Doe" class="bg-transparent outline-none w-full text-[#963D20] placeholder-[#963D20]/50" />
                            </div>
                        </div>

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">Date of Birth</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>
                                <input type="date" class="bg-transparent outline-none w-full text-[#963D20] placeholder-[#963D20]/50 appearance-none" />
                            </div>
                        </div>

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">Phone</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z" />
                                </svg>
                                <input type="tel" placeholder="Ex. 08** **** ****" class="bg-transparent outline-none w-full text-[#963D20] placeholder-[#963D20]/50" />
                            </div>
                        </div>

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">Email</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                                <input type="email" placeholder="Ex. atlas@gmail.com" class="bg-transparent outline-none w-full text-[#963D20] placeholder-[#963D20]/50" />
                            </div>
                        </div>

                        <div class="lg:col-span-1 col-span-2">
                            <label class="block font-semibold mb-2 text-black">Nationality</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" />
                                    <line x1="4" y1="22" x2="4" y2="15" />
                                </svg>
                                <select class="bg-transparent outline-none w-full text-[#963D20] cursor-pointer appearance-none">
                                    <option value="" disabled selected>Select Nationality</option>
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
                            <label class="block font-semibold mb-2 text-black">Number of Guests</label>
                            <div class="flex items-center border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <select class="bg-transparent outline-none w-full text-[#963D20] cursor-pointer appearance-none">
                                    <option value="" disabled selected>Select Guests</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label class="block font-semibold mb-2 text-black">Notes</label>
                            <div class="flex items-start border border-[#963D20] rounded-full px-4 py-3 bg-transparent gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#963D20] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                                <input type="text" placeholder="Ex. Any special requests for the event" class="bg-transparent outline-none w-full text-[#963D20] placeholder-[#963D20]/50" />
                            </div>
                        </div>

                    </div>
                </div>

                <div class="lg:w-1/2 bg-white shadow-xl p-8 text-[#963D20]">
                    <h2 class="text-2xl mb-1">Your Event Reservation</h2>
                    <p class="mb-4 leading-relaxed">
                        Your event reservation summary will show up here after you fill up your details
                    </p>

                    <div class="flex flex-col gap-2.5 mb-4">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            <span class="font-medium">Atlas Beach Club</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            <span>{{ $eventDate ?? '' }}</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path d="M9 19V6l12-3v13" />
                                <circle cx="6" cy="18" r="3" />
                                <circle cx="18" cy="16" r="3" />
                            </svg>
                            <span>{{ $eventName ?? 'Event' }}</span>
                        </div>
                    </div>

                    <hr class="border-[#963D20] mb-3" />
                    <p class="text-center text-xl mb-3">{{ $eventName ?? 'Event' }}</p>

                    <div class="mb-3">
                        <label class="block text-black mb-1.5">Affiliator Code</label>
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

                    <div class="mb-5">
                        <label class="block text-black mb-1.5">Voucher/Offer Code</label>
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

                    <h3 class="text-3xl font-nineties mb-3">Summary</h3>
                    <hr class="border-[#963D20] mb-3" />

                    <div class="flex flex-col gap-2.5 mb-3">
                        <div class="flex justify-between">
                            <span>Subtotal</span>
                            <span class="font-medium">IDR. 0</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Tax</span>
                            <span>IDR. 0</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Service</span>
                            <span>IDR. 0</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Discount</span>
                            <span>IDR. 0</span>
                        </div>
                    </div>

                    <hr class="border-[#963D20] mb-3" />

                    <div class="flex justify-between items-center mb-3">
                        <span class="font-semibold">Total Payment</span>
                        <span class="text-lg font-bold">IDR 0</span>
                    </div>

                    <hr class="border-[#963D20] mb-4" />

                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" class="mt-0.5 w-5 h-5 shrink-0 accent-[#963D20] cursor-pointer" />
                        <span class="text-[#963D20]">
                            I read and agree with
                            <a href="#" class="font-semibold underline">Terms & Conditions &amp; Privacy Policy</a>
                        </span>
                    </label>

                    <button class="w-full flex items-center justify-center gap-2 bg-[#963D20] hover:brightness-110 text-white font-medium mt-5 py-3.5 rounded-full transition-colors">
                        Checkout
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </main>
    @push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('eventTable', { selected: false, venue: '', zone: '', price: 0 });
        });

        function tableSelector() {
            return {
                activeVenue: 0,
                selectedTable: null,
                venues: ['Copacabana', 'Surf Side', 'Sultan', 'Backstage'],
                tables: [
                    [
                        { zone: 'Left Side A', capacity: 3, price: 4000000, nonmember: 15000000, img: '{{ asset("assets/image/pool1.png") }}' },
                        { zone: 'Right Side A', capacity: 6, price: 6000000, nonmember: 15000000, img: '{{ asset("assets/image/pool1.png") }}' },
                        { zone: 'Back', capacity: 12, price: 10000000, nonmember: 15000000, img: '{{ asset("assets/image/pool1.png") }}' },
                    ],
                    [
                        { zone: 'Front Row', capacity: 4, price: 5000000, nonmember: 12000000, img: '{{ asset("assets/image/pool1.png") }}' },
                        { zone: 'VIP Section', capacity: 8, price: 8000000, nonmember: 18000000, img: '{{ asset("assets/image/pool1.png") }}' },
                    ],
                    [
                        { zone: 'Main Hall', capacity: 10, price: 7000000, nonmember: 14000000, img: '{{ asset("assets/image/pool1.png") }}' },
                        { zone: 'Balcony', capacity: 6, price: 9000000, nonmember: 16000000, img: '{{ asset("assets/image/pool1.png") }}' },
                    ],
                    [
                        { zone: 'Lounge A', capacity: 5, price: 5500000, nonmember: 13000000, img: '{{ asset("assets/image/pool1.png") }}' },
                        { zone: 'Lounge B', capacity: 8, price: 7500000, nonmember: 15000000, img: '{{ asset("assets/image/pool1.png") }}' },
                    ],
                ],
                init() {
                    this.$watch('selectedTable', (val) => {
                        if (val !== null) {
                            const t = this.tables[this.activeVenue][val];
                            Alpine.store('eventTable', { selected: true, venue: this.venues[this.activeVenue], zone: t.zone, price: t.price });
                        } else {
                            Alpine.store('eventTable').selected = false;
                        }
                    });
                },
            };
        }
    </script>
    @endpush
</x-layouts.app>
