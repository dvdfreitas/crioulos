@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center rounded-full items-center px-3 py-2 justify-center text-base font-bold leading-5 bg-white text-amber-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center rounded-full items-center px-3 py-2 justify-center text-base font-medium leading-5 bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
