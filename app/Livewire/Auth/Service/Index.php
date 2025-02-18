<?php

namespace App\Livewire\Auth\Service;

use App\Models\Service;
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
    public function services()
    {
        return Service::latest()->paginate(10);
    }

    public function deleteService(Service $service)
    {
        if ($service->media()->exists()) {
            foreach ($service->media as $media) {
                $media->delete();
            }
        }
        $service->delete();

        $this->dispatch(
            'open-toast',
            title: 'Dienst verwijderd',
            message: 'De dienst is succesvol verwijderd.',
            type: 'success',
        );
        $this->dispatch('refresh');
    }

    #[On('refresh')]
    public function render()
    {
        return view('livewire.auth.service.index');
    }
}
