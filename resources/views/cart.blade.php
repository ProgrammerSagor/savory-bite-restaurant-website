@extends('layouts.main')
@section('title', 'Cart Page')

@section('style')

@endsection

@section('conntent')
    <section>
        <main class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8 mt-20 md:mt-24">
            <div class="flex flex-col lg:flex-row gap-8 ">
                <div class="lg:w-2/3">
                    <div
                        class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h1 class="text-2xl font-bold">Your Foods Cart</h1>
                            <p class="text-gray-500 mt-1">1 items in your cart</p>
                        </div>

                        <div id="cart-items" class="divide-y divide-gray-200">

                            <div class="cart-item p-6 flex flex-col sm:flex-row gap-4">
                                <div class="flex-shrink-0 w-full sm:w-24 h-24 rounded-lg overflow-hidden">
                                    <img src="{{ asset('assets/images/f1.jpg') }}" alt="Cheese Burger"
                                        class="object-cover w-full h-full">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex flex-col sm:flex-row sm:justify-between">
                                        <div>
                                            <h3 class="font-semibold text-lg">Classic Cheese Burger</h3>
                                            <p class="text-gray-500 text-sm mt-1">Beef patty, cheddar,
                                                lettuce & special sauce</p>
                                            <div class="flex items-center mt-2">
                                                <span class="text-green-600 text-sm font-medium">
                                                    <i class="fas fa-check-circle mr-1"></i> Available
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mt-4 sm:mt-0">
                                            <span class="text-xl font-bold">$12.99</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mt-4">
                                        <div class="flex items-center">
                                            <button
                                                class="quantity-btn w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-600"
                                                onclick="updateQuantity('item1', -1)">
                                                <i class="fas fa-minus text-xs"></i>
                                            </button>
                                            <span id="item1-quantity" class="mx-3 font-medium">1</span>
                                            <button
                                                class="quantity-btn w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-600"
                                                onclick="updateQuantity('item1', 1)">
                                                <i class="fas fa-plus text-xs"></i>
                                            </button>
                                        </div>
                                        <button
                                            class="remove-btn text-red-500 hover:text-red-600 mt-4 sm:mt-0 flex items-center"
                                            onclick="removeItem('item1')">
                                            <i class="fas fa-trash-alt mr-2"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div id="empty-cart" class="empty-cart hidden p-12 text-center">
                            <div
                                class="w-24 h-24 mx-auto bg-gray-100 rounded-full flex items-center justify-center mb-6">
                                <i class="fas fa-shopping-cart text-gray-400 text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-700 mb-2">Your cart is empty</h3>
                            <p class="text-gray-500 mb-6">Add some items to your cart to get started</p>
                            <a href="#"
                                class="inline-flex items-center px-6 py-3 bg-primary hover:bg-primary-dark text-white font-medium rounded-lg transition-colors">
                                <i class="fas fa-store mr-2"></i> Start Fooding
                            </a>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mt-6">
                        <h3 class="font-semibold text-lg mb-4">Promo Code</h3>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input type="text" placeholder="Enter promo code"
                                class="flex-grow px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            <button
                                class="px-6 py-3 bg-gray-800 hover:bg-gray-900 text-white font-medium rounded-lg transition-colors">
                                Apply Code
                            </button>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3">
                    <div
                        class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sticky top-6">
                        <h2 class="text-xl font-bold mb-6">Order Summary</h2>

                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span id="subtotal" class="font-medium">$12.99</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Shipping</span>
                                <span class="font-medium text-green-600">Free</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax</span>
                                <span id="tax" class="font-medium">$2.99</span>
                            </div>
                            <div
                                class="flex justify-between text-lg font-bold pt-4 border-t border-gray-200">
                                <span>Total</span>
                                <span id="total" class="text-primary">$15.98</span>
                            </div>
                        </div>

                        <a href="{{ route('checkout') }}"
                            class="w-full py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-lg transition-colors mb-4 flex items-center justify-center"
                            onclick="checkout()">
                            <i class="fas fa-lock mr-2"></i> Proceed to Checkout
                        </a>

                        <div class="text-center text-sm text-gray-500">
                            <p>Secure checkout • Money-back guarantee</p>
                        </div>

                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <h3 class="font-semibold mb-3">We Accept</h3>
                            <div class="flex space-x-3">
                                <div class="w-12 h-8 bg-gray-200 rounded flex items-center justify-center">
                                    <i class="fab fa-cc-visa text-blue-600"></i>
                                </div>
                                <div class="w-12 h-8 bg-gray-200 rounded flex items-center justify-center">
                                    <i class="fab fa-cc-mastercard text-red-600"></i>
                                </div>
                                <div class="w-12 h-8 bg-gray-200 rounded flex items-center justify-center">
                                    <i class="fab fa-cc-paypal text-blue-500"></i>
                                </div>
                                <div class="w-12 h-8 bg-gray-200 rounded flex items-center justify-center">
                                    <i class="fab fa-cc-apple-pay text-gray-800"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>


@endsection

@section('script')



@endsection
