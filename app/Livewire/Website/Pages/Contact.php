<?php

namespace App\Livewire\Website\Pages;

use Livewire\Component;
use App\Mail\ContactFormMail;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\ContactForm;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public ContactForm $form;
    public bool $hasSuccessMessage = false;

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.website.pages.contact');
    }

    public function store()
    {
        $validated = $this->form->validate();

        Mail::to('info@vosbouwnoord.nl')
            ->send(
                new ContactFormMail(
                    $validated['firstName'],
                    $validated['lastName'],
                    $validated['email'],
                    $validated['phone'],
                    $validated['message'],
                )
            );

        $this->hasSuccessMessage = true;
        $this->form->reset();
    }
}
