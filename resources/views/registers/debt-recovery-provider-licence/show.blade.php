@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Parāda atgūšanas pakalpojumu sniedzēji
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\DebtRecoveryProviderLicenceValueObject\DebtRecoveryProviderLicenceValueApiObject $valueObject */ @endphp

            <x-level-two.block>
                <x-slot:title>Statuss:</x-slot>
                <x-slot:value>{{$valueObject->licenceStatus}}</x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
                <x-slot:value>{{$valueObject->getDate($valueObject->dateEffectiveFrom)}}</x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Beigu / termiņa datums:</x-slot>
                <x-slot:value>{{$valueObject->getDate($valueObject->dateEffectiveUntil)}}</x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Pakalpojumu sniegšanas vieta:</x-slot>
                <x-slot:value>{{$valueObject->merchantServiceAddress}}</x-slot>
            </x-level-two.block>


        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->merchantName"
                :regNumber="$valueObject->merchantRegistrationNumber"
                :phone="$valueObject->merchantPhoneNumber"
                :web="$valueObject->merchantWebAddress"
                :email="$valueObject->merchantEmail"
                :address="$valueObject->merchantLegalAddress"
            ></x-registers.index-company>
        </x-slot>

    </x-level-two.container>

@endsection
