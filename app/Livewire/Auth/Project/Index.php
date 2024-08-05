<?php

namespace App\Livewire\Auth\Project;

use App\ModalActions;
use Livewire\Component;

class Index extends Component
{
    use ModalActions;

    public function render()
    {
        return view('livewire.auth.project.index')
            ->extends('components.layouts.auth')
            ->section('content');
    }
}
