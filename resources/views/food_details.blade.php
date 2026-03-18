@extends('layouts.main')
@section('title', 'Menu Details Page')

@section('style')
    <style>
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s ease-in-out;
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

    <section class="py-8 mt-20 md:mt-24 dark:text-white dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                <div class="space-y-6">
                    <div class="overflow-hidden shadow-xl rounded-2xl">
                        <img src="{{ asset('storage/' . $food->food_image) }}" class="w-full" alt="">
                    </div>

                    @if ($food->chef_title != null)
                        <div class="p-6 border bg-primary/10 dark:bg-gray-950 dark:text-gray-50 rounded-2xl">
                            <div class="flex items-start space-x-3">
                                <div class="flex items-center justify-center">
                                    <div
                                        class="relative flex items-center justify-center w-16 h-16 overflow-hidden transition-all duration-300 shadow-md rounded-2xl bg-amber-100 hover:shadow-lg hover:scale-105">

                                        <img src="{{ asset('assets/images/chef.png') }}" alt="Chef"
                                            class="object-cover w-full h-full transition-all duration-300 opacity-80 hover:opacity-100">
                                    </div>
                                </div>

                                <div>
                                    <h4 class="font-bold text-gray-950 dark:text-gray-50">{{ $food->chef_title }}</h4>
                                    <p class="mt-1 text-sm text-gray-700 dark:text-gray-200">
                                        {{ $food->chef_notes }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

                <div class="space-y-6 md:p-4 ">
                    <div>
                        <div class="flex items-center mb-2 space-x-2">
                            @if ($food->category->name)
                                <span
                                    class="px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary dark:bg-primary/20 dark:text-primary">
                                    <i class="mr-1 fas fa-star"></i> {{ $food->category->name }}
                                </span>
                            @endif

                            @if ($food->dietary->name)
                                <span
                                    class="px-3 py-1 text-sm font-medium text-green-700 bg-green-100 rounded-full dark:bg-green-800 dark:text-green-200">
                                    {{ $food->dietary->name }}
                                </span>
                            @endif


                        </div>
                        <h1 class="mb-2 text-4xl font-bold text-gray-900 dark:text-gray-50">{{ $food->title }}</h1>

                        

                        <div class="flex items-center space-x-4">

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

                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                    ({{ $totalReviews }} reviews)
                                </span>
                            </div>

                        </div>

                    </div>




                    <div class="p-6 bg-gray-50 rounded-2xl dark:bg-gray-900 dark:border dark:border-gray-700">
                        <div class="flex items-center justify-between mb-4">


                            @if ($food->discount_price)
                                <div class="flex items-center gap-2">
                                    <span class="text-xl font-bold text-red-600 dark:text-red-400">
                                        ${{ $food->discount_price }}
                                    </span>
                                    <span class="text-sm text-gray-900 line-through dark:text-gray-400">
                                        ${{ $food->price }}
                                    </span>
                                    <span
                                        class="px-2 py-0.5 text-xs font-semibold text-white bg-green-600 dark:bg-green-500 rounded-full">
                                        {{ round((($food->price - $food->discount_price) / $food->price) * 100) }}%
                                        OFF
                                    </span>
                                </div>
                            @else
                                <span class="text-2xl font-semibold text-primary-600 dark:text-primary-400">
                                    ${{ $food->price }}
                                </span>
                            @endif

                            <button
                                class="p-2 text-gray-400 transition-colors hover:text-primary dark:text-gray-300 dark:hover:text-primary">
                                <i class="text-xl far fa-heart"></i>
                            </button>
                        </div>

                        <div class="flex items-center justify-between mb-6">
                            <span class="font-medium text-gray-700 dark:text-gray-300">Quantity</span>
                            <div class="flex items-center space-x-3">
                                <button
                                    class="flex items-center justify-center w-10 h-10 border border-gray-300 rounded-full quantity-btn dark:border-gray-700 dark:text-gray-200">
                                    <i class="text-gray-600 fas fa-minus"></i>
                                </button>
                                <span class="w-8 text-xl font-bold text-center text-gray-900 dark:text-gray-50">1</span>
                                <button
                                    class="flex items-center justify-center w-10 h-10 border border-gray-300 rounded-full quantity-btn dark:border-gray-700 dark:text-gray-200">
                                    <i class="text-gray-600 fas fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <button
                            class="w-full py-4 text-lg font-bold text-white transition-colors duration-300 transform shadow-lg bg-primary hover:bg-primary-dark rounded-xl hover:scale-105">
                            <i class="mr-2 fas fa-shopping-cart"></i>
                            Add to Cart - {{ $food->discount_price ?: $food->price }}

                        </button>
                    </div>


                    <div class="p-4 dark:bg-gray-950 bg-primary/10 rounded-2xl">
                        <div class="border-b border-gray-200 dark:border-gray-700">
                            <div class="flex space-x-2 md:space-x-8">
                                @if ($food->description)
                                    <button class="py-4 font-semibold border-b-2 tab-btn text-primary border-primary"
                                        data-tab="description">
                                        Description
                                    </button>
                                @endif
                                @if ($food->ingredients)
                                    <button
                                        class="py-4 text-gray-500 tab-btn hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
                                        data-tab="ingredients">
                                        Ingredients
                                    </button>
                                @endif
                                @if ($food->nutrition)
                                    <button
                                        class="py-4 text-gray-500 tab-btn hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
                                        data-tab="nutrition">
                                        Nutrition
                                    </button>
                                @endif



                                <button
                                    class="py-4 text-gray-500 tab-btn hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
                                    data-tab="reviews">
                                    Reviews
                                </button>
                            </div>
                        </div>
                        <div class="pt-4 tab-content active" id="description">
                            {!! $food->description !!}
                        </div>

                        <div class="pt-4 tab-content" id="ingredients">

                            {!! $food->ingredients !!}

                        </div>

                        <div class="pt-4 tab-content" id="nutrition">

                            {!! $food->nutrition !!}

                        </div>

                        <div class="tab-content" id="reviews">
                            <div class="pt-4 space-y-6 overflow-y-auto max-h-96">


                                @if ($reviews->isNotEmpty())
                                    @foreach ($reviews as $review)
                                        <div
                                            class="p-5 mb-6 bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
                                            <div class="flex items-start justify-between mb-4">
                                                <div>
                                                    <h5 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                                                        {{ $review->user->first_name }} {{ $review->user->last_name }}
                                                    </h5>

                                                    <div class="flex items-center mt-1 space-x-1 text-amber-400">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $review->rating)
                                                                <i class="fas fa-star"></i>
                                                            @else
                                                                <i class="text-gray-400 far fa-star dark:text-gray-600"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                </div>

                                                <span class="text-sm text-gray-500 dark:text-gray-400">
                                                    {{ $review->created_at->diffForHumans() }}
                                                </span>
                                            </div>

                                            <p class="leading-relaxed text-gray-700 dark:text-gray-300">
                                                {{ $review->review }}
                                            </p>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="flex flex-col items-center justify-center w-full py-8">
                                        <div
                                            class="w-full max-w-xl p-6 text-center transition bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700 rounded-2xl">
                                            <div
                                                class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-yellow-100 rounded-full dark:bg-yellow-900/30">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-8 h-8 text-yellow-500 dark:text-yellow-400" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                            </div>

                                            <h3 class="mb-2 text-xl font-semibold text-gray-800 dark:text-gray-100">
                                                No reviews yet
                                            </h3>

                                            <p class="mb-4 text-gray-600 dark:text-gray-300">
                                                There are no customer reviews for this item yet. If you have tried it,
                                                sharing your
                                                feedback will help others make a better choice.
                                            </p>


                                        </div>
                                    </div>
                                @endif





                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-12 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-3xl p-4 mx-auto bg-primary/10 dark:bg-gray-950 rounded-2xl">

            <h2 class="mb-8 text-3xl font-bold text-center text-gray-800 dark:text-gray-100">
                Write a Review
            </h2>
            <form action="{{ route('food_review', [$food->id, $food->slug]) }}" method="POST">
                @csrf
                <div class="p-8">
                    <div class="mb-6">
                        <label class="block mb-2 font-semibold text-gray-700 dark:text-gray-300">Your Rating</label>
                        <div class="flex gap-1 text-4xl text-gray-700 cursor-pointer dark:text-gray-400" id="ratingStars">
                            <span data-star="1" class="star hover:scale-125 ">★</span>
                            <span data-star="2" class="star hover:scale-125 ">★</span>
                            <span data-star="3" class="star hover:scale-125 ">★</span>
                            <span data-star="4" class="star hover:scale-125 ">★</span>
                            <span data-star="5" class="star hover:scale-125 ">★</span>
                        </div>
                        <input type="hidden" id="ratingInput" name="rating">
                    </div>



                    <div class="mb-5">
                        <label class="block mb-1 font-semibold text-gray-700 dark:text-gray-300">Your Review</label>
                        <textarea rows="4" name="review" required
                            class="w-full px-4 py-3 text-gray-800 bg-gray-100 border border-gray-300 rounded-xl dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 focus:ring-2 focus:ring-primary focus:outline-none"
                            placeholder="Write your review here..."></textarea>
                    </div>

                    <button
                        class="w-full py-3 font-semibold text-white transition bg-primary rounded-xl hover:bg-primary/90">
                        Submit Review
                    </button>



                </div>
            </form>

        </div>
    </section>










    <section class="py-12 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mb-8 text-3xl font-bold text-gray-900 dark:text-white">You Might Also Like</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

                @foreach ($related_food as $related)
                    <div
                        class="overflow-hidden shadow-2xl bg-gray-50 dish-card dark:bg-gray-900 rounded-2xl animate-fade-in ">
                        <a href="{{ route('food_details', [$related->id, $related->slug]) }}">

                            <div class="relative">
                                <div
                                    class="relative flex items-center justify-center h-56 overflow-hidden image-placeholder">
                                    <img class="object-cover w-full h-full"
                                        src="{{ asset('storage/' . $related->food_image) }}" alt="">
                                    <div class="popular-badge">
                                        <span class="px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">
                                            {{ $related->dietary->name }}
                                        </span>
                                    </div>
                                </div>

                                <div
                                    class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                    <div class="flex items-end justify-between">
                                        @if ($related->discount_price)
                                            <div class="flex items-center gap-2">
                                                <span class="text-xl font-bold text-red-600 dark:text-red-400">
                                                    ${{ $related->discount_price }}
                                                </span>
                                                <span class="text-sm text-gray-200 line-through dark:text-gray-400">
                                                    ${{ $related->price }}
                                                </span>
                                                <span
                                                    class="px-2 py-0.5 text-xs font-semibold text-white bg-green-600 dark:bg-green-500 rounded-full">
                                                    {{ round((($related->price - $related->discount_price) / $related->price) * 100) }}%
                                                    OFF
                                                </span>
                                            </div>
                                        @else
                                            <span class="text-2xl font-semibold text-primary">
                                                ${{ $related->price }}
                                            </span>
                                        @endif
                                    </div>
                                    <h3 class="text-lg font-semibold text-white ">{{ $related->title }}</h3>
                                </div>
                            </div>

                            <div class="p-3">
                                <div class="mb-6 text-gray-800 dark:text-gray-200 rich-text">

                                    {!! \Illuminate\Support\Str::words(strip_tags($related->description), 30, '...') !!}

                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-1 text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(128)</span>
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
        </div>
    </section>

