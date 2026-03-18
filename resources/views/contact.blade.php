@extends('layouts.main')
@section('title', 'contact Page')

@section('style')

@endsection

@section('conntent')

    <main class="container px-4 py-8 mx-auto mt-20 md:mt-24">
        <div class="mb-12 text-center">
            <h1 class="mb-4 text-4xl font-bold text-gray-800 md:text-5xl">Get In Touch</h1>
            <p class="max-w-2xl mx-auto text-lg text-gray-600">We'd love to hear from you. Send us a
                message and we'll respond as soon as possible.</p>
        </div>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div class="lg:col-span-1">
                <div class="p-6 transition-colors duration-300 bg-gray-100 shadow-lg rounded-2xl">
                    <h2 class="mb-6 text-2xl font-bold text-gray-800">Contact Information</h2>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-lg bg-primary/10">
                                <i class="text-xl fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div>
                                <h3 class="mb-1 font-bold text-gray-800">Our Location</h3>
                                <p class="text-gray-600">123 Culinary Street<br>Foodville, FC 12345</p>
                                <button onclick="openDirections()"
                                    class="flex items-center mt-2 text-sm font-medium text-primary hover:text-primary-dark">
                                    Get Directions <i class="ml-1 text-xs fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-lg bg-primary/10">
                                <i class="text-xl fas fa-phone text-primary"></i>
                            </div>
                            <div>
                                <h3 class="mb-1 font-bold text-gray-800">Phone Numbers</h3>
                                <p class="text-gray-600">
                                    <a href="tel:+15551234567" class="transition-colors hover:text-primary">(555)
                                        123-4567</a><br>
                                    <a href="tel:+15551234568" class="transition-colors hover:text-primary">(555)
                                        123-4568</a>
                                </p>
                                <p class="mt-1 text-sm text-gray-500">For reservations</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-lg bg-primary/10">
                                <i class="text-xl fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <h3 class="mb-1 font-bold text-gray-800">Email Addresses</h3>
                                <p class="text-gray-600">
                                    <a href="mailto:info@Savory Bite restaurant.com"
                                        class="transition-colors hover:text-primary">info@Savory Bite restaurant.com</a><br>
                                    <a href="mailto:reservations@Savory Bite restaurant.com"
                                        class="transition-colors hover:text-primary">reservations@Savory Bite
                                        restaurant.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-lg bg-primary/10">
                                <i class="text-xl fas fa-clock text-primary"></i>
                            </div>
                            <div>
                                <h3 class="mb-1 font-bold text-gray-800">Opening Hours</h3>
                                <div class="space-y-2 text-gray-600">
                                    <div class="flex justify-between">
                                        <span>Monday - Thursday</span>
                                        <span class="font-medium">11:00 AM - 10:00 PM</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Friday - Saturday</span>
                                        <span class="font-medium">11:00 AM - 11:00 PM</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Sunday</span>
                                        <span class="font-medium">12:00 PM - 9:00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 mt-8 border-t border-gray-200">
                        <h3 class="mb-4 font-bold text-gray-800">Follow Us</h3>
                        <div class="flex space-x-3">
                            <button onclick="openSocial('facebook')"
                                class="flex items-center justify-center w-10 h-10 text-white transition-colors bg-blue-600 rounded-lg hover:bg-blue-700">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button onclick="openSocial('instagram')"
                                class="flex items-center justify-center w-10 h-10 text-white transition-colors bg-pink-600 rounded-lg hover:bg-pink-700">
                                <i class="fab fa-instagram"></i>
                            </button>
                            <button onclick="openSocial('twitter')"
                                class="flex items-center justify-center w-10 h-10 text-white transition-colors bg-blue-400 rounded-lg hover:bg-blue-500">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button onclick="openSocial('tripadvisor')"
                                class="flex items-center justify-center w-10 h-10 text-white transition-colors bg-green-600 rounded-lg hover:bg-green-700">
                                <i class="fab fa-tripadvisor"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="p-6 mt-6 transition-colors duration-300 bg-gray-100 shadow-lg rounded-2xl">
                    <h3 class="mb-4 text-xl font-bold text-gray-800">Quick Actions</h3>
                    <div class="space-y-3">
                        <a href="{{ route('reservations') }}"
                            class="flex items-center justify-center w-full py-3 font-medium text-white transition-colors rounded-lg bg-primary hover:bg-primary-dark">
                            <i class="mr-2 fas fa-calendar-check"></i> Make a Reservation
                        </a>


                        <a href="{{ route('menu') }}"
                            class="flex items-center justify-center w-full py-3 font-medium text-gray-700 transition-colors bg-gray-200 rounded-lg hover:bg-gray-300">
                            <i class="mr-2 fas fa-utensils"></i> View Our Menu
                        </a>

                        <a href="{{ route('blogs') }}"
                            class="flex items-center justify-center w-full py-3 font-medium text-white transition-colors rounded-lg bg-amber-500 hover:bg-amber-600">
                            <i class="mr-2 fas fa-shopping-bag"></i> Online Blogs
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="p-6 mb-6 transition-colors duration-300 bg-gray-100 shadow-lg rounded-2xl">
                    <h2 class="mb-6 text-2xl font-bold text-gray-800">Send Us a Message</h2>

                    <form class="space-y-6">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-700">First Name
                                    *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="text-gray-400 fas fa-user"></i>
                                    </div>
                                    <input type="text"
                                        class="w-full px-4 py-3 pl-10 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                                        placeholder="John" required>
                                </div>
                            </div>

                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-700">Last Name
                                    *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="text-gray-400 fas fa-user"></i>
                                    </div>
                                    <input type="text"
                                        class="w-full px-4 py-3 pl-10 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                                        placeholder="Doe" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-700">Email Address
                                    *</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="text-gray-400 fas fa-envelope"></i>
                                    </div>
                                    <input type="email"
                                        class="w-full px-4 py-3 pl-10 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                                        placeholder="john@example.com" required>
                                </div>
                            </div>

                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-700">Phone
                                    Number</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="text-gray-400 fas fa-phone"></i>
                                    </div>
                                    <input type="tel"
                                        class="w-full px-4 py-3 pl-10 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                                        placeholder="(555) 123-4567">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-700">Subject
                                *</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="text-gray-400 fas fa-tag"></i>
                                </div>
                                <select
                                    class="w-full px-4 py-3 pl-10 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg appearance-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Select a subject</option>
                                    <option value="reservation">Reservation Inquiry</option>
                                    <option value="catering">Catering Services</option>
                                    <option value="private-events">Private Events</option>
                                    <option value="feedback">Feedback & Reviews</option>
                                    <option value="careers">Career Opportunities</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <i class="text-gray-400 fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-700">Message
                                *</label>
                            <div class="relative">
                                <div class="absolute top-3 left-3">
                                    <i class="text-gray-400 fas fa-comment"></i>
                                </div>
                                <textarea rows="5"
                                    class="w-full px-4 py-3 pl-10 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg resize-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    placeholder="How can we help you?" required></textarea>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="newsletter" class="rounded focus:ring-primary text-primary">
                            <label for="newsletter" class="text-sm text-gray-600">
                                Subscribe to our newsletter for updates and special offers
                            </label>
                        </div>

                        <button type="submit"
                            class="flex items-center justify-center w-full py-3 text-lg font-medium text-white transition-colors rounded-lg bg-primary hover:bg-primary-dark">
                            <i class="mr-2 fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>

                <div
                    class="overflow-hidden transition-colors duration-300 bg-white shadow-lg rounded-2xl">
                    <div class="relative w-full overflow-hidden shadow-lg rounded-2xl">
                        <iframe class="w-full h-80 md:h-[450px]"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.9940684837216!2d90.37501947455586!3d23.78368508733354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74fbe6e6f3f%3A0xa839c37a3b38c540!2sDhanmondi%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1699974845689!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <div class="p-6 mt-6 transition-colors duration-300 bg-gray-100 shadow-lg rounded-2xl">
                    <h2 class="mb-6 text-2xl font-bold text-gray-800">Frequently Asked Questions</h2>

                    <div class="space-y-4">
                        <div class="pb-4 border-b border-gray-200">
                            <button onclick="toggleFAQ(0)"
                                class="flex items-center justify-between w-full font-medium text-left text-gray-800 transition-colors hover:text-primary">
                                <span>Do you accommodate dietary restrictions?</span>
                                <i class="text-gray-400 transition-transform fas fa-chevron-down"></i>
                            </button>
                            <div
                                class="hidden p-3 mt-2 text-gray-600 rounded-md bg-gradient-to-br from-gray-200 to-gray-300 ">
                                Yes, we accommodate various dietary restrictions including vegetarian, vegan, gluten-free,
                                and allergies. Please inform us when making your reservation.
                            </div>
                        </div>

                        <div class="pb-4 border-b border-gray-200">
                            <button onclick="toggleFAQ(1)"
                                class="flex items-center justify-between w-full font-medium text-left text-gray-800 transition-colors hover:text-primary">
                                <span>What is your cancellation policy?</span>
                                <i class="text-gray-400 transition-transform fas fa-chevron-down"></i>
                            </button>
                            <div
                                class="hidden p-3 mt-2 text-gray-600 rounded-md bg-gradient-to-br from-gray-200 to-gray-300">
                                We require at least 2 hours notice for cancellations. For large parties (8+), 24 hours
                                notice is required.
                            </div>
                        </div>

                        <div class="pb-4 border-b border-gray-200">
                            <button onclick="toggleFAQ(2)"
                                class="flex items-center justify-between w-full font-medium text-left text-gray-800 transition-colors hover:text-primary">
                                <span>Do you offer private dining?</span>
                                <i class="text-gray-400 transition-transform fas fa-chevron-down"></i>
                            </button>
                            <div
                                class="hidden p-3 mt-2 text-gray-600 rounded-md bg-gradient-to-br from-gray-200 to-gray-300">
                                Yes, we have private dining rooms available for events from 10 to 50 guests. Contact our
                                events team for more information.
                            </div>
                        </div>

                        <div class="pb-2">
                            <button onclick="toggleFAQ(3)"
                                class="flex items-center justify-between w-full font-medium text-left text-gray-800 transition-colors hover:text-primary">
                                <span>Is valet parking available?</span>
                                <i class="text-gray-400 transition-transform fas fa-chevron-down"></i>
                            </button>
                            <div
                                class="hidden p-3 mt-2 text-gray-600 rounded-md bg-gradient-to-br from-gray-200 to-gray-300">
                                Complimentary valet parking is available from 5 PM to 11 PM daily. Self-parking is also
                                available in the adjacent garage.
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
        function toggleFAQ(index) {
            const button = $(event.target).closest('button');
            const content = button.next();
            const icon = button.find('i');

            content.slideToggle(300);
            icon.toggleClass('fa-chevron-down fa-chevron-up');
        }
    </script>
@endsection
