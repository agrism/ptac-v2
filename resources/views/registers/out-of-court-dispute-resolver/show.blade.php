@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Gāzes balonu tirdzniecības vietas
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\OutOfCourtDisputeResolver\OutOfCourtDisputeResolverValueObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
            <x-slot:value><span class="bg-yellow-200">-</span></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Darbības joma:</x-slot>
            <x-slot:value><span class="bg-yellow-200">-</span></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Maksas pakalpojuma veids:</x-slot>
            <x-slot:value>{{data_get($valueObject->outOfCourtDisputeResolver,'costName')}}</x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Iesnieguma izskatīšanas valoda:</x-slot>
            <x-slot:value>{{data_get($valueObject->outOfCourtDisputeResolver,'languageNames')}}</x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Strīdu risināšanas veids:</x-slot>
            <x-slot:value>{{data_get($valueObject->outOfCourtDisputeResolver,'disputeSolvingTypes')}}</x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Ārpustiesas strīdu risināšanas raksturs:</x-slot>
            <x-slot:value>{{data_get($valueObject->outOfCourtDisputeResolver,'natureOfComplianceName')}}</x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Strīdu izskatīšanas atteikuma gadījumi:</x-slot>
            <x-slot:value><span class="bg-yellow-200">-</span></x-slot>
        </x-level-two.block>

        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->name"
                :regNumber="$valueObject->registrationNumber"
                :phone="$valueObject->phoneNumber"
                :web="$valueObject->webAddress"
                :email="$valueObject->email"
                :address="$valueObject->legalAddressDisplayName"
            ></x-registers.index-company>
        </x-slot>

    </x-level-two.container>

@endsection
