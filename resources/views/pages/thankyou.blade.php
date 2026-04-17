<x-layouts.app title="Thank You">
    <main class="-mt-24 bg-[#EBE1D5] relative z-10 h-dvh min-h-[1200px] overflow-hidden">
        <!-- image floating -->
        <img src="{{ asset('assets/image/food1.png') }}" alt="" class="float-image z-30 w-48 h-36 lg:w-96 lg:h-72 absolute -top-12 lg:-top-24 -right-6 lg:-right-12 object-cover rounded-3xl rotate-6" style="--float-rotate:6deg; animation-delay:0s" />
        <img src="{{ asset('assets/image/food3.png') }}" alt="" class="float-image z-30 w-20 h-16 lg:w-32 lg:h-24 absolute top-36 lg:top-52 right-24 lg:right-52 blur-sm object-cover rounded-3xl" style="--float-rotate:-12deg; animation-delay:1.5s" />
        <img src="{{ asset('assets/image/food2.png') }}" alt="" class="float-image z-30 w-40 h-36 lg:w-72 lg:h-64 absolute top-36 lg:top-64 -right-12 lg:-right-24 object-cover rounded-3xl" style="--float-rotate:-6deg; animation-delay:0.8s" />

        <img src="{{ asset('assets/image/food1.png') }}" alt="" class="float-image z-30 w-20 h-16 lg:w-32 lg:h-24 absolute top-4 lg:top-8 left-24 lg:left-52 blur-sm object-cover rounded-3xl" style="--float-rotate:12deg; animation-delay:2s" />
        <img src="{{ asset('assets/image/food4.png') }}" alt="" class="float-image z-30 w-48 h-36 lg:w-96 lg:h-72 absolute top-6 lg:top-12 -left-24 lg:-left-52 object-cover rounded-3xl" style="--float-rotate:-6deg; animation-delay:0.5s" />
        <img src="{{ asset('assets/image/food3.png') }}" alt="" class="float-image z-30 w-40 h-28 lg:w-72 lg:h-52 absolute top-48 lg:top-96 -left-6 lg:-left-12 object-cover rounded-3xl" style="--float-rotate:12deg; animation-delay:1.2s" />
        <!-- image floating -->

        <div class="bg-[#963D20] z-20 relative h-full" style="clip-path: polygon(0 80%, 50% 74%, 100% 80%, 100% 100%, 0 100%);">
        </div>
        <div class="absolute z-30 space-y-4 inset-0 h-full text-center text-lg">
            <div class="container flex flex-col justify-center h-full lg:gap-16">
                <div class="flex text-[#963D20] flex-col items-center justify-center space-y-4 text-center">
                    <h1 class="text-6xl font-parslay">Thank You!</h1>
                    <h3 class="font-semibold text-xl">For Your reservation</h3>
                </div>
                <div class="text-[#963D20] lg:text-base text-sm">
                    <p>
                        Thank you for your reservation.<br />
                        Kindly check your email inbox for the complete details and confirmation nof your booking.
                    </p>
                    <p>
                        Should you require any further assistance, pelase do not hesitate to contact us.
                    </p>
                </div>
            </div>
        </div>
    </main>
</x-layouts.app>