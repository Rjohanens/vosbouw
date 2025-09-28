<?php

namespace App\Livewire\Website\Pages;

use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Services extends Component
{
    #[Computed]
    public function services()
    {
        return Service::published()->get();
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.website.pages.services');
    }
}
