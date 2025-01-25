<header class="flex-grow  bg-white mb-4 px-4">
    <nav class="container mx-auto max-w-[1024px]">
        <!-- Desktop View -->
        <div class="hidden lg:flex items-stretch">
            <!-- Logo with blue border -->
            <a href="/" class="flex items-center p-2 border-l-[10px] border-[#227b8b] h111-[4.3125em] w111-60">
                <img src="http://localhost:86/storage/images/logo.png" alt="Logo" class="w-full">
            </a>

            <!-- Navigation -->
            <div class="flex-grow border11-b-2 border-gray-200 relative z-10">
                <div class="flex items-center h-full pl-4">
                    <div class="flex space-x-0">
                        <div class="relative group">
                            <input type="checkbox" id="mobile-dropdown1" class="hidden peer">
                            <label for="mobile-dropdown1" class="flex items-center text-black h-full px-4 hover:bg-baseblue hover:text-white peer-checked:bg-baseblue peer-checked:text-white">
                                        <span class="flex justify-between items-center w-full pl-4 py-3 cursor-pointer">
                                            Datubāzes
                                            <i class="fas fa-chevron-down transition-transform peer-checked:rotate-180 pl-2 scale-50"></i>
                                        </span>
                            </label>
                            <div class="hidden peer-checked:block absolute top-full left-0 bg-gray-50 px-0 py-0 mt-0 w-96 shadow-md rounded-b">
                                @foreach(\App\Services\RegisterService\Enums\RegisterEnum::sorted() as $register)
                                    <a class="block py-1 px-2 hover:text-white hover:bg-baseblue text-black" href="{{route('register.show', $register->value)}}">{!! $register->getIconElement() !!} {{$register->title()}} </a>
                                @endforeach
                            </div>
                        </div>
                        <a href="#" class="flex items-center text-black h-full px-4 py-8 hover:bg-baseblue hover:text-white">
                            Kā lietot
                        </a>
                        <a href="#" class="flex items-center text-black h-full px-4 py-8 hover:bg-baseblue hover:text-white">
                            Sazināties
                        </a>
                    </div>
                </div>
            </div>

            <!-- Action Button -->
            <div class="flex items-center px-4 border11-b-2 border-gray-200">
                <a href="https://ptac.gov.lv" class="bg-baseblue text-white px-4 py-2 hover:bg-baseblue">
                    Doties uz ptac.gov.lv
                </a>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="block lg:hidden">
            <!-- Hidden checkbox for menu toggle -->
            <input type="checkbox" id="mobile-menu-toggle" class="hidden peer">

            <div class="flex items-center justify-between border11-b-2 border-gray-200">
                <a href="/" class="flex items-center pl-4 border-l-[10px] border-[#227b8b] h-[4.3125em] w-48">
                    <img src="http://localhost:86/storage/images/logo.png" alt="Logo" class="w-full">
                </a>
                <!-- Label acts as the menu button -->

                <label for="mobile-menu-toggle" class="p-4 cursor-pointer">
                    <div class="space-y-2">
                        <span class="block w-8 h-0.5 bg-gray-600"></span>
                        <span class="block w-8 h-0.5 bg-gray-600"></span>
                        <span class="block w-8 h-0.5 bg-gray-600"></span>
                    </div>
                </label>
            </div>

            <!-- Mobile Menu - uses peer-checked to show/hide -->
            <div class="hidden peer-checked:block absolute left-0 right-0 bg-white border-b-2 border-gray-200 shadow-lg z-50">
                <div class="py-2 px-0">
                    <!-- Dropdown using nested checkbox -->
                    <div class="relative">
                        <input type="checkbox" id="mobile-dropdown" class="hidden peer">
                        <label for="mobile-dropdown" class="w-full flex justify-between items-center px-4 py-3 text-black hover:bg-baseblue hover:text-white cursor-pointer">
                            Datubāzes
                            <i class="fas fa-chevron-down transition-transform peer-checked:rotate-180"></i>
                        </label>
                        <div class="hidden peer-checked:block absolute top-full left-0 bg-gray-50 px-0 py-0 mt-0 w-96 shadow-md rounded-b">
                            @foreach(\App\Services\RegisterService\Enums\RegisterEnum::sorted() as $register)
                                <a class="block py-1 px-2 hover:text-white hover:bg-baseblue text-black" href="{{route('register.show', $register->value)}}">{!! $register->getIconElement() !!} {{$register->title()}} </a>
                            @endforeach
                        </div>
                    </div>
                    <a href="#" class="block px-4 py-3 text-black hover:bg-baseblue hover:text-white">
                        Kā lietot
                    </a>
                    <a href="#" class="block px-4 py-3 text-black hover:bg-baseblue hover:text-white">
                        Sazināties
                    </a>
                    <div class="px-4 py-3">
                        <a href="https://ptac.gov.lv" class="block bg-[#227b8b] text-white px-4 py-2 text-center hover:bg-baseblue">
                            Doties uz ptac.gov.lv
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
