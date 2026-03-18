@extends('layouts.main')

@section('title', 'Blog Details Page')

@section('style')

@endsection

@section('conntent')


    <main class="container px-4 py-8 mx-auto mt-20 md:mt-24">
        <div class="flex flex-col gap-8 lg:flex-row">
            <!-- Article Content -->
            <div class="lg:w-2/3">
                <!-- Article Header -->
                <article
                    class="overflow-hidden transition-colors duration-300 bg-gray-100 shadow-lg rounded-2xl">
                    <div
                        class="relative flex items-center justify-center h-80">
                        <img src="{{ asset('assets/images/b4.jpg') }}" class="object-fill w-full h-full" alt="">
                        <div class="absolute top-4 right-4">
                            <span
                                class="px-3 py-1 text-xs font-bold rounded-full bg-amber-100 text-amber-700">Recipes</span>
                        </div>
                    </div>

                    <div class="p-6 md:p-8">
                        <div class="flex flex-wrap items-center gap-4 mb-6">
                            <div class="flex items-center space-x-2">
                                <div
                                    class="flex items-center justify-center w-10 h-10 bg-gray-300 rounded-full">
                                    <i class="text-gray-600 fas fa-user"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Chef Sophia</p>
                                    <p class="text-xs text-gray-500">Master Pizzaiolo</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 text-sm text-gray-500">
                                <span class="flex items-center space-x-1">
                                    <i class="far fa-clock"></i>
                                    <span>1 week ago</span>
                                </span>
                                <span class="flex items-center space-x-1">
                                    <i class="fa-solid fa-rotate-left"></i>
                                    <span>15 min read</span>
                                </span>
                                <span class="flex items-center space-x-1">
                                    <i class="far fa-eye"></i>
                                    <span>2.4K views</span>
                                </span>
                            </div>
                        </div>

                        <h1 class="mb-6 text-3xl font-bold text-gray-800 md:text-4xl">Perfect Neapolitan
                            Pizza at Home: A Step-by-Step Guide</h1>

                        <div class="flex flex-wrap gap-2 mb-8">
                            <span
                                class="px-3 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">#pizza</span>
                            <span
                                class="px-3 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">#italian</span>
                            <span
                                class="px-3 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">#dough</span>
                            <span
                                class="px-3 py-1 text-sm text-gray-600 bg-gray-100 rounded-full">#homemade</span>
                        </div>

                        <div class="prose text-gray-600 max-w-none">
                            <p class="mb-6 text-lg">Creating authentic Neapolitan pizza at home might seem daunting, but
                                with the right techniques and a bit of patience, you can achieve restaurant-quality
                                results. In this comprehensive guide, I'll walk you through every step of the process.
                            </p>

                            <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-800">The Secret to Perfect
                                Pizza Dough</h2>
                            <p class="mb-4">The foundation of any great pizza is the dough. For authentic Neapolitan
                                pizza, we use a specific type of flour and a slow fermentation process that develops
                                incredible flavor and texture.</p>

                            <div class="p-4 my-6 border-l-4 rounded-r-lg bg-amber-50 border-amber-500">
                                <div class="flex items-start space-x-3">
                                    <i class="mt-1 fas fa-lightbulb text-amber-500"></i>
                                    <div>
                                        <p class="font-medium text-amber-800">Pro Tip</p>
                                        <p class="text-sm text-amber-700">Use tipo "00" flour for
                                            the most authentic texture. This finely milled flour creates the perfect
                                            crust consistency.</p>
                                    </div>
                                </div>
                            </div>

                            <h3 class="mt-6 mb-3 text-xl font-bold text-gray-800">Ingredients for Pizza
                                Dough</h3>
                            <ul class="mb-6 space-y-2 list-disc list-inside">
                                <li>500g tipo "00" flour</li>
                                <li>325ml warm water</li>
                                <li>10g sea salt</li>
                                <li>3g fresh yeast</li>
                                <li>5g olive oil</li>
                            </ul>

                            <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-800">The Fermentation
                                Process</h2>
                            <p class="mb-4">Slow fermentation is key to developing complex flavors. After initial
                                mixing, let the dough rest for 2 hours at room temperature, then refrigerate for 24-48
                                hours.</p>

                            <div class="grid grid-cols-1 gap-6 my-8 md:grid-cols-2">
                                <div class="p-4 rounded-lg bg-gray-50">
                                    <div
                                        class="flex items-center justify-center w-12 h-12 mb-3 text-lg font-bold text-white rounded-full bg-primary">
                                        1</div>
                                    <h4 class="mb-2 font-bold text-gray-800">Mix & Knead</h4>
                                    <p class="text-sm text-gray-600">Combine ingredients and knead
                                        for 10 minutes until smooth and elastic.</p>
                                </div>
                                <div class="p-4 rounded-lg bg-gray-50">
                                    <div
                                        class="flex items-center justify-center w-12 h-12 mb-3 text-lg font-bold text-white rounded-full bg-primary">
                                        2</div>
                                    <h4 class="mb-2 font-bold text-gray-800">First Rise</h4>
                                    <p class="text-sm text-gray-600">Let dough rise for 2 hours at
                                        room temperature until doubled in size.</p>
                                </div>
                                <div class="p-4 rounded-lg bg-gray-50">
                                    <div
                                        class="flex items-center justify-center w-12 h-12 mb-3 text-lg font-bold text-white rounded-full bg-primary">
                                        3</div>
                                    <h4 class="mb-2 font-bold text-gray-800">Cold Ferment</h4>
                                    <p class="text-sm text-gray-600">Refrigerate for 24-48 hours to
                                        develop flavor.</p>
                                </div>
                                <div class="p-4 rounded-lg bg-gray-50">
                                    <div
                                        class="flex items-center justify-center w-12 h-12 mb-3 text-lg font-bold text-white rounded-full bg-primary">
                                        4</div>
                                    <h4 class="mb-2 font-bold text-gray-800">Shape & Top</h4>
                                    <p class="text-sm text-gray-600">Gently shape dough and add your
                                        favorite toppings.</p>
                                </div>
                            </div>

                            <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-800">Baking Techniques
                            </h2>
                            <p class="mb-4">For authentic Neapolitan pizza, you need high heat. If you don't have a
                                pizza oven, here are some alternatives:</p>

                            <div class="my-6 overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-600">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50">
                                        <tr>
                                            <th class="px-4 py-3">Method</th>
                                            <th class="px-4 py-3">Temperature</th>
                                            <th class="px-4 py-3">Time</th>
                                            <th class="px-4 py-3">Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b">
                                            <td class="px-4 py-3 font-medium text-gray-900">Pizza Stone
                                            </td>
                                            <td class="px-4 py-3">500°F / 260°C</td>
                                            <td class="px-4 py-3">5-7 minutes</td>
                                            <td class="px-4 py-3">Excellent</td>
                                        </tr>
                                        <tr class="bg-white border-b">
                                            <td class="px-4 py-3 font-medium text-gray-900">Cast Iron
                                            </td>
                                            <td class="px-4 py-3">475°F / 245°C</td>
                                            <td class="px-4 py-3">10-12 minutes</td>
                                            <td class="px-4 py-3">Very Good</td>
                                        </tr>
                                        <tr class="bg-white">
                                            <td class="px-4 py-3 font-medium text-gray-900">Baking Sheet
                                            </td>
                                            <td class="px-4 py-3">450°F / 230°C</td>
                                            <td class="px-4 py-3">12-15 minutes</td>
                                            <td class="px-4 py-3">Good</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-800">Topping Combinations
                            </h2>
                            <p class="mb-6">While Margherita is the classic Neapolitan pizza, feel free to experiment
                                with these delicious combinations:</p>

                            <div class="grid grid-cols-1 gap-4 my-6 md:grid-cols-3">
                                <div
                                    class="p-4 text-center bg-white border border-gray-200 rounded-lg">
                                    <i class="mb-2 text-2xl text-green-500 fas fa-leaf"></i>
                                    <h4 class="font-bold text-gray-800">Classic Margherita</h4>
                                    <p class="mt-1 text-sm text-gray-600">San Marzano tomatoes, fresh mozzarella, basil</p>
                                </div>

                                <div
                                    class="p-4 text-center bg-white border border-gray-200 rounded-lg">
                                    <i class="mb-2 text-2xl text-red-500 fas fa-pepper-hot"></i>
                                    <h4 class="font-bold text-gray-800">Diavola</h4>
                                    <p class="mt-1 text-sm text-gray-600">Spicy salami,mozzarella chili oil</p>
                                </div>
                                <div
                                    class="p-4 text-center bg-white border border-gray-200 rounded-lg">
                                    <i class="mb-2 text-2xl fas fa-mushroom text-amber-500"></i>
                                    <h4 class="font-bold text-gray-800">Funghi</h4>
                                    <p class="mt-1 text-sm text-gray-600">Mixed mushrooms, truffle
                                        oil, Parmesan</p>
                                </div>
                            </div>

                            <div
                                class="p-6 my-8 border border-blue-200 rounded-lg bg-blue-50">
                                <div class="flex items-start space-x-4">
                                    <i class="mt-1 text-2xl text-blue-500 fas fa-cheese"></i>
                                    <div>
                                        <h4 class="mb-2 text-lg font-bold text-blue-800">Chef's
                                            Secret</h4>
                                        <p class="text-blue-700">For the perfect pizza, less is more
                                            when it comes to toppings. Overloading your pizza will prevent the crust
                                            from cooking properly and create a soggy center.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Article Footer -->
                        <div class="pt-6 mt-8 border-t border-gray-200">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center space-x-4">
                                    <button
                                        class="flex items-center space-x-2 text-gray-500 transition-colors hover:text-primary">
                                        <i class="far fa-heart"></i>
                                        <span>Like</span>
                                        <span class="px-2 py-1 text-xs bg-gray-100 rounded-full"
                                            id="likeCount">248</span>
                                    </button>
                                    <button
                                        class="flex items-center space-x-2 text-gray-500 transition-colors hover:text-primary">
                                        <i class="fas fa-share"></i>
                                        <span>Share</span>
                                    </button>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm text-gray-500">Save for later:</span>
                                    <button class="text-gray-400 transition-colors hover:text-primary">
                                        <i class="far fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Author Bio -->
                <div class="p-6 mt-6 transition-colors duration-300 bg-gray-100 shadow-lg rounded-2xl">
                    <div class="flex flex-col items-start space-x-6 md:flex-row">
                        <div
                            class="flex items-center justify-center w-20 h-20 mb-4 bg-gray-300 rounded-full md:mb-0">
                            <i class="text-2xl text-gray-600 fas fa-user"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="mb-2 text-xl font-bold text-gray-800">About Chef Sophia</h3>
                            <p class="mb-4 text-gray-600">With over 15 years of experience in Italian
                                cuisine, Chef Sophia trained in Naples under master pizzaiolos. She now leads our
                                culinary team and shares her passion for authentic Italian cooking through our blog.</p>
                            <div class="flex space-x-4">
                                <button class="text-sm font-medium text-primary hover:text-primary-dark">View
                                    Profile</button>
                                <button class="text-sm font-medium text-primary hover:text-primary-dark">More
                                    Articles</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="p-6 mt-6 transition-colors duration-300 bg-gray-100 shadow-lg rounded-2xl">
                    <h3 class="mb-6 text-xl font-bold text-gray-800">Comments (12)</h3>

                    <!-- Comment Form -->
                    <div class="mb-8">
                        <textarea placeholder="Share your thoughts..."
                            class="w-full px-4 py-3 text-gray-800 placeholder-gray-500 transition-all border border-gray-200 rounded-lg resize-none bg-gray-50 focus:ring-2 focus:ring-primary focus:border-transparent"
                            rows="4"></textarea>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                <i class="fas fa-info-circle"></i>
                                <span>Your email will not be published</span>
                            </div>
                            <button
                                class="px-6 py-2 font-medium text-white transition-colors rounded-lg bg-primary hover:bg-primary-dark">
                                Post Comment
                            </button>
                        </div>
                    </div>

                    <!-- Comments List -->
                    <div class="space-y-6">
                        <!-- Comment 1 -->
                        <div class="flex space-x-4">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-full bg-amber-100">
                                <i class="fas fa-user text-amber-500"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-2">
                                    <div>
                                        <h4 class="font-bold text-gray-800">Marco Rossi</h4>
                                        <span class="text-sm text-gray-500">3 days ago</span>
                                    </div>
                                    <button class="text-gray-400 transition-colors hover:text-primary">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <p class="text-gray-600">Finally tried this recipe and it's amazing!
                                    The cold fermentation really makes a difference. My family loved it!</p>
                                <button
                                    class="mt-2 text-sm font-medium text-primary hover:text-primary-dark">Reply</button>
                            </div>
                        </div>

                        <!-- Comment 2 -->
                        <div class="flex space-x-4">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-12 h-12 bg-blue-100 rounded-full">
                                <i class="text-blue-500 fas fa-user"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-2">
                                    <div>
                                        <h4 class="font-bold text-gray-800">Sarah Chen</h4>
                                        <span class="text-sm text-gray-500">1 week ago</span>
                                    </div>
                                    <button class="text-gray-400 transition-colors hover:text-primary">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <p class="text-gray-600">Do you have any recommendations for
                                    gluten-free flour alternatives? My daughter has celiac but loves pizza.</p>
                                <button
                                    class="mt-2 text-sm font-medium text-primary hover:text-primary-dark">Reply</button>

                                <!-- Reply -->
                                <div class="flex pl-4 mt-4 space-x-4 border-l-2 border-gray-200">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-full bg-primary/20">
                                        <i class="text-sm fas fa-user-chef text-primary"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-start justify-between mb-2">
                                            <div>
                                                <h4 class="font-bold text-gray-800">Chef Sophia</h4>
                                                <span class="text-sm text-gray-500">Author</span>
                                            </div>
                                        </div>
                                        <p class="text-gray-600">Hi Sarah! For gluten-free, I
                                            recommend a blend of rice flour, tapioca starch, and xanthan gum. The
                                            texture will be different but still delicious!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="lg:w-1/3">

                <div class="lg:sticky lg:top-24">

                    <div class="p-6 mb-6 transition-colors duration-300 bg-gray-100 shadow-lg rounded-2xl">
                        <h3 class="mb-4 text-xl font-bold text-gray-800">Related Posts</h3>
                        <div class="space-y-4">
                            <div class="flex space-x-3 cursor-pointer group">
                                <div
                                    class="flex items-center justify-center w-16 h-16 transition-transform bg-amber-100 group-hover:scale-105">
                                    <img src="http://127.0.0.1:8000/assets/images/b3.jpg" class="w-full h-full rounded-lg"
                                        alt="">
                                </div>
                                <div>
                                    <h4
                                        class="font-medium text-gray-800 transition-colors group-hover:text-primary">
                                        Artisan Bread Baking Guide</h4>
                                    <div class="flex items-center mt-1 text-xs text-gray-500">
                                        <i class="mr-1 far fa-clock"></i> 2 weeks ago
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-3 cursor-pointer group">
                                <div
                                    class="flex items-center justify-center w-16 h-16 transition-transform bg-amber-100 group-hover:scale-105">
                                    <img src="http://127.0.0.1:8000/assets/images/b3.jpg" class="w-full h-full rounded-lg"
                                        alt="">
                                </div>
                                <div>
                                    <h4
                                        class="font-medium text-gray-800 transition-colors group-hover:text-primary">
                                        Fresh Pasta Making at Home</h4>
                                    <div class="flex items-center mt-1 text-xs text-gray-500">
                                        <i class="mr-1 far fa-clock"></i> 3 weeks ago
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-3 cursor-pointer group">
                                <div
                                    class="flex items-center justify-center w-16 h-16 transition-transform bg-amber-100 group-hover:scale-105">
                                    <img src="http://127.0.0.1:8000/assets/images/b3.jpg" class="w-full h-full rounded-lg"
                                        alt="">
                                </div>
                                <div>
                                    <h4
                                        class="font-medium text-gray-800 transition-colors group-hover:text-primary">
                                        5 Essential Italian Sauces</h4>
                                    <div class="flex items-center mt-1 text-xs text-gray-500">
                                        <i class="mr-1 far fa-clock"></i> 1 month ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="p-6 mt-6 transition-colors duration-300 bg-gray-100 shadow-lg rounded-2xl">
                        <h3 class="mb-4 text-xl font-bold text-gray-800">Share This Article</h3>
                        <div class="flex space-x-3">
                            <button
                                class="flex-1 py-2 text-sm font-medium text-white transition-colors bg-blue-600 rounded-lg hover:bg-blue-700">
                                <i class="mr-2 fab fa-facebook-f"></i> Share
                            </button>
                            <button
                                class="flex-1 py-2 text-sm font-medium text-white transition-colors bg-blue-400 rounded-lg hover:bg-blue-500">
                                <i class="mr-2 fab fa-twitter"></i> Tweet
                            </button>
                            <button
                                class="flex-1 py-2 text-sm font-medium text-white transition-colors bg-red-600 rounded-lg hover:bg-red-700">
                                <i class="mr-2 fab fa-pinterest"></i> Pin
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>



@endsection

@section('script')

@endsection
