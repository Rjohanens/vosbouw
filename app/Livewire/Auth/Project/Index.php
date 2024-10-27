<?php

namespace App\Livewire\Auth\Project;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Index extends Component
{
    #[Computed]
    public function projects()
    {
        return Project::with('category')->get();
    }

    public function render()
    {
        return view('livewire.auth.project.index');
    }
}
