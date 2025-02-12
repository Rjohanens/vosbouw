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

    #[On('refresh')]
    public function render()
    {
        return view('livewire.auth.service.index');
    }
}
