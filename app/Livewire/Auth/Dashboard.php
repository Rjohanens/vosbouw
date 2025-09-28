<?php

namespace App\Livewire\Auth;

use App\Models\ContactRequest;
use App\Models\PageView;
use App\Models\Project;
use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Computed]
    public function projectCount(): int
    {
        return Project::count();
    }

    #[Computed]
    public function serviceCount(): int
    {
        return Service::count();
    }

    #[Computed]
    public function pageViews(): int
    {
        return PageView::count();
    }

    #[Computed]
    public function contactRequests()
    {
        return ContactRequest::paginate();
    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.dashboard');
    }
}
