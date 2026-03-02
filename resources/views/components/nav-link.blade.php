@props([
    'active' => false,
])

@php
    $base = 'inline-flex items-center px-3 py-2 text-md font-medium border-b-2 transition-colors duration-200';

    $activeClasses = 'border-indigo-600 text-gray-900';
    $inactiveClasses = 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300';

    $classes = $base . ' ' . ($active ? $activeClasses : $inactiveClasses);
@endphp

<a
    {{ $attributes->merge(['class' => $classes]) }}
    @if($active) aria-current="page" @endif
>
    {{ $slot }}
</a>
