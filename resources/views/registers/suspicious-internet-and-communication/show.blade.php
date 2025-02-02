@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Aizdomīga interneta un saziņas objekta reģistrācija
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\SuspiciousInternetAndCommunicationObjectsDecision\SuspiciousInternetAndCommunicationObjectsDecisionApiValueObject $valueObject */ @endphp

        <x-level-two.block>
            <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
            <x-slot:value><x-tooltip text="->dvsDocumentRegistrationDate">{{$valueObject->getDate($valueObject->dvsDocumentRegistrationDate)}}</x-tooltip></x-slot>
        </x-level-two.block>

        <x-level-two.block>
            <x-slot:title>Lēmums:</x-slot>
            <x-slot:value><x-tooltip text="->dvsDocumentNumber">{{$valueObject->dvsDocumentNumber}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Pārkāpums:</x-slot>
            <x-slot:value><x-tooltip text="->violation">{{$valueObject->violation}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Apraksts:</x-slot>
            <x-slot:value><x-tooltip text="->description">{{$valueObject->description ?? '-'}}</x-tooltip></x-slot>
        </x-level-two.block>

    </x-level-two.container>

@endsection
