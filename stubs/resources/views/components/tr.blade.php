@props(['iterator' => null, 'limit' => false])

<tr
    @if($iterator === null || (int) $iterator % 2 !== 0)
        class="bg-white"
    @else
        class="bg-gray-50"
    @endif

    @if($limit && $iterator)
        x-show="showingAll || {{ $iterator }} <= showRows" x-cloak
    @endif
>
    {{ $slot }}
</tr>
