<?php

namespace App\Livewire\Website\Pages;

use App\Models\Project;
use Livewire\Attributes\Locked;
use Livewire\Component;

class ProjectShow extends Component
{
    #[Locked]
    public Project $project;

    public function render()
    {
        return view('livewire.website.pages.project-show');
    }
}
