@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Nedrošās un neatbilstošās preces
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\UnsafeAndNonCompliantGoods\UnsafeAndNonCompliantGoodsApiValueObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
            <x-slot:value><span class="bg-yellow-200">08.03.2023.</span></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Identificējošās pazīmes:</x-slot>
            <x-slot:value>{{$valueObject->ptacItemInformation}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Preces vai pakalpojuma klasifikācija:</x-slot>
            <x-slot:value>{{$valueObject->ptacItemGroup}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Konstatētā neatbilstība un riski:</x-slot>
            <x-slot:value>{{$valueObject->inconsistenciesAndRisks}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Riski:</x-slot>
            <x-slot:value><span class="bg-yellow-200">-</span></x-slot>
        </x-level-two.block>

    </x-level-two.container>

@endsection
