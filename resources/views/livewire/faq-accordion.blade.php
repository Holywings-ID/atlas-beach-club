<div class="mt-8 space-y-4">
    @foreach ($faqs as $faq)
        <details class="group rounded-lg border">
            <summary class="cursor-pointer px-6 py-4 font-medium">{{ $faq['q'] }}</summary>
            <p class="px-6 pb-4 text-sm text-gray-600">{{ $faq['a'] }}</p>
        </details>
    @endforeach
</div>
