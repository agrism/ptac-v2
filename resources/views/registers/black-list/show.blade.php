@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Neizpildītais komisijas lēmums
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\BlackList\BlackListApiValueObject $valueObject */ @endphp

        <x-level-two.block :missing-info="true">
            <x-slot:title>{{$valueObject->decisionSttaus}}</x-slot>
            <x-slot:value>???</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
            <x-slot:value>{{$valueObject->getDate($valueObject->decisionDate)}}</x-slot>
        </x-level-two.block>

        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->merchantName"
                :regNumber="$valueObject->merchantRegistrationNumber"
                :phone="null"
                :web="null"
                :email="$valueObject->merchantEmail"
                :address="$valueObject->merchantLegalAddress"
            ></x-registers.index-company>
        </x-slot>

    </x-level-two.container>

@endsection
