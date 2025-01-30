@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Aizdomīga interneta un saziņas objekta reģistrācija
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\SuspiciousInternetAndCommunicationObjectsDecision\SuspiciousInternetAndCommunicationObjectsDecisionApiValueObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
            <x-slot:value>{{$valueObject->getDate($valueObject->dvsDocumentRegistrationDate)}}</x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Lēmums:</x-slot>
            <x-slot:value>{{$valueObject->dvsDocumentNumber}}</x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Pārkāpums:</x-slot>
            <x-slot:value>{{$valueObject->violation}}</x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Apraksts:</x-slot>
            <x-slot:value>{{$valueObject->description}}</x-slot>
        </x-level-two.block>

    </x-level-two.container>

@endsection
