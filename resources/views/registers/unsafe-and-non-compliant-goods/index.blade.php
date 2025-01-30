@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            Nedrošās un neatbilstošās preces
        </x-slot>

        <x-slot:description>
            PTAC atklātas nedrošas un neatbilstošas preces, t.sk. būvizstrādājumi.
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Apraksts</div>
                <div>Informācija</div>
                <div>Reģistrācija</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\UnsafeAndNonCompliantGoods\UnsafeAndNonCompliantGoodsValueObject $item */ @endphp
                <x-level-one-item-info
                    :data="$item"
                    :elk-data="$item->getElkRawData()"
                    :className="$item->getClass()"
                    :viewFile="$item->getViewFile()"
                    :apiUrl="$item->getElkUrl()"
                ></x-level-one-item-info>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-cols-[36%_36%_26%] gap-4 p-4 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-2">Apraksts</div>
                        <div>{{$item->ptacItemName}}</div>
                    </div>
                    <div class="md:order-2 lg:order-2">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        <x-level-one.info-block>
                            <x-level-one.info-block-item>
                                <x-slot:label>Identificējošās pazīmes</x-slot:label>
                                <x-slot:value>{{$item->ptacItemInformation}}</x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Preces vai pakalpojuma klasifikācija</x-slot:label>
                                <x-slot:value>{{$item->ptacItemGroup ?: '-'}}</x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Konstatētā neatbilstība un riski</x-slot:label>
                                <x-slot:value>{{$item->inconsistenciesAndRisks ?: '-'}}</x-slot:value>
                            </x-level-one.info-block-item>
                            <x-level-one.info-block-item>
                                <x-slot:label>Riski</x-slot:label>
                                <x-slot:value><span class="bg-yellow-200">-</span></x-slot:value>
                            </x-level-one.info-block-item>
                        </x-level-one.info-block>

                    </div>
                    <div class="md:order-1 lg:order-3">
                        <div class="lg:hidden font-bold text-lg py-2">Reģistrācija</div>
                        <x-registers.index-decision
                            :url="route('register.items.details', ['register' => $register->value, 'id'=> $item->id])"
                        >
                            <div class="px-2 py-1">
                                {{$item->ptacItemModel}}
                            </div>
                        </x-registers.index-decision>
                    </div>
                </div>
            @endforeach

        </div>

    </x-level-one.container>

@endsection
