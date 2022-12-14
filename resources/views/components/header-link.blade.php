@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center mx-2 pt-1 border-b-2 border-transparent text-sm font-semibold leading-5 text-red-900 focus:outline-none focus:border-indigo-700 transition'
                : 'inline-flex items-center mx-2 pt-1 border-b-2  border-indigo-400 text-lg font-medium leading-5 text-gray-500 hover:text-gray-800 hover:border-gray-100 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
