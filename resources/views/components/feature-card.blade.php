@props(['color' => '#333333', 'text' => '#ffffff', 'title', 'subtitle', 'description', 'image', 'link' => '#', 'id' => null])

<div @if($id) id="{{ $id }}" @endif style="background-color: {{ $color }}">
    <div class="container space-y-8 py-12" data-reveal>
        <div class="flex gap-8">
            <div class="w-1/5 font-semibold" style="color: {{ $text }}">{{ $title }}</div>
            <div class="w-4/5 text-4xl font-nineties" style="color: {{ $text }}">{{ $subtitle }}</div>
        </div>
        <div class="flex gap-8">
            <div class="w-1/5 h-auto border-l" style="border-color: {{ $text }}"></div>
            <div class="w-4/5 space-y-8 border-b pb-4" style="border-color: {{ $text }}">
                <div><img src="{{ asset($image) }}" alt="{{ $title }}" class="w-full h-[300px] lg:h-[500px] object-cover" /></div>
                <div class="flex lg:flex-row flex-col gap-8 lg:gap-24 justify-between">
                    <p style="color: {{ $text }}">{{ $description }}</p>
                    <a href="{{ $link }}" class="items-center font-semibold flex gap-3" style="color: {{ $text }}">Overview
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                            <path fill="{{ $text }}" d="M25 42c-9.4 0-17-7.6-17-17S15.6 8 25 8s17 7.6 17 17s-7.6 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.7-15-15-15" />
                            <path fill="{{ $text }}" d="m24.7 34.7l-1.4-1.4l8.3-8.3l-8.3-8.3l1.4-1.4l9.7 9.7z" />
                            <path fill="{{ $text }}" d="M16 24h17v2H16z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>