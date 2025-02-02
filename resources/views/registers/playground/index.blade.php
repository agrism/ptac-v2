@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            Publiskie spēļu laukumi
        </x-slot:title>

        <x-slot:description>
            Datubāze satur informāciju par Latvijā reģistrētiem publiskiem spēļu un rekreācijas laukumiem, to tiesiskajiem valdītājiem un apsaimniekotājiem.
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Valdītājs</div>
                <div>Informācija</div>
                <div>Reģistrācija</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\Playground\PlaygroundValueObject $item */ @endphp
                <x-level-one-item-info
                    :data="$item"
                    :elk-data="$item->getElkRawData()"
                    :className="$item->getClass()"
                    :viewFile="$item->getViewFile()"
                    :apiUrl="$item->getElkUrl()"
                ></x-level-one-item-info>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-cols-[36%_36%_26%] gap-4 p-4 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-2">Valdītājs</div>
                        <x-registers.index-company
                            :companyName="$item->posessorName"
                            companyNameTooltip="->posessorName"
                            :regNumber="$item->posessorRegNrOrPersonalCode"
                            regNumberTooltip="->posessorRegNrOrPersonalCode"
                            :phone="$item->playgroundResponsiblePhoneNumber"
                            phoneTooltip="->playgroundResponsiblePhoneNumber"
                            :web="null"
                            webTooltip="->[209]"
                            :email="$item->possessorEmail"
                            email="->possessorEmail"
                            :address="$item->address"
                            addressTooltip="->address"
                        ></x-registers.index-company>
                    </div>
                    <div class="md:order-2 lg:order-2">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        <x-level-one.info-block>
                            <x-level-one.info-block-item>
                                <x-slot:label>Nodokļu maksātāju reģistrācijas numurs</x-slot:label>
                                <x-slot:value><x-tooltip text="->posessorRegNrOrPersonalCode">{{$item->posessorRegNrOrPersonalCode}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Atbildīgās personas telefona numurs</x-slot:label>
                                <x-slot:value><x-tooltip text="->playgroundResponsiblePhoneNumber">{{$item->playgroundResponsiblePhoneNumber}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Atbildīgās personas e-pasta adrese</x-slot:label>
                                <x-slot:value><x-tooltip text="->playgroundResponsibleEmail">{{$item->playgroundResponsibleEmail}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Vadītāja e-pasts</x-slot:label>
                                <x-slot:value><x-tooltip text="->playgroundResponsibleEmail">{{$item->playgroundResponsibleEmail}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Laukuma adrese</x-slot:label>
                                <x-slot:value><x-tooltip text="->address">{{$item->address}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Laukuma veids</x-slot:label>
                                <x-slot:value><x-tooltip text="->isIndoor">{{$item->isIndoor ? 'Iekštelpu' : 'Ārtelpu'}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Atbildīgās personas vārds, uzvārds</x-slot:label>
                                <x-slot:value><x-tooltip text="->playgroundResponsibleFullName">{{$item->playgroundResponsibleFullName}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                        </x-level-one.info-block>

                    </div>
                    <div class="md:order-1 lg:order-3">
                        <div class="lg:hidden font-bold text-lg py-2">Reģistrācija</div>
                        <x-registers.index-decision
                            :url="route('register.items.details', ['register' => $register->value, 'id'=> $item->id])"
                        >
                            <div class="px-2 py-1">
                                <x-tooltip text="->registrationNumber">{{$item->registrationNumber}}</x-tooltip>

                                <div>
                                    <x-tooltip text="->registrationDate">{{$item->getDate($item->registrationDate)}}</x-tooltip>
                                    @if($item->dateExcluded)
                                    - <x-tooltip text="->dateExcluded">{{$item->getDate($item->dateExcluded)}}</x-tooltip>
                                    @endif
                                </div>
                            </div>
                        </x-registers.index-decision>
                    </div>
                </div>
            @endforeach

        </div>

    </x-level-one.container>

@endsection
