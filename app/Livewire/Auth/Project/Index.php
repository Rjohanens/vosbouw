<?php

namespace App\Livewire\Auth\Project;

use App\Livewire\Auth\Project\Components\ProjectModal;
use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.auth')]
class Index extends Component
{
    use WithPagination;

    #[Computed]
    public function projects()
    {
        return Project::with('category')
            ->latest()
            ->paginate(10);
    }

    #[On('refresh')]
    public function render()
    {
        return view('livewire.auth.project.index');
    }
}
