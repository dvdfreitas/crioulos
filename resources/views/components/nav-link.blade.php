@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center rounded p-2 items-center justify-center text-md font-medium leading-5 text-gray-900 focus:outline-none focus:border-amber-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center rounded p-2 items-center justify-center text-md font-medium leading-5 text-gray-600 rounded-full hover:text-amber-800 hover:bg-gray-100 hover:shadow-sm focus:outline-none focus:text-gray-700 focus:border-amber-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
