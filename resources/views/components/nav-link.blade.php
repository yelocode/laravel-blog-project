@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center hover:text-yellow-900 text-sm text-yellow-500' : 'inline-flex items-center hover:text-yellow-900 text-sm text-gray-500';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
