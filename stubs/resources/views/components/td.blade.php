@props(['nowrap' => true])

{{-- Alignment classes: text-left, text-center, text-right --}}

<td {{ $attributes->merge(['class' => 'px-6 py-3 ' . ($nowrap ? 'whitespace-nowrap' : '') . ' text-sm leading-5 text-gray-500 text-' . ($align ?? 'left')]) }}>
  {{ $slot }}
</td>
