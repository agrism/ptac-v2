@php
    $url = $url ?? null;
@endphp

<div class="max-w-lg">
    @if($url) <a href="{{$url}}">@endif
        <div class="block max-w-lg shadow-md rounded-sm px-2 py-1 border border-gray-200 shadow-gray-400 hover:dark:shadow-baseblue">
            {{$slot}}
        </div>
    @if($url) </a> @endif
</div>
