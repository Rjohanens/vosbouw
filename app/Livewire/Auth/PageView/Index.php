<?php

namespace App\Livewire\Auth\PageView;

use App\Models\PageView;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Index extends Component
{

    #[Computed]
    public function homeCount()
    {
        return PageView::home()->count();
    }

    #[Computed]
    public function contactCount()
    {
        return PageView::contact()->count();
    }

    #[Computed]
    public function serviceCount()
    {
        return PageView::service()->count();
    }

    #[Computed]
    public function projectCount()
    {
        return PageView::project()->count();
    }

    public function render()
    {
        return view('livewire.auth.page-view.index');
    }
}
