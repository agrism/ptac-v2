@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Hipotekāro kredītu starpnieki un to pārstāvji
        </x-slot:title>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence\CreditIntermediaryLicenceApiValueObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Statuss:</x-slot>
            <x-slot:value><x-tooltip text="->licenseStatus">{{$valueObject->licenseStatus}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
            <x-slot:value><x-tooltip text="->dateRegistered">{{$valueObject->getDate($valueObject->dateRegistered)}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Beigu / termiņa datums:</x-slot>
            <x-slot:value><x-tooltip text="->dateInsuranceValidUntil">{{$valueObject->getDate($valueObject->dateInsuranceValidUntil)}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Anulēšanas / pārtraukšanas datums:</x-slot>
            <x-slot:value><x-tooltip text="->dateInsuranceValidUntil">{{$valueObject->getDate($valueObject->dateInsuranceValidUntil)}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Sniegtie pakalpojumi:</x-slot>
            <x-slot:value><x-tooltip text="->typesOfLicensing">{{$valueObject->typesOfLicensing}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Pakalpojumu sniegšanas vieta:</x-slot>
            <x-slot:value><x-tooltip text="->legalEntityLegalAddressDisplayName">{{$valueObject->legalEntityLegalAddressDisplayName}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Kredītstarpniecības veids:</x-slot>
            <x-slot:value><x-tooltip text="->typeOfCreditIntermediationName">{{$valueObject->typeOfCreditIntermediationName}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Pakalpojuma tirdzniecības tīmekļa vietne:</x-slot>
            <x-slot:value><x-tooltip text="->[801]"><span class="bg-yellow-300">-</span></x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Starpnieka reģistrācijas valsts:</x-slot>
            <x-slot:value><x-tooltip text="->intermediaryCountryOfRegistrationName">{{$valueObject->intermediaryCountryOfRegistrationName}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Valdes locekļi:</x-slot>
            <x-slot:value>
                <ul class="list-disc_ pl-4_">
                    @foreach($valueObject->boardMembers as $member)
                        <li><x-tooltip text="->boardMembers->personName">{{data_get($member, 'personName')}}</x-tooltip> <x-tooltip text="->boardMembers->personSurname">{{data_get($member, 'personSurname')}}</x-tooltip></li>
                    @endforeach
                </ul>
            </x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>EEZ valsts, kurā tiek sniegti pakalpojumi:</x-slot>
            <x-slot:value><x-tooltip text="->eeaCountries">{{$valueObject->eeaCountries}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Profesionālās darbības civiltiesiskās apdrošināšanas darbības teritorija:</x-slot>
            <x-slot:value><x-tooltip text="->insuranceCountryOfOperationName">{{$valueObject->insuranceCountryOfOperationName}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Profesionālās darbības civiltiesiskās apdrošināšanas termiņš no:</x-slot>
            <x-slot:value><x-tooltip text="->dateInsuranceValidFrom">{{$valueObject->getDate($valueObject->dateInsuranceValidFrom)}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Profesionālās darbības civiltiesiskās apdrošināšanas termiņš līdz:</x-slot>
            <x-slot:value><x-tooltip text="->dateInsuranceValidUntil">{{$valueObject->getDate($valueObject->dateInsuranceValidUntil)}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Darbinieka vārds, uzvārds:</x-slot>
            <x-slot:value>
                <ul class="list-disc_ pl-4_">
                    @foreach($valueObject->employees as $member)
                        <li><x-tooltip text="->employees->personName">{{data_get($member, 'personName')}}</x-tooltip> <x-tooltip text="->employees->personSurname">{{data_get($member, 'personSurname')}}</x-tooltip></li>
                    @endforeach
                </ul>
            </x-slot>
        </x-level-two.block>

        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->legalEntityName"
                companyNameTooltip="->legalEntityName"
                :regNumber="$valueObject->legalEntityRegistrationNumber"
                regNumberTooltip="->legalEntityRegistrationNumber"
                :phone="$valueObject->legalEntityPhoneNumber"
                phoneTooltip="->legalEntityPhoneNumber"
                :web="$valueObject->legalEntityWebAddresses"
                webTooltop="->legalEntityWebAddresses"
                :email="$valueObject->legalEntityEmail"
                emailTooltip="->legalEntityEmail"
                :address="$valueObject->legalEntityFactualAddressName"
                addressTooltip="->legalEntityFactualAddressName"
            ></x-registers.index-company>
        </x-slot:companyCard>

    </x-level-two.container>

@endsection
