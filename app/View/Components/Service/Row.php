<?php

namespace App\View\Components\Service;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Row extends Component
{
    public bool $active;
    /**
     * Create a new component instance.
     */
    public function __construct($active = false)
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.service.row');
    }
}
