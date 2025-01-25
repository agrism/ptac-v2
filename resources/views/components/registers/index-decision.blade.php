@php
    $decisionNumber = $decisionNumber ?? null;
    $decisionStatus = $decisionStatus ?? null;
    $decisionDate = $decisionDate ?? null;
@endphp

<div class="max-w-lg">
    <div class="block max-w-lg shadow-md rounded-sm px-2 py-1 border border-gray-200 shadow-gray-400">
        <div class="px-2 py-1">
            {{$decisionNumber}}
            <i class="status__icon font-weight-bold fas fa-pencil-ruler text-baseblue-600"></i>
            {{$decisionStatus}}
        </div>
        <div class="px-2 py-1 text-gray-600">{{$decisionDate}}</div>
    </div>
</div>
