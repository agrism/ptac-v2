@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            Ārpustiesas patērētāju strīdu risinātāji
        </x-slot>

        <x-slot:description>
            Datubāzē ir apkopota informācija par Ārpustiesas patērētāju strīdu risinātājiem, kuri vai nu uz likuma pamata, vai arī uz Patērētāju tiesību aizsardzības centrā iesniegta pieteikuma pamata, risina strīdus tiem piekritīgajās jomās, ievērojot normatīvajos aktos vai dibināšanas dokumentos noteikto kārtību.
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Pakalpojumu sniedzējs</div>
                <div>Informācija</div>
                <div>Reģistrācija</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\OutOfCourtDisputeResolver\OutOfCourtDisputeResolverValueObject $item */ @endphp
                <x-level-one-item-info
                    :data="$item"
                    :elk-data="$item->getElkRawData()"
                    :className="$item->getClass()"
                    :viewFile="$item->getViewFile()"
                    :apiUrl="$item->getElkUrl()"
                ></x-level-one-item-info>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-cols-[36%_36%_26%] gap-4 p-4 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-2">Pakalpojumu sniedzējs</div>
                        <x-registers.index-company
                            :companyName="$item->name"
                            companyNameTooltip="item->name"
                            :regNumber="$item->registrationNumber"
                            regNumberTooltip="->registrationNumber"
                            :phone="$item->phoneNumber"
                            phoneTooltip="->phoneNumber"
                            :web="$item->webAddress"
                            webTooltip="->webAddress"
                            :email="$item->email"
                            emailTooltip="->email"
                            :address="$item->legalAddressDisplayName"
                            addressTooltip="->legalAddressDisplayName"
                        ></x-registers.index-company>
                    </div>
                    <div class="md:order-2 lg:order-2">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        <x-level-one.info-block>
                            <x-level-one.info-block-item>
                                <x-slot:label>Darbības joma</x-slot:label>
                                <x-slot:value><x-tooltip text="->[600]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Maksas pakalpojuma veids</x-slot:label>
                                <x-slot:value><x-tooltip text="->[601]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Iesnieguma izskatīšanas valoda</x-slot:label>
                                <x-slot:value><x-tooltip text="->[602]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Strīdu risināšanas veids</x-slot:label>
                                <x-slot:value><x-tooltip text="->[603]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Ārpustiesas strīdu risināšanas raksturs</x-slot:label>
                                <x-slot:value><x-tooltip text="->[604]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Strīdu izskatīšanas atteikuma gadījumi</x-slot:label>
                                <x-slot:value><x-tooltip text="->[605]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                        </x-level-one.info-block>

                    </div>
                    <div class="md:order-1 lg:order-3">
                        <div class="lg:hidden font-bold text-lg py-2">Reģistrācija</div>
                        <x-registers.index-decision
                            :url="route('register.items.details', ['register' => $register->value, 'id'=> $item->id])"
                        >
                            <div class="px-2 py-1">
                                {{'Dokuments'}}
                            </div>
                        </x-registers.index-decision>
                    </div>
                </div>
            @endforeach

        </div>

    </x-level-one.container>

@endsection
