<?php

namespace App\Livewire;

use Livewire\Component;

class ReservationForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $date = '';
    public string $guests = '';
    public string $notes = '';
    public bool $submitted = false;

    protected array $rules = [
        'name'   => 'required|min:2',
        'email'  => 'required|email',
        'phone'  => 'nullable|string',
        'date'   => 'required|date|after_or_equal:today',
        'guests' => 'required',
        'notes'  => 'nullable|string',
    ];

    public function submit(): void
    {
        $this->validate();

        // TODO: store reservation in DB / send confirmation email
        logger('Reservation submitted', [
            'name'   => $this->name,
            'email'  => $this->email,
            'phone'  => $this->phone,
            'date'   => $this->date,
            'guests' => $this->guests,
            'notes'  => $this->notes,
        ]);

        $submittedName = $this->name;
        $submittedGuests = $this->guests;
        $submittedDate = $this->date;

        $this->reset(['name', 'email', 'phone', 'date', 'guests', 'notes']);
        $this->submitted = true;

        session()->flash('reservation', [
            'name'   => $submittedName,
            'guests' => $submittedGuests,
            'date'   => $submittedDate,
        ]);
    }

    public function render()
    {
        return view('livewire.reservation-form');
    }
}
