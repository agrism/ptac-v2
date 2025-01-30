@extends('layouts.layout')

@section('content')

    <x-level-one.container>
        <x-slot:title>
            Aizdomīgie interneta un saziņas objekti
        </x-slot>

        <x-slot:description>
            <p>
                Datubāzē tiek ietverta informācija, lai sabiedrību brīdinātu par aizdomīgiem interneta objektiem, lai preventīvi brīdinātu sabiedrību un novērstu iespējamu kaitējumu patērētājiem.
            </p>
            <p class="mt-4 mb-2">Objektu datubāzē iekļauj, ja:</p>

            <ul class="list-disc pl-8">
                <li>tas, tiek izmantots preču un pakalpojumu pārdošanai, ja attiecīgajai darbībai nav saņemta speciālā atļauja (licence) vai tā nav reģistrēta vai arī attiecīgā preces nav reģistrēta;</li>
                <li> kurā vai kuru izmantojot, tiek slēgti distances līgumi, kuri sistemātiski netiek pildīti;</li>
                <li>kurā netiek ievērotas distances tirdzniecības prasības, tai skaitā, attiecībā uz patērētājiem sniedzamu informāciju un atteikuma tiesībām;</li>
                <li>tas tiek izmantots patērētāju maldināšanai par preču vai pakalpojumu īpašībām;</li>
                <li>tas tiek izmantots, lai patērētājiem piegādātu nepasūtītas preces, vai radīti radītu abonēšanas slazdu riskus;</li>
                <li>tas tiek izmantots uzstājīgu un nevēlamu komerciālo paziņojumu sūtīšanai patērētājiem;</li>
                <li>kurā tiek aizskartas mazāk aizsargāto patērētāju intereses (piemēram, smēķēšanas produktu piedāvāšana, pārdošana nepilngadīgiem);</li>
                <li>un citos gadījumos, kuros saskatāmi būtiski patērētāju kolektīvo interešu pārkāpuma riski.</li>
            </ul>
        </x-slot>

        <!-- Results Table -->
        <div class="bg-white">
            <div class="hidden lg:grid lg:grid-cols-[72%_26%] grid-cols-3 gap-4 p-4 border-b-3 border-baseblue-400 font-semibold">
                <div>Informācija</div>
                <div>Reģistrācija</div>
            </div>

            @foreach($items as $item)
                @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\SuspiciousInternetAndCommunicationObjectsDecision\SuspiciousInternetAndCommunicationObjectsDecisionValueObject $item */ @endphp
                <x-level-one-item-info
                    :data="$item"
                    :elk-data="$item->getElkRawData()"
                    :className="$item->getClass()"
                    :viewFile="$item->getViewFile()"
                    :apiUrl="$item->getElkUrl()"
                ></x-level-one-item-info>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[72%_26%] gap-4 p-4 border-b hover:bg-gray-50 border-b-2 border-baseblue-400 lg:border-b-gray-200">
                    <div class="md:order-1 lg:order-1">
                        <div class="lg:hidden font-bold text-lg py-2">Informācija</div>
                        <div>{{$item->decisionObjectName}}</div>
                    </div>
                    <div class="md:order-1 lg:order-3">
                        <div class="lg:hidden font-bold text-lg py-2">Reģistrācija</div>
                        <x-registers.index-decision
                            :url="route('register.items.details', ['register' => $register->value, 'id'=> $item->id])"
                        >
                            <div class="px-2 py-1">
                                {{$item->dvsDocumentNumber}}
                                <div>
                                    {{$item->getDate($item->dVSDocumentRegistrationDate)}}
                                </div>
                            </div>
                        </x-registers.index-decision>
                    </div>
                </div>
            @endforeach

        </div>

    </x-level-one.container>

@endsection
