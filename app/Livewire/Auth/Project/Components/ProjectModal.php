<?php

namespace App\Livewire\Auth\Project\Components;

use App\Enum\ProjectStatus;
use App\Livewire\Auth\Project\Index;
use App\Livewire\Forms\ProjectForm;
use App\Models\Category;
use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProjectModal extends Component
{
    use WithFileUploads;

    public bool $show = false;
    public ProjectForm $form;
    public $images;

    public function mount()
    {
        $this->form->category = Category::default();
    }

    #[On('create-project')]
    public function open()
    {
        $this->form->reset();
        $this->form->category = Category::default();

        $this->show = true;
    }

    #[On('update-project')]
    public function openWithProject(Project $project)
    {
        $this->form->setForm($project);
        $this->show = true;
    }

    public function close()
    {
        $this->images = null;
        $this->form->reset();
        $this->show = false;
    }

    public function selectCategory(Category $category)
    {
        $this->form->category = $category;
    }

    public function selectStatus(string $status)
    {
        $this->form->status = ProjectStatus::from($status);
    }

    public function selectFeatured(bool $featured)
    {
        $this->form->featured = $featured;
    }

    public function deleteImage($index)
    {
        unset($this->images[$index]);
        $this->images = array_values($this->images);
    }

    public function deleteMedia(Media $media)
    {
        $media->delete();
    }

    public function save()
    {
        $this->form->validate();

        $project = $this->form->project
            ? $this->form->update()
            : $this->form->store();

        if ($this->images) {
            foreach ($this->images as $image) {
                $project->addMedia($image->getRealPath())->toMediaCollection();
            }
        }

        $this->close();
        $this->dispatch('refresh')->to(Index::class);
    }

    #[Computed]
    public function categories()
    {
        return Category::all();
    }

    #[Computed]
    public function statuses()
    {
        return ProjectStatus::cases();
    }

    public function render()
    {
        return view('livewire.auth.project.components.project-modal');
    }
}
