<?php

namespace App\Livewire\Website\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Services extends Component
{
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.website.pages.services');
    }
}
