@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Hipotekāro kredītu starpnieki un to pārstāvji
        </x-slot:title>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence\CreditIntermediaryLicenceApiValueObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Statuss:</x-slot>
            <x-slot:value>{{$valueObject->licenseStatus}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
            <x-slot:value>{{$valueObject->getDate($valueObject->dateRegistered)}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Beigu / termiņa datums:</x-slot>
            <x-slot:value>{{$valueObject->getDate($valueObject->dateInsuranceValidUntil)}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Anulēšanas / pārtraukšanas datums:</x-slot>
            <x-slot:value>{{$valueObject->getDate($valueObject->dateInsuranceValidUntil)}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Sniegtie pakalpojumi:</x-slot>
            <x-slot:value>{{$valueObject->typesOfLicensing}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Pakalpojumu sniegšanas vieta:</x-slot>
            <x-slot:value>{{$valueObject->legalEntityLegalAddressDisplayName}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Kredītstarpniecības veids:</x-slot>
            <x-slot:value>{{$valueObject->typeOfCreditIntermediationName}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Pakalpojuma tirdzniecības tīmekļa vietne:</x-slot>
            <x-slot:value><span class="bg-yellow-300">-</span></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Starpnieka reģistrācijas valsts:</x-slot>
            <x-slot:value>{{$valueObject->intermediaryCountryOfRegistrationName}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Valdes locekļi:</x-slot>
            <x-slot:value>
                <ul class="list-disc_ pl-4_">
                    @foreach($valueObject->boardMembers as $member)
                        <li>{{data_get($member, 'personName')}} {{data_get($member, 'personSurname')}}</li>
                    @endforeach
                </ul>
            </x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>EEZ valsts, kurā tiek sniegti pakalpojumi:</x-slot>
            <x-slot:value>{{$valueObject->eeaCountries}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Profesionālās darbības civiltiesiskās apdrošināšanas darbības teritorija:</x-slot>
            <x-slot:value>{{$valueObject->insuranceCountryOfOperationName}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Profesionālās darbības civiltiesiskās apdrošināšanas termiņš no:</x-slot>
            <x-slot:value>{{$valueObject->getDate($valueObject->dateInsuranceValidFrom)}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Profesionālās darbības civiltiesiskās apdrošināšanas termiņš līdz:</x-slot>
            <x-slot:value>{{$valueObject->getDate($valueObject->dateInsuranceValidUntil)}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Darbinieka vārds, uzvārds:</x-slot>
            <x-slot:value>
                <ul class="list-disc_ pl-4_">
                    @foreach($valueObject->employees as $member)
                        <li>{{data_get($member, 'personName')}} {{data_get($member, 'personSurname')}}</li>
                    @endforeach
                </ul>
            </x-slot>
        </x-level-two.block>

        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->legalEntityName"
                :regNumber="$valueObject->legalEntityRegistrationNumber"
                :phone="$valueObject->legalEntityPhoneNumber"
                :web="$valueObject->legalEntityWebAddresses"
                :email="$valueObject->legalEntityEmail"
                :address="$valueObject->legalEntityFactualAddressName"
            ></x-registers.index-company>
        </x-slot:companyCard>

    </x-level-two.container>

@endsection
