<x-layouts.app title="Menus">
    <x-carousel-header
        :backgrounds="[
        asset('assets/image/header1.png'),
        asset('assets/image/header2.png'),
        asset('assets/image/header3.png'),
        asset('assets/image/header4.png'),
    ]"
        :image="asset('assets/logo/logo.png')"
        title="Menus" />

    <main>
        <section class="bg-[#EBE1D5] text-[#963D20] py-24">
            <div class="container flex lg:flex-row flex-col gap-12" x-data="{ selected: 'food' }">
                <!-- category -->
                <div class="flex flex-col gap-4">
                    <button @click="selected = 'food'" :class="selected === 'food' ? 'text-black' : 'text-[#963D20]'" class="text-left font-semibold pb-2 whitespace-nowrap text-xl border-[#963D20] border-b">
                        Food
                    </button>
                    <button @click="selected = 'beverage'" :class="selected === 'beverage' ? 'text-black' : 'text-[#963D20]'" class="text-left font-semibold pb-2 whitespace-nowrap text-xl border-[#963D20] border-b">
                        Beverage
                    </button>
                    <button @click="selected = 'shisha'" :class="selected === 'shisha' ? 'text-black' : 'text-[#963D20]'" class="text-left font-semibold pb-2 whitespace-nowrap text-xl border-[#963D20] border-b">
                        Shisha & Cigars
                    </button>
                    <a href="{{ route('reserve') }}" class="inline-flex items-center gap-2 text-sm bg-[#963D20] text-white uppercase rounded-full px-6 py-2.5 hover:scale-110 transition">
                        Reserve
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                                <path fill="#ffffff" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                                <path fill="#ffffff" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                                <path fill="#ffffff" d="M16 24h17v2H16z" />
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- content -->
                <div class="">
                    <img x-show="selected === 'food'" src="{{ asset('assets/image/menu.png') }}" alt="Food Menu" class="h-full w-full object-contain" />
                    <img x-show="selected === 'beverage'" src="{{ asset('assets/image/menu.png') }}" alt="Beverage Menu" class="h-full w-full object-contain" />
                    <img x-show="selected === 'shisha'" src="{{ asset('assets/image/menu.png') }}" alt="Shisha & Cigars Menu" class="h-full w-full object-contain" />
                </div>
            </div>
        </section>
    </main>
</x-layouts.app>