<header class="fixed top-0 z-50 w-full">
    <nav class="bg-white border-b border-gray-200">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-between h-24">
                <div class="flex items-center">
                    <div class="flex items-center flex-shrink-0">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/savory_logo.png') }}"
                                class="w-32 transition duration-500 h-18 revart " alt="">
                        </a>
                    </div>

                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="{{ route('home') }}"
                            class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-900 border-b-2 menu-link border-primary">Home</a>
                        <a href="{{ route('menu') }}"
                            class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 border-b-2 border-transparent menu-link hover:border-gray-300 hover:text-gray-700">Menu</a>
                        <a href="{{ route('reservations') }}"
                            class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 border-b-2 border-transparent menu-link hover:border-gray-300 hover:text-gray-700">Reservations</a>
                        <a href="{{ route('blogs') }}"
                            class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 border-b-2 border-transparent menu-link hover:border-gray-300 hover:text-gray-700">Blogs</a>
                        <a href="{{ route('about') }}"
                            class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 border-b-2 border-transparent menu-link hover:border-gray-300 hover:text-gray-700">About</a>
                        <a href="{{ route('gallery') }}"
                            class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 border-b-2 border-transparent menu-link hover:border-gray-300 hover:text-gray-700">Gallery</a>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 border-b-2 border-transparent menu-link hover:border-gray-300 hover:text-gray-700">Contact</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <button onclick="themeToggle()"
                        class="p-2 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                        <i class="fas fa-moon"></i>
                        <i class="hidden fas fa-sun"></i>
                    </button>

                    {{-- <div class="flex items-center space-x-3 md:ml-4">
                        <a href=""
                            class="px-4 py-2 text-sm font-medium text-white transition rounded-md bg-primary hover:bg-primary-dark">
                            Login
                        </a>

                        <a href=""
                            class="px-4 py-2 text-sm font-medium transition border rounded-md text-ehite border-primary hover:bg-primary hover:text-white">
                            Register
                        </a>
                    </div> --}}

                    <a href="{{ route('cart') }}"
                        class="relative flex items-center justify-center w-10 h-10 text-gray-700 transition bg-gray-200 rounded-full hover:bg-primary/10">
                        <i class="fa-solid fa-cart-plus"></i>

                        <span
                            class="absolute top-0 right-0 inline-flex items-center justify-center w-4 h-4 text-xs text-white rounded-full bg-primary">
                            3
                        </span>
                    </a>


                    <form method="POST" action="">
                        @csrf
                        <button type="submit"
                            class="flex items-center px-4 py-2 text-sm font-medium text-white transition rounded-md bg-primary hover:bg-primary-dark">
                            <i class="mr-2 fa-solid fa-right-from-bracket"></i>
                            Logout
                        </button>
                    </form>

                
                    <div class="flex items-center md:ml-4 md:hidden">
                        <button onclick="mobileBtn()"
                            class="inline-flex items-center justify-center p-2 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden">
            <div class="pt-2 pb-3 space-y-1 bg-white border-t border-gray-200">
                <a href="{{ route('home') }}"
                    class="block py-2 pl-3 pr-4 text-base font-medium text-white border-l-4 bg-primary border-primary">Home</a>
                <a href="{{ route('menu') }}"
                    class="block py-2 pl-3 pr-4 text-base font-medium text-gray-500 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700">Menu</a>
                <a href="{{ route('reservations') }}"
                    class="block py-2 pl-3 pr-4 text-base font-medium text-gray-500 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700">Reservations</a>

                <a href="{{ route('blogs') }}"
                    class="block py-2 pl-3 pr-4 text-base font-medium text-gray-500 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700">Blogs</a>

                <a href="{{ route('about') }}"
                    class="block py-2 pl-3 pr-4 text-base font-medium text-gray-500 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700">About</a>
                <a href="{{ route('gallery') }}"
                    class="block py-2 pl-3 pr-4 text-base font-medium text-gray-500 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700">Gallery</a>
                <a href="{{ route('contact') }}"
                    class="block py-2 pl-3 pr-4 text-base font-medium text-gray-500 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700">Contact</a>
            </div>
        </div>
    </nav>
</header>
