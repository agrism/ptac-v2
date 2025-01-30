@extends('layouts.layout')

@section('content')

    <x-level-two.container :value-object="$valueObject">
        <x-slot:title>
            Tūrisma pakalpojumu sniedzēji
        </x-slot>

        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\TourismServiceProviderLicenceValueObject\TourismServiceProviderLicenceApiValueObject $valueObject */ @endphp

{{--        <x-level-two.block>--}}
{{--            <x-slot:title>Spēkā stājies / reģistrēts kopš:</x-slot>--}}
{{--            <x-slot:value><span class="bg-yellow-200">-</span></x-slot>--}}
{{--        </x-level-two.block>--}}
        <x-level-two.block>
            <x-slot:title>Statuss:</x-slot>
            <x-slot:value><x-tooltip text="->licenceStatus">{{$valueObject->licenceStatus}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Izdošanas / pieņemšanas datums:</x-slot>
            <x-slot:value><x-tooltip text="->dateRegistered">{{$valueObject->getDate($valueObject->dateRegistered)}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Sniegtie pakalpojumi:</x-slot>
            <x-slot:value><x-tooltip text="->typeOfLicensingName">{{$valueObject->typeOfLicensingName}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Pakalpojumu sniedzēja darbības veids:</x-slot>
            <x-slot:value><x-tooltip text="->[?100]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Atbildīgās personas telefona numurs:</x-slot>
            <x-slot:value><x-tooltip text="->[?101]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Atbildīgās personas e-pasta adrese:</x-slot>
            <x-slot:value><x-tooltip text="->[?102]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Pakalpojuma tirdzniecības tīmekļa vietne:</x-slot>
            <x-slot:value><x-tooltip text="->typeOfLicensingName">{{$valueObject->ptacCaseTargetedPersonWebAddresses}}</x-tooltip></x-slot>
        </x-level-two.block>
        <x-level-two.block>
            <x-slot:title>Pakalpojumu sniegšanas vieta:</x-slot>
            <x-slot:value><x-tooltip text="->[?103]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot>
        </x-level-two.block>


        <x-slot:companyCard>
            <x-registers.index-company
                :companyName="$valueObject->ptacCaseTargetedPersonName"
                companyNameTooltip="->ptacCaseTargetedPersonName"
                :regNumber="$valueObject->ptacCaseTargetedPersonRegistrationNumber"
                regNumberTooltip="->ptacCaseTargetedPersonRegistrationNumber"
                :phone="$valueObject->ptacCaseTargetedPersonPhoneNumber"
                phoneTooltip="->ptacCaseTargetedPersonPhoneNumber"
                :web="$valueObject->ptacCaseTargetedPersonWebAddresses"
                webTooltip="->ptacCaseTargetedPersonWebAddresses"
                :email="$valueObject->ptacCaseTargetedPersonEmail"
                emailTooltip="->ptacCaseTargetedPersonEmail"
                :address="$valueObject->ptacCaseTargetedPersonAddressDisplayName"
                addressTooltip="->ptacCaseTargetedPersonAddressDisplayName"
            ></x-registers.index-company>
        </x-slot>

        <x-slot:slot2>

            <h1 class="text-2xl font-medium mb-5 uppercase">
                Tūrisma pakalpojumu sniedzēja nodrošinājums
            </h1>

            <div class="bg-white">
                <div class="hidden lg:grid lg:grid-cols-3 gap-0 py-1 border-b-2 border-baseblue-400 font-semibold text-left">
                    <div class="">Nodrošinājuma apjoms</div>
                    <div class="">Nodrošinājuma izsniedzējs</div>
                    <div class="">Lēmums</div>
                </div>

                @foreach($valueObject->collateralIssuers as $issuer)

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 py-1 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                        <div class="md:order-1 lg:order-1 pr-1">
                            <div class="lg:hidden font-bold text-lg py-1">Nodrošinājuma apjoms</div>
                            <div><x-tooltip text="->collateralIssuers[]->issuedAmount">{{number_format(data_get($issuer, 'issuedAmount', 0), 0, '.', ' ')}}</x-tooltip></div>
                        </div>
                        <div class="md:order-1 lg:order-1">
                            <div class="lg:hidden font-bold text-lg py-1">Nodrošinājuma izsniedzējs</div>
                            <div><x-tooltip text="->collateralIssuers[]->name">{{data_get($issuer, 'name', '-')}}</x-tooltip></div>
                        </div>
                        <div class="md:order-1 lg:order-1">
                            <div class="lg:hidden font-bold text-lg py-1">Lēmums</div>
                            <div>
                                <x-registers.index-decision>
                                    <div class="px-2 py-1">
                                        <span class="bg-yellow-200"><x-tooltip text="->collateralIssuers[]->[?501]">-</x-tooltip></span>
                                        <div>
                                            <x-tooltip text="->collateralIssuers[]->dateCollateralValidFrom">{{$valueObject->getDate(data_get($issuer, 'dateCollateralValidFrom'))}}</x-tooltip>
                                            -
                                            <x-tooltip text="->collateralIssuers[]->dateCollateralValidTo">{{$valueObject->getDate(data_get($issuer, 'dateCollateralValidTo'))}}</x-tooltip>
                                        </div>
                                    </div>
                                </x-registers.index-decision>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </x-slot:slot2>

    </x-level-two.container>

@endsection
