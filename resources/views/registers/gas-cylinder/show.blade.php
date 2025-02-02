@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Gāzes balonu tirdzniecības vietas
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\GasCylinder\GasCylinderApiValueObject $valueObject */ @endphp

            <x-level-two.block>
                <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
                <x-slot:value><x-tooltip text="->registrationDate">{{$valueObject->getDate($valueObject->registrationDate)}}</x-tooltip></x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Tirdzniecības vietas veids:</x-slot>
                <x-slot:value><x-tooltip text="->isStationarySellingPlace">{{$valueObject->isStationarySellingPlace ? 'Stacionāra' : 'Pārvietojama'}}</x-tooltip></x-slot>
            </x-level-two.block>

            @if($valueObject->isStationarySellingPlace )
                <x-level-two.block>
                    <x-slot:title>Stacionārās tirdzniecības vietas adrese:</x-slot>
                    <x-slot:value><x-tooltip text="->sellingPlaceAddressDisplayName">{{$valueObject->sellingPlaceAddressDisplayName}}</x-tooltip></x-slot>
                </x-level-two.block>
                <x-level-two.block>
                    <x-slot:title>Vietas nosaukums:</x-slot>
                    <x-slot:value><x-tooltip text="->sellingPlaceName">{{$valueObject->sellingPlaceName}}</x-tooltip></x-slot>
                </x-level-two.block>
            @endif


            <x-level-two.block>
                <x-slot:title>Atbildīgā persona:</x-slot>
                <x-slot:value>
                    <ul>
                        @foreach($valueObject->responsiblePersonLinks as $link)
                            <li><x-tooltip text="->responsiblePersonLinks->responsibleLegalEntityName">{{data_get($link, 'responsibleLegalEntityName')}}</x-tooltip></li>
                        @endforeach
                    </ul>
                </x-slot>
            </x-level-two.block>


        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->ptacCaseTargetedPersonName"
                companyNameTooltip="valueObject->ptacCaseTargetedPersonName"
                :regNumber="$valueObject->ptacCaseTargetedPersonRegNrOrPersonalCode"
                regNumberTooltip="->ptacCaseTargetedPersonRegNrOrPersonalCode"
                :phone="null"
                phoneTooltip="->[332]"
                :web="null"
                webTootlip="->[333]"
                :email="null"
                emailTooltip="->[334]"
                :address="$valueObject->ptacCaseTargetedPersonAddress"
                addressTooltip="->ptacCaseTargetedPersonAddress"
            ></x-registers.index-company>
        </x-slot>

    </x-level-two.container>

@endsection
