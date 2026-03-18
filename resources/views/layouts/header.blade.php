<header class="fixed top-0 z-50 w-full">
    <nav class="bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-between h-24">
                <div class="flex items-center">
                    <div class="flex items-center flex-shrink-0">
                        <a href="{{ route('home') }}">

                            <img src="{{ asset('storage/' . $settings->brand_light) }}"
                                class="hidden w-32 transition duration-500 h-18 revart dark:block" alt="">

                            <img src="{{ asset('storage/' . $settings->logo_dark) }}"
                                class="w-32 transition duration-500 h-18 revart dark:hidden" alt="">
                        </a>
                    </div>




                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'border-b-2 border-primary text-primary' : 'text-gray-500' }} inline-flex items-center px-1 pt-1 text-sm font-medium  hover:border-b-2   dark:text-gray-300 hover:border-gray-300 hover:text-gray-700 dark:hover:text-gray-100">
                            Home
                        </a>

                        <a href="{{ route('menu') }}"
                            class="{{ request()->routeIs('menu') ? 'border-b-2 border-primary text-primary' : 'text-gray-500' }} inline-flex items-center px-1 pt-1 text-sm font-medium  hover:border-b-2   dark:text-gray-300 hover:border-gray-300 hover:text-gray-700 dark:hover:text-gray-100">Menu</a>
                        <a href="{{ route('reservations') }}"
                            class="{{ request()->routeIs('reservations') ? 'border-b-2 border-primary text-primary' : 'text-gray-500' }} inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:border-b-2 dark:text-gray-300 hover:border-gray-300 hover:text-gray-700 dark:hover:text-gray-100">Reservations</a>
                        <a href="{{ route('blogs') }}"
                            class=" {{ request()->routeIs('blogs') ? 'border-b-2 border-primary text-primary' : 'text-gray-500' }} inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:border-b-2 dark:text-gray-300 hover:border-gray-300 hover:text-gray-700 dark:hover:text-gray-100">Blogs</a>
                        <a href="{{ route('about') }}"
                            class="{{ request()->routeIs('about') ? 'border-b-2 border-primary text-primary' : 'text-gray-500' }} inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:border-b-2 dark:text-gray-300 hover:border-gray-300 hover:text-gray-700 dark:hover:text-gray-100">About</a>
                        <a href="{{ route('gallery') }}"
                            class="{{ request()->routeIs('gallery') ? 'border-b-2 border-primary text-primary' : 'text-gray-500' }} inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:border-b-2 dark:text-gray-300 hover:border-gray-300 hover:text-gray-700 dark:hover:text-gray-100">Gallery</a>
                        <a href="{{ route('contact') }}"
                            class="{{ request()->routeIs('contact') ? 'border-b-2 border-primary text-primary' : 'text-gray-500' }} inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:border-b-2 dark:text-gray-300 hover:border-gray-300 hover:text-gray-700 dark:hover:text-gray-100">Contact</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2">


                    <button onclick="themeToggle()"
                        class="w-10 h-10 p-2 text-gray-500 bg-gray-200 rounded-full dark:bg-gray-900 dark:text-gray-200 hover:text-gray-700 hover:shadow-md hover:bg-gray-300 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="hidden fas fa-sun dark:block"></i>
                    </button>



                    <a href="{{ route('cart') }}"
                        class="relative flex items-center justify-center w-10 h-10 text-gray-700 transition bg-gray-200 rounded-full hover:bg-primary/10 dark:bg-gray-900 dark:text-gray-300 dark:hover:bg-primary/20">
                        <i class="fa-solid fa-cart-plus"></i>

                        <span
                            class="absolute top-0 right-0 inline-flex items-center justify-center w-4 h-4 text-xs text-white rounded-full bg-primary">
                            3
                        </span>
                    </a>

                    <a href="{{ route('profile.edit') }}"
                        class="flex items-center justify-center w-10 h-10 text-gray-700 transition bg-gray-200 rounded-full lg:hidden dark:bg-gray-900 dark:text-gray-300 hover:shadow-md hover:bg-gray-300 dark:hover:bg-gray-800">
                        <i class="text-lg fa-solid fa-user"></i>
                    </a>

                    <div class="hidden lg:block">
                        @auth

                            <div class="relative group">
                                <button
                                    class="flex items-center justify-center w-10 h-10 text-gray-700 transition bg-gray-200 rounded-full dark:bg-gray-900 dark:text-gray-300 hover:shadow-md hover:bg-gray-300 dark:hover:bg-gray-800">
                                    <i class="text-lg fa-solid fa-user"></i>
                                </button>

                                <div
                                    class="absolute right-0 hidden w-40 p-3 text-gray-700 bg-white rounded-lg shadow-xl group-hover:block dark:bg-gray-900 dark:text-gray-200">

                                    <a href="{{ route('profile.edit') }}"
                                        class="flex items-center px-3 py-2 text-sm transition rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <i class="mr-2 fa-solid fa-id-card"></i> Profile
                                    </a>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="flex items-center w-full px-3 py-2 text-sm text-left text-red-600 transition rounded-md hover:bg-red-100 dark:hover:bg-red-800/40 dark:text-red-400">
                                            <i class="mr-2 fa-solid fa-right-from-bracket"></i> Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="flex items-center space-x-3 md:ml-4">
                                <a href="{{ route('login') }}"
                                    class="px-4 py-2 text-sm font-medium text-white transition-all rounded-md shadow-md bg-primary hover:bg-primary-dark hover:scale-105">
                                    Login
                                </a>
                                <a href="{{ route('register') }}"
                                    class="px-4 py-2 text-sm font-medium transition-all border rounded-md border-primary text-primary hover:bg-primary hover:text-white hover:scale-105 dark:text-white dark:border-primary">
                                    Register
                                </a>
                            </div>

                        @endauth
                    </div>


                    <div class="flex items-center md:ml-4 md:hidden">
                        <button onclick="mobileBtn()"
                            class="inline-flex items-center justify-center p-2 text-gray-500 rounded-md dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>




        <div id="mobile-menu" class="hidden md:hidden">

            <div
                class="pt-3 pb-4 space-y-2 bg-white border-t border-gray-200 shadow-md dark:bg-gray-900 dark:border-gray-700">

                <a href="{{ route('home') }}"
                    class="flex items-center px-4 py-3 text-base font-medium text-white rounded-lg shadow-sm bg-primary">
                    <i class="mr-2 fa-solid fa-house"></i> Home
                </a>

                <a href="{{ route('menu') }}"
                    class="flex items-center px-4 py-3 text-base font-medium text-gray-700 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                    <i class="mr-2 fa-solid fa-utensils"></i> Menu
                </a>

                <a href="{{ route('reservations') }}"
                    class="flex items-center px-4 py-3 text-base font-medium text-gray-700 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                    <i class="mr-2 fa-solid fa-calendar-check"></i> Reservations
                </a>

                <a href="{{ route('blogs') }}"
                    class="flex items-center px-4 py-3 text-base font-medium text-gray-700 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                    <i class="mr-2 fa-solid fa-blog"></i> Blogs
                </a>

                <a href="{{ route('about') }}"
                    class="flex items-center px-4 py-3 text-base font-medium text-gray-700 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                    <i class="mr-2 fa-solid fa-circle-info"></i> About
                </a>

                <a href="{{ route('gallery') }}"
                    class="flex items-center px-4 py-3 text-base font-medium text-gray-700 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                    <i class="mr-2 fa-solid fa-image"></i> Gallery
                </a>

                <a href="{{ route('contact') }}"
                    class="flex items-center px-4 py-3 text-base font-medium text-gray-700 rounded-lg dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                    <i class="mr-2 fa-solid fa-envelope"></i> Contact
                </a>

            </div>

            <div class="flex justify-center py-4 bg-white shadow-inner lg:hidden dark:bg-gray-900">
                @auth
                    <form method="POST" action="">
                        @csrf
                        <button type="submit"
                            class="flex items-center px-4 py-2 text-sm font-medium text-white transition rounded-lg bg-primary hover:bg-primary-dark">
                            <i class="mr-2 fa-solid fa-right-from-bracket"></i>
                            Logout
                        </button>
                    </form>
                @else
                    <div class="flex items-center space-x-3">
                        <a href=""
                            class="px-4 py-2 text-sm font-medium text-white transition rounded-lg bg-primary hover:bg-primary-dark">
                            Login
                        </a>

                        <a href="{{ route('register') }}"
                            class="px-4 py-2 text-sm font-medium text-gray-700 transition border rounded-lg dark:text-white border-primary hover:bg-primary hover:text-white">
                            Register
                        </a>
                    </div>
                @endauth
            </div>
        </div>

    </nav>
</header>
