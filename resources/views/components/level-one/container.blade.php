<div class="max-w-7xl mx-auto">

    <h1 class="text-2xl font-medium mb-5 uppercase">
        {{$title ?? null}}
    </h1>

    <div class="my-6">
        <p class="mb-1 text-grey-900 text-md">
            {{ $description ?? null }}
        </p>
    </div>


    <!-- Search Form -->
    {{--        <div class="bg-white rounded-lg shadow-sm mb-8">--}}
    {{--            <h2 class="text-lg mb-4">Atlasīt pēc atlēgvārdiem</h2>--}}
    {{--            <div class="flex gap-4">--}}
    {{--                <input type="text"--}}
    {{--                       class="flex-1 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">--}}
    {{--                <button class="bg-gray-600 text-white px-6 py-2 rounded hover:bg-gray-700">--}}
    {{--                    Veikt atlasi--}}
    {{--                </button>--}}
    {{--            </div>--}}
    {{--            <p class="text-sm text-gray-500 mt-2">--}}
    {{--                Meklēšana pēc atslēgvārdiem tiek veikta tāds: dokumenta numuriem, nosaukumiem, kopasvilkumiem, tekstiem, kā arī saistītās organizācijas nosaukumiem, juridiskajiem nosaukumiem, juridiskajām adresēm un faktiskajām adresēm.--}}
    {{--            </p>--}}
    {{--        </div>--}}

    {{$slot}}


    <div class="text-right mt-4 text-sm text-gray-600">
        Tiek rādīti ieraksti 1-2 no 2.
    </div>
</div>
