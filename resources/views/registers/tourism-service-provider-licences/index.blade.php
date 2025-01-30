@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            Tūrisma pakalpojumu sniedzēji
        </x-slot>

        <x-slot:description>
            <p>
                Datubāzē ir pieejama informācija par tirgū esošajiem tūrisma operatoriem un tūrisma aģentiem, kuri saņēmuši licenci kompleksu tūrisma pakalpojumu sniegšanai, kā arī reģistrētiem saistītu tūrisma pakalpojumu sniedzējiem. Kompleksu un/ vai saistītu tūrisma pakalpojumu sniedzējs var darboties vienlaikus vairākos veidos – gan kā tūrisma operators, gan tūrisma aģents, gan saistītu tūrisma pakalpojumu sniedzējs. Datubāzes mērķis ir uzturēt un aktualizēt informāciju par tirgū esošajiem tūrisma operatoriem un tūrisma aģentiem, kuri ir reģistrēti un saņēmuši licenci kompleksu tūrisma pakalpojumu sniegšanai, kā arī reģistrētiem saistītu tūrisma pakalpojumu sniedzējiem.
            </p>
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Pakalpojumu sniedzējs</div>
                <div>Informācija</div>
                <div>Licence</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\TourismServiceProviderLicenceValueObject\TourismServiceProviderLicenceValueObject $item */ @endphp
                <x-level-one-item-info
                    :data="$item"
                    :elk-data="$item->getElkRawData()"
                    :className="$item->getClass()"
                    :viewFile="$item->getViewFile()"
                    :apiUrl="$item->getElkUrl()"
                ></x-level-one-item-info>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-cols-[36%_36%_26%] gap-4 p-4 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-2">Pakalpojumu sniedzējs</div>
                        <x-registers.index-company
                            :companyName="$item->ptacCaseTargetedPersonName"
                            companyNameTooltip="->ptacCaseTargetedPersonName"
                            :regNumber="$item->ptacCaseTargetedPersonRegistrationNumber"
                            regNumberTooltip="->ptacCaseTargetedPersonRegistrationNumber"
                            :phone="$item->ptacCaseTargetedPersonPhoneNumber"
                            phoneTooltip="->ptacCaseTargetedPersonPhoneNumber"
                            :web="$item->ptacCaseTargetedPersonWebAddress"
                            webTooltip="->ptacCaseTargetedPersonWebAddress"
                            :email="$item->ptacCaseTargetedPersonEmail"
                            emailTooltip="->ptacCaseTargetedPersonEmail"
                            :address="$item->ptacCaseTargetedPersonAddressDisplayName"
                            addressTooltip="->ptacCaseTargetedPersonAddressDisplayName"
                            :registrationYear="$item->ptacCaseTargetedPersonRegistrationYear"
                            registrationYearTooltip="->ptacCaseTargetedPersonRegistrationYear"
                        ></x-registers.index-company>
                    </div>
                    <div class="md:order-2 lg:order-2">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        <x-level-one.info-block>
                            <x-level-one.info-block-item>
                                <x-slot:label>Sniegtie pakalpojumi</x-slot:label>
                                <x-slot:value><x-tooltip text="->typeOfLicensing">{{$item->typeOfLicensing}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Pakalpojumu sniedzēja darbības veids</x-slot:label>
                                <x-slot:value><x-tooltip text="->[?300]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Atbildīgās personas telefona numurs</x-slot:label>
                                <x-slot:value><x-tooltip text="->[?301]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Atbildīgās personas e-pasta adrese</x-slot:label>
                                <x-slot:value><x-tooltip text="->[?302]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Pakalpojuma tirdzniecības tīmekļa vietne</x-slot:label>
                                <x-slot:value><x-tooltip text="->[?303]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Pakalpojumu sniegšanas vieta</x-slot:label>
                                <x-slot:value><x-tooltip text="->[?304]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Nodrošinājuma apjoms</x-slot:label>
                                <x-slot:value><x-tooltip text="->collateralTotalSum">{{number_format($item->collateralTotalSum, 0, ',', ' ')}}</x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                        </x-level-one.info-block>

                    </div>
                    <div class="md:order-1 lg:order-3">
                        <div class="lg:hidden font-bold text-lg py-2">Licence</div>
                        <x-registers.index-decision
                            :url="route('register.items.details', ['register' => $register->value, 'id'=> $item->id])"
                        >
                            <div class="px-2 py-1">
                                <x-tooltip text="->registrationNumber">{{$item->registrationNumber}}</x-tooltip>
                                <div>
                                    <x-tooltip text="->dateRegistered">{{$item->getDate($item->dateRegistered)}}</x-tooltip>
                                </div>
                            </div>
                        </x-registers.index-decision>
                    </div>
                </div>
            @endforeach

        </div>

    </x-level-one.container>

@endsection
