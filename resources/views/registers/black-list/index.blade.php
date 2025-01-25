@extends('layouts.layout')

@section('content')

    <div class="max-w-7xl mx-auto">
        <h1 class="text-2xl font-bold mb-5">MELNAIS SARAKSTS</h1>


        <div class="my-6">
            <p class="mb-1 text-grey-900 text-md">
                Datubāze sniedz informāciju par komersantiem, kuri nav izpildījuši Patērētāju strīdu risināšanas komisijas lēmumus pēc lēmumu labprātīgās izpildes termiņa beigām. Informācija datubāzē tiek ievietota, pamatojoties uz Patērētāju tiesību aizsardzības likuma 26.<sup>12</sup> panta astoto daļu. Aicinām informēt, ja Patērētāju strīdu risināšanas komisijas lēmums ir izpildīts!
            </p>
        </div>


        <!-- Search Form -->
        <div class="bg-white rounded-lg shadow-sm mb-8">
            <h2 class="text-lg mb-4">Atlasīt pēc atlēgvārdiem</h2>
            <div class="flex gap-4">
                <input type="text"
                       class="flex-1 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="bg-gray-600 text-white px-6 py-2 rounded hover:bg-gray-700">
                    Veikt atlasi
                </button>
            </div>
            <p class="text-sm text-gray-500 mt-2">
                Meklēšana pēc atslēgvārdiem tiek veikta tāds: dokumenta numuriem, nosaukumiem, kopasvilkumiem, tekstiem, kā arī saistītās organizācijas nosaukumiem, juridiskajiem nosaukumiem, juridiskajām adresēm un faktiskajām adresēm.
            </p>
        </div>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[36%_36%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Komersants</div>
                <div>Informācija</div>
                <div>Lēmums</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\BlackList\BlackListValueObject $item */ @endphp
                <x-level-one-item-info
                    :data="$item"
                    :elk-data="$item->getElkRawData()"
                    :className="$item->getClass()"
                    :viewFile="$item->getViewFile()"
                    :apiUrl="$item->getElkUrl()"
                ></x-level-one-item-info>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-cols-[36%_36%_26%] gap-4 p-4 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-2">Komersants</div>
                        <x-registers.index-company
                            :companyName="$item->merchantName"
                            :regNumber="$item->merchantRegistrationNumber"
                            :phone="null"
                            :web="null"
                            :email="$item->merchantEmail"
                            :address="$item->merchantLegalAddress"
                        ></x-registers.index-company>
                    </div>
                    <div class="md:order-2 lg:order-2">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        @include('registers.black-list.partials.info', compact('item'))
                    </div>
                    <div class="md:order-1 lg:order-3">
                        <div class="lg:hidden font-bold text-lg py-2">Lēmums</div>
                        <x-registers.index-decision
                            :decisionDate="$item->getDate($item->decisionDate)"
                            :decisionNumber="$item->decisionNumber"
                            :decisionStatus="$item->decisionStatus"
                        ></x-registers.index-decision>
                    </div>
                </div>
            @endforeach





        </div>

        <div class="text-right mt-4 text-sm text-gray-600">
            Tiek rādīti ieraksti 1-2 no 2.
        </div>
    </div>

@endsection
