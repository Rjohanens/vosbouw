<?php

namespace App\Livewire\Forms;

use App\Enum\StatusEnum;
use App\Models\Category;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Validation\Rules\Enum;
use Livewire\Form;

class ProjectForm extends Form
{
    public ?Project $project = null;

    public string $title = '';

    public string $description = '';

    public string $execution_date = '';

    public bool $featured = false;

    public ?Category $category = null;

    public StatusEnum $status = StatusEnum::DRAFT;

    public function rules()
    {
        return [
            'title' => 'required|string|min:1|max:255|unique:projects,title,'.($this->project ? $this->project->id : 'null'),
            'description' => 'required|string|min:1|max:4096',
            'execution_date' => 'required|date',
            'category' => ['required'],
            'status' => ['required', new Enum(StatusEnum::class)],
            'featured' => 'required|boolean',
        ];
    }

    public function setForm(Project $project)
    {
        $this->project = $project;

        $this->title = $project->title;
        $this->description = $project->description;
        $this->category = $project->category;
        $this->execution_date = Carbon::parse($project->execution_date)->toDateString();
        $this->status = $project->status;
        $this->featured = $project->featured;
    }

    public function store(): Project
    {
        return Project::create([
            'title' => $this->title,
            'description' => $this->description,
            'execution_date' => $this->execution_date,
            'category_id' => $this->category->id,
            'status' => $this->status->value,
            'featured' => $this->featured,
        ]);
    }

    public function update(): Project
    {
        $this->project->update([
            'title' => $this->title,
            'description' => $this->description,
            'execution_date' => $this->execution_date,
            'category_id' => $this->category->id,
            'status' => $this->status->value,
            'featured' => $this->featured,
        ]);

        return $this->project;
    }
}
