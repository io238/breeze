<div
  id="modal_{{ $modalId }}"
  x-data="{ open: false, closeModal(){ this.open = false; document.body.classList.remove('prevent-scroll'); _paq.push(['trackEvent', 'modal', 'close', '{{ $modalId }}']); } }"
  @modal.window="if($event.detail === '{{ $modalId }}'){ open = true; document.body.classList.add('prevent-scroll'); _paq.push(['trackEvent', 'modal', 'open', '{{ $modalId }}']); }"
  @hidemodal.window="if($event.detail === '{{ $modalId }}'){ open = false; document.body.classList.remove('prevent-scroll'); }"
  @if (! $preventDismissal) @keydown.window.escape="closeModal()" @endif
  x-cloak
>
  <div class="fixed px-4 pb-6 inset-0 sm:p-0 flex items-center justify-center z-50" x-show="open">


    {{-- Background overlay --}}
    <div
      x-show="open"
      class="fixed inset-0 transition-opacity"
      x-transition:enter="ease-out duration-300"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="ease-in duration-200"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
    >
      <div class="absolute inset-0 bg-gray-600 opacity-80 backdrop"></div>
    </div>

    {{-- Modal panel --}}
    {{-- Sizes: max-w-xs max-w-sm max-w-md max-w-lg max-w-xl max-w-2xl max-w-3xl max-w-4xl max-w-5xl max-w-6xl --}}
    <div
      x-show="open"
      class="transform transition-all max-w-{{ $size }} w-full"
      x-transition:enter="ease-out duration-300"
      x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
      x-transition:leave="ease-in duration-200"
      x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
      x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      role="dialog"
      aria-modal="true"
      aria-labelledby="modal-headline"
      @if (! $preventDismissal) @click.away="closeModal()" @endif
    >
      {{-- Close Button --}}
      @if (! $preventDismissal)
        <div class="absolute top-0 right-0 p-4">
          <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150" aria-label="Close" @click="closeModal()">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      @endif

      {{-- Modal Content --}}
      <div class="bg-white rounded p-4 overflow-hidden shadow-xl">
        {{ $slot }}
      </div>

    </div><!-- /panel -->
  </div><!-- /centerbox -->

</div><!-- /x-data -->
