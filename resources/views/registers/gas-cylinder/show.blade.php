@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Gāzes balonu tirdzniecības vietas
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\GasCylinder\GasCylinderApiValueObject $valueObject */ @endphp

            <x-level-two.block>
                <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
                <x-slot:value>{{$valueObject->getDate($valueObject->registrationDate)}}</x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Tirdzniecības vietas veids:</x-slot>
                <x-slot:value>{{$valueObject->isStationarySellingPlace ? 'Stacionāra' : 'Pārvietojama'}}</x-slot>
            </x-level-two.block>

            @if($valueObject->isStationarySellingPlace )
                <x-level-two.block>
                    <x-slot:title>Stacionārās tirdzniecības vietas adrese:</x-slot>
                    <x-slot:value>{{$valueObject->sellingPlaceAddressDisplayName}}</x-slot>
                </x-level-two.block>
                <x-level-two.block>
                    <x-slot:title>Vietas nosaukums:</x-slot>
                    <x-slot:value>{{$valueObject->sellingPlaceName}}</x-slot>
                </x-level-two.block>
            @endif


            <x-level-two.block>
                <x-slot:title>Atbildīgā persona:</x-slot>
                <x-slot:value>
                    <ul>
                        @foreach($valueObject->responsiblePersonLinks as $link)
                            <li>{{data_get($link, 'responsibleLegalEntityName')}}</li>
                        @endforeach
                    </ul>
                </x-slot>
            </x-level-two.block>


        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->ptacCaseTargetedPersonName"
                :regNumber="$valueObject->ptacCaseTargetedPersonRegNrOrPersonalCode"
                :phone="null"
                :web="null"
                :email="null"
                :address="$valueObject->ptacCaseTargetedPersonAddress"
            ></x-registers.index-company>
        </x-slot>

    </x-level-two.container>

@endsection
