@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Neizpildītais komisijas lēmums
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\BlackList\BlackListApiValueObject $valueObject */ @endphp

        <x-level-two.block :missing-info="true">
            <x-slot:title>{{$valueObject->decisionSttaus}}</x-slot>
            <x-slot:value><x-tooltip text="->[609]"><span class="bg-yellow-200">???</span></x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
            <x-slot:value><x-tooltip text="->decisionDate">{{$valueObject->getDate($valueObject->decisionDate)}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->merchantName"
                companyNameTooltip="->merchantName"
                :regNumber="$valueObject->merchantRegistrationNumber"
                regNumberTooltip="->merchantRegistrationNumber"
                :phone="null"
                :web="null"
                :email="$valueObject->merchantEmail"
                emailTooltip="->merchantEmail"
                :address="$valueObject->merchantLegalAddress"
                addressTooltip="->merchantLegalAddress"
            ></x-registers.index-company>
        </x-slot>

    </x-level-two.container>

@endsection
