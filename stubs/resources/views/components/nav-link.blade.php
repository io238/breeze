@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'text-gray-800 border-brand-500 hover:text-gray-700 hover:border-brand-600 focus:text-gray-700 focus:border-brand-600'
        : 'text-gray-800 border-transparent hover:text-gray-700 hover:border-gray-300 focus:text-gray-700 focus:border-gray-300';
@endphp

<div class="inline-flex items-center">
    <a {{ $attributes->merge(['class' => 'group py-1 px-2 rounded bg-transparent hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>
        <span class="group-hover group-focus border-b-2 text-sm font-medium transition duration-150 ease-in-out {{ $classes }}">
            {{ $slot }}
        </span>
    </a>
</div>
