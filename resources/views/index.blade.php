@extends('layouts.layout')

@section('content')
            <!-- Search Bar -->
            <div class="relative mb-6">
                <div class="flex border border-gray-300 rounded mb-8">
                    <input type="text" placeholder="Ievadi atslēgvārdus"
                           class="flex-grow px-3 py-2 border-none focus:outline-none">
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 border-l border-gray-300">
                        Meklēt
                    </button>
                </div>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">

                @foreach($registers as $register)
                    <!-- Card 2 - Patērētāju kreditēšanas pakalpojumu sniedzēji -->
                    <a href="{{route('register.show', $register->value)}}" class="group transition-shadow hover:shadow-md hover:shadow-baseblue-700">
                        <div class="flex flex-col h-full bg-white border border-gray-200 hover:border-0">
                            <div class="relative">
                                <img src="{{ url('storage/images/'.$register->getImage())}}" alt="Kreditēšana" class="w-full h-48 object-cover bg-gray-400 opacity-40 group-hover:opacity-80">
                                <div class="absolute top-8 left-0">
                                    <div class="bg-baseblue text-white py-2 px-3 border-l-4 border-baseblue">
                                        <span class="text-lg">{{$register->title()}}</span>
                                    </div>
                                </div>
{{--                                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center text-white transition-opacity">--}}
{{--                                    <span>Atvērt</span>--}}
{{--                                </div>--}}
                            </div>
                            <div class="p-4 flex flex-col flex-grow">
                                <p class="text-gray-600 text-sm mb-4">
                                    {{$register->getDescription()}}
                                </p>
                                <div class="mt-auto text-center">
                                    <div class="inline-block px-4 py-2 bg-gray-200 text-gray-700 group-hover:bg-gray-300 rounded">
                                        Atvērt
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

                <!-- Additional cards would follow the same pattern -->
            </div>
@endsection
