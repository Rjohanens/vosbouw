<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public function __construct(
        public string $name,
        public string $type = 'text',
        public bool $required = false,
        public ?string $value = null,
        public ?string $placeholder = null,
        public ?string $label = null,
    ) {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
