@extends('layouts.main')
@section('title', 'Blogs Page')

@section('style')

@endsection

@section('conntent')



    <main class="container px-4 py-8 mx-auto mt-20 md:mt-24">
        <div class="mb-12 text-center">
            <h1 class="mb-4 text-4xl font-bold text-gray-800 md:text-5xl">Savory Bite Blog</h1>
            <p class="max-w-2xl mx-auto text-lg text-gray-600">Discover culinary secrets, recipes, and the
                latest news from our kitchen</p>

            <div class="max-w-md mx-auto mt-6">
                <div class="relative">
                    <input type="text" placeholder="Search articles..."
                        class="w-full py-3 pl-10 pr-4 text-gray-800 placeholder-gray-500 transition-all bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    <i class="absolute text-gray-400 transform -translate-y-1/2 fas fa-search left-3 top-1/2"></i>
                </div>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mt-8">
                <button
                    class="px-4 py-2 text-sm font-medium text-white transition-all rounded-full bg-primary hover:bg-primary-dark active">All
                    Posts</button>
                <button
                    class="px-4 py-2 text-sm font-medium text-gray-700 transition-all bg-gray-200 rounded-full hover:bg-gray-300">Recipes</button>
                <button
                    class="px-4 py-2 text-sm font-medium text-gray-700 transition-all bg-gray-200 rounded-full hover:bg-gray-300">Restaurant
                    News</button>
                <button
                    class="px-4 py-2 text-sm font-medium text-gray-700 transition-all bg-gray-200 rounded-full hover:bg-gray-300">Cooking
                    Tips</button>
                <button
                    class="px-4 py-2 text-sm font-medium text-gray-700 transition-all bg-gray-200 rounded-full hover:bg-gray-300">Chef
                    Stories</button>
            </div>
        </div>

        <div class="flex flex-col gap-8 lg:flex-row">
            <div class="lg:w-2/3">
                <div
                    class="mb-8 overflow-hidden transition-all duration-300 bg-gray-100 shadow-lg rounded-2xl hover:shadow-xl">
                    <div class="md:flex">
                        <div class="flex items-center justify-center md:w-2/5 ">
                            <img src="{{ asset('assets/images/b1.jpg') }}" class="w-full md:max-h-[22rem]" alt="">

                        </div>
                        <div class="p-6 md:w-3/5 md:p-8">
                            <div class="flex items-center mb-4 space-x-4">
                                <span class="px-3 py-1 text-xs font-bold rounded-full bg-primary/10 text-primary">Restaurant
                                    News</span>
                                <span class="text-sm text-gray-500"><i class="mr-1 far fa-clock"></i> 2
                                    days ago</span>
                            </div>
                            <h2 class="mb-4 text-2xl font-bold text-gray-800">Savory Bite Awarded Michelin
                                Star for Excellence</h2>
                            <p class="mb-6 text-gray-600">We are thrilled to announce that Savory Bite
                                Restaurant has been awarded a Michelin Star in the 2023 guide. This recognition celebrates
                                our commitment to culinary excellence...</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="flex items-center justify-center w-10 h-10 bg-gray-300 rounded-full">
                                        <i class="text-gray-600 fas fa-user"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-800">Chef Marco</p>
                                        <p class="text-xs text-gray-500">Head Chef</p>
                                    </div>
                                </div>
                                <a href="{{ route('blog_details') }}"
                                    class="flex items-center px-4 py-2 text-white transition-colors rounded-lg bg-primary hover:bg-primary-dark">
                                    Read More <i class="ml-2 fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2" id="blog-posts">
                    <div
                        class="overflow-hidden transition-all duration-300 bg-gray-100 shadow-lg rounded-2xl hover:shadow-xl">
                        <div
                            class="flex items-center justify-center h-48 md:h-52 bg-gradient-to-br from-amber-100 to-amber-200">
                            <img src="{{ asset('assets/images/b4.jpg') }}" class="w-full h-full" alt="">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3 space-x-4">
                                <span
                                    class="px-3 py-1 text-xs font-bold rounded-full bg-amber-100 text-amber-700">Recipes</span>
                                <span class="text-sm text-gray-500"><i class="mr-1 far fa-clock"></i> 1
                                    week ago</span>
                            </div>
                            <h3 class="mb-3 text-xl font-bold text-gray-800">Perfect Neapolitan Pizza at
                                Home</h3>
                            <p class="mb-4 text-gray-600">Learn the secrets to creating authentic
                                Neapolitan pizza with our step-by-step guide. From dough preparation to wood-fired flavor...
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-gray-300 rounded-full">
                                        <i class="text-xs text-gray-600 fas fa-user"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Chef Sophia</span>
                                </div>
                                <a href="{{ route('blog_details') }}" class="flex items-center px-4 py-2 text-white transition-colors rounded-lg bg-primary hover:bg-primary-dark">
                                    Read More <i class="ml-2 fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span
                                    class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded">#pizza</span>
                                <span
                                    class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded">#italian</span>
                                <span
                                    class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded">#dough</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="overflow-hidden transition-all duration-300 bg-gray-100 shadow-lg rounded-2xl hover:shadow-xl">
                        <div
                            class="flex items-center justify-center h-48 md:h-52 bg-gradient-to-br from-green-100 to-green-200">
                            <img src="{{ asset('assets/images/b3.jpg') }}" class="w-full h-full" alt="">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3 space-x-4">
                                <span
                                    class="px-3 py-1 text-xs font-bold text-green-700 bg-green-100 rounded-full">Cooking
                                    Tips</span>
                                <span class="text-sm text-gray-500"><i class="mr-1 far fa-clock"></i> 2
                                    weeks ago</span>
                            </div>
                            <h3 class="mb-3 text-xl font-bold text-gray-800">5 Essential Knife Skills Every
                                Home Cook Should Master</h3>
                            <p class="mb-4 text-gray-600">Improve your cooking efficiency and safety with
                                these fundamental knife techniques. Proper cutting methods can transform your culinary
                                experience...</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-gray-300 rounded-full">
                                        <i class="text-xs text-gray-600 fas fa-user"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Chef Antonio</span>
                                </div>
                                <a href="{{ route('blog_details') }}"
                                    class="flex items-center px-4 py-2 text-white transition-colors rounded-lg bg-primary hover:bg-primary-dark">
                                    Read More <i class="ml-2 fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span
                                    class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded">#technique</span>
                                <span
                                    class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded">#knife</span>
                                <span
                                    class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded">#skills</span>
                            </div>
                        </div>
                    </div>


                </div>


            </div>

            <div class="lg:w-1/3">
                <div class="p-6 mb-6 transition-colors duration-300 bg-white shadow-lg rounded-2xl">
                    <h3 class="mb-4 text-xl font-bold text-gray-800">About Savory Bite Blog</h3>
                    <p class="mb-4 text-gray-600">Welcome to our culinary journal where we share recipes,
                        cooking tips, restaurant news, and stories from our kitchen.</p>
                    <div class="flex space-x-3">
                        <button
                            class="flex-1 py-2 text-sm font-medium text-white transition-colors rounded-lg bg-primary hover:bg-primary-dark">
                            Subscribe
                        </button>
                        <button
                            class="flex-1 py-2 text-sm font-medium text-gray-700 transition-colors bg-gray-200 rounded-lg hover:bg-gray-300">
                            Contact
                        </button>
                    </div>
                </div>

                <div class="p-6 mb-6 transition-colors duration-300 bg-white shadow-lg rounded-2xl">
                    <h3 class="mb-4 text-xl font-bold text-gray-800">Popular Posts</h3>
                    <div class="space-y-4">
                        <div class="flex space-x-3 cursor-pointer group">
                            <div
                                class="flex items-center justify-center w-16 h-16 transition-transform bg-amber-100 group-hover:scale-105">
                                <img src="{{ asset('assets/images/b3.jpg') }}" class="w-full h-full rounded-lg"
                                    alt="">
                            </div>
                            <div>
                                <h4
                                    class="font-medium text-gray-800 transition-colors group-hover:text-primary">
                                    Perfect Neapolitan Pizza</h4>
                                <div class="flex items-center mt-1 text-xs text-gray-500">
                                    <i class="mr-1 far fa-eye"></i> 2.4K views
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3 cursor-pointer group">
                            <div
                                class="flex items-center justify-center w-16 h-16 transition-transform bg-green-100 group-hover:scale-105">
                                <img src="{{ asset('assets/images/g5.jpg') }}" class="w-full h-full rounded-lg"
                                    alt="">
                            </div>
                            <div>
                                <h4
                                    class="font-medium text-gray-800 transition-colors group-hover:text-primary">
                                    5 Essential Knife Skills</h4>
                                <div class="flex items-center mt-1 text-xs text-gray-500">
                                    <i class="mr-1 far fa-eye"></i> 1.8K views
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3 cursor-pointer group">
                            <div
                                class="flex items-center justify-center w-16 h-16 transition-transform bg-blue-100 group-hover:scale-105">
                                <img src="{{ asset('assets/images/b4.jpg') }}" class="w-full h-full rounded-lg"
                                    alt="">
                            </div>
                            <div>
                                <h4
                                    class="font-medium text-gray-800 transition-colors group-hover:text-primary">
                                    Seafood Paella Masterclass</h4>
                                <div class="flex items-center mt-1 text-xs text-gray-500">
                                    <i class="mr-1 far fa-eye"></i> 1.5K views
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 mb-6 transition-colors duration-300 bg-white shadow-lg rounded-2xl">
                    <h3 class="mb-4 text-xl font-bold text-gray-800">Categories</h3>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-700">Recipes</span>
                            <span
                                class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">12</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-700">Cooking Tips</span>
                            <span
                                class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">8</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-700">Restaurant News</span>
                            <span
                                class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">5</span>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <span class="text-gray-700">Chef Stories</span>
                            <span
                                class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">7</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 text-white shadow-lg bg-gradient-to-br from-primary to-pink-600 rounded-2xl">
                    <h3 class="mb-2 text-xl font-bold">Subscribe to Newsletter</h3>
                    <p class="mb-4 opacity-90">Get the latest recipes and news delivered to your inbox</p>
                    <div class="space-y-3">
                        <input type="email" placeholder="Your email address"
                            class="w-full px-4 py-3 transition-colors border rounded-lg bg-white/20 placeholder-white/70 border-white/30 focus:outline-none focus:bg-white/30">
                        <button
                            class="w-full py-3 font-medium transition-colors bg-white rounded-lg text-primary hover:bg-gray-100">
                            Subscribe Now
                        </button>
                    </div>
                </div>

                <div class="p-6 mt-6 transition-colors duration-300 bg-white shadow-lg rounded-2xl">
                    <h3 class="mb-4 text-xl font-bold text-gray-800">Popular Tags</h3>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="px-3 py-1 text-sm text-gray-700 transition-colors bg-gray-100 rounded-full cursor-pointer hover:bg-primary hover:text-white">#pizza</span>
                        <span
                            class="px-3 py-1 text-sm text-gray-700 transition-colors bg-gray-100 rounded-full cursor-pointer hover:bg-primary hover:text-white">#italian</span>
                        <span
                            class="px-3 py-1 text-sm text-gray-700 transition-colors bg-gray-100 rounded-full cursor-pointer hover:bg-primary hover:text-white">#seafood</span>
                        <span
                            class="px-3 py-1 text-sm text-gray-700 transition-colors bg-gray-100 rounded-full cursor-pointer hover:bg-primary hover:text-white">#technique</span>
                        <span
                            class="px-3 py-1 text-sm text-gray-700 transition-colors bg-gray-100 rounded-full cursor-pointer hover:bg-primary hover:text-white">#dessert</span>
                        <span
                            class="px-3 py-1 text-sm text-gray-700 transition-colors bg-gray-100 rounded-full cursor-pointer hover:bg-primary hover:text-white">#vegan</span>
                        <span
                            class="px-3 py-1 text-sm text-gray-700 transition-colors bg-gray-100 rounded-full cursor-pointer hover:bg-primary hover:text-white">#grilling</span>
                        <span
                            class="px-3 py-1 text-sm text-gray-700 transition-colors bg-gray-100 rounded-full cursor-pointer hover:bg-primary hover:text-white">#baking</span>
                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection

@section('script')

@endsection
