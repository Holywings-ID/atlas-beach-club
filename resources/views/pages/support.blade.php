<x-layouts.app title="Support">

    <x-hero
        title="Support"
        subtitle="We're here to help"
        bg="https://placehold.co/1920x800/2d4059/ffffff?text=Support"
    />

    <main>
        <section class="page-section" data-reveal>
            <h2 class="text-3xl font-bold">Frequently Asked Questions</h2>
            <livewire:faq-accordion />
        </section>

        <section class="page-section border-t" data-reveal>
            <h2 class="text-3xl font-bold">Contact Us</h2>
            <livewire:contact-form />
        </section>
    </main>

</x-layouts.app>
