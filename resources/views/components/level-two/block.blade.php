<div class="border-b border-gray-400">
    <div class="py-2 font-bold">{{$title ?? null}}</div>
    <div class="pb-2 @if($missingInfo ?? false) bg-yellow-100 @endif">{{$value ?? null}}</div>
</div>
