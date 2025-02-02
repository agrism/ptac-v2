@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            Parāda atgūšanas pakalpojumu sniedzēji
        </x-slot>

        <x-slot:description>
            Datubāze sniedz patērētājiem un komersantiem informāciju, par personām, kuras savas komercdarbības vai profesionālās darbības ietvaros ir tiesīgas atgūt no patērētājiem parādsaistības kreditora (pakalpojuma sniedzēja) vārdā vai uzdevumā un, kurām ir izsniegta, pārreģistrēta, apturēta vai anulēta licence parāda atgūšanas pakalpojuma sniegšanai.
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Parāda atgūšanas pakalpojuma sniedzējs</div>
                <div>Informācija</div>
                <div>Licence</div>
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
                        <div class="lg:hidden font-bold text-lg py-2">Parāda atgūšanas pakalpojuma sniedzējs</div>
                        <x-registers.index-company
                            :companyName="$item->merchantName"
                            companyNameTooltip="->merchantName"
                            :regNumber="$item->merchantPersonalCodeOrRegistrationNumber"
                            regNumberTooltip="->merchantPersonalCodeOrRegistrationNumber"
                            :phone="$item->merchantPhoneNumber"
                            phoneTooltip="->merchantPhoneNumber"
                            :web="$item->merchantWebAddress"
                            webTooltip="->merchantWebAddress"
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
                                <x-slot:label>Pakalpojumu sniegšanas vieta</x-slot:label>
                                <x-slot:value><x-tooltip text="->merchantServiceAddress">{{$item->merchantServiceAddress}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                        </x-level-one.info-block>

                    </div>
                    <div class="md:order-1 lg:order-3">
                        <div class="lg:hidden font-bold text-lg py-2">Licence</div>
                        <x-registers.index-decision
                            :url="route('register.items.details', ['register' => $register->value, 'id'=> $item->id])"
                        >
                            <div class="px-2 py-1">
                                <x-tooltip text="->registrationNumber">{{$item->registrationNumber}}</x-tooltip> <x-tooltip text="->licenceStatus">{{$item->licenceStatus}}</x-tooltip>

                                <div>
                                    <x-tooltip text="->dateEffectiveFrom">{{$item->getDate($item->dateEffectiveFrom)}}</x-tooltip>
                                    @if($item->dateEffectiveUntil)
                                    - <x-tooltip text="->dateEffectiveUntil">{{$item->getDate($item->dateEffectiveUntil)}}</x-tooltip>
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
