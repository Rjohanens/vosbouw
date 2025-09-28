<?php

namespace App\Livewire\Website\Pages;

use App\Livewire\Forms\ContactForm;
use App\Mail\ContactFormMail;
use App\Models\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Component;

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

        Mail::to('vos.dienstverlening@outlook.com')
            ->send(
                new ContactFormMail(
                    $validated['firstName'],
                    $validated['lastName'],
                    $validated['email'],
                    $validated['phone'],
                    $validated['message'],
                )
            );

        Mail::to('rickjohannes@hotmail.nl')
            ->send(
                new ContactFormMail(
                    $validated['firstName'],
                    $validated['lastName'],
                    $validated['email'],
                    $validated['phone'],
                    $validated['message'],
                )
            );

        ContactRequest::create([
            'first_name' => $validated['firstName'],
            'last_name' => $validated['lastName'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
        ]);

        $this->dispatch(
            'open-toast',
            title: 'Contactformulier verzonden',
            message: 'Bedankt voor uw bericht. We nemen zo snel mogelijk contact met u op.',
            type: 'success',
        );

        $this->form->reset();
    }
}
