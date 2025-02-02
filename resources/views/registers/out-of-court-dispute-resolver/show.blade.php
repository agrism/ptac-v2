@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Ārpustiesas patērētāju strīdu risinātāji
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\OutOfCourtDisputeResolver\OutOfCourtDisputeResolverValueObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
            <x-slot:value><x-tooltip text="->[600]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Darbības joma:</x-slot>
            <x-slot:value><x-tooltip text="->[601]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Maksas pakalpojuma veids:</x-slot>
            <x-slot:value><x-tooltip text="->outOfCourtDisputeResolver->costName">{{data_get($valueObject->outOfCourtDisputeResolver,'costName')}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Iesnieguma izskatīšanas valoda:</x-slot>
            <x-slot:value><x-tooltip text="->outOfCourtDisputeResolver->languageNames">{{data_get($valueObject->outOfCourtDisputeResolver,'languageNames')}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Strīdu risināšanas veids:</x-slot>
            <x-slot:value><x-tooltip text="->outOfCourtDisputeResolver->disputeSolvingTypes">{{data_get($valueObject->outOfCourtDisputeResolver,'disputeSolvingTypes')}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Ārpustiesas strīdu risināšanas raksturs:</x-slot>
            <x-slot:value><x-tooltip text="->outOfCourtDisputeResolver->natureOfComplianceName">{{data_get($valueObject->outOfCourtDisputeResolver,'natureOfComplianceName')}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Strīdu izskatīšanas atteikuma gadījumi:</x-slot>
            <x-slot:value><x-tooltip text="->[602]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot>
        </x-level-two.block>

        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->name"
                companyNameTooltip="->name"
                :regNumber="$valueObject->registrationNumber"
                regNumberTooltip="->registrationNumber"
                :phone="$valueObject->phoneNumber"
                phoneTooltip="->phoneNumber"
                :web="$valueObject->webAddress"
                webTooltip="->webAddress"
                :email="$valueObject->email"
                emailTooltip="->email"
                :address="$valueObject->legalAddressDisplayName"
                addressTooltip="->legalAddressDisplayName"
            ></x-registers.index-company>
        </x-slot>

    </x-level-two.container>

@endsection
