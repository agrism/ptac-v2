@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            Rakstveida apņemšanās
        </x-slot>

        <x-slot:description>
            Datubāze satur informāciju par PTAC saņemtām komersantu rakstveida apņemšanām par labprātīgu patērētāju kolektīvo interešu pārkāpumu novēršanu. Rakstveida apņemšanās nozīmē to, ka komersants ir atzinis savu vainu konstatētajā pārkāpumā un labprātīgi apņēmies no novērst. Līdz ar to par šiem jautājumiem lēmumu nav bijis nepieciešams pieņemt.
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Saistītie komersanti</div>
                <div>Informācija</div>
                <div>Apņemšanās</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\WrittenFormCommitment\WrittenFormCommitmentValueObject $item */ @endphp
                <x-level-one-item-info
                    :data="$item"
                    :elk-data="$item->getElkRawData()"
                    :className="$item->getClass()"
                    :viewFile="$item->getViewFile()"
                    :apiUrl="$item->getElkUrl()"
                ></x-level-one-item-info>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-cols-[36%_36%_26%] gap-4 p-4 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-2">Saistītie komersanti</div>
                        <x-registers.index-company
                            :companyName="$item->merchantName"
                            companyNameTooltip="->merchantName"
                            :regNumber="$item->merchantRegistrationNumber"
                            regNumberTooltip="->merchantRegistrationNumber"
                            :phone="null"
                            :web="null"
                            :email="null"
                            :address="$item->merchantLegalAddress"
                            addressTooltip="->merchantLegalAddress"
                        ></x-registers.index-company>
                    </div>
                    <div class="md:order-2 lg:order-2">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        <x-level-one.info-block>
                            <x-level-one.info-block-item>
                                <x-slot:label>Organizācijas juridiskais nosaukums uz rakstveida apņemšanās izdošanas brīdi</x-slot:label>
                                <x-slot:value><x-tooltip text="->[500]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Organizācijas reģistrācijas numurs uz rakstveida apņemšanās izdošanas brīdi</x-slot:label>
                                <x-slot:value><x-tooltip text="->[501]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Apņemšanās veids</x-slot:label>
                                <x-slot:value><x-tooltip text="->[502]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Pielikumi</x-slot:label>
                                <x-slot:value><x-tooltip text="->[503]"><span class="bg-yellow-200">-</span></x-tooltip></x-slot:value>
                            </x-level-one.info-block-item>
                        </x-level-one.info-block>
                    </div>
                    <div class="md:order-1 lg:order-3">
                        <div class="lg:hidden font-bold text-lg py-2">Apņemšanās</div>
                        <x-registers.index-decision
                            :url="route('register.items.details', ['register' => $register->value, 'id'=> $item->id])"
                        >
                            <div class="px-2 py-1">
                                <x-tooltip text="->dVSDocNumber">{{$item->dVSDocNumber}}</x-tooltip>
                                <div>
                                    <x-tooltip text="->registrationDate">{{$item->getDate($item->registrationDate)}}</x-tooltip>
                                </div>
                            </div>
                        </x-registers.index-decision>
                    </div>
                </div>
            @endforeach

        </div>

    </x-level-one.container>

@endsection
