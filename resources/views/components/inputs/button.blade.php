@props([
    'label' => 'Button',
    'type' => 'button',
    'icon' => null,
    'href' => null,
    'variant' => 'primary',
])

@php
    $baseClasses = 'flex w-fit px-6 py-3 text-sm font-normal rounded-md hover:shadow-md transition-colors duration-300 whitespace-nowrap';
    $classes = $baseClasses . ' ' . match($variant) {
        'primary' => 'bg-primary hover:bg-primary-foreground text-muted',
        'outline' => 'bg-background hover:bg-foreground text-foreground hover:text-muted border border-border hover:border-foreground',
        'ghost' => 'bg-navbar text-navbar-foreground text-dark hover:text-foreground hover:bg-gray-100',
        'link' => 'bg-transparent !px-0 text-muted hover:underline',
        default => 'bg-primary text-white hover:bg-primary/80',
    };
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        <div class="flex space-x-2 items-center">
            @if($icon)
                <i class="{{ $icon }}"></i>
            @endif
            <span>{{ $label }}</span>
        </div>
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        <div class="flex space-x-2 items-center">
            @if($icon)
                <i class="{{ $icon }}"></i>
            @endif
            <span>{{ $label }}</span>
        </div>
    </button>
@endif