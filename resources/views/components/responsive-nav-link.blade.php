@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 rounded-xl text-start text-base font-medium text-amber-700 bg-amber-700/15 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 rounded-xl text-start text-base font-medium text-gray-600 hover:text-amber-700 hover:bg-gray-100 dhover:border-gray-300 focus:outline-none focus:text-amber-800 focus:bg-gray-100 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
