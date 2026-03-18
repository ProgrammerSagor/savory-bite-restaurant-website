@extends('layouts.main')
@section('title', 'Register Page')



@section('style')

@endsection

@section('conntent')

    <div class="flex items-center justify-center min-h-screen ">
        <div class="flex items-center justify-center w-full h-full px-4 py-24 mt-20 bg-center bg-cover md:mt-24 "
            style="background-image: url('{{ asset('assets/images/bg-r.jpg') }}')">

            <div
                class="max-w-3xl p-8 transition-all duration-300 bg-white shadow-2xl rounded-2xl hover:shadow-3xl">
                <div class="mb-8 text-center">
                    <h2 class="text-2xl font-bold text-gray-800">Join Our Food Community</h2>
                    <p class="mt-2 text-gray-600">Create your account to unlock exclusive features</p>
                </div>

                <form class="space-y-6" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                <i class="mr-2 fas fa-user text-primary"></i>First Name *
                            </label>
                            <input type="text" name="first_name"
                                class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Justen" required>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                <i class="mr-2 fas fa-user text-primary"></i>Last Name *
                            </label>
                            <input type="text" name="last_name"
                                class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Rahman" required>
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            <i class="mr-2 fas fa-envelope text-primary"></i>Email Address *
                        </label>
                        <input type="email" name="email"
                            class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="you@example.com" required>
                    </div>




                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            <i class="mr-2 fas fa-lock text-primary"></i>Password *
                        </label>

                        <div class="relative">
                            <input type="password" id="password" name="password"
                                class="w-full px-4 py-3 pr-10 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="••••••••" required>

                            <button type="button" onclick="togglePassword('password', this)"
                                class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <i class="text-gray-400 transition-colors fas fa-eye hover:text-gray-600"></i>
                            </button>
                        </div>

                        <div class="w-full h-2 mt-2 overflow-hidden bg-gray-200 rounded-full">
                            <div id="password-strength-bar" class="w-0 h-full transition-all duration-300"></div>
                        </div>
                        <p id="password-strength-text" class="mt-1 text-sm font-medium"></p>
                    </div>



                    <div class="mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            <i class="mr-2 fas fa-lock text-primary"></i>Confirm Password *
                        </label>

                        <div class="relative">
                            <input type="password" id="confirm_password" name="confirm_password" required name="password_confirmation"
                                class="w-full px-4 py-3 pr-10 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="••••••••">

                            <button type="button" onclick="togglePassword('confirm_password', this)"
                                class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <i class="text-gray-400 transition-colors fas fa-eye hover:text-gray-600"></i>
                            </button>
                        </div>
                    </div>


                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            <i class="mr-2 fas fa-user-tag text-primary"></i>Register As
                        </label>

                        <div class="grid grid-cols-2 gap-3">
                            <div class="relative">
                                <input type="radio" name="role" id="customer" value="user" class="hidden peer"
                                    checked>
                                <label for="customer"
                                    class="flex flex-col items-center p-4 transition-all duration-300 border-2 border-gray-300 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:bg-primary/5 hover:border-primary/50">
                                    <i class="mb-2 text-2xl text-gray-400 fas fa-user peer-checked:text-primary"></i>
                                    <span class="font-medium text-gray-700">Customer</span>
                                    <span class="mt-1 text-xs text-gray-500">Food Lover</span>
                                </label>
                            </div>

                            <div class="relative">
                                <input type="radio" name="role" id="restaurant" value="restaurant" class="hidden peer">
                                <label for="restaurant"
                                    class="flex flex-col items-center p-4 transition-all duration-300 border-2 border-gray-300 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:bg-primary/5 hover:border-primary/50">
                                    <i class="mb-2 text-2xl text-gray-400 fas fa-store peer-checked:text-primary"></i>
                                    <span class="font-medium text-gray-700">Restaurant</span>
                                    <span class="mt-1 text-xs text-gray-500">Business Owner</span>
                                </label>
                            </div>
                        </div>
                    </div>


                    <!-- Terms and Conditions -->
                    <div class="flex items-start space-x-3">
                        <input type="checkbox" id="terms" name="agree_terms"
                            class="mt-1 border-gray-300 rounded focus:ring-primary text-primary">
                        <label for="terms" class="text-sm text-gray-600">
                            I agree to the <a href="#" class="font-medium text-primary hover:text-primary-dark">Terms
                                of Service</a> and <a href="#"
                                class="font-medium text-primary hover:text-primary-dark">Privacy Policy</a>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="flex items-center justify-center w-full py-4 font-bold text-white transition-all duration-300 transform rounded-lg shadow-lg bg-gradient-to-r from-primary to-pink-600 hover:from-primary-dark hover:to-pink-700 hover:shadow-xl hover:scale-105">
                        <i class="mr-2 fas fa-user-plus"></i> Create Account
                    </button>
                </form>

                <div class="relative flex items-center py-4">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="flex-shrink mx-4 text-sm text-gray-500">Or continue with</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <a href=""
                        class="flex items-center justify-center py-3 space-x-2 transition-colors border border-gray-300 rounded-lg hover:bg-gray-50">
                        <i class="text-red-500 fab fa-google"></i>
                        <span class="text-sm font-medium text-gray-700">Google</span>
                    </a>

                    <a href=""
                        class="flex items-center justify-center py-3 space-x-2 transition-colors border border-gray-300 rounded-lg hover:bg-gray-50">
                        <i class="text-blue-600 fab fa-facebook"></i>
                        <span class="text-sm font-medium text-gray-700">Facebook</span>
                    </a>
                </div>


                <p class="mt-8 text-center text-gray-600">
                    Already have an account?
                    <a href="#" class="ml-1 font-semibold transition-colors text-primary hover:text-primary-dark">
                        Sign In Here <i class="ml-1 text-xs fas fa-arrow-right"></i>
                    </a>
                </p>
            </div>


        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            function togglePassword(id, icon) {
                const input = $('#' + id);
                const type = input.attr('type') === 'password' ? 'text' : 'password';
                input.attr('type', type);
                $(icon).find('i').toggleClass('fa-eye fa-eye-slash');
            }
            window.togglePassword = togglePassword;

            $("#password").on("input", function() {
                let password = $(this).val();
                let strengthText = $("#password-strength-text");
                let strengthBar = $("#password-strength-bar");
                let strength = 0;
                if (password.length >= 6) strength++;
                if (password.match(/[A-Z]/)) strength++;
                if (password.match(/[0-9]/)) strength++;
                if (password.match(/[^A-Za-z0-9]/)) strength++;
                strengthBar.removeClass("bg-red-500 bg-yellow-500 bg-green-500");
                if (password.length === 0) {
                    strengthText.text("");
                    strengthBar.css("width", "0%");
                    return;
                }
                if (strength <= 1) {
                    strengthText.removeClass().addClass("text-red-500 text-sm font-semibold");
                    strengthBar.addClass("bg-red-500").css("width", "33%");
                } else if (strength === 2 || strength === 3) {
                    strengthText.removeClass().addClass("text-yellow-500 text-sm font-semibold");
                    strengthBar.addClass("bg-yellow-500").css("width", "66%");
                } else {
                    strengthText.removeClass().addClass("text-green-500 text-sm font-semibold");
                    strengthBar.addClass("bg-green-500").css("width", "100%");
                }
            });
        });
    </script>
@endsection
