<?php

namespace App\View\Components\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public string $label,
        public string $to = 'auth.dsahboard',
        public ?string $icon = ''
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.sidebar.item');
    }
}
