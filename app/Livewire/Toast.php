<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Toast extends Component
{
    public bool $show = false;
    public string $title = '';
    public string $message = '';
    public string $type = '';

    #[On('open-toast')]
    public function open(string $title, string $message, string $type)
    {
        $this->title = $title;
        $this->message = $message;
        $this->type = $type;

        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.toast');
    }
}
