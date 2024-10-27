<?php

namespace App\Livewire\Website\Pages;

use App\Models\Project;
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

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.website.pages.home');
    }
}
