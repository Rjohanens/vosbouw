<?php

namespace App\Livewire\Auth\Service\Components;

use App\Enum\StatusEnum;
use App\Livewire\Auth\Service\Index;
use App\Livewire\Forms\ServiceForm;
use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ServiceModal extends Component
{
    use WithFileUploads;

    public bool $show = false;
    public ServiceForm $form;
    public $images;

    #[On('create-service')]
    public function open()
    {
        $this->form->reset();
        $this->show = true;
    }

    #[On('update-service')]
    public function openWithProject(Service $service)
    {
        $this->form->setForm($service);
        $this->show = true;
    }

    public function close()
    {
        $this->images = null;
        $this->form->reset();
        $this->show = false;
    }

    public function selectStatus(string $status)
    {
        $this->form->status = StatusEnum::from($status);
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

        $service = $this->form->service
            ? $this->form->update()
            : $this->form->store();

        if ($this->images) {
            foreach ($this->images as $image) {
                $service->addMedia($image->getRealPath())->toMediaCollection();
            }
        }

        $this->dispatch(
            'open-toast',
            title: 'Wijzigingen opgeslagen',
            message: 'De dienst is succesvol opgeslagen.',
            type: 'success',
        );

        $this->dispatch('refresh')->to(Index::class);
        $this->close();
    }

    #[Computed]
    public function statuses()
    {
        return StatusEnum::cases();
    }

    public function render()
    {
        return view('livewire.auth.service.components.service-modal');
    }
}
