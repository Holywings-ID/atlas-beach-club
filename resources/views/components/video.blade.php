<div class="relative h-[120vh] min-h-[1100px] -mt-32">
    <div class="h-full w-full relative">
        <video autoplay muted loop playsinline class="h-full w-full object-cover">
            <source src="{{ $videoDesktop }}" type="video/mp4">
        </video>
    </div>
    <div class="lg:hidden">
        <video autoplay muted loop playsinline class="h-full w-full object-cover">
            <source src="{{ $videoMobile }}" type="video/mp4">
        </video>
    </div>
    <div class="absolute inset-0 h-[120vh] min-h-[1100px] w-dvw z-10 bg-gradient-to-b from-transparent via-transparent to-[#A74423]"></div>
    <div class="absolute flex flex-col justify-center z-20 w-full inset-0 p-3 text-center text-white sm:mt-5 md:mt-0">
        <img src="{{ $image }}" alt="{{ $title }}" class="mb-16 h-16 mx-auto object-cover" />
        <h4 class="text-xl sm:text-2xl font-parslay" data-reveal>{{ $subTitle }}</h4>
        <h1 class="text-4xl font-extrabold sm:text-6xl font-nineties" data-reveal>{{ $title }}</h1>
    </div>
</div>