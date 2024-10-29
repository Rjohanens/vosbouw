<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate(['required', 'string', 'min:1', 'max:255'])]
    public string $firstName = '';

    #[Validate(['required', 'string', 'min:1', 'max:255'])]
    public string $lastName = '';

    #[Validate(['required', 'email', 'max:254'])]
    public string $email = '';

    #[Validate(['required', 'string', 'min:1', 'max:10'])]
    public string $phone = '';

    #[Validate(['required', 'string', 'min:1', 'max:4096'])]
    public string $message = '';
}
