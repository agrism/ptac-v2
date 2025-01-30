@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Patērētāju kreditēšanas pakalpojumu sniedzēji
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\ConsumerCreditProviderLicenceValueObject\ConsumerCreditProviderLicenceApiValueObject $valueObject */ @endphp

            <x-level-two.block>
                <x-slot:title>Statuss:</x-slot>
                <x-slot:value>{{$valueObject->licenceStatus}}</x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
                <x-slot:value>{{$valueObject->getDate($valueObject->dateEffectiveFrom)}}</x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
                <x-slot:value>{{$valueObject->getDate($valueObject->dateEffectiveFrom)}}</x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Kredīta veids:</x-slot>
                <x-slot:value>
                    <ul class="list-disc pl-4">
                        @foreach($valueObject->typeOfCreditLinks as $link)
                            <li>{{data_get($link, 'classifierValueName')}}</li>
                        @endforeach
                    </ul>
                </x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Pakalpojuma tirdzniecības tīmekļa vietne:</x-slot>
                <x-slot:value>{{$valueObject->legalEntityWebAddresses}}</x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Klientu apkalpošanas vietas adrese:</x-slot>
                <x-slot:value>{{$valueObject->legalEntityActualAddress}}</x-slot>
            </x-level-two.block>


        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->legalEntityName"
                :regNumber="$valueObject->registrationNumber"
                :phone="$valueObject->legalEntityPhoneNumber"
                :web="$valueObject->legalEntityWebAddresses"
                :email="$valueObject->legalEntityEmail"
                :address="$valueObject->legalEntityLegalAddress"
            ></x-registers.index-company>
        </x-slot>

    </x-level-two.container>

@endsection
