@props([
    'label' => 'Button',
    'type' => 'button',
    'icon' => null,
    'href' => null,
    'variant' => 'primary',
])

@php
    $classes = match($variant) {
        'primary' => 'rounded-md bg-primary px-6 py-3 text-sm font-normal text-white shadow-sm hover:bg-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
        'secondary' => 'rounded-md bg-secondary px-6 py-3 text-sm font-normal text-white shadow-sm hover:bg-secondary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
        'outline' => 'rounded-md bg-transparent px-6 py-3 text-sm font-normal text-white border border-white/80 hover:bg-white hover:text-dark transition-colors duration-300',
        default => 'rounded-md bg-primary px-6 py-3 text-sm font-normal text-white shadow-sm hover:bg-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
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