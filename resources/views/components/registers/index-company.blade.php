@php
    $companyName = $companyName ?? null;
    $regNumber = $regNumber ?? null;
    $phone = $phone ?? null;
    $web = $web ?? null;
    $email = $email ?? null;
    $address = $address ?? null;
@endphp

<div class="max-w-lg">
    <!-- Company Name -->
    <h2 class="text-base font-semibold mb-2">{{$companyName}}</h2>

    <!-- Registration Number with icon -->
    <div class="flex items-center gap-2 mb-1 text-sm">
        <span class="text-baseblue hover:underline cursor-pointer">{{$regNumber}}</span>
        @if($web)
            <a href="{{$web}}" target="_blank"><i class="fab fa-internet-explorer text-baseblue-600 text-sm"></i></a>
        @endif
        @if($email)
            <a href="mailto:{{$email}}"><i class="fas fa-at text-baseblue-600 text-sm"></i></a>
        @endif
    </div>

    @if($phone)
    <div class="flex items-center gap-2 mb-1">
        <i class="fas fa-phone text-baseblue-600 text-sm"></i>
        <span class="text-sm">{{$phone}}</span>
    </div>
    @endif

    <!-- Address with icon -->
    <div class="flex items-center gap-1">
        <i class="fa-solid fa-map-location-dot text-baseblue-600 text-base"></i>
        <span class="text-gray-700 text-base">{{$address}}</span>
    </div>
</div>
