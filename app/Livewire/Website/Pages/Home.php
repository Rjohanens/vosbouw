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
        return Project::with('category')->get();
    }

    #[Computed]
    public function services()
    {
        return Service::all();
    }

    public function submitContactForm()
    {
        $this->form->validate();

        Mail::to('info@vosbouwnoord.nl')
            ->send(new ContactFormMail($this->form));

        Mail::to($this->form->email)
            ->send(new ContactConfirmationMail($this->form));
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.website.pages.home');
    }
}
