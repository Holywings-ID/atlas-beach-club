<div class="relative h-[120vh] min-h-[1100px] -mt-32">
    <div class="h-full w-full relative">
        <img src="{{ $background }}" alt="{{ $title }}" class="h-full w-full object-cover" />
    </div>
    <div class="absolute inset-0 h-[120vh] min-h-[1100px] w-dvw z-10 bg-gradient-to-b from-transparent via-transparent to-[{{ ($color ?? '') === 'black' ? '#000000' : '#A74423' }}]"></div>
    <div class="absolute flex flex-col justify-center z-20 w-full inset-0 p-3 text-center text-white">
        @if(!empty($image))
        <img src="{{ $image }}" alt="{{ $title }}" class="mb-16 h-12 lg:h-16 mx-auto object-cover" />
        <h4 class="text-xl lg:text-2xl font-parslay" data-reveal>{{ $subTitle }}</h4>
        <h1 class="text-4xl font-extrabold lg:text-6xl font-nineties" data-reveal>{{ $title }}</h1>
        @else
        <h1 class="text-4xl font-extrabold lg:text-6xl font-nineties flex flex-col" data-reveal>{{ $title }}<span class="font-parslay text-xl">{{ $text }}</span>{{ $subTitle }}</h1>
        @endif
    </div>
</div>