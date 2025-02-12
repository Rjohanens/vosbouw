<?php

namespace App\Livewire\Website\Pages;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;

    public string $filter = '';

    public function setFilter(string $filter)
    {
        $this->filter = Str::lower($filter);
    }

    public function clearFilter()
    {
        $this->filter = '';
    }

    #[Computed]
    public function projects()
    {
        return Project::with('category')
            ->published()
            ->when($this->filter, fn($query) => $query->whereRelation('category', 'name', $this->filter))
            ->paginate(9);
    }

    #[Computed]
    public function categories()
    {
        return Category::all();
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.website.pages.projects');
    }
}
