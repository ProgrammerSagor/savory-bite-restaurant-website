@extends('layouts.main')
@section('title', 'Confirm Order Page')

@section('style')

@endsection

@section('conntent')
    <section>
        <div class="container mx-auto px-4 py-8 my-20 md:mt-24 max-w-6xl">
            <div class="text-center mb-12 animate-slide-up">
                <div
                    class="inline-flex items-center justify-center w-24 h-24 bg-green-100 rounded-full mb-6 animate-bounce-in">
                    <i class="fas fa-check-circle text-5xl text-emerald-500"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Order Confirmed!</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Thank you for your order. We're preparing your items and will notify you when they're on their way.
                </p>
                <div
                    class="mt-6 inline-flex items-center px-4 py-2 bg-emerald-500/10 text-emerald-500 rounded-full text-sm font-medium">
                    <i class="fas fa-receipt mr-2"></i>
                    Order #: <span class="font-bold ml-1">RST-7842-2024</span>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-6">
                    <div
                        class="success-card bg-white rounded-2xl shadow-lg p-6 border border-gray-100 animate-fade-in">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-clipboard-list text-emerald-500 mr-3"></i>
                            Order Summary
                        </h2>

                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between items-start p-3 rounded-lg">
                                <div class="flex">
                                    <div
                                        class="h-12 w-16 bg-gray-200 rounded-lg flex items-center justify-center mr-3">
                                        <img src="{{ asset('assets/images/f1.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-900">Truffle Mushroom Pasta
                                        </h3>
                                        <p class="text-sm text-gray-500">Qty: 1</p>
                                    </div>
                                </div>
                                <span class="font-semibold text-gray-900">$24.00</span>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 pt-4 space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="text-gray-900 font-semibold">$24.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Delivery Fee</span>
                                <span class="text-gray-900 font-semibold">$5.99</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax</span>
                                <span class="text-gray-900 font-semibold">$8.82</span>
                            </div>
                            <div
                                class="flex justify-between text-xl font-bold pt-3 border-t border-gray-200">
                                <span class="text-gray-900">Total</span>
                                <span class="text-emerald-500 font-semibold">$38.81</span>
                            </div>
                        </div>
                    </div>

                    <div class="success-card bg-white rounded-2xl shadow-lg p-6 border border-gray-100 animate-fade-in"
                        style="animation-delay: 0.2s;">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-truck text-emerald-500 mr-3"></i>
                            Delivery Information
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-3">Delivery Address</h3>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">John Doe</p>
                                    <p class="text-gray-700">123 Main Street</p>
                                    <p class="text-gray-700">New York, NY 10001</p>
                                    <p class="text-gray-700">United States</p>
                                    <p class="text-gray-700 mt-2">
                                        <i class="fas fa-phone mr-2"></i>+1 (555) 123-4567
                                    </p>
                                </div>
                            </div>

                            <div>
                                <h3 class="font-semibold text-gray-900 mb-3">Estimated Delivery</h3>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex items-center mb-3">
                                        <div class="pulse-dot w-3 h-3 bg-emerald-500 rounded-full mr-3"></div>
                                        <span class="font-medium text-gray-900">Preparing your order</span>
                                    </div>

                                    <div class="tracking-bar mb-2">
                                        <div class="tracking-progress"></div>
                                    </div>

                                    <p class="text-sm text-gray-600">
                                        <i class="far fa-clock mr-2"></i>
                                        Expected delivery: <span class="font-medium">Today, 7:00 PM - 8:00 PM</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="success-card bg-white rounded-2xl shadow-lg p-6 border border-gray-100 sticky top-8 animate-fade-in"
                        style="animation-delay: 0.4s;">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">What's Next?</h2>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-8 h-8 bg-emerald-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-1">
                                    1
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Order Confirmation</h3>
                                    <p class="text-sm text-gray-600 mt-1">We've received your order and
                                        are preparing it now.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-8 h-8 bg-gray-300 text-gray-700 rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-1">
                                    2
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Preparation</h3>
                                    <p class="text-sm text-gray-600 mt-1">Our chefs are crafting your
                                        delicious meal with care.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-8 h-8 bg-gray-300 text-gray-700 rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-1">
                                    3
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">On the Way</h3>
                                    <p class="text-sm text-gray-600 mt-1">Your driver will pick up and
                                        deliver your order.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-8 h-8 bg-gray-300 text-gray-700 rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-1">
                                    4
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Delivered</h3>
                                    <p class="text-sm text-gray-600 mt-1">Enjoy your meal! We hope you
                                        love it.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-200 space-y-4">
                            

                            <button
                                class="w-full bg-white border border-gray-300 text-gray-800 py-3 rounded-xl font-semibold transition-all duration-300 hover:bg-gray-50 flex items-center justify-center">
                                <i class="fas fa-receipt mr-2"></i>
                                View Receipt
                            </button>

                            
                        </div>

                        <div class="mt-6 p-4 bg-blue-50 rounded-xl">
                            <h3 class="font-semibold text-blue-800 flex items-center">
                                <i class="fas fa-headset mr-2"></i>
                                Need Help?
                            </h3>
                            <p class="text-sm text-blue-700 mt-1">
                                Contact our support team at
                                <a href="tel:+15551234567" class="font-medium underline">(555) 123-4567</a>
                                or email
                                <a href="mailto:support@restaurant.com"
                                    class="font-medium underline">support@restaurant.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12 animate-fade-in" style="animation-delay: 0.6s;">
                <p class="text-gray-600 mb-4">Want to explore more delicious options?</p>
                <a href="{{ route('menu') }}"
                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-500 to-emerald-500 hover:from-emerald-500-dark hover:to-emerald-600 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-utensils mr-2"></i>
                    Continue Browsing Menu
                </a>
            </div>
        </div>
    </section>


@endsection

@section('script')



@endsection
