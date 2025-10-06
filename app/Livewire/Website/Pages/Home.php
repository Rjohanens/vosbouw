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
        return Project::featured()->with('category')->inRandomOrder()->limit(4)->get();
    }

    #[Computed]
    public function services()
    {
        return Service::featured()->limit(6)->get();
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.website.pages.home');
    }
}
