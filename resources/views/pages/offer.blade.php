<x-layouts.app title="Offers">
    <x-carousel-header
        :backgrounds="[
        asset('assets/image/header1.png'),
        asset('assets/image/header2.png'),
        asset('assets/image/header3.png'),
        asset('assets/image/header4.png'),
    ]"
        :image="asset('assets/logo/logo.png')"
        title="Offers" />

    <main>
        <section class="bg-[#EBE1D5] text-[#963D20] py-24">
            <div class="container flex lg:flex-row flex-col gap-12">
                <!-- category -->
                <div class="flex flex-col gap-4">
                    <button class="text-left font-semibold pb-2 text-xl border-[#963D20] border-b">
                        Offers
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
                <div class="space-y-12">
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8" data-reveal>
                        <img src="{{ asset('assets/image/highlight2.png') }}" alt="Cerita Rasa Nuansa Bali" class="h-full w-full lg:col-span-2 object-cover" />
                        <div class="flex flex-col lg:col-span-3">
                            <div class="grow space-y-4">
                                <p class="font-nineties text-5xl">Cerita Rasa Nuansa Bali</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="font-semibold">
                                    <p>Voucher Code</p>
                                    <p>ACR108</p>
                                </div>
                            </div>

                            <div class="">
                                <div class="grid grid-cols-2 border-b border-[#963D20] py-3">
                                    <div class="text-black">Categories</div>
                                    <div>Daybed Booking</div>
                                </div>
                                <div class="grid grid-cols-2 border-b border-[#963D20] py-3">
                                    <div class="text-black">Terms & Conditions</div>
                                    <ul class="list-disc">
                                        <li>Valid on regular days</li>
                                        <li>Maximum 2 person</li>
                                        <li>Minimum purchase IDR 500.000</li>
                                    </ul>
                                </div>
                                <div class="grid grid-cols-2 py-3">
                                    <div class="text-black">Valid</div>
                                    <div>1-31 October 2026</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8" data-reveal>
                        <img src="{{ asset('assets/image/highlight2.png') }}" alt="Cerita Rasa Nuansa Bali" class="h-full w-full lg:col-span-2 object-cover" />
                        <div class="flex flex-col lg:col-span-3">
                            <div class="grow space-y-4">
                                <p class="font-nineties text-5xl">Cerita Rasa Nuansa Bali</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="font-semibold">
                                    <p>Voucher Code</p>
                                    <p>ACR108</p>
                                </div>
                            </div>

                            <div class="">
                                <div class="grid grid-cols-2 border-b border-[#963D20] py-3">
                                    <div class="text-black">Categories</div>
                                    <div>Daybed Booking</div>
                                </div>
                                <div class="grid grid-cols-2 border-b border-[#963D20] py-3">
                                    <div class="text-black">Terms & Conditions</div>
                                    <ul class="list-disc">
                                        <li>Valid on regular days</li>
                                        <li>Maximum 2 person</li>
                                        <li>Minimum purchase IDR 500.000</li>
                                    </ul>
                                </div>
                                <div class="grid grid-cols-2 py-3">
                                    <div class="text-black">Valid</div>
                                    <div>1-31 October 2026</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layouts.app>