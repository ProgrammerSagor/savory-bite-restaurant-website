<footer class="py-12 text-gray-900 bg-gray-50 dark:bg-gray-900 dark:text-gray-200">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-4">

            <div>
                <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{ $settings->brand_name }}</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    {{ $settings->bio }}
                </p>
            </div>

            <div>
                <h4 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}"
                            class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Home</a>
                    </li>
                    <li><a href=""
                            class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Menu</a>
                    </li>
                    <li><a href=""
                            class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">About
                            Us</a></li>
                    <li><a href=""
                            class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Gallery</a>
                    </li>
                    <li><a href=""
                            class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Contact</a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Contact Info</h4>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-600 dark:text-gray-400">
                        @if (!empty($settings->address))
                            <i class="mr-3 fas fa-map-marker-alt"></i>
                            {{ $settings->address }}
                        @endif

                    </li>
                    <li class="flex items-center text-gray-600 dark:text-gray-400">
                        @if (!empty($settings->phone))
                            <i class="mr-3 fas fa-phone"></i>
                            {{ $settings->phone }}
                        @endif


                    </li>
                    <li class="flex items-center text-gray-600 dark:text-gray-400">

                        @if (!empty($settings->email))
                            <i class="mr-3 fas fa-envelope"></i>
                            {{ $settings->email }}
                        @endif
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Follow Us</h4>
                <div class="flex space-x-2">

                    @if (!empty($settings->facebook))
                        <a href="{{ $settings->facebook }}" target="_blank"
                            class="social-icon bg-gray-300   flex justify-center items-center w-10 h-10 rounded-full dark:bg-gray-800 text-gray-900 dark:text-gray-200 hover:text-white hover:bg-[#1877F2] dark:hover:bg-[#1877F2]">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    @endif

                    @if (!empty($settings->twitter))
                        <a href="{{ $settings->twitter }}" target="_blank"
                            class="social-icon bg-gray-300   flex justify-center items-center w-10 h-10 rounded-full dark:bg-gray-800 text-gray-900 dark:text-gray-200 hover:text-white hover:bg-[#1DA1F2] dark:hover:bg-[#1DA1F2]">
                            <i class="fab fa-twitter"></i>
                        </a>
                    @endif

                    @if (!empty($settings->instagram))
                        <a href="{{ $settings->instagram }}" target="_blank"
                            class="social-icon bg-gray-300   flex justify-center items-center w-10 h-10 rounded-full dark:bg-gray-800 text-gray-900 dark:text-gray-200 hover:text-white hover:bg-gradient-to-tr hover:from-[#feda75] hover:via-[#fa7e1e] hover:to-[#d62976] dark:hover:bg-gradient-to-tr dark:hover:from-[#feda75] dark:hover:via-[#fa7e1e] dark:hover:to-[#d62976]">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif

                    @if (!empty($settings->youtube))
                        <a href="{{ $settings->youtube }}" target="_blank"
                            class="social-icon bg-gray-300   flex justify-center items-center w-10 h-10 rounded-full dark:bg-gray-800 text-gray-900 dark:text-gray-200 hover:text-white hover:bg-[#FF0000] dark:hover:bg-[#FF0000]">
                            <i class="fab fa-youtube"></i>
                        </a>
                    @endif

                    @if (!empty($settings->linkedin))
                        <a href="{{ $settings->linkedin }}" target="_blank"
                            class="social-icon bg-gray-300   flex justify-center items-center w-10 h-10 rounded-full dark:bg-gray-800 text-gray-900 dark:text-gray-200 hover:text-white hover:bg-[#0077B5] dark:hover:bg-[#0077B5]">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    @endif

                    @if (!empty($settings->whats_app))
                        <a href="{{ $settings->whats_app }}" target="_blank"
                            class="social-icon bg-gray-300   flex justify-center items-center w-10 h-10 rounded-full dark:bg-gray-800 text-gray-900 dark:text-gray-200 hover:text-white hover:bg-[#25D366] dark:hover:bg-[#25D366]">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    @endif

                    @if (!empty($settings->pinterest))
                        <a href="{{ $settings->pinterest }}" target="_blank"
                            class="social-icon bg-gray-300   flex justify-center items-center w-10 h-10 rounded-full dark:bg-gray-800 text-gray-900 dark:text-gray-200 hover:text-white hover:bg-[#E60023] dark:hover:bg-[#E60023]">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    @endif






                </div>
            </div>

        </div>

        <div class="pt-8 mt-8 text-center border-t border-gray-300 dark:border-gray-700">
            <p class="text-gray-600 dark:text-gray-400">&copy; 2025 Savory Bite Restaurant. All rights reserved.</p>
        </div>
    </div>
</footer>
