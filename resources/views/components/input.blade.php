@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-amber-700 bg-amber-800/5 focus:border-amber-700 focus:ring-amber-700 rounded-md shadow-sm']) !!}>
