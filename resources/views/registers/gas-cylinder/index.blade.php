@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            Gāzes balonu tirdzniecības vietas
        </x-slot>

        <x-slot:description>
            Datubāze sniedz komersantiem un patērētājiem informāciju par gāzes balonu tirdzniecības vietu atrašanas adresēm, kā arī kādu tieši atbildīgo personu gāzes baloni šajās vietās tiek piedāvāti.
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Gāzes balonu tirgotājs</div>
                <div>Informācija</div>
                <div>Reģistrācija</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\GasCylinder\GasCylinderValueObject $item */ @endphp
                <x-level-one-item-info
                    :data="$item"
                    :elk-data="$item->getElkRawData()"
                    :className="$item->getClass()"
                    :viewFile="$item->getViewFile()"
                    :apiUrl="$item->getElkUrl()"
                ></x-level-one-item-info>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-cols-[36%_36%_26%] gap-4 p-4 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-2">Gāzes balonu tirgotājs</div>
                        <x-registers.index-company
                            :companyName="$item->ptacCaseTargetedPersonName"
                            companyNameTooltip="->ptacCaseTargetedPersonName"
                            :regNumber="$item->ptacCaseTargetedPersonRegNrOrPersonalCode"
                            regNumberTooltip="->ptacCaseTargetedPersonRegNrOrPersonalCode"
                            :phone="null"
                            phoneTooltip="->[310]"
                            :web="null"
                            :email="null"
                            emailTootip="->[311]"
                            :address="$item->ptacCaseTargetedPersonAddress"
                            addressTootltip="->ptacCaseTargetedPersonAddress"
                        ></x-registers.index-company>
                    </div>
                    <div class="md:order-2 lg:order-2">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        <x-level-one.info-block>
                            <x-level-one.info-block-item>
                                <x-slot:label>Tirdzniecības vietas veids</x-slot:label>
                                <x-slot:value><x-tooltip text="->isStationarySellingPlace">{{$item->isStationarySellingPlace ? 'Stacionāra' : 'Pārvietojama'}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            @if($item->isStationarySellingPlace)
                                <x-level-one.info-block-item>
                                    <x-slot:label>Stacionārās tirdzniecības vietas adrese</x-slot:label>
                                    <x-slot:value><x-tooltip text="->stationarySellingPlaceAddressName">{{$item->stationarySellingPlaceAddressName}}</x-tooltip></x-slot:value>
                                </x-level-one.info-block-item>
                                <x-level-one.info-block-item>
                                    <x-slot:label>Vietas nosaukums</x-slot:label>
                                    <x-slot:value><x-tooltip text="->stationarySellingPlaceName">{{$item->stationarySellingPlaceName}}</x-tooltip></x-slot:value>
                                </x-level-one.info-block-item>
                            @endif

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
                                </div>
                            </div>
                        </x-registers.index-decision>
                    </div>
                </div>
            @endforeach

        </div>

    </x-level-one.container>

@endsection
