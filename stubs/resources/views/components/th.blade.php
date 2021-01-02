{{-- Alignment classes: text-left, text-center, text-right --}}

<th {{ $attributes->merge(['class' => 'px-6 py-3 bg-gray-50 text-' . ($align ?? 'left') . ' text-xs leading-4 font-medium text-gray-400 uppercase tracking-wider']) }}>
  {{ $slot }}
</th>

{{-- <a class="text-gray-500 whitespace-nowrap" href="{{ request()->fullUrlWithQuery(['orderby' => $name, 'order' => (request()->orderby == $name && request()->order == 'asc' ? 'desc' : 'asc'), 'page' => 1]) }}">
  {{ $label }}
  <span class="text-gray-400">
    @if (request()->orderby == $name && request()->order == 'asc')
      <svg viewBox="0 0 24 24" class="inline-block fill-current w-6 h-6 ml-1"><path fill-rule="evenodd" d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z"/></svg>
    @elseif (request()->orderby == $name && request()->order == 'desc')
      <svg viewBox="0 0 24 24" class="inline-block fill-current w-6 h-6 ml-1 transform rotate-180"><path fill-rule="evenodd" d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z"/></svg>
    @endif
  </span>
</a> --}}
