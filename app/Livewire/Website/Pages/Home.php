<?php

namespace App\Livewire\Website\Pages;

use App\Models\Project;
use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
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

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.website.pages.home');
    }
}
