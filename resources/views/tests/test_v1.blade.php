@extends('layouts.layout')

@section('content')

    <header class="">
        <div class="container mx-auto px-4">
            <nav class="flex items-center justify-between h-16">
                <!-- Logo section -->
                <div class="flex items-center border-l-[10px] border-custom-blue border-solid">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="Patērētāju tiesību aizsardzības centrs" class="h-12">
                </div>

                <!-- Navigation Links -->
                <div class="flex items-center space-x-6">
                    <!-- Dropdown -->
                    <div class="relative">
                        <button class="flex items-center text-white bg-teal-700 px-4 py-2 rounded">
                            Datubāzes
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Regular Nav Links -->
                    <a href="#" class="text-gray-700 hover:text-gray-900">Kā lietot</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Saziņāties</a>

                    <!-- CTA Button -->
                    <a href="#" class="bg-teal-700 text-white px-4 py-2 rounded hover:bg-teal-800">
                        Doties uz ptac.gov.lv
                    </a>
                </div>
            </nav>
        </div>
    </header>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.querySelector('[data-dropdown-toggle]');
            const dropdownMenu = document.querySelector('[data-dropdown-menu]');

            dropdownButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
@endsection
