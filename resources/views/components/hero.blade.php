@props([
    'title',
    'subtitle' => null,
    'bg',
    'ctaLabel' => null,
    'ctaRoute' => null,
])

<section class="hero" style="background-image: url('{{ $bg }}')">
    <div class="hero-content">
        <h1 class="text-5xl font-bold sm:text-6xl">{{ $title }}</h1>

        @if ($subtitle)
            <p class="mt-4 text-lg text-gray-200">{{ $subtitle }}</p>
        @endif

        @if ($ctaLabel && $ctaRoute)
            <a href="{{ route($ctaRoute) }}"
               class="mt-8 inline-block rounded-full bg-white px-8 py-3 font-semibold text-gray-900 transition hover:bg-gray-100">
                {{ $ctaLabel }}
            </a>
        @endif
    </div>
</section>
