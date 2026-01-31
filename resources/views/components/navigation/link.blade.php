@props([
    'href' => '#',  
    'label' => 'Link',
])

@php
    $isActive = request()->url() === url($href);
    $classes = match($isActive) {
        true => 'px-4 py-3 bg-navbar-muted text-sm/6 font-normal text-muted rounded-md',
        false => 'px-4 py-3 bg-navbar hover:bg-navbar-muted text-sm/6 font-normal text-navbar-foreground rounded-md',
    };
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $label }}
</a>