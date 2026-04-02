<?php

namespace App\Livewire;

use Livewire\Component;

class FaqAccordion extends Component
{
    public array $faqs = [
        ['q' => 'What are the check‑in and check‑out times?', 'a' => 'Check‑in is at 3 PM and check‑out is at 11 AM.'],
        ['q' => 'Is there complimentary Wi‑Fi?', 'a' => 'Yes, high‑speed Wi‑Fi is available throughout the property.'],
        ['q' => 'How do I cancel a reservation?', 'a' => 'You can cancel up to 48 hours before arrival for a full refund via the Reserve page or by contacting support.'],
    ];

    public function render()
    {
        return view('livewire.faq-accordion');
    }
}
