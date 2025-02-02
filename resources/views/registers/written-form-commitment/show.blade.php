@extends('layouts.layout')

@section('content')
    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Rakstveida apņemšanās
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\WrittenFormCommitment\WrittenFormCommitmentApiValueObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Statuss:</x-slot>
            <x-slot:value><span class="bg-yellow-200">??</span></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
            <x-slot:value><x-tooltip text="->registrationDate">{{$valueObject->getDate($valueObject->registrationDate)}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Organizācijas juridiskais nosaukums uz rakstveida apņemšanās izdošanas brīdi:</x-slot>
            <x-slot:value><x-tooltip text="->merchantName">{{$valueObject->merchantName}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Organizācijas reģistrācijas numurs uz rakstveida apņemšanās izdošanas brīdi:</x-slot>
            <x-slot:value><x-tooltip text="->merchantRegistrationNumber">{{$valueObject->merchantRegistrationNumber}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Apņemšanās veids:</x-slot>
            <x-slot:value><x-tooltip text="->commitmentTypeName">{{$valueObject->commitmentTypeName}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->merchantName"
                companyNameTooltip="->merchantName"
                :regNumber="$valueObject->merchantRegistrationNumber"
                regNumberTooltip="->merchantRegistrationNumber"
                :phone="null"
                :web="null"
                :email="null"
                :address="$valueObject->merchantLegalAddress"
                addressTooltip="->merchantLegalAddress"
            ></x-registers.index-company>
        </x-slot>
    </x-level-two.container>
@endsection
