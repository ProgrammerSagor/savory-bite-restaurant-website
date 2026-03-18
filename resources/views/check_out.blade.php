@extends('layouts.main')
@section('title', 'Checkout Page')

@section('style')

@endsection

@section('conntent')
    <div class="min-h-screen py-8 px-4 sm:px-6 lg:px-8 mt-20 md:my-24">
        <div class="max-w-6xl mx-auto">
            <div class="mb-8 text-center">
                <h1 class="text-3xl font-bold text-gray-900">Complete Your Order</h1>
                <p class="text-gray-600 mt-2">Finalize your purchase with secure checkout</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-8">
                    <div class="bg-gray-50 shadow-2xl rounded-xl p-6 animate-fade-in">
                        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fa-solid fa-address-card text-primary mr-3"></i>
                            Contact Information
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label for="firstName"
                                    class="block text-sm font-medium text-gray-700 mb-1">First
                                    Name</label>
                                <input type="text" id="firstName"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="John">
                            </div>
                            <div class="form-group">
                                <label for="lastName"
                                    class="block text-sm font-medium text-gray-700 mb-1">Last
                                    Name</label>
                                <input type="text" id="lastName"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="Doe">
                            </div>
                            <div class="form-group md:col-span-2">
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700 mb-1">Email
                                    Address</label>
                                <input type="email" id="email"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="john.doe@example.com">
                            </div>
                            <div class="form-group md:col-span-2">
                                <label for="phone"
                                    class="block text-sm font-medium text-gray-700 mb-1">Phone
                                    Number</label>
                                <input type="tel" id="phone"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="+1 (555) 123-4567">
                            </div>
                        </div>
                    </div>


                    <div class="bg-gray-50 shadow-2xl rounded-xl  p-6 animate-fade-in"
                        style="animation-delay: 0.1s;">
                        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-truck text-primary mr-3"></i>
                            Shipping Address
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-group md:col-span-2">
                                <label for="address"
                                    class="block text-sm font-medium text-gray-700 mb-1">Street
                                    Address</label>
                                <input type="text" id="address"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="123 Main Street">
                            </div>
                            <div class="form-group">
                                <label for="city"
                                    class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                <input type="text" id="city"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="New York">
                            </div>
                            <div class="form-group">
                                <label for="state"
                                    class="block text-sm font-medium text-gray-700 mb-1">State/Province</label>
                                <input type="text" id="state"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="NY">
                            </div>
                            <div class="form-group">
                                <label for="zipCode"
                                    class="block text-sm font-medium text-gray-700 mb-1">ZIP/Postal
                                    Code</label>
                                <input type="text" id="zipCode"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                    placeholder="10001">
                            </div>
                            <div class="form-group">
                                <label for="country"
                                    class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                                <select id="country"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300">
                                    <option value="us">United States</option>
                                    <option value="ca">Canada</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="au">Australia</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <input type="checkbox" id="saveAddress"
                                class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="saveAddress" class="ml-2 block text-sm text-gray-700">Save
                                this address for future orders</label>
                        </div>
                    </div>

                    <div class="bg-gray-50 shadow-2xl rounded-xl p-6 animate-fade-in"
                        style="animation-delay: 0.2s;">
                        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-credit-card text-primary mr-3"></i>
                            Payment Method
                        </h2>
                        <div class="space-y-4">

                            <div class="payment-method border-2 border-primary rounded-xl p-4 bg-primary/5">
                                <div class="flex items-center mb-4">
                                    <input type="radio" id="creditCard" name="paymentMethod"
                                        class="h-4 w-4 text-primary focus:ring-primary border-gray-300" checked>
                                    <label for="creditCard"
                                        class="ml-2 block text-sm font-medium text-gray-900">Credit
                                        Card</label>
                                    <div class="ml-auto flex space-x-2">
                                        <i class="fab fa-cc-visa text-gray-500 text-xl"></i>
                                        <i class="fab fa-cc-mastercard text-gray-500 text-xl"></i>
                                        <i class="fab fa-cc-amex text-gray-500 text-xl"></i>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="form-group md:col-span-2">
                                        <label for="cardNumber"
                                            class="block text-sm font-medium text-gray-700 mb-1">Card
                                            Number</label>
                                        <input type="text" id="cardNumber"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                            placeholder="1234 5678 9012 3456">
                                    </div>
                                    <div class="form-group">
                                        <label for="expiryDate"
                                            class="block text-sm font-medium text-gray-700 mb-1">Expiry
                                            Date</label>
                                        <input type="text" id="expiryDate"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                            placeholder="MM/YY">
                                    </div>
                                    <div class="form-group">
                                        <label for="cvv"
                                            class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
                                        <input type="text" id="cvv"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                            placeholder="123">
                                    </div>
                                    <div class="form-group md:col-span-2">
                                        <label for="cardName"
                                            class="block text-sm font-medium text-gray-700 mb-1">Name
                                            on Card</label>
                                        <input type="text" id="cardName"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                            placeholder="John Doe">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="bg-gray-50 shadow-xl rounded-xl p-6 sticky top-8 animate-sl-in">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Order Summary</h2>

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

                        <div class="border-t border-gray-200 pt-4 space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="text-gray-900">$24.00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Shipping</span>
                                <span class="text-gray-900">$5.99</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Tax</span>
                                <span class="text-gray-900">$8.82</span>
                            </div>
                            <div
                                class="flex justify-between text-lg font-bold pt-2 border-t border-gray-200 mt-2">
                                <span class="text-gray-900">Total</span>
                                <span class="text-gray-900">$38.81</span>
                            </div>
                        </div>




                        <a href="{{ route('confirm_order') }}"
                            class=" block text-center bg-emerald-500  hover:bg-emerald-600 text-white py-4 rounded-lg font-bold text-lg mt-6 transition-all duration-300 transform hover:scale-[1.02] shadow-md">
                            Complete Order
                        </a>

                        <div
                            class="mt-4 text-center text-xs text-gray-500 flex items-center justify-center">
                            <i class="fas fa-lock mr-1"></i>
                            <span>Your payment is secure and encrypted</span>
                        </div>

                        <div class="mt-4 text-center text-xs text-gray-500">
                            <p>By completing your purchase you agree to our <a href="#"
                                    class="text-primary hover:underline">Terms of Service</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')



@endsection
