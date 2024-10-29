<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Navbar extends Component
{
    public string $activeRouteName;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->activeRouteName = Route::currentRouteName();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
