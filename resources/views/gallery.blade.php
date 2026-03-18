@extends('layouts.main')
@section('title', 'About Page')

@section('style')

@endsection

@section('conntent')

    <div class="mt-20 md:mt-24">


        <section class="py-16 bg-gradient-to-r from-emerald-100 to-orange-400">
            <div class="px-4 mx-auto text-center max-w-7xl">
                <h1 class="mb-4 text-4xl font-bold text-gray-800 md:text-5xl">Our Gallery</h1>
                <p class="mx-auto text-lg text-gray-600">
                    Take a visual journey through our restaurant, dishes, and memorable moments
                </p>

            </div>
        </section>





        <section class="py-12">
            <div class="px-4 mx-auto max-w-7xl">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach (['g1.jpg', 'g2.jpg', 'g3.jpg', 'g4.jpg', 'g5.jpg', 'g6.jpg', 'g7.jpg', 'g8.jpg', 'g9.jpg', 'g10.jpg', 'g11.jpg'] as $image)
                        <div
                            class="relative overflow-hidden transition-all duration-500 shadow-md group rounded-xl hover:shadow-xl">

                            <!-- Image full cover responsive -->
                            <div class="h-64 w-full">
                                <img src="{{ asset('assets/images/' . $image) }}"
                                    class="object-cover w-full h-full rounded-xl transition-transform duration-500 group-hover:scale-110"
                                    alt="Gallery Image">
                            </div>

                            <div
                                class="absolute inset-0 flex items-center justify-center transition-all duration-500 bg-black bg-opacity-0 group-hover:bg-opacity-40">
                                <a href="{{ asset('assets/images/' . $image) }}" target="_blank"
                                    class="block px-4 py-2 font-medium transition-all duration-500 transform translate-y-4 bg-white rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 text-amber-600">
                                    <i class="mr-2 fas fa-expand"></i> View
                                </a>
                            </div>

                            <div
                                class="absolute bottom-0 left-0 right-0 p-4 text-white transition-opacity duration-500 opacity-0 bg-gradient-to-t from-black to-transparent group-hover:opacity-100">
                                <h3 class="font-semibold">Signature Pasta</h3>
                                <p class="text-sm">Our chef's special creation</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-12 text-center">
                    <button
                        class="px-8 py-3 font-medium text-white transition duration-300 transform rounded-lg bg-rose-600 hover:bg-rose-700 hover:scale-105">
                        Load More Photos
                    </button>
                </div>
            </div>
        </section>

    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {

            function imageView() {
                $('')
            }

        });
    </script>


@endsection
