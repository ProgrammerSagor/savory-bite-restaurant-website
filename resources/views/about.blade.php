@extends('layouts.main')

@section('title', 'About Page')

@section('style')
    <style>
        .history-timeline::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #c2410c, #d97706);
        }

        .section-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform: translateY(0);
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        }

        .dark .section-card {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
        }

        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15);
        }

        .dark .team-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.4);
        }

        .value-card {
            transition: all 0.3s ease;
        }

        .value-card:hover {
            transform: scale(1.05);
        }

        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        @media (min-width: 768px) {
            .history-timeline::before {
                left: 50%;
                transform: translateX(-50%);
            }
        }

        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: auto;
        }

        .timeline-dot {
            position: absolute;
            left: 22px;
            top: 20px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #c2410c;
            z-index: 10;
        }

        @media (min-width: 768px) {
            .timeline-dot {
                left: 50%;
                transform: translateX(-50%);
            }

            .timeline-item:nth-child(odd) .timeline-dot {
                left: calc(50% - 8px);
            }
        }
    </style>
@endsection

@section('conntent')

    <div class="mt-20 md:mt-24">

        <section
            class="relative py-16 overflow-hidden bg-gradient-to-br from-amber-50 to-orange-50">
            <div class="absolute rounded-full top-10 left-10 w-72 h-72 bg-emerald-600/10 floating-element"></div>
            <div class="absolute rounded-full bottom-10 right-10 w-96 h-96 bg-secondary/20 floating-element"
                style="animation-delay: 2s;"></div>

            <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center animate-slide-up">
                    <span
                        class="inline-block px-4 py-2 mb-4 text-xs font-bold tracking-widest uppercase border rounded-full text-primary bg-emerald-600/10 border-emerald-600/20">
                        Our Story
                    </span>
                    <h1 class="font-serif text-4xl font-bold text-gray-900 md:text-5xl lg:text-6xl">About
                        Savory Bite</h1>
                    <div class="flex justify-center mt-6 mb-8">
                        <div class="w-20 h-1 rounded-full bg-primary"></div>
                        <div class="w-5 h-1 mx-2 rounded-full bg-secondary"></div>
                        <div class="w-10 h-1 rounded-full bg-primary"></div>
                    </div>
                    <p class="max-w-2xl mx-auto text-lg leading-relaxed text-gray-600 md:text-xl">
                        A decade of culinary excellence, passion for flavors, and creating unforgettable dining experiences.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div class="animate-fade-in">
                        <span
                            class="inline-block px-4 py-2 mb-4 text-xs font-bold tracking-widest uppercase rounded-full text-primary bg-primary/10">
                            Our Journey
                        </span>
                        <h2 class="mb-6 font-serif text-3xl font-bold text-gray-900 md:text-4xl">A Decade of
                            Culinary Excellence</h2>
                        <p class="mb-6 leading-relaxed text-gray-600">
                            Founded in 2013 by Chef Marco Rossi, Savory Bite began as a small neighborhood bistro with a
                            simple
                            mission: to create exceptional food that brings people together. What started as a 30-seat
                            restaurant has now grown into an award-winning dining destination.
                        </p>
                        <p class="mb-6 leading-relaxed text-gray-600">
                            Over the years, we've stayed true to our roots while continuously evolving. Our commitment to
                            sourcing the finest local ingredients and combining traditional techniques with innovative
                            flavors has earned us recognition from food critics and the loyalty of our guests.
                        </p>
                        <div class="flex flex-wrap gap-4 mt-8">
                            <div class="p-4 text-center rounded-lg bg-amber-50">
                                <div class="text-2xl font-bold text-primary">10+</div>
                                <div class="text-sm text-gray-600">Years Experience</div>
                            </div>
                            <div class="p-4 text-center rounded-lg bg-amber-50">
                                <div class="text-2xl font-bold text-primary">50+</div>
                                <div class="text-sm text-gray-600">Awards Won</div>
                            </div>
                            <div class="p-4 text-center rounded-lg bg-amber-50">
                                <div class="text-2xl font-bold text-primary">1000+</div>
                                <div class="text-sm text-gray-600">Happy Customers</div>
                            </div>
                        </div>
                    </div>
                    <div class="animate-fade-in" style="animation-delay: 0.2s;">
                        <div class="flex items-center justify-center bg-gray-200 h-96 rounded-2xl">
                            <img src="{{ asset('assets/images/i3.jpg') }}" class="w-full rounded-md" alt="">
                        </div>
                    </div>
                </div>

                <div class="relative mt-20 history-timeline">
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                        <div class="relative timeline-item">
                            <div class="timeline-dot"></div>
                            <div
                                class="p-6 ml-12 bg-white border border-gray-100 shadow-lg timeline-content rounded-2xl md:ml-0 md:mr-12">
                                <div class="mb-2 font-bold text-primary">2013</div>
                                <h3 class="mb-2 text-xl font-bold text-gray-900">Grand Opening</h3>
                                <p class="text-gray-600">Savory Bite opens its doors in downtown with a
                                    simple
                                    vision: exceptional food in a warm atmosphere.</p>
                            </div>
                        </div>

                        <div class="relative timeline-item">
                            <div class="timeline-dot"></div>
                            <div
                                class="p-6 ml-12 bg-white border border-gray-100 shadow-lg timeline-content rounded-2xl md:ml-12">
                                <div class="mb-2 font-bold text-primary">2015</div>
                                <h3 class="mb-2 text-xl font-bold text-gray-900">First Award</h3>
                                <p class="text-gray-600">Received "Best New Restaurant" award from City
                                    Food Magazine, marking our arrival on the culinary scene.</p>
                            </div>
                        </div>

                        <div class="relative timeline-item">
                            <div class="timeline-dot"></div>
                            <div
                                class="p-6 ml-12 bg-white border border-gray-100 shadow-lg timeline-content rounded-2xl md:ml-0 md:mr-12">
                                <div class="mb-2 font-bold text-primary">2018</div>
                                <h3 class="mb-2 text-xl font-bold text-gray-900">Expansion</h3>
                                <p class="text-gray-600">Expanded our space and kitchen to accommodate
                                    growing demand while maintaining our intimate atmosphere.</p>
                            </div>
                        </div>

                        <div class="relative timeline-item">
                            <div class="timeline-dot"></div>
                            <div
                                class="p-6 ml-12 bg-white border border-gray-100 shadow-lg timeline-content rounded-2xl md:ml-12">
                                <div class="mb-2 font-bold text-primary">2023</div>
                                <h3 class="mb-2 text-xl font-bold text-gray-900">Present Day</h3>
                                <p class="text-gray-600">Continuing our tradition of excellence with
                                    innovative dishes and unforgettable dining experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mb-16 text-center animate-slide-up">
                    <span
                        class="inline-block px-4 py-2 mb-4 text-xs font-bold tracking-widest uppercase rounded-full text-primary bg-primary/10">
                        Meet Our Chef
                    </span>
                    <h2 class="font-serif text-3xl font-bold text-gray-900 md:text-4xl">Master of Flavors
                    </h2>
                    <div class="w-24 h-1 mx-auto mt-6 rounded-full bg-primary"></div>
                </div>

                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div class="animate-fade-in" style="animation-delay: 0.2s;">
                        <div
                            class="relative flex items-center justify-center overflow-hidden bg-gray-300 h-96 rounded-2xl">
                            <img src="{{ asset('assets/images/E.jpg') }}" class="w-full" alt="">
                            <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/70 to-transparent">
                                <h3 class="font-serif text-2xl font-bold text-white">Marco Rossi</h3>
                                <p class="text-gray-200">Executive Chef & Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="animate-fade-in" style="animation-delay: 0.4s;">
                        <h3 class="mb-6 font-serif text-2xl font-bold text-gray-900">Crafting Culinary
                            Experiences</h3>
                        <p class="mb-6 leading-relaxed text-gray-600">
                            Chef Marco Rossi brings over 15 years of international culinary experience to Savory Bite.
                            Trained in
                            Michelin-starred restaurants across Italy and France, his passion for food began in his
                            grandmother's kitchen in Tuscany.
                        </p>
                        <p class="mb-6 leading-relaxed text-gray-600">
                            "Food is more than sustenance—it's a story, a memory, an experience. At Savory Bite, we don't
                            just
                            serve meals; we create moments that linger in your memory long after the last bite."
                        </p>
                        <div class="mb-8">
                            <h4 class="mb-4 text-lg font-bold text-gray-900">Culinary Philosophy</h4>
                            <ul class="space-y-3 text-gray-600">

                                <li class="flex items-start">
                                    <i class="mt-1 mr-3 fas fa-check text-primary"></i>
                                    <span>Source the freshest, highest quality ingredients from local producers</span>
                                </li>

                                <li class="flex items-start">
                                    <i class="mt-1 mr-3 fas fa-check text-primary"></i>
                                    <span>Respect traditional techniques while embracing innovation</span>
                                </li>

                                <li class="flex items-start">
                                    <i class="mt-1 mr-3 fas fa-check text-primary"></i>
                                    <span>Create balanced dishes where every component has purpose</span>
                                </li>

                                <li class="flex items-start">
                                    <i class="mt-1 mr-3 fas fa-check text-primary"></i>
                                    <span>Elevate simple ingredients through technique and creativity</span>
                                </li>

                            </ul>
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <span
                                class="px-3 py-1 text-sm rounded-full bg-amber-100 text-amber-800">Michelin
                                Training</span>
                            <span
                                class="px-3 py-1 text-sm rounded-full bg-amber-100 text-amber-800">15+
                                Years Experience</span>
                            <span
                                class="px-3 py-1 text-sm rounded-full bg-amber-100 text-amber-800">Award
                                Winner</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mb-16 text-center animate-slide-up">
                    <span
                        class="inline-block px-4 py-2 mb-4 text-xs font-bold tracking-widest uppercase rounded-full text-primary bg-primary/10">
                        Our Promise
                    </span>
                    <h2 class="font-serif text-3xl font-bold text-gray-900 md:text-4xl">Mission & Values
                    </h2>
                    <div class="w-24 h-1 mx-auto mt-6 rounded-full bg-primary"></div>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="p-8 text-center value-card bg-amber-50 rounded-2xl animate-fade-in">
                        <div class="flex items-center justify-center w-16 h-16 mx-auto mb-6 rounded-full bg-primary">
                            <i class="text-xl text-white fas fa-seedling"></i>
                        </div>
                        <h3 class="mb-4 text-xl font-bold text-gray-900">Quality Ingredients</h3>
                        <p class="text-gray-600">
                            We source the freshest, highest quality ingredients from trusted local farmers and producers.
                        </p>
                    </div>

                    <div class="p-8 text-center value-card bg-amber-50 rounded-2xl animate-fade-in"
                        style="animation-delay: 0.2s;">
                        <div class="flex items-center justify-center w-16 h-16 mx-auto mb-6 rounded-full bg-primary">
                            <i class="text-xl text-white fas fa-heart"></i>
                        </div>
                        <h3 class="mb-4 text-xl font-bold text-gray-900">Passionate Craft</h3>
                        <p class="text-gray-600">
                            Every dish is prepared with care, attention to detail, and a genuine love for the culinary arts.
                        </p>
                    </div>

                    <div class="p-8 text-center value-card bg-amber-50 rounded-2xl animate-fade-in"
                        style="animation-delay: 0.4s;">
                        <div class="flex items-center justify-center w-16 h-16 mx-auto mb-6 rounded-full bg-primary">
                            <i class="text-xl text-white fas fa-users"></i>
                        </div>
                        <h3 class="mb-4 text-xl font-bold text-gray-900">Exceptional Service</h3>
                        <p class="text-gray-600">
                            We believe outstanding food deserves equally outstanding service and hospitality.
                        </p>
                    </div>
                </div>

                <div class="p-8 mt-16 text-center text-white bg-gradient-to-r from-primary to-secondary rounded-2xl animate-slide-up"
                    style="animation-delay: 0.6s;">
                    <h3 class="mb-6 font-serif text-2xl font-bold">Our Mission</h3>
                    <p class="max-w-3xl mx-auto text-xl leading-relaxed">
                        "To create unforgettable dining experiences by combining exceptional cuisine, warm hospitality, and
                        a passion for culinary innovation—one plate at a time."
                    </p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mb-16 text-center animate-slide-up">
                    <span
                        class="inline-block px-4 py-2 mb-4 text-xs font-bold tracking-widest uppercase rounded-full text-primary bg-primary/10">
                        Our Team
                    </span>
                    <h2 class="font-serif text-3xl font-bold text-gray-900 md:text-4xl">Meet Our Culinary
                        Family</h2>
                    <div class="w-24 h-1 mx-auto mt-6 rounded-full bg-primary"></div>
                    <p class="max-w-2xl mx-auto mt-6 text-gray-600">
                        Our talented team works together to create the exceptional dining experiences that Savory Bite is
                        known
                        for.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                    <div
                        class="overflow-hidden bg-white border border-gray-100 shadow-lg team-card rounded-2xl animate-fade-in">
                        <div class="h-64 overflow-hidden bg-gray-300">
                            <img src="{{ asset('assets/images/c1.jpg') }}" class="object-cover object-top w-full h-full"
                                alt="">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-bold text-gray-900">Sophia Chen</h3>
                            <p class="mb-4 font-medium text-primary">Sous Chef</p>
                            <p class="text-sm text-gray-600">
                                Former pastry chef with expertise in Asian fusion cuisine and flavor balancing.
                            </p>
                            <div class="flex justify-center mt-4 space-x-4 text-2xl">
                                <a href="#"
                                    class="text-gray-400 transition-colors duration-300 hover:text-[#E4405F]">
                                    <i class="fab fa-instagram"></i>
                                </a>

                                <a href="#"
                                    class="text-gray-400 transition-colors duration-300 hover:text-[#0A66C2]">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="overflow-hidden bg-white border border-gray-100 shadow-lg team-card rounded-2xl animate-fade-in"
                        style="animation-delay: 0.2s;">
                        <div class="h-64 overflow-hidden bg-gray-300">
                            <img src="{{ asset('assets/images/c2.jpg') }}" class="object-cover object-top w-full h-full"
                                alt="">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-bold text-gray-900">Antonio Garcia</h3>
                            <p class="mb-4 font-medium text-primary">Head Sommelier</p>
                            <p class="text-sm text-gray-600">
                                Certified sommelier with 12 years experience in wine pairing and cellar management.
                            </p>
                            <div class="flex justify-center mt-4 space-x-4 text-2xl">
                                <a href="#"
                                    class="text-gray-400 transition-colors duration-300 hover:text-[#E4405F]">
                                    <i class="fab fa-instagram"></i>
                                </a>

                                <a href="#"
                                    class="text-gray-400 transition-colors duration-300 hover:text-[#0A66C2]">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="overflow-hidden bg-white border border-gray-100 shadow-lg team-card rounded-2xl animate-fade-in"
                        style="animation-delay: 0.4s;">

                        <div class="h-64 overflow-hidden bg-gray-300">
                            <img src="{{ asset('assets/images/c3.jpg') }}" class="object-cover object-top w-full h-full"
                                alt="">
                        </div>

                        <div class="p-6 text-center">
                            <h3 class="text-xl font-bold text-gray-900">Elena Petrov</h3>
                            <p class="mb-4 font-medium text-primary">Pastry Chef</p>
                            <p class="text-sm text-gray-600">
                                Trained in Paris, specializing in French patisserie and modern dessert presentation.
                            </p>
                            <div class="flex justify-center mt-4 space-x-4 text-2xl">
                                <a href="#"
                                    class="text-gray-400 transition-colors duration-300 hover:text-[#E4405F]">
                                    <i class="fab fa-instagram"></i>
                                </a>

                                <a href="#"
                                    class="text-gray-400 transition-colors duration-300 hover:text-[#0A66C2]">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="overflow-hidden bg-white border border-gray-100 shadow-lg team-card rounded-2xl animate-fade-in"
                        style="animation-delay: 0.6s;">
                        <div class="h-64 overflow-hidden bg-gray-300">
                            <img src="{{ asset('assets/images/c4.jpg') }}" class="object-cover object-top w-full h-full"
                                alt="">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-bold text-gray-900">James Wilson</h3>
                            <p class="mb-4 font-medium text-primary">Restaurant Manager</p>
                            <p class="text-sm text-gray-600">
                                Hospitality expert with a focus on creating seamless, memorable guest experiences.
                            </p>
                            <div class="flex justify-center mt-4 space-x-4 text-2xl">
                                <a href="#"
                                    class="text-gray-400 transition-colors duration-300 hover:text-[#E4405F]">
                                    <i class="fab fa-instagram"></i>
                                </a>

                                <a href="#"
                                    class="text-gray-400 transition-colors duration-300 hover:text-[#0A66C2]">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('script')



@endsection
