<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $message = '';
    public bool $submitted = false;

    protected array $rules = [
        'name'    => 'required|min:2',
        'email'   => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submit(): void
    {
        $this->validate();

        // TODO: send email / store in DB
        logger('Contact form submitted', [
            'name'    => $this->name,
            'email'   => $this->email,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'message']);
        $this->submitted = true;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
