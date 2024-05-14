@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 bg-gray-100 placeholder:opacity-50 focus:border-amber-700 focus:ring-amber-700 rounded-xl shadow-sm']) !!}>
