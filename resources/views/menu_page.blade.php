@extends('layouts.main')

@section('title', 'Menu Page')

@section('style')
    <style>
        .restaurant-header {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
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


        .dish-card:hover .order-btn {
            opacity: 1;
        }

        .popular-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            z-index: 10;
        }
    </style>
@endsection

@section('conntent')
    <section class="py-12 mt-24 text-white restaurant-header md:mt-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col items-start justify-between md:flex-row md:items-center">
                <div class="mb-6 md:mb-0">
                    <h1 class="mb-2 text-4xl font-bold">Savory Bite</h1>
                    <div class="flex items-center mb-4">
                        <div class="flex items-center mr-4 text-amber-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="ml-2 text-white">4.5 (1.2k reviews)</span>
                        </div>
                        <span class="px-2 py-1 text-sm bg-green-500 rounded">OPEN</span>
                    </div>
                    <p class="mb-2 text-lg">Italian • Pizza • Pasta</p>
                    <p class="text-gray-300">$$ • 25-35 min • 1.2 km away</p>
                </div>
                <div class="p-6 text-gray-800 bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:text-gray-50">
                    <div class="flex items-center mb-4">
                        <i class="mr-3 text-xl fas fa-tag text-primary"></i>
                        <div>
                            <h3 class="font-bold">30% OFF</h3>
                            <p class="text-sm">Up to ₹150 | Use code FOODIE30</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-3 text-xl fas fa-shipping-fast text-primary"></i>
                        <div>
                            <h3 class="font-bold">Free Delivery</h3>
                            <p class="text-sm">On orders above ₹299</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-12 bg-white dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col gap-8 lg:flex-row">
                <div class="w-full lg:w-1/4">
                    <div
                        class="sticky p-6 transition-all duration-300 bg-white border border-gray-100 shadow-xl top-6 dark:bg-gray-900 rounded-2xl dark:border-gray-800">

                        <form method="GET" action="{{ route('menu') }}" id="filterForm">

                            <div class="mb-8">
                                <h3 class="flex items-center mb-4 text-xl font-bold text-gray-800 dark:text-gray-100">
                                    <i class="mr-2 fa-solid fa-layer-group "></i>
                                    Categories
                                </h3>

                                <div class="space-y-2">

                                    <label class="flex items-center cursor-pointer group">
                                        <input type="checkbox" onchange="window.location='{{ route('menu') }}'"
                                            class="w-5 h-5 border-2 rounded-full appearance-none border-primary checked:bg-primary checked:border-primary">
                                        <span class="ml-3 text-gray-700 dark:text-gray-300 group-hover:text-primary">
                                            All Items
                                        </span>
                                    </label>

                                    @foreach ($categories as $cate)
                                        <label class="flex items-center cursor-pointer group">
                                            <input type="checkbox" name="category[]" value="{{ $cate->id }}"
                                                onchange="document.getElementById('filterForm').submit();"
                                                class="w-5 h-5 border-2 rounded-full appearance-none border-primary checked:bg-primary checked:border-primary"
                                                {{ is_array(request()->category) && in_array($cate->id, request()->category) ? 'checked' : '' }}>

                                            <span class="ml-3 text-gray-700 dark:text-gray-300 group-hover:text-primary">
                                                {{ ucfirst(str_replace('_', ' ', $cate->name)) }}
                                            </span>
                                        </label>
                                    @endforeach

                                </div>
                            </div>

                            <div class="mb-8">
                                <h3 class="flex items-center mb-4 text-xl font-bold text-gray-800 dark:text-gray-100">
                                    <i class="mr-2 fa-solid fa-check"></i>
                                    Dietary
                                </h3>

                                <div class="space-y-3">
                                    @foreach ($dietary as $diet)
                                        <label class="flex items-center cursor-pointer group">
                                            <input type="checkbox" name="dietary[]" value="{{ $diet->id }}"
                                                onchange="document.getElementById('filterForm').submit();"
                                                class="w-5 h-5 border-2 rounded-full appearance-none border-primary checked:bg-primary checked:border-primary"
                                                {{ is_array(request()->dietary) && in_array($diet->id, request()->dietary) ? 'checked' : '' }}>

                                            <span class="ml-3 text-gray-700 dark:text-gray-300 group-hover:text-primary">
                                                {{ ucfirst(str_replace('_', ' ', $diet->name)) }}
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>


                            <div class="mb-8">
                                <h3 class="flex items-center mb-4 text-xl font-bold text-gray-800 dark:text-gray-100">
                                    <i class="mr-2 fa-solid fa-arrow-up-z-a"></i>
                                    Sort By
                                </h3>

                                <select id="sort-options" name="sort"
                                    onchange="document.getElementById('filterForm').submit();"
                                    class="w-full px-4 py-2 text-gray-900 transition bg-gray-100 border border-gray-200 rounded-lg dark:text-white dark:bg-gray-800 dark:border-gray-700 focus:ring-2 focus:ring-primary">

                                    <option value="">Default</option>
                                    <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Name (A-Z)
                                    </option>
                                    <option value="price-low" {{ request('sort') == 'price-low' ? 'selected' : '' }}>Price
                                        (Low to High)</option>
                                    <option value="price-high" {{ request('sort') == 'price-high' ? 'selected' : '' }}>
                                        Price
                                        (High to Low)</option>
                                    <option value="popular" {{ request('sort') == 'popular' ? 'selected' : '' }}>Most
                                        Popular
                                    </option>
                                </select>
                            </div>

                        </form>



                    </div>
                </div>




                <div class="lg:w-3/4">

                    <div class="mb-6 float-end">
                        <p id="results-count" class="font-semibold text-gray-800 dark:text-gray-50">Showing all 12 items</p>

                    </div>


                    <form method="GET" action="{{ route('menu') }}" id="filterForm">
                        <div class="w-full max-w-lg mx-auto my-12">
                            <div class="relative">
                                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search …"
                                    class="block w-full py-3 pl-4 pr-12 placeholder-gray-500 transition bg-white border border-gray-300 rounded-full focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/50 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white" />

                                <button type="submit"
                                    class="absolute flex items-center justify-center w-10 h-10 text-white transition-colors transform -translate-y-1/2 rounded-full top-1/2 right-1 bg-primary hover:bg-primary/90">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 15l5 5m-5-5a7 7 0 1 0-9.9-9.9 7 7 0 0 0 9.9 9.9z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>




                    @if ($foods->count() > 0)
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
                                                            <span
                                                                class="text-sm text-gray-200 line-through dark:text-gray-400">
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
                        <div class="flex items-center justify-center mt-6">
                            <div class="pagination-custom">
                                {{ $foods->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    @else
                        <div
                            class="flex flex-col items-center justify-center w-full h-full py-14 bg-gray-50 dark:bg-gray-900">
                            <div
                                class="w-full max-w-md p-10 text-center transition-all duration-300 bg-white border border-gray-200 shadow-lg dark:bg-gray-800 dark:border-gray-700 rounded-2xl">

                                <div
                                    class="flex items-center justify-center w-20 h-20 mx-auto mb-5 bg-red-100 rounded-full dark:bg-red-900/40">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-10 h-10 text-red-600 dark:text-red-400">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3m0 3h.01M4.93 4.93l14.14 14.14M21 12c0 4.97-4.03 9-9 9S3 16.97 3 12 7.03 3 12 3s9 4.03 9 9z" />
                                    </svg>
                                </div>

                                <h2 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-gray-100">
                                    No Foods Available
                                </h2>

                                <p class="mb-4 text-gray-600 dark:text-gray-300">
                                    Please check back later.
                                </p>

                            </div>
                        </div>


                    @endif






                    {{-- <div class="overflow-hidden shadow-2xl bg-gray-50 dish-card dark:bg-gray-900 rounded-2xl animate-fade-in"
                            style="animation-delay: 0.2s;">

                            <a href="{{ route('food_details') }}">


                                <div class="relative">
                                    <div
                                        class="relative flex items-center justify-center h-40 overflow-hidden image-placeholder">
                                        <img class="object-contain w-full" src="{{ asset('assets/images/d2.jpg') }}"
                                            alt="">
                                        <div class="popular-badge">
                                            <span
                                                class="px-3 py-1 text-xs font-bold text-white bg-green-500 rounded-full">Healthy</span>
                                        </div>
                                    </div>
                                    <div
                                        class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                        <div class="flex items-end justify-between">
                                            <h3 class="text-xl font-bold text-white">Grilled Atlantic Salmon</h3>
                                            <span class="text-2xl font-bold text-secondary">$28</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <p class="mb-6 text-gray-600 dark:text-gray-300">Perfectly grilled salmon with lemon
                                        butter
                                        sauce,
                                        asparagus, and seasonal vegetables.</p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-1 text-amber-400">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(94)</span>
                                        </div>

                                    </div>

                                    <button
                                        class="px-4 py-2 mt-4 font-medium text-white transition-all duration-300 transform rounded-lg order-btn bg-primary hover:bg-primary-dark hover:scale-105">
                                        Order Now
                                    </button>
                                </div>

                            </a>
                        </div>



                        <div class="overflow-hidden shadow-2xl bg-gray-50 dish-card dark:bg-gray-900 rounded-2xl animate-fade-in"
                            style="animation-delay: 0.4s;">

                            <a href="{{ route('food_details') }}">

                                <div class="relative">
                                    <div
                                        class="relative flex items-center justify-center h-40 overflow-hidden image-placeholder">
                                        <img class="object-contain w-full" src="{{ asset('assets/images/d3.jpg') }}"
                                            alt="">
                                        <div class="popular-badge">
                                            <span
                                                class="px-3 py-1 text-xs font-bold text-white bg-purple-500 rounded-full">Premium</span>
                                        </div>
                                    </div>
                                    <div
                                        class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                        <div class="flex items-end justify-between">
                                            <h3 class="text-xl font-bold text-white">Beef Wellington</h3>
                                            <span class="text-2xl font-bold text-secondary">$42</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <p class="mb-6 text-gray-600 dark:text-gray-300">Tender beef fillet wrapped in puff
                                        pastry
                                        with
                                        mushroom duxelles and prosciutto.</p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-1 text-amber-400">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(76)</span>
                                        </div>
                                    </div>

                                    
                                    <button
                                        class="px-4 py-2 mt-4 font-medium text-white transition-all duration-300 transform rounded-lg order-btn bg-primary hover:bg-primary-dark hover:scale-105">
                                        Order Now
                                    </button>
                                </div>

                            </a>
                        </div> --}}



                </div>
            </div>
        </div>
    </section>



@endsection

@section('script')
    <script>
        function cateActive() {
            $("#CateFilters button").on("click", function() {

                $("#CateFilters button").removeClass("bg-primary/10 text-primary font-medium active-filter")
                    .addClass("text-gray-700 dark:text-gray-300");

                $(this).addClass("bg-primary/10 text-primary font-medium active-filter")
                    .removeClass("text-gray-700 dark:text-gray-300");
            });
        }
    </script>
@endsection
