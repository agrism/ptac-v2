@php
    $companyName = $companyName ?? null;
    $companyNameTooltip = $companyNameTooltip ?? null;
    $regNumber = $regNumber ?? null;
    $regNumberTooltip = $regNumberTooltip ?? null;
    $phone = $phone ?? null;
    $phoneTooltip = $phoneTooltip ?? null;
    $web = $web ?? null;
    $webTooltip = $webTooltip ?? null;
    $email = $email ?? null;
    $emailTooltip = $emailTooltip ?? null;
    $address = $address ?? null;
    $addressTooltip = $addressTooltip ?? null;
    $registrationYear = $registrationYear ?? null;
    $registrationYearTooltip = $registrationYearTooltip ?? null;
@endphp

<div class="max-w-lg">
    <!-- Company Name -->
    <h2 class="text-base font-semibold mb-2">
        <x-tooltip :text="$companyNameTooltip">{{$companyName}}</x-tooltip>
    </h2>

    <!-- Registration Number with icon -->
    <div class="flex items-center gap-2 mb-1 text-sm">
        <span class="text-baseblue hover:underline cursor-pointer">
            <x-tooltip :text="$regNumberTooltip">
                {{$regNumber}}
            </x-tooltip>
        </span>
        @if($web)
            <x-tooltip :text="$webTooltip">
            <a href="{{$web}}" target="_blank"><i class="fab fa-internet-explorer text-baseblue-600 text-sm"></i></a>
            </x-tooltip>
        @endif
        @if($email)
            <a href="mailto:{{$email}}">
                <x-tooltip :text="$emailTooltip"><i class="fas fa-at text-baseblue-600 text-sm"></i></x-tooltip>
            </a>
        @endif
    </div>

    @if($phone)
    <div class="flex items-center gap-2 mb-1">
        <i class="fas fa-phone text-baseblue-600 text-sm"></i>
        <span class="text-sm"><x-tooltip :text="$phoneTooltip">{{$phone}}</x-tooltip></span>
    </div>
    @endif

    <!-- Address with icon -->
    <div>
        <i class="fa-solid fa-map-location-dot text-baseblue-600 text-base"></i>
        <span class="text-gray-700 text-base">
        <x-tooltip :text="$addressTooltip">
            {{$address}}
        </x-tooltip>
        </span>
    </div>

    @if($registrationYear)
    <div class="text-sm mt-1">
        Dibināšanas gads: <x-tooltip :text="$registrationYearTooltip">{{$registrationYear}}</x-tooltip>
    </div>
    @endif
</div>
