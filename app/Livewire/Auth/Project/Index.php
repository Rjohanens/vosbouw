<?php

namespace App\Livewire\Auth\Project;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.project.index');
    }
}
