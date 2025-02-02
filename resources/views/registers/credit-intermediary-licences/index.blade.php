@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            Hipotekāro kredītu starpnieki un to pārstāvji
        </x-slot>

        <x-slot:description>
            Kredītu starpnieki un kredītu palīgstarpnieki hipotekārās kreditēšanas jomā, kuri ir reģistrēti Latvijas Republikā un citu EEZ valstu kompetento iestāžu reģistrā reģistrēti kredīta starpnieki un kredīta starpnieku pārstāvji, kuriem ir tiesības sniegt starpniecības pakalpojumus Latvijā (saskaņā ar Eiropas Parlamenta un Padomes 2014.gada 4.februāra direktīvas 2014/17/ES par patērētāju kredītlīgumiem saistībā ar mājokļa nekustamo īpašumu un ar ko groza Direktīvas 2008/48/EK un 2013/36/ES un Regulu (ES) Nr. 1093/2010 32.pantu).
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Pakalpojuma sniedzējs</div>
                <div>Informācija</div>
                <div>Reģistrācija</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence\CreditIntermediaryLicenceValueObject $item */ @endphp
                <x-level-one-item-info
                    :data="$item"
                    :elk-data="$item->getElkRawData()"
                    :className="$item->getClass()"
                    :viewFile="$item->getViewFile()"
                    :apiUrl="$item->getElkUrl()"
                ></x-level-one-item-info>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-cols-[36%_36%_26%] gap-4 p-4 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-2">Pakalpojuma sniedzējs</div>
                        <x-registers.index-company
                            :companyName="$item->legalEntityName"
                            companyNameTooltip="->legalEntityName"
                            :regNumber="$item->legalEntityRegistrationNumber"
                            regNumberTooltip="->legalEntityRegistrationNumber"
                            :phone="$item->legalEntityPhoneNumber"
                            phoneTooltip="->legalEntityPhoneNumber"
                            :web="$item->legalEntityWebAddresses"
                            webTooltip="->legalEntityWebAddresses"
                            :email="$item->legalEntityEmail"
                            emailTooltip="->legalEntityEmail"
                            :address="$item->legalEntityLegalAddressDisplayName"
                            addressTooltip="->legalEntityLegalAddressDisplayName"
                        ></x-registers.index-company>
                    </div>
                    <div class="md:order-2 lg:order-2">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        <x-level-one.info-block>
                            <x-level-one.info-block-item>
                                <x-slot:label>Sniegtie pakalpojumi</x-slot:label>
                                <x-slot:value><x-tooltip text="->typesOfLicensing">{{$item->typesOfLicensing}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Pakalpojumu sniegšanas vieta</x-slot:label>
                                <x-slot:value><x-tooltip text="->legalEntityLegalAddressDisplayName">{{$item->legalEntityLegalAddressDisplayName}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Starpnieka reģistrācijas valsts</x-slot:label>
                                <x-slot:value><x-tooltip text="->intermediaryCountryOfRegistrationName">{{$item->intermediaryCountryOfRegistrationName}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>EEZ valsts, kurā tiek sniegti pakalpojumi</x-slot:label>
                                <x-slot:value><x-tooltip text="->eEACountries">{{$item->eEACountries}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Kredītstarpniecības veids</x-slot:label>
                                <x-slot:value><x-tooltip text="->typeOfCreditIntermediationName">{{$item->typeOfCreditIntermediationName}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Profesionālās darbības civiltiesiskās apdrošināšanas darbības teritorija</x-slot:label>
                                <x-slot:value><x-tooltip text="->insuranceCountryOfOperationName">{{$item->insuranceCountryOfOperationName}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Profesionālās darbības civiltiesiskās apdrošināšanas termiņš no</x-slot:label>
                                <x-slot:value><x-tooltip text="->dateInsuranceValidFrom">{{$item->getDate($item->dateInsuranceValidFrom)}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Profesionālās darbības civiltiesiskās apdrošināšanas termiņš līdz</x-slot:label>
                                <x-slot:value><x-tooltip text="->dateInsuranceValidUntil">{{$item->getDate($item->dateInsuranceValidUntil)}}</x-tooltip></x-slot:value>
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
                                <i class="status__icon font-weight-bold fas fa-pencil-ruler text-baseblue-600"></i>
                                <x-tooltip text="->licenseStatus">{{$item->licenseStatus}}</x-tooltip>

                                <div>
                                    <x-tooltip text="->dateInsuranceValidFrom">{{$item->getDate($item->dateInsuranceValidFrom)}}</x-tooltip>
                                    @if($item->dateInsuranceValidUntil)
                                    - <x-tooltip text="->dateInsuranceValidUntil">{{$item->getDate($item->dateInsuranceValidUntil)}}</x-tooltip>
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
