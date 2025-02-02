@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Nedrošās un neatbilstošās preces
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\UnsafeAndNonCompliantGoods\UnsafeAndNonCompliantGoodsApiValueObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
            <x-slot:value><x-tooltip text="->[401]"><span class="bg-yellow-200">08.03.2023.</span></x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Identificējošās pazīmes:</x-slot>
            <x-slot:value><x-tooltip text="->ptacItemInformation">{{$valueObject->ptacItemInformation}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Preces vai pakalpojuma klasifikācija:</x-slot>
            <x-slot:value><x-tooltip text="->ptacItemGroup">{{$valueObject->ptacItemGroup}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Konstatētā neatbilstība un riski:</x-slot>
            <x-slot:value><x-tooltip text="->inconsistenciesAndRisks">{{$valueObject->inconsistenciesAndRisks}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Riski:</x-slot>
            <x-slot:value><x-tooltip text="->[403]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot>
        </x-level-two.block>

    </x-level-two.container>

@endsection
