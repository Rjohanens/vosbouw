<?php

namespace App;

trait ModalActions
{
    public function openModal()
    {
        $this->dispatch('open-modal');
    }

    public function closeModal()
    {
        $this->dispatch('close-modal');
    }
}
