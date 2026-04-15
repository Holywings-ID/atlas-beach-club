<div class="relative h-[80vh] min-h-[800px] -mt-24 overflow-hidden" x-data="{ current: 0, images: {{ Js::from($backgrounds) }} }" x-init="setInterval(() => current = (current + 1) % images.length, 5000)">
    <div class="h-full w-full relative">
        <template x-for="(img, index) in images" :key="index">
            <img :src="img" :alt="'{{ $title }} ' + (index + 1)" class="absolute inset-0 h-full w-full object-cover transition-transform duration-1000 ease-in-out" :style="'transform: translateX(' + ((index - current) * 100) + '%)'" />
        </template>
    </div>
    <div class="absolute inset-0 z-10 bg-black/50"></div>
    <div class="absolute flex flex-col justify-center z-20 w-full inset-0 p-3 text-center text-white">
        <img src="{{ $image }}" alt="{{ $title }}" class="mb-16 h-12 lg:h-16 mx-auto object-cover" />
    </div>
</div>