<?php

namespace App\Livewire\Website\Pages;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Projects extends Component
{
    public function showProject(Project $project)
    {
        return redirect()->route('project.show', $project);
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.website.pages.projects');
    }
}
