<?php

namespace App\Livewire\Website\Pages;

use App\Models\Service;
use Livewire\Component;

class ServiceShow extends Component
{
    public Service $service;

    public function render()
    {
        return view('livewire.website.pages.service-show');
    }
}
