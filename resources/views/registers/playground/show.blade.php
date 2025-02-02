@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Publiskie spēļu laukumi
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\Playground\PlaygroundApiValueObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
            <x-slot:value><x-tooltip text="->dateRegistered">{{$valueObject->getDate($valueObject->dateRegistered)}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Atbildīgās personas telefona numurs:</x-slot>
            <x-slot:value><x-tooltip text="->phoneNumber">{{$valueObject->phoneNumber}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Atbildīgās personas e-pasta adrese:</x-slot>
            <x-slot:value><x-tooltip text="->email">{{$valueObject->email}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Atbildīgās personas vārds, uzvārds::</x-slot>
            <x-slot:value><x-tooltip text="->playgroundResponsibleFullName">{{$valueObject->playgroundResponsibleFullName}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Laukuma nosaukums:</x-slot>
            <x-slot:value><x-tooltip text="->name">{{$valueObject->name}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Laukuma veids:</x-slot>
            <x-slot:value><x-tooltip text="->isIndoor">{{$valueObject->isIndoor ? 'Iekštelpu' : 'Ārtelpu'}}</x-tooltip></x-slot>
        </x-level-two.block>


        <x-slot name="companyCard">
            <x-registers.index-company
                :companyName="$valueObject->possessorName"
                companyNameTooltip="->possessorName"
                :regNumber="$valueObject->possessorRegNrOrPersonalCode"
                regNumberTooltip="->possessorRegNrOrPersonalCode"
                :phone="$valueObject->phoneNumber"
                phoneTooltip="->phoneNumber"
                :web="null"
                webTooltip="->[401]"
                :email="$valueObject->email"
                emailTooltip="->email"
                :address="$valueObject->address"
                addressTooltip="->address"
            ></x-registers.index-company>
        </x-slot>

        <x-slot:slot2>

            <h1 class="text-2xl font-medium mb-5 uppercase">
            Publiska spēļu vai rekreācijas laukuma iekārtas
            </h1>

            <div class="bg-white">
                <div class="hidden lg:grid lg:grid-cols-4 grid-cols-4 gap-0 py-1 border-b-2 border-baseblue-400 font-semibold text-left">
                    <div class="">Identificējošās pazīmes</div>
                    <div class="">Iekārtas veids</div>
                    <div class="">Uzstādīšanas datums</div>
                    <div class="">Piezīmes</div>
                </div>

                @foreach($valueObject->equipment as $equipment)

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 lg:grid-cols-4 gap-0 py-1 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1 pr-1">
                        <div class="lg:hidden font-bold text-lg py-1">Identificējošās pazīmes</div>
                        <div><x-tooltip text="->equipment->identifier">{{data_get($equipment, 'identifier', '-')}}</x-tooltip></div>
                    </div>
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-1">Iekārtas veids</div>
                        <div><x-tooltip text="->equipment->equipmentTypeName">{{data_get($equipment, 'equipmentTypeName', '-')}}</x-tooltip></div>
                    </div>
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-1">Uzstādīšanas datums</div>
                        <div><x-tooltip text="->equipment->dateInstalled">{{$valueObject->getDate(data_get($equipment, 'dateInstalled'))}}</x-tooltip></div>
                    </div>
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-1">Piezīmes</div>
                        <div><x-tooltip text="->equipment->notes">{{data_get($equipment, 'notes', '-')}}</x-tooltip></div>
                    </div>
                </div>
                @endforeach

            </div>
        </x-slot:slot2>

    </x-level-two.container>

@endsection
