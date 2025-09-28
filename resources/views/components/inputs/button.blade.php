@props([
    'label' => 'Button',
    'type' => 'button',
    'icon' => null,
    'href' => null,
    'variant' => 'primary',
])

@php
    $classes = match($variant) {
        'primary' => 'rounded bg-primary px-6 py-3 text-sm font-normal text-white shadow-sm hover:bg-primary/80 transition-colors duration-30 whitespace-nowrap',
        'secondary' => 'rounded bg-secondary px-6 py-3 text-sm font-normal text-white shadow-sm hover:bg-secondary/80 transition-colors duration-30 whitespace-nowrap',
        'outline' => 'rounded bg-transparent px-6 py-3 text-sm font-normal text-white border border-white/80 hover:bg-white hover:text-dark transition-colors duration-300 whitespace-nowrap',
        'ghost' => 'rounded bg-transparent px-6 py-3 text-sm font-normal text-dark hover:bg-gray-100 transition-colors duration-300 whitespace-nowrap',
        default => 'rounded bg-primary px-6 py-3 text-sm font-normal text-white shadow-sm hover:bg-primary/80 transition-colors duration-30 whitespace-nowrap',
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