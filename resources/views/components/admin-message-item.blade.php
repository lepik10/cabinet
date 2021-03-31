@php
    switch($message->type) {
        case 0: $class = 'alert-success'; break;
        case 1: $class = 'alert-warning'; break;
    }
@endphp

<div class="alert {{ $class }}">
    <div class="alert-content">
        @switch($message->type)
            @case(0)
            {{ $message->content }}
            @break
            @case(1)
            <h3>{{ $message->content }}</h3>
            @break
        @endswitch
    </div>
    <div class="date">
        <div class="nowrap">{{  $message->updated_at->format('Y-m-d') }}</div>
        <div class="nowrap">{{  $message->updated_at->format('h:i:s') }}</div>
    </div>
</div>
