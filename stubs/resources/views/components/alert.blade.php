@props(['type' => 'info'])
{{--
  bg-info-100, bg-success-100, bg-warning-100, bg-danger-100
  bg-info-200, bg-success-200, bg-warning-200, bg-danger-200
  border-info-300, border-success-300, border-warning-300, border-danger-300
  text-info-300, text-success-300, text-warning-300, text-danger-300
  text-info-500, text-success-500, text-warning-500, text-danger-500
  text-info-700, text-success-700, text-warning-700, text-danger-700
--}}

<div {{ $attributes->merge(['class' => 'rounded bg-' . $type . '-100  border-t-2 border-' . $type . '-300 shadow-sm p-4 my-8']) }}>
  <div class="flex">
    <div class="flex-shrink-0 flex items-center">
      <div class="rounded-full bg-{{ $type }}-200 p-1">
        @if ($type == 'info')
          <x-heroicon-s-information-circle class="h-5 w-5 text-info-500" />
        @elseif ($type == 'warning')
          <x-heroicon-s-exclamation class="h-5 w-5 text-warning-500" />
        @elseif ($type == 'success')
          <x-heroicon-s-check-circle class="h-5 w-5 text-success-500" />
        @elseif ($type == 'danger')
          <x-heroicon-s-exclamation-circle class="h-5 w-5 text-danger-500" />
        @endif
      </div>
    </div>
    <div class="ml-4 flex flex-col justify-center">
      <div class="text-sm font-medium text-{{ $type }}-700">
        {{ $slot }}
      </div>
      @isset($details)
        <div class="text-sm mt-2 text-sm leading-5 text-{{ $type }}-500">
          {{ $details }}
        </div>
      @endisset
    </div>
  </div>
</div>
