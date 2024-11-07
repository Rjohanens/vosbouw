<?php

namespace App\Livewire\Auth\Project;

use App\Models\Category;
use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.auth')]
class Create extends Component
{
    use WithFileUploads;

    #[Validate(['images.*' => 'image|max:10240', 'images' => 'required|array|min:1'])]
    public $images = [];

    #[Validate(['required'])]
    public Category $selectedCategory;

    #[Validate(['required', 'string', 'max:255'])]
    public string $title = '';

    #[Validate(['required', 'string', 'max:4096'])]
    public string $description = '';

    #[Validate(['required', 'date'])]
    public $execution_date;

    #[Validate(['nullable', 'boolean'])]
    public bool $draft = false;

    #[Validate(['nullable', 'boolean'])]
    public bool $featured = false;

    public function store()
    {
        $this->validate();

        $project = Project::create([
            'title' => $this->title,
            'description' => $this->description,
            'category_id' => $this->selectedCategory->id,
            'execution_date' => $this->execution_date,
            'draft' => $this->draft,
            'featured' => $this->featured,
        ]);

        foreach ($this->images as $image) {
            $project->addMedia($image->getRealPath())
                ->toMediaCollection('default');
        }

        return redirect()->route('auth.project.index');
    }

    public function selectCategory(Category $category)
    {
        $this->selectedCategory = $category;
    }

    #[Computed]
    public function categories()
    {
        return Category::all();
    }

    public function render()
    {
        return view('livewire.auth.project.create');
    }
}
