@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Patērētāju kreditēšanas pakalpojumu sniedzēji
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\ConsumerCreditProviderLicenceValueObject\ConsumerCreditProviderLicenceApiValueObject $valueObject */ @endphp

            <x-level-two.block>
                <x-slot:title>Statuss:</x-slot>
                <x-slot:value><x-tooltip text="->licenceStatus">{{$valueObject->licenceStatus}}</x-tooltip></x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
                <x-slot:value><x-tooltip text="->dateEffectiveFrom">{{$valueObject->getDate($valueObject->dateEffectiveFrom)}}</x-tooltip></x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>
                <x-slot:value><x-tooltip text="->dateEffectiveFrom">{{$valueObject->getDate($valueObject->dateEffectiveFrom)}}</x-tooltip></x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Kredīta veids:</x-slot>
                <x-slot:value>
                    <ul class="list-disc pl-4">
                        @foreach($valueObject->typeOfCreditLinks as $link)
                            <li><x-tooltip text="->typeOfCreditLinks->classifierValueName">{{data_get($link, 'classifierValueName')}}</x-tooltip></li>
                        @endforeach
                    </ul>
                </x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Pakalpojuma tirdzniecības tīmekļa vietne:</x-slot>
                <x-slot:value><x-tooltip text="->legalEntityWebAddresses">{{$valueObject->legalEntityWebAddresses}}</x-tooltip></x-slot>
            </x-level-two.block>

            <x-level-two.block>
                <x-slot:title>Klientu apkalpošanas vietas adrese:</x-slot>
                <x-slot:value><x-tooltip text="->legalEntityActualAddress">{{$valueObject->legalEntityActualAddress}}</x-tooltip></x-slot>
            </x-level-two.block>


        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->legalEntityName"
                companyNameTooltip="->legalEntityName"
                :regNumber="$valueObject->legalEntityRegistrationNumber"
                regNumberTooltip="->legalEntityRegistrationNumber"
                :phone="$valueObject->legalEntityPhoneNumber"
                phoneTooltip="->legalEntityPhoneNumber"
                :web="$valueObject->legalEntityWebAddresses"
                webTooltip="->legalEntityWebAddresses"
                :email="$valueObject->legalEntityEmail"
                emailTooltip="->legalEntityEmail"
                :address="$valueObject->legalEntityLegalAddress"
                addressTooltip="->legalEntityLegalAddress"
            ></x-registers.index-company>
        </x-slot>

    </x-level-two.container>

@endsection