@endsection

@section('script')

    <script>
        $(document).ready(function() {

            $('.tab-btn').on('click', function() {
                let tabId = $(this).data('tab');

                $('.tab-btn')
                    .removeClass('text-primary font-semibold border-b-2 border-primary')
                    .addClass('text-gray-500');

                $(this)
                    .addClass('text-primary font-semibold border-b-2 border-primary')
                    .removeClass('text-gray-500');

                $('.tab-content').removeClass('active');
                $('#' + tabId).addClass('active');
            });



            let quantity = 1;
            const $quantityDisplay = $('.quantity-btn + span');
            const $minusBtn = $('.quantity-btn').first();
            const $plusBtn = $('.quantity-btn').last();
            const $addToCartBtn = $('button:contains("Add to Cart")');


            $minusBtn.on('click', function() {
                if (quantity > 1) {
                    quantity--;
                    $quantityDisplay.text(quantity);
                    updateCartButton();
                }
            });


            $plusBtn.on('click', function() {
                quantity++;
                $quantityDisplay.text(quantity);
                updateCartButton();
            });


            function updateCartButton() {
                $addToCartBtn.text('Add to Cart (' + quantity + ')');
            }






            const stars = $("#ratingStars .star");
            const ratingInput = $("#ratingInput");

            stars.on("click", function() {
                const rating = $(this).data("star");
                ratingInput.val(rating);

                stars.removeClass("text-primary");
                stars.slice(0, rating).addClass("text-primary");
            });








        });
    </script>

@endsection
