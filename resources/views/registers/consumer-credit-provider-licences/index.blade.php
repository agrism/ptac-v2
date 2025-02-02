@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            Patērētāju kreditēšanas pakalpojumu sniedzēji
        </x-slot>

        <x-slot:description>
            Datubāze sniedz informāciju patērētājiem par kapitālsabiedrībām, kuras savas komercdarbības vai profesionālās darbības ietvaros ir tiesīgas sniegt patērētāju kreditēšanas pakalpojumus Latvijas Republikā.
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Pakalpojumu sniedzējs</div>
                <div>Informācija</div>
                <div>Licence</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\ConsumerCreditProviderLicenceValueObject\ConsumerCreditProviderLicenceValueObject $item */ @endphp
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
                            :companyName="$item->legalEntityName"
                            companyNameTooltip="->legalEntityName"
                            :regNumber="$item->registrationNumber"
                            regNumberTooltip="->registrationNumber"
                            :phone="$item->legalEntityPhoneNumber"
                            phoneTooltip="->legalEntityPhoneNumber"
                            :web="$item->legalEntityWebAddresses"
                            webTooltip="->legalEntityWebAddresses"
                            :email="$item->legalEntityEmail"
                            emailTooltip="->legalEntityEmail"
                            :address="$item->legalEntityLegalAddress"
                            addressTooltip="->legalEntityLegalAddress"
                        ></x-registers.index-company>
                    </div>
                    <div class="md:order-2 lg:order-2">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        <x-level-one.info-block>
                            <x-level-one.info-block-item>
                                <x-slot:label>Kredīta veids</x-slot:label>
                                <x-slot:value><x-tooltip text="->[900]"><span class="bg-yellow-200">TODO</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Pakalpojuma tirdzniecības tīmekļa vietne</x-slot:label>
                                <x-slot:value><x-tooltip text="->legalEntityWebAddresses">{{$item->legalEntityWebAddresses}}</x-tooltip></x-slot:value>
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
                                </div>
                            </div>
                        </x-registers.index-decision>
                    </div>
                </div>
            @endforeach

        </div>

    </x-level-one.container>

@endsection
