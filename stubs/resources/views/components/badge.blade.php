@props(['type' => 'info', 'size' => 'default'])

{{--
  bg-brand-100 bg-secondary-100 bg-gray-100 bg-info-100 bg-success-100 bg-warning-100 bg-danger-100
  text-brand-600 text-secondary-600 text-gray-600 text-info-600 text-success-600 text-warning-600 text-danger-600
  border-brand-200 border-secondary-200 border-gray-200 border-info-200 border-success-200 border-warning-200 border-danger-200
--}}

@if ($size == 'lg')
  <span role="alert" {{ $attributes->merge(['class' => 'inline-flex items-center px-2 py-0.5 rounded-md text-base font-medium my-0.5 border-b border-r border-' . $type . '-200 bg-' . $type . '-100 text-' . $type . '-600']) }}>
    {{ $slot }}
  </span>
@elseif ($size == 'sm')
  <span role="alert" {{ $attributes->merge(['class' => 'inline-flex items-center px-2 py-0.5 rounded-md text-xs font-semibold my-0.5 border-b border-r border-' . $type . '-200 bg-' . $type . '-100 text-' . $type . '-600']) }}>
    {{ $slot }}
  </span>
@else
  <span role="alert" {{ $attributes->merge(['class' => 'inline-flex items-center px-2 py-0.5 rounded-md text-sm font-medium my-0.5 border-b border-r border-' . $type . '-200 bg-' . $type . '-100 text-' . $type . '-600']) }}>
    {{ $slot }}
  </span>
@endif
