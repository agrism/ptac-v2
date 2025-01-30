@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Patērētāju strīdu risināšanas komisijas lēmums
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\CommissionDecision\CommissionDecisionApiValueObject $valueObject */ @endphp

            <x-level-two.block>
                <x-slot:title>Statuss:</x-slot>
                <x-slot:value>{{$valueObject->decisionStatus}}</x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
                <x-slot:value>{{$valueObject->getDate($valueObject->publicationOrAcceptanceDate)}}</x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Preces / pakalpojuma grupa:</x-slot>
                <x-slot:value><span class="bg-yellow-200">Pasūtīts</span></x-slot>
            </x-level-two.block>

    </x-level-two.container>

@endsection
