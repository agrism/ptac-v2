<div class="max-w-7xl mx-auto">

    <h1 class="text-2xl font-medium mb-5 uppercase">
        {{$title ?? null}}
    </h1>

    <h1 class="text-xl font-medium my-5">
        Pamatinformācija
    </h1>

    <div>
        @if(isset($valueObject))
        @php/** @var \App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject $valueObject */ @endphp
        <x-level-one-item-info
            :data="$valueObject"
            :elk-data="$valueObject->getElkRawData()"
            :className="$valueObject->getClass()"
            :viewFile="$valueObject->getViewFile()"
            :apiUrl="$valueObject->getElkUrl()"
        ></x-level-one-item-info>
        @endif
    </div>


    <div class="bg-white">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4">
            {{$slot}}
        </div>
    </div>

    @if($companyCard ?? null)
    <div class="bg-white">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4 mt-8">
            <div class="p-5 border border-gray-300">
                {{$companyCard ?? null}}
            </div>
            <div></div>
            <div></div>
        </div>
    </div>
    @endif

    <div class="my-14">
        {{$slot2 ?? null}}
    </div>


</div>
