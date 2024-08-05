<?php

namespace App\Livewire\Components;

use Livewire\Attributes\On;
use Livewire\Component;

class Modal extends Component
{
    public bool $isOpen = false;

    #[On('open-modal')]
    public function open()
    {
        $this->isOpen = true;
    }

    #[On('close-modal')]
    public function close()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.components.modal');
    }
}
