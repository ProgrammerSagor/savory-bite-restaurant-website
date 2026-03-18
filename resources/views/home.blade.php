@extends('layouts.main')

@section('title', 'Home Page')



@section('style')
    <style>
        #switch {
            transition: transform 0.3s ease-in-out;
        }

        .dish-card {
            transition: all 0.3s ease;
            transform: translateY(0);
        }

        .dish-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .dark .dish-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .image-placeholder {
            background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
        }

        .dark .image-placeholder {
            background: linear-gradient(135deg, #4b5563, #374151);
        }

        .popular-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            z-index: 10;
        }

        .order-btn {
            transition: all 0.3s ease;
            opacity: 0;
        }

        .dish-card:hover .order-btn {
            opacity: 1;
        }

        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .expandable-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }

        .expandable-content.expanded {
            max-height: 500px;
        }


        .owl-nav {
            display: none;
        }
    </style>
@endsection

@section('conntent')

    <section class="flex items-center justify-center mt-[5.5rem] md:min-h-screen hero-bg">
        <div class="p-4 text-center text-white md:px-4">
            <h1 class="mb-6 text-4xl font-bold md:text-6xl">Savor the Finest Culinary Experience</h1>
            <p class="max-w-2xl mx-auto mb-8 text-xl md:text-2xl">Experience the perfect blend of flavors, ambiance, and
                hospitality at Savory Bite Restaurant</p>
            <a href="{{ route('reservations') }}"
                class="px-8 py-3 text-lg font-semibold text-white transition duration-300 rounded-lg bg-primary hover:bg-primary-dark">Book
                a Table</a>
        </div>
    </section>


    <section
        class="relative py-20 overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900">

        <div data-aos="fade-right">

            <div class="absolute w-20 h-20 rounded-full top-10 left-10 bg-primary/10 floating-element"></div>
            <div class="absolute w-16 h-16 rounded-full bottom-10 right-10 bg-secondary/20 floating-element"
                style="animation-delay: 2s;"></div>
            <div class="absolute w-12 h-12 rounded-full top-1/3 right-1/4 bg-primary/10 floating-element"
                style="animation-delay: 4s;"></div>


            <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="mb-16 text-center animate-slide-up">
                    <span
                        class="inline-block px-4 py-1 mb-4 text-sm font-semibold tracking-wider uppercase rounded-full text-primary bg-primary/10">Culinary
                        Excellence</span>
                    <h2 class="text-4xl font-bold text-gray-900 dark:text-white md:text-5xl">Our Signature Creations</h2>
                    <div class="w-24 h-1 mx-auto my-6 rounded-full bg-primary"></div>
                    <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300 md:text-xl">Indulge in our chef's
                        masterpieces, crafted with the finest ingredients and passion for perfection.</p>
                </div>


                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

                    @foreach ($foods as $food)
                        @php
                            $averageRating = round($food->reviews->avg('rating'), 1);
                            $totalReviews = $food->reviews->count();
                        @endphp


                        <div
                            class="overflow-hidden shadow-2xl bg-gray-50 dish-card dark:bg-gray-900 rounded-2xl animate-fade-in ">
                            <a href="{{ route('food_details', [$food->id, $food->slug]) }}">

                                <div class="relative">
                                    <div
                                        class="relative flex items-center justify-center h-56 overflow-hidden image-placeholder">
                                        <img class="object-cover w-full h-full"
                                            src="{{ asset('storage/' . $food->food_image) }}" alt="">
                                        <div class="popular-badge">
                                            <span
                                                class="px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">
                                                {{ $food->dietary->name }}
                                            </span>
                                        </div>
                                    </div>

                                    <div
                                        class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                        <div class="flex items-end justify-between">
                                            @if ($food->discount_price)
                                                <div class="flex items-center gap-2">
                                                    <span class="text-xl font-bold text-red-600 dark:text-red-400">
                                                        ${{ $food->discount_price }}
                                                    </span>
                                                    <span class="text-sm text-gray-200 line-through dark:text-gray-400">
                                                        ${{ $food->price }}
                                                    </span>
                                                    <span
                                                        class="px-2 py-0.5 text-xs font-semibold text-white bg-green-600 dark:bg-green-500 rounded-full">
                                                        {{ round((($food->price - $food->discount_price) / $food->price) * 100) }}%
                                                        OFF
                                                    </span>
                                                </div>
                                            @else
                                                <span class="text-2xl font-semibold text-primary">
                                                    ${{ $food->price }}
                                                </span>
                                            @endif
                                        </div>
                                        <h3 class="text-lg font-semibold text-white ">{{ $food->title }}</h3>
                                    </div>
                                </div>

                                <div class="p-3">
                                    <div class="mb-6 text-gray-800 dark:text-gray-200 rich-text">

                                        {!! \Illuminate\Support\Str::words(strip_tags($food->description), 30, '...') !!}

                                    </div>

                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-1 text-amber-400">

                                            @for ($i = 1; $i <= floor($averageRating); $i++)
                                                <i class="fas fa-star"></i>
                                            @endfor

                                            @if ($averageRating - floor($averageRating) >= 0.5)
                                                <i class="fas fa-star-half-alt"></i>
                                            @endif

                                            @for ($i = ceil($averageRating) + 1; $i <= 5; $i++)
                                                <i class="far fa-star"></i>
                                            @endfor


                                            <span
                                                class="ml-1 text-sm text-gray-500 dark:text-gray-400">({{ $totalReviews }})</span>
                                        </div>

                                    </div>

                                    <button
                                        class="px-4 py-2 mt-4 font-medium text-white transition-all duration-300 transform rounded-lg order-btn bg-primary hover:bg-primary-dark hover:scale-105">
                                        Order Now
                                    </button>
                                </div>

                            </a>
                        </div>
                    @endforeach



                </div>



                <div class="mt-16 text-center animate-slide-up" style="animation-delay: 0.6s;">
                    <div
                        class="inline-flex flex-col items-center gap-4 p-6 bg-white shadow-lg sm:flex-row dark:bg-gray-800 rounded-2xl">
                        <div class="text-left">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">Experience our full menu</h3>
                            <p class="text-gray-600 dark:text-gray-300">Discover more culinary delights crafted by our
                                master
                                chefs</p>
                        </div>
                        <div class="flex gap-3">
                            <a href="{{ route('menu') }}"
                                class="px-6 py-3 font-medium text-white transition-all duration-300 transform rounded-lg bg-primary hover:bg-primary-dark hover:scale-105">
                                View Full Menu
                            </a>
                            <a href="{{ route('reservations') }}"
                                class="px-6 py-3 font-medium transition-all duration-300 bg-transparent border rounded-lg border-primary text-primary hover:bg-primary/10 dark:hover:bg-primary/20">
                                Book a Table
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section
        class="relative py-20 overflow-hidden bg-gradient-to-br from-white to-gray-50 dark:from-gray-900 dark:to-gray-800">

        <div data-aos="fade-left">

            <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 rounded-full w-72 h-72 bg-primary/5"></div>
            <div class="absolute bottom-0 right-0 translate-x-1/2 translate-y-1/2 rounded-full w-96 h-96 bg-secondary/5">
            </div>

            <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="mb-16 text-center">
                    <span
                        class="inline-block px-4 py-2 mb-4 text-xs font-bold tracking-widest uppercase border rounded-full text-primary bg-primary/10 border-primary/20">
                        <i class="mr-2 fas fa-chef-hat"></i>Masterpiece
                    </span>
                    <h2 class="font-serif text-4xl font-bold text-gray-900 dark:text-white md:text-5xl">Chef's Special
                        Creation
                    </h2>
                    <div class="flex justify-center mt-6 mb-8">
                        <div class="w-20 h-1 rounded-full bg-primary"></div>
                        <div class="w-5 h-1 mx-2 rounded-full bg-secondary"></div>
                        <div class="w-10 h-1 rounded-full bg-accent"></div>
                    </div>
                    <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300 md:text-xl">
                        An exclusive culinary masterpiece crafted by our award-winning chef
                    </p>
                </div>

                <div
                    class="overflow-hidden border border-gray-100 shadow-2xl special-card rounded-3xl dark:border-gray-700">
                    <div class="flex flex-col lg:flex-row">
                        <div class="p-8 lg:w-1/2 lg:p-12 animate-fade-in-left">
                            <div class="relative overflow-hidden image-container h-96 rounded-2xl">
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-blue-100 to-teal-100 dark:from-blue-900/40 dark:to-teal-900/40">



                                    <img class="w-full min-h-full " src="{{ asset('assets/images/che.jpg') }}"
                                        alt="">


                                    <i class="absolute text-4xl fas fa-shrimp text-amber-500 top-8 left-8 opacity-70"></i>
                                    <i class="absolute text-3xl text-green-500 fas fa-leaf bottom-8 right-8 opacity-70"></i>
                                </div>

                                <div class="absolute z-10 top-6 left-6">
                                    <div
                                        class="px-4 py-2 rounded-full shadow-lg chef-badge bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-8 h-8 mr-2 rounded-full bg-gradient-to-r from-primary to-pink-600">
                                                <i class="text-white fa-solid fa-chess-queen"></i>
                                            </div>
                                            <div>
                                                <p class="text-xs font-bold text-gray-900 dark:text-white">Chef Marco</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">Signature Dish</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="absolute z-10 top-6 right-6">
                                    <div
                                        class="px-3 py-2 rounded-full shadow-lg bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm">
                                        <div class="flex items-center space-x-1">
                                            <i class="text-sm fas fa-star text-amber-400"></i>
                                            <span class="text-sm font-bold text-gray-900 dark:text-white">4.9</span>
                                            <span class="text-xs text-gray-500 dark:text-gray-400">(86)</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="absolute z-10 bottom-6 left-6">
                                    <div class="px-3 py-1 text-xs font-bold text-white rounded-full shadow-lg bg-accent/90">
                                        <i class="mr-1 fas fa-sync-alt"></i> Daily Fresh
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-8 lg:w-1/2 lg:p-12 animate-fade-in-right">
                            <div class="mb-6">
                                <span
                                    class="inline-block px-3 py-1 mb-3 text-xs font-bold uppercase rounded-full dark:text-white text-accent bg-accent/10">
                                    Limited Availability
                                </span>
                                <h3 class="mb-4 font-serif text-3xl font-bold text-gray-900 dark:text-white">Mediterranean
                                    Seafood Symphony</h3>
                                <p class="mb-6 text-lg leading-relaxed text-gray-600 dark:text-gray-300">
                                    Our chef's signature masterpiece featuring the freshest seafood from the Mediterranean,
                                    prepared with traditional herbs and spices that dance on your palate.
                                </p>
                            </div>

                            <div class="mb-8">
                                <h4 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">
                                    <i class="mr-2 fas fa-list-check text-primary"></i>
                                    Premium Ingredients
                                </h4>
                                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                                    <div
                                        class="flex items-center p-3 rounded-lg ingredient-item bg-gray-50 dark:bg-gray-800/50">
                                        <i class="mr-3 fas fa-check text-primary"></i>
                                        <span class="text-gray-700 dark:text-gray-300">Fresh grilled octopus</span>
                                    </div>
                                    <div
                                        class="flex items-center p-3 rounded-lg ingredient-item bg-gray-50 dark:bg-gray-800/50">
                                        <i class="mr-3 fas fa-check text-primary"></i>
                                        <span class="text-gray-700 dark:text-gray-300">Lemon-infused shrimp</span>
                                    </div>
                                    <div
                                        class="flex items-center p-3 rounded-lg ingredient-item bg-gray-50 dark:bg-gray-800/50">
                                        <i class="mr-3 fas fa-check text-primary"></i>
                                        <span class="text-gray-700 dark:text-gray-300">Herb-crusted sea bass</span>
                                    </div>
                                    <div
                                        class="flex items-center p-3 rounded-lg ingredient-item bg-gray-50 dark:bg-gray-800/50">
                                        <i class="mr-3 fas fa-check text-primary"></i>
                                        <span class="text-gray-700 dark:text-gray-300">Saffron rice pilaf</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 mb-8 border bg-primary/5 rounded-xl border-primary/10">
                                <div class="flex items-start">
                                    <i class="mt-1 mr-3 fas fa-info-circle text-primary"></i>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">
                                        <span class="font-semibold">Chef's Note:</span> This dish is prepared with
                                        sustainably
                                        sourced seafood and traditional Mediterranean techniques passed down through
                                        generations.
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
                                <div class="flex items-center">
                                    <span
                                        class="px-6 py-3 text-2xl font-bold shadow-lg text-gray-950 dark:text-white price-tag rounded-xl animate-pulse-glow">
                                        $38
                                    </span>
                                    <div class="ml-4">
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Serves 2 people</p>
                                        <p class="text-xs text-gray-400 dark:text-gray-500">Preparation: 25 mins</p>
                                    </div>
                                </div>
                                <div class="flex space-x-3">
                                    <button
                                        class="flex items-center px-8 py-3 font-semibold text-white transition-all duration-300 transform shadow-lg bg-primary hover:bg-primary-dark rounded-xl hover:scale-105">
                                        <i class="mr-2 fas fa-utensils"></i>
                                        Order Now
                                    </button>
                                    <button
                                        class="p-3 text-gray-600 transition-all duration-300 border-2 border-gray-300 dark:border-gray-600 dark:text-gray-400 hover:text-primary dark:hover:text-primary hover:border-primary rounded-xl">
                                        <i class="text-lg far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 mt-12 md:grid-cols-3">
                    <div
                        class="p-6 text-center bg-white border border-gray-100 shadow-lg dark:bg-gray-800 rounded-2xl dark:border-gray-700">
                        <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-primary/10">
                            <i class="text-xl fas fa-clock text-primary"></i>
                        </div>
                        <h4 class="mb-2 font-bold text-gray-900 dark:text-white">25 Min Preparation</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Freshly prepared to order</p>
                    </div>
                    <div
                        class="p-6 text-center bg-white border border-gray-100 shadow-lg dark:bg-gray-800 rounded-2xl dark:border-gray-700">
                        <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 bg-green-500 rounded-full">
                            <i class="text-xl fas fa-leaf text-accent"></i>
                        </div>
                        <h4 class="mb-2 font-bold text-gray-900 dark:text-white">Sustainable Sourcing</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Ethically sourced ingredients</p>
                    </div>
                    <div
                        class="p-6 text-center bg-white border border-gray-100 shadow-lg dark:bg-gray-800 rounded-2xl dark:border-gray-700">
                        <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 bg-yellow-600 rounded-full">
                            <i class="text-xl fas fa-award text-secondary"></i>
                        </div>
                        <h4 class="mb-2 font-bold text-gray-900 dark:text-white">Award Winning</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300">2023 Culinary Excellence</p>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section
        class="relative py-20 overflow-hidden story-section bg-gradient-to-br from-white to-gray-50 dark:from-gray-900 dark:to-gray-800">
        <div
            class="absolute -translate-x-1/2 -translate-y-1/2 rounded-full top-10 left-10 w-72 h-72 bg-primary/5 floating-element">
        </div>
        <div class="absolute translate-x-1/2 translate-y-1/2 rounded-full bottom-10 right-10 w-96 h-96 bg-secondary/5 floating-element"
            style="animation-delay: 2s;"></div>

        <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" data-aos="fade-right">
            <div class="mb-16 text-center animate-fade-in-up">
                <span
                    class="inline-block px-4 py-2 mb-4 text-xs font-bold tracking-widest uppercase border rounded-full text-primary bg-primary/10 border-primary/20">
                    <i class="mr-2 fas fa-history"></i>Our Journey
                </span>
                <h2 class="font-serif text-4xl font-bold text-gray-900 dark:text-white md:text-5xl">Our Culinary Story</h2>
                <div class="flex justify-center mt-6 mb-8">
                    <div class="w-20 h-1 rounded-full bg-primary"></div>
                    <div class="w-5 h-1 mx-2 rounded-full bg-secondary"></div>
                    <div class="w-10 h-1 rounded-full bg-accent"></div>
                </div>
                <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300 md:text-xl">
                    A decade of passion, innovation, and unforgettable dining experiences
                </p>
            </div>

            <div class="overflow-hidden border border-gray-100 shadow-2xl story-card rounded-3xl dark:border-gray-700">
                <div class="flex flex-col items-center lg:flex-row">
                    <div class="p-8 lg:w-1/2 lg:p-12 animate-fade-in-left">
                        <div class="mb-8">
                            <h3 class="mb-6 font-serif text-3xl font-bold text-gray-900 dark:text-white">A Decade of
                                Culinary Excellence</h3>

                            <p class="mb-6 text-lg leading-relaxed text-gray-600 dark:text-gray-300">
                                Founded in 2013, <span class="font-semibold text-primary">Savory Bite Restaurant</span> has
                                been serving exceptional cuisine in a warm and inviting atmosphere. Our passion for food and
                                hospitality has made us a beloved destination for food enthusiasts.
                            </p>

                            <div class="expandable-content" id="expandable-content">
                                <p class="mb-6 leading-relaxed text-gray-600 dark:text-gray-300">
                                    We source the finest ingredients from local farmers and trusted suppliers to ensure
                                    every dish meets our high standards of quality and flavor. Our relationships with local
                                    producers allow us to bring you the freshest seasonal ingredients.
                                </p>
                                <p class="mb-6 leading-relaxed text-gray-600 dark:text-gray-300">
                                    Our talented team of chefs combines traditional techniques with innovative approaches to
                                    create memorable dining experiences for our guests. Each dish tells a story of
                                    craftsmanship and dedication.
                                </p>
                            </div>

                            <button onclick="readMoreBtn()"
                                class="flex items-center mb-8 font-semibold transition-colors duration-300 text-primary hover:text-primary-dark">
                                <span>Read Full Story</span>
                                <i class="ml-2 transition-transform duration-300 fas fa-chevron-down"></i>
                            </button>
                        </div>


                        <div class="grid grid-cols-2 gap-6">
                            <div
                                class="p-4 text-center bg-white border border-gray-100 shadow-lg dark:bg-gray-800 rounded-xl dark:border-gray-700">
                                <div class="mb-1 text-2xl font-bold text-primary">10+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-300">Years of Excellence</div>
                            </div>
                            <div
                                class="p-4 text-center bg-white border border-gray-100 shadow-lg dark:bg-gray-800 rounded-xl dark:border-gray-700">
                                <div class="mb-1 text-2xl font-bold text-secondary">50K+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-300">Happy Customers</div>
                            </div>
                            <div
                                class="p-4 text-center bg-white border border-gray-100 shadow-lg dark:bg-gray-800 rounded-xl dark:border-gray-700">
                                <div class="mb-1 text-2xl font-bold text-accent">15+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-300">Awards Won</div>
                            </div>
                            <div
                                class="p-4 text-center bg-white border border-gray-100 shadow-lg dark:bg-gray-800 rounded-xl dark:border-gray-700">
                                <div class="mb-1 text-2xl font-bold text-primary">100%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-300">Locally Sourced</div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="p-4 sm:p-6 md:p-8 lg:w-1/2 lg:p-12 animate-fade-in-right">
                        <div
                            class="relative overflow-hidden shadow-lg image-container rounded-2xl">
                            <div class="owl-carousel about h-[250px] sm:h-[300px] md:h-[400px] lg:h-[450px]">
                                <div>
                                    <img src="{{ asset('assets/images/i5.jpg') }}" alt="Restaurant Interior"
                                        class="object-cover w-full h-full transition-transform duration-700 rounded-2xl hover:scale-105">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/images/i4.jpg') }}" alt="Restaurant Food"
                                        class="object-cover w-full h-full transition-transform duration-700 rounded-2xl hover:scale-105">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/images/i3.jpg') }}" alt="Restaurant Ambience"
                                        class="object-cover w-full h-full transition-transform duration-700 rounded-2xl hover:scale-105">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/images/i2.jpg') }}" alt="Delicious Meal"
                                        class="object-cover w-full h-full transition-transform duration-700 rounded-2xl hover:scale-105">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/images/i1.jpg') }}" alt="Chef Special"
                                        class="object-cover w-full h-full transition-transform duration-700 rounded-2xl hover:scale-105">
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="p-4 sm:p-6 md:p-8 lg:w-1/2 lg:p-12 animate-fade-in-right">
                        <div class="relative overflow-hidden image-container rounded-2xl">
                            <div class="owl-carousel about h-[300px] sm:h-[350px] md:h-[400px] lg:h-[450px]">
                                <div class="h-full">
                                    <img src="{{ asset('assets/images/i5.jpg') }}" alt="Restaurant Interior"
                                        class="object-cover w-full h-[250px] md:h-full rounded-2xl">
                                </div>
                                <div class="h-full">
                                    <img src="{{ asset('assets/images/i4.jpg') }}" alt="Restaurant Food"
                                        class="object-cover w-full  h-[250px] md:h-full rounded-2xl">
                                </div>
                                <div class="h-full">
                                    <img src="{{ asset('assets/images/i3.jpg') }}" alt="Restaurant Ambience"
                                        class="object-cover w-full  h-[250px] md:h-full rounded-2xl">
                                </div>
                                <div class="h-full">
                                    <img src="{{ asset('assets/images/i2.jpg') }}" alt="Delicious Meal"
                                        class="object-cover w-full  h-[250px] md:h-full rounded-2xl">
                                </div>
                                <div class="h-full">
                                    <img src="{{ asset('assets/images/i1.jpg') }}" alt="Chef Special"
                                        class="object-cover w-full  h-[250px] md:h-full rounded-2xl">
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>


        </div>
    </section>









    <section
        class="relative py-20 overflow-hidden story-section bg-gradient-to-br from-white to-gray-50 dark:from-gray-900 dark:to-gray-800">
        <div
            class="absolute -translate-x-1/2 -translate-y-1/2 rounded-full top-10 left-10 w-72 h-72 bg-primary/5 floating-element">
        </div>
        <div class="absolute translate-x-1/2 translate-y-1/2 rounded-full bottom-10 right-10 w-96 h-96 bg-secondary/5 floating-element"
            style="animation-delay: 2s;"></div>

        <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" data-aos="fade-right">
            <div class="mb-16 text-center animate-fade-in-up">
                <span
                    class="inline-block px-4 py-2 mb-4 text-xs font-bold tracking-widest uppercase border rounded-full text-primary bg-primary/10 border-primary/20">
                    <i class="mr-2 fa-solid fa-star-half-stroke"></i>Testimonial
                </span>
                <h2 class="font-serif text-4xl font-bold text-gray-900 dark:text-white md:text-5xl">What Our Guests Say
                </h2>
                <div class="flex justify-center mt-6 mb-8">
                    <div class="w-20 h-1 rounded-full bg-primary"></div>
                    <div class="w-5 h-1 mx-2 rounded-full bg-secondary"></div>
                    <div class="w-10 h-1 rounded-full bg-accent"></div>
                </div>
                <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300 md:text-xl">
                    Discover why our guests keep coming back for exceptional dining experiences
                </p>
            </div>

            <div class="owl-carousel">
                {{-- item 1 --}}
                <div class="p-8 border border-gray-100 shadow-lg testimonial-card rounded-2xl dark:border-gray-700 animate-fade-in"
                    style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mr-4 rounded-full shadow-lg customer-avatar bg-amber-600">
                            <span class="text-lg font-bold text-white">MC</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white">Michael Chen</h4>
                            <div class="flex items-center mt-1">
                                <div class="flex mr-2 text-amber-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">1 week ago</span>
                            </div>
                        </div>
                        <div class="text-2xl opacity-50 text-primary">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <p class="mb-4 leading-relaxed text-gray-600 review-text dark:text-gray-300">
                        "Exceptional service and amazing flavors. The chef's special was a delightful surprise that exceeded
                        all expectations. Every bite was a journey of taste and texture. The staff went above and beyond to
                        make our anniversary special. Highly recommended!"
                    </p>
                    <button
                        class="text-sm font-semibold transition-colors duration-300 read-more-btn text-primary hover:text-primary-dark">Read
                        more</button>

                </div>
                <div class="p-8 border border-gray-100 shadow-lg testimonial-card rounded-2xl dark:border-gray-700 animate-fade-in"
                    style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mr-4 rounded-full shadow-lg customer-avatar bg-amber-600">
                            <span class="text-lg font-bold text-white">MC</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white">Michael Chen</h4>
                            <div class="flex items-center mt-1">
                                <div class="flex mr-2 text-amber-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">1 week ago</span>
                            </div>
                        </div>
                        <div class="text-2xl opacity-50 text-primary">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <p class="mb-4 leading-relaxed text-gray-600 review-text dark:text-gray-300">
                        "Exceptional service and amazing flavors. The chef's special was a delightful surprise that exceeded
                        all expectations. Every bite was a journey of taste and texture. The staff went above and beyond to
                        make our anniversary special. Highly recommended!"
                    </p>
                    <button
                        class="text-sm font-semibold transition-colors duration-300 read-more-btn text-primary hover:text-primary-dark">Read
                        more</button>

                </div>
                <div class="p-8 border border-gray-100 shadow-lg testimonial-card rounded-2xl dark:border-gray-700 animate-fade-in"
                    style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mr-4 rounded-full shadow-lg customer-avatar bg-amber-600">
                            <span class="text-lg font-bold text-white">MC</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white">Michael Chen</h4>
                            <div class="flex items-center mt-1">
                                <div class="flex mr-2 text-amber-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">1 week ago</span>
                            </div>
                        </div>
                        <div class="text-2xl opacity-50 text-primary">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <p class="mb-4 leading-relaxed text-gray-600 review-text dark:text-gray-300">
                        "Exceptional service and amazing flavors. The chef's special was a delightful surprise that exceeded
                        all expectations. Every bite was a journey of taste and texture. The staff went above and beyond to
                        make our anniversary special. Highly recommended!"
                    </p>
                    <button
                        class="text-sm font-semibold transition-colors duration-300 read-more-btn text-primary hover:text-primary-dark">Read
                        more</button>

                </div>
                <div class="p-8 border border-gray-100 shadow-lg testimonial-card rounded-2xl dark:border-gray-700 animate-fade-in"
                    style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mr-4 rounded-full shadow-lg customer-avatar bg-amber-600">
                            <span class="text-lg font-bold text-white">MC</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white">Michael Chen</h4>
                            <div class="flex items-center mt-1">
                                <div class="flex mr-2 text-amber-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">1 week ago</span>
                            </div>
                        </div>
                        <div class="text-2xl opacity-50 text-primary">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <p class="mb-4 leading-relaxed text-gray-600 review-text dark:text-gray-300">
                        "Exceptional service and amazing flavors. The chef's special was a delightful surprise that exceeded
                        all expectations. Every bite was a journey of taste and texture. The staff went above and beyond to
                        make our anniversary special. Highly recommended!"
                    </p>
                    <button
                        class="text-sm font-semibold transition-colors duration-300 read-more-btn text-primary hover:text-primary-dark">Read
                        more</button>

                </div>
                <div class="p-8 border border-gray-100 shadow-lg testimonial-card rounded-2xl dark:border-gray-700 animate-fade-in"
                    style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mr-4 rounded-full shadow-lg customer-avatar bg-amber-600">
                            <span class="text-lg font-bold text-white">MC</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white">Michael Chen</h4>
                            <div class="flex items-center mt-1">
                                <div class="flex mr-2 text-amber-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">1 week ago</span>
                            </div>
                        </div>
                        <div class="text-2xl opacity-50 text-primary">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <p class="mb-4 leading-relaxed text-gray-600 review-text dark:text-gray-300">
                        "Exceptional service and amazing flavors. The chef's special was a delightful surprise that exceeded
                        all expectations. Every bite was a journey of taste and texture. The staff went above and beyond to
                        make our anniversary special. Highly recommended!"
                    </p>
                    <button
                        class="text-sm font-semibold transition-colors duration-300 read-more-btn text-primary hover:text-primary-dark">Read
                        more</button>

                </div>
            </div>




        </div>
    </section>




    <section
        class="relative py-20 overflow-hidden story-section bg-gradient-to-br from-white to-gray-50 dark:from-gray-900 dark:to-gray-800">
        <div
            class="absolute -translate-x-1/2 -translate-y-1/2 rounded-full top-10 left-10 w-72 h-72 bg-primary/5 floating-element">
        </div>
        <div class="absolute translate-x-1/2 translate-y-1/2 rounded-full bottom-10 right-10 w-96 h-96 bg-secondary/5 floating-element"
            style="animation-delay: 2s;"></div>

        <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" data-aos="fade-left">
            <div class="mb-16 text-center animate-fade-in-up">
                <span
                    class="inline-block px-4 py-2 mb-4 text-xs font-bold tracking-widest uppercase border rounded-full text-primary bg-primary/10 border-primary/20">
                    <i class="mr-2 fa-solid fa-photo-film"></i>Our Gallery
                </span>
                <h2 class="font-serif text-4xl font-bold text-gray-900 dark:text-white md:text-5xl">A glimpse of our
                    restaurant and culinary creations
                </h2>
                <div class="flex justify-center mt-6 mb-8">
                    <div class="w-20 h-1 rounded-full bg-primary"></div>
                    <div class="w-5 h-1 mx-2 rounded-full bg-secondary"></div>
                    <div class="w-10 h-1 rounded-full bg-accent"></div>
                </div>
            </div>


            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                @foreach (['g1.jpg', 'g2.jpg', 'g3.jpg', 'g4.jpg', 'g5.jpg', 'g6.jpg', 'g7.jpg', 'g8.jpg'] as $image)
                    <div
                        class="flex items-center justify-center h-48 overflow-hidden bg-gray-300 rounded-lg gallery-item dark:bg-gray-700">
                        <a href="{{ asset('assets/images/' . $image) }}" target="_blank"
                            data-lightbox="restaurant-gallery" data-title="Gallery Image">
                            <img src="{{ asset('assets/images/' . $image) }}" alt="Gallery Image"
                                class="object-cover w-full h-full transition-transform duration-300 rounded-lg hover:scale-105">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
                <div>
                    <h2 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Opening Hours</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between py-3 border-b border-gray-200 dark:border-gray-700">
                            <span class="text-gray-600 dark:text-gray-300">Monday - Thursday</span>
                            <span class="font-medium text-gray-900 dark:text-white">11:00 AM - 10:00 PM</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-200 dark:border-gray-700">
                            <span class="text-gray-600 dark:text-gray-300">Friday - Saturday</span>
                            <span class="font-medium text-gray-900 dark:text-white">11:00 AM - 11:00 PM</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-200 dark:border-gray-700">
                            <span class="text-gray-600 dark:text-gray-300">Sunday</span>
                            <span class="font-medium text-gray-900 dark:text-white">12:00 PM - 9:00 PM</span>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Contact Information</h3>
                        <div class="space-y-2">
                            <p class="flex items-center text-gray-600 dark:text-gray-300">
                                <i class="mr-3 fas fa-map-marker-alt text-primary"></i>
                                123 Culinary Street, Foodville, FC 12345
                            </p>
                            <p class="flex items-center text-gray-600 dark:text-gray-300">
                                <i class="mr-3 fas fa-phone text-primary"></i>
                                (555) 123-4567
                            </p>
                            <p class="flex items-center text-gray-600 dark:text-gray-300">
                                <i class="mr-3 fas fa-envelope text-primary"></i>
                                info@Savory Biterestaurant.com
                            </p>
                        </div>
                    </div>
                </div>



                <div>
                    <h2 class="mb-6 text-3xl font-bold text-center text-gray-900 dark:text-white">
                        Find Us
                    </h2>

                    <div class="relative w-full overflow-hidden shadow-lg rounded-2xl">
                        <iframe class="w-full h-80 md:h-[450px]"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.9940684837216!2d90.37501947455586!3d23.78368508733354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74fbe6e6f3f%3A0xa839c37a3b38c540!2sDhanmondi%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1699974845689!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 text-white bg-primary">
        <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mb-4 text-3xl font-bold">Subscribe to Our Newsletter</h2>
            <p class="max-w-2xl mx-auto mb-8 text-lg">Stay updated with our latest menu additions, special events, and
                exclusive offers.</p>
            <form class="flex max-w-md mx-auto">
                <input type="email" placeholder="Your email address"
                    class="flex-grow px-4 py-3 text-gray-900 rounded-l-lg focus:outline-none">
                <button type="submit"
                    class="px-6 py-3 font-semibold bg-gray-900 rounded-r-lg hover:bg-black">Subscribe</button>
            </form>
        </div>
    </section>


@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").not(".about").owlCarousel({
                loop: true,
                margin: 24,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    640: {
                        items: 1.5
                    },
                    768: {
                        items: 2
                    },
                    1024: {
                        items: 3
                    },
                    1280: {
                        items: 3
                    }
                }
            });

            $(".owl-carousel.about").owlCarousel({
                loop: true,
                margin: 24,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    1024: {
                        items: 1
                    }
                }
            });
        });
    </script>

@endsection
