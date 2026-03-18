@extends('layouts.main')
@section('title', 'Reservations Page')

@section('style')

@endsection

@section('conntent')


    <main class="container mx-auto px-4 py-8 mt-20 md:mt-24">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Make a Reservation</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Book your table at Savory Bite  Restaurant for an
                unforgettable
                dining experience. We look forward to serving you.</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-12">
            <div class="lg:w-2/3">
                <div class="bg-white rounded-2xl shadow-2xl p-6 md:p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Book Your Table</h2>

                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 mb-1">Full Name
                                    *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input type="text" id="name"
                                        class="pl-10 w-full  bg-gray-50  px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        placeholder="jubin gerg" required>
                                </div>
                            </div>

                            <div>
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700 mb-1">Email Address
                                    *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input type="email" id="email"
                                        class="pl-10 w-full  bg-gray-50  px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        placeholder="junin@example.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone"
                                    class="block text-sm font-medium text-gray-700 mb-1">Phone Number
                                    *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-phone text-gray-400"></i>
                                    </div>
                                    <input type="tel" id="phone"
                                        class="pl-10 w-full  bg-gray-50  px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        placeholder="(123) 456-7890" required>
                                </div>
                            </div>

                            <div>
                                <label for="occasion"
                                    class="block text-sm font-medium text-gray-700 mb-1">Special
                                    Occasion</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-gift text-gray-400"></i>
                                    </div>
                                    <select id="occasion"
                                        class="pl-10 w-full  bg-gray-50  px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all appearance-none">
                                        <option value="">None</option>
                                        <option value="birthday">Birthday</option>
                                        <option value="anniversary">Anniversary</option>
                                        <option value="date">Romantic Date</option>
                                        <option value="business">Business Dinner</option>
                                        <option value="celebration">Celebration</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="fas fa-chevron-down text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label for="date"
                                    class="block text-sm font-medium text-gray-700 mb-1">Date *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-calendar text-gray-400"></i>
                                    </div>
                                    <input type="date" id="date"
                                        class="pl-10 w-full  bg-gray-50  px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        required>
                                </div>
                            </div>

                            <div>
                                <label for="time"
                                    class="block text-sm font-medium text-gray-700 mb-1">Time *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-clock text-gray-400"></i>
                                    </div>
                                    <select id="time"
                                        class="pl-10 w-full  bg-gray-50  px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all appearance-none"
                                        required>
                                        <option value="">Select Time</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="11:30">11:30 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="12:30">12:30 PM</option>
                                        <option value="13:00">1:00 PM</option>
                                        <option value="13:30">1:30 PM</option>
                                        <option value="17:00">5:00 PM</option>
                                        <option value="17:30">5:30 PM</option>
                                        <option value="18:00">6:00 PM</option>
                                        <option value="18:30">6:30 PM</option>
                                        <option value="19:00">7:00 PM</option>
                                        <option value="19:30">7:30 PM</option>
                                        <option value="20:00">8:00 PM</option>
                                        <option value="20:30">8:30 PM</option>
                                        <option value="21:00">9:00 PM</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="fas fa-chevron-down text-gray-400"></i>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="guests"
                                    class="block text-sm font-medium text-gray-700 mb-1">Number of
                                    Guests *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-users text-gray-400"></i>
                                    </div>
                                    <select id="guests"
                                        class="pl-10 w-full  bg-gray-50  px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all appearance-none"
                                        required>
                                        <option value="">Select Guests</option>
                                        <option value="1">1 Person</option>
                                        <option value="2">2 People</option>
                                        <option value="3">3 People</option>
                                        <option value="4">4 People</option>
                                        <option value="5">5 People</option>
                                        <option value="6">6 People</option>
                                        <option value="7">7 People</option>
                                        <option value="8">8 People</option>
                                        <option value="9">9+ People</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="fas fa-chevron-down text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">Table
                                Preference</label>

                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <div class="relative">
                                    <input class="sr-only peer" type="radio" name="table-preference" id="indoor"
                                        value="indoor" checked>
                                    <label
                                        class="flex flex-col items-center  p-4 bg-white border border-gray-300 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:bg-primary/5 transition-all"
                                        for="indoor">
                                        <i class="fas fa-home text-gray-500 text-xl mb-2 peer-checked:text-primary"></i>
                                        <span class="text-sm font-medium">Indoor</span>
                                    </label>
                                </div>

                                <div class="relative">
                                    <input class="sr-only peer" type="radio" name="table-preference" id="outdoor"
                                        value="outdoor">
                                    <label
                                        class="flex flex-col items-center  p-4 bg-white border border-gray-300 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:bg-primary/5 transition-all"
                                        for="outdoor">
                                        <i
                                            class="fas fa-umbrella-beach text-gray-500 text-xl mb-2 peer-checked:text-primary"></i>
                                        <span class="text-sm font-medium">Outdoor</span>
                                    </label>
                                </div>

                                <div class="relative">
                                    <input class="sr-only peer" type="radio" name="table-preference" id="private"
                                        value="private">
                                    <label
                                        class="flex flex-col items-center  p-4 bg-white border border-gray-300 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:bg-primary/5 transition-all"
                                        for="private">
                                        <i class="fas fa-crown text-gray-500 text-xl mb-2 peer-checked:text-primary"></i>
                                        <span class="text-sm font-medium">Private</span>
                                    </label>
                                </div>

                                <div class="relative">
                                    <input class="sr-only peer" type="radio" name="table-preference" id="bar"
                                        value="bar">
                                    <label
                                        class="flex flex-col items-center  p-4 bg-white border border-gray-300 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:bg-primary/5 transition-all"
                                        for="bar">
                                        <i
                                            class="fas fa-wine-glass-alt text-gray-500 text-xl mb-2 peer-checked:text-primary"></i>
                                        <span class="text-sm font-medium">Bar</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-gray-700 mb-1">Special
                                Requests</label>
                            <div class="relative">
                                <div class="absolute top-3 left-3">
                                    <i class="fas fa-comment text-gray-400"></i>
                                </div>
                                <textarea id="message" rows="4"
                                    class="pl-10 w-full  bg-gray-50  px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                    placeholder="Any special requests or dietary restrictions..."></textarea>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 pt-4">
                            <div class="flex items-start space-x-2">
                                <input type="checkbox" id="terms" class="mt-1 rounded focus:ring-primary" required>
                                <label for="terms" class="text-sm text-gray-600">
                                    I agree to the <a href="#" class="text-primary hover:underline">terms and
                                        conditions</a> and <a href="#" class="text-primary hover:underline">privacy
                                        policy</a>
                                </label>
                            </div>

                            <button type="submit"
                                class="w-full md:w-auto bg-primary hover:bg-primary-dark text-white font-medium py-3 px-8 rounded-lg transition-colors shadow-md hover:shadow-lg flex items-center justify-center">
                                <i class="fas fa-calendar-check mr-2"></i>
                                Book Table Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sidebar Information -->
            <div class="lg:w-1/3">
                <div
                    class="relative bg-gradient-to-br from-amber-700 to-rose-500 text-white rounded-3xl p-8 shadow-xl overflow-hidden transition-all duration-500">
                    <!-- Glass overlay -->
                    <div class="absolute inset-0 bg-white/10 backdrop-blur-md rounded-3xl"></div>

                    <div class="relative z-10">
                        <h2 class="text-3xl font-extrabold mb-8 text-center tracking-wide">Reservation
                            Details</h2>

                        <div class="space-y-8">
                            <!-- Opening Hours -->
                            <div class="flex items-start space-x-4 group">
                                <div
                                    class="bg-white/20 p-3 rounded-2xl group-hover:bg-white/30 transition duration-300 shadow-inner">
                                    <i class="fas fa-clock text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg">Opening Hours</h3>
                                    <ul class="mt-3 space-y-1 text-sm text-white/90">
                                        <li class="flex justify-between">
                                            <span>Mon - Thu</span>
                                            <span>11:00 AM - 10:00 PM</span>
                                        </li>
                                        <li class="flex justify-between">
                                            <span>Fri - Sat</span>
                                            <span>11:00 AM - 11:00 PM</span>
                                        </li>
                                        <li class="flex justify-between">
                                            <span>Sunday</span>
                                            <span>12:00 PM - 9:00 PM</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Group Bookings -->
                            <div class="flex items-start space-x-4 group">
                                <div
                                    class="bg-white/20 p-3 rounded-2xl group-hover:bg-white/30 transition duration-300 shadow-inner">
                                    <i class="fas fa-users text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg">Group Bookings</h3>
                                    <p class="mt-2 text-sm leading-relaxed text-white/90">
                                        For parties of 9 or more, please call us directly at
                                        <a href="tel:+15551234567"
                                            class="underline hover:text-yellow-200">(555)
                                            123-4567</a>.
                                    </p>
                                </div>
                            </div>

                            <!-- Special Events -->
                            <div class="flex items-start space-x-4 group">
                                <div
                                    class="bg-white/20 p-3 rounded-2xl group-hover:bg-white/30 transition duration-300 shadow-inner">
                                    <i class="fas fa-utensils text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg">Special Events</h3>
                                    <p class="mt-2 text-sm leading-relaxed text-white/90">
                                        We accommodate birthdays, anniversaries, and private dinners. Let us know if you're
                                        celebrating something special!
                                    </p>
                                </div>
                            </div>

                            <!-- Cancellation -->
                            <div class="flex items-start space-x-4 group">
                                <div
                                    class="bg-white/20 p-3 rounded-2xl group-hover:bg-white/30 transition duration-300 shadow-inner">
                                    <i class="fas fa-exclamation-circle text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg">Cancellation Policy</h3>
                                    <p class="mt-2 text-sm leading-relaxed text-white/90">
                                        Please notify us at least <span
                                            class="font-semibold text-yellow-200">2 hours</span> in
                                        advance if you need to cancel or modify your reservation.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="mt-10 pt-6 border-t border-white/30">
                            <h3 class="font-bold text-lg mb-4">Contact Information</h3>
                            <div class="space-y-3 text-sm text-white/90">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>123 Culinary Street, Foodville</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-phone"></i>
                                    <a href="tel:+15551234567" class="hover:underline">(555) 123-4567</a>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:reservations@Savory Bite restaurant.com"
                                        class="hover:underline">reservations@Savory Bite restaurant.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>




@endsection

@section('script')
    <script>
        $(document).ready(function() {
            const today = new Date().toISOString().split('T')[0];
            $('#date').attr('min', today);
        });
    </script>
@endsection
