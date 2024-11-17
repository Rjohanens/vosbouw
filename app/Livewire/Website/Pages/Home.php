<?php

namespace App\Livewire\Website\Pages;

use App\Livewire\Forms\ContactForm;
use App\Mail\ContactConfirmationMail;
use App\Mail\ContactFormMail;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    public ContactForm $form;

    #[Computed]
    public function projects()
    {
        return Project::with('category')->take(6)->get();
    }

    #[Computed]
    public function services()
    {
        return Service::all();
    }

    public function submitContactForm()
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

        // Mail::to($this->form->email)
        //     ->send(new ContactConfirmationMail());


        session()->flash('success-message', 'Uw bericht is succesvol verzonden!');
        $this->form->reset();
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.website.pages.home');
    }
}
