@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            MELNAIS SARAKSTS
        </x-slot>

        <x-slot:description>
            Datubāze sniedz informāciju par komersantiem, kuri nav izpildījuši Patērētāju strīdu risināšanas komisijas lēmumus pēc lēmumu labprātīgās izpildes termiņa beigām. Informācija datubāzē tiek ievietota, pamatojoties uz Patērētāju tiesību aizsardzības likuma 26.<sup>12</sup> panta astoto daļu. Aicinām informēt, ja Patērētāju strīdu risināšanas komisijas lēmums ir izpildīts!
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Komersants</div>
                <div>Informācija</div>
                <div>Lēmums</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\BlackList\BlackListValueObject $item */ @endphp
                <x-level-one-item-info
                    :data="$item"
                    :elk-data="$item->getElkRawData()"
                    :className="$item->getClass()"
                    :viewFile="$item->getViewFile()"
                    :apiUrl="$item->getElkUrl()"
                ></x-level-one-item-info>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-cols-[36%_36%_26%] gap-4 p-4 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-2">Komersants</div>
                        <x-registers.index-company
                            :companyName="$item->merchantName"
                            companyNameTooltip="->merchantName"
                            :regNumber="$item->merchantRegistrationNumber"
                            regNumberTooltip="->merchantRegistrationNumber"
                            :phone="null"
                            :web="null"
                            :email="$item->merchantEmail"
                            emailTooltip="->merchantEmail"
                            :address="$item->merchantLegalAddress"
                            addressTooltip="->merchantLegalAddress"
                        ></x-registers.index-company>
                    </div>
                    <div class="md:order-2 lg:order-2">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        <x-level-one.info-block>
                            <x-level-one.info-block-item>
                                <x-slot:label></x-slot:label>
                                <x-slot:value><x-tooltip text="->description">{{$item->description}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Pielikumi</x-slot:label>
                                <x-slot:value><x-tooltip text="->[309]"><span class="bg-yellow-200">mxYs26IP75aM6V2</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                        </x-level-one.info-block>
                    </div>
                    <div class="md:order-1 lg:order-3">
                        <div class="lg:hidden font-bold text-lg py-2">Lēmums</div>
                        <x-registers.index-decision
                            :url="route('register.items.details', ['register' => $register->value, 'id'=> $item->id])"
                        >
                            <div class="px-2 py-1 text-gray-600"><x-tooltip text="->decisionDate">{{$item->getDate($item->decisionDate)}}</x-tooltip></div>
                            <div class="px-2 py-1">
                                <x-tooltip text="->decisionNumber">{{$item->decisionNumber}}</x-tooltip>
                                <i class="status__icon font-weight-bold fas fa-pencil-ruler text-baseblue-600"></i>
                                <x-tooltip text="->decisionStatus">{{$item->decisionStatus}}</x-tooltip>
                            </div>
                        </x-registers.index-decision>
                    </div>
                </div>
            @endforeach

        </div>


    </x-level-one.container>

@endsection
