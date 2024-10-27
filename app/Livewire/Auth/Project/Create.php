<?php

namespace App\Livewire\Auth\Project;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.auth')]
class Create extends Component
{
    use WithFileUploads;

    #[Validate(['images.*' => 'image|max:10240'])]
    public $images = [];

    public string $title = '';
    public string $description = '';
    public int $category_id = 1;
    public $execution_date;

    public function store()
    {
        $this->validate();

        $project = Project::create([
            'title' => $this->title,
            'description' => $this->description,
            'category_id' => $this->category_id,
        ]);

        foreach ($this->images as $image) {
            $project->addMedia($image->getRealPath())
                ->toMediaCollection('default');
        }

        return redirect()->route('auth.project.index');
    }

    public function render()
    {
        return view('livewire.auth.project.create');
    }
}
