@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Parāda atgūšanas pakalpojumu sniedzēji
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\DebtRecoveryProviderLicenceValueObject\DebtRecoveryProviderLicenceValueApiObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Statuss:</x-slot>
            <x-slot:value><x-tooltip text="->licenceStatus">{{$valueObject->licenceStatus}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
            <x-slot:value><x-tooltip text="->dateEffectiveFrom">{{$valueObject->getDate($valueObject->dateEffectiveFrom)}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Beigu / termiņa datums:</x-slot>
            <x-slot:value><x-tooltip text="->dateEffectiveUntil">{{$valueObject->getDate($valueObject->dateEffectiveUntil)}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Pakalpojumu sniegšanas vieta:</x-slot>
            <x-slot:value><x-tooltip text="->merchantServiceAddress">{{$valueObject->merchantServiceAddress}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->merchantName"
                companyNameTooltip="->merchantName"
                :regNumber="$valueObject->merchantRegistrationNumber"
                regNumberTooltip="->merchantRegistrationNumber"
                :phone="$valueObject->merchantPhoneNumber"
                phoneTooltip="->merchantPhoneNumber"
                :web="$valueObject->merchantWebAddress"
                webTooltip="->merchantWebAddress"
                :email="$valueObject->merchantEmail"
                emailTooltip="->merchantEmail"
                :address="$valueObject->merchantLegalAddress"
                addressTooltip="->merchantLegalAddress"
            ></x-registers.index-company>
        </x-slot>

    </x-level-two.container>

@endsection
