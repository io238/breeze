@if($time)
<time class="timeago" datetime="{{ $time->copy()->timezone('UTC')->format('c') }}" title="{{ $time->format('d M Y H:i:s (P)') }}">
  @if ($time->copy()->timezone('UTC')->format('H:i:s') == '00:00:00')
    {{ $time->format('j F Y') }}
  @else
    {{ $time->format(DATE_RSS) }}
  @endif
</time>
@else
n/a
@endif
