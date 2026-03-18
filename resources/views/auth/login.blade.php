{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



@extends('layouts.main')

@section('title', 'Login Page')

@section('style')

@endsection

@section('conntent')

    {{-- <div class="flex items-center justify-center min-h-screen ">
        <div class="relative flex items-center justify-center w-full h-full px-4 py-24 mt-20 bg-center bg-cover md:mt-24"
            style="background-image: url('{{ asset('assets/images/bg-l.jpg') }}')">

            <div class="absolute inset-0 bg-black/60"></div>


            <div class="relative z-10 text-white">
                <div
                    class="max-w-3xl p-8 transition-all duration-300 bg-white shadow-2xl dark:bg-gray-800 rounded-2xl hover:shadow-3xl">


                    <div class="mb-8 text-center">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Welcome Back</h2>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">Sign in to continue to your account</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                <i class="mr-2 fas fa-envelope text-primary"></i>Email Address *
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                placeholder="you@example.com" required>
                            @error('email')
                                <p class="mt-1 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                <i class="mr-2 fas fa-lock text-primary"></i>Password *
                            </label>

                            <div class="relative">
                                <input type="password" id="password" name="password"
                                    class="w-full px-4 py-3 pr-10 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                    placeholder="••••••••" required>

                                <button type="button" onclick="togglePassword('password', this)"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <i class="text-gray-400 transition-colors fas fa-eye hover:text-gray-600"></i>
                                </button>
                            </div>

                            @error('password')
                                <p class="mt-1 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 text-gray-700 dark:text-gray-300">
                                <input type="checkbox" name="remember"
                                    class="border-gray-300 rounded dark:border-gray-600 text-primary focus:ring-primary">
                                <span class="text-sm">Remember me</span>
                            </label>

                            <a href="{{ route('password.request') }}"
                                class="text-sm font-medium text-primary hover:text-primary-dark">
                                Forgot Password?
                            </a>
                        </div>

                        <button type="submit"
                            class="flex items-center justify-center w-full py-4 font-bold text-white transition-all duration-300 transform rounded-lg shadow-lg bg-gradient-to-r from-primary to-pink-600 hover:from-primary-dark hover:to-pink-700 hover:shadow-xl hover:scale-105">
                            <i class="mr-2 fas fa-sign-in-alt"></i> Sign In
                        </button>
                    </form>

                    <div class="relative flex items-center py-4 mt-6">
                        <div class="flex-grow border-t border-gray-300 dark:border-gray-600"></div>
                        <span class="flex-shrink mx-4 text-sm text-gray-500 dark:text-gray-400">Or continue with</span>
                        <div class="flex-grow border-t border-gray-300 dark:border-gray-600"></div>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <a href=""
                            class="flex items-center justify-center py-3 space-x-2 transition-colors border border-gray-300 rounded-lg dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <i class="text-red-500 fab fa-google"></i>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Google</span>
                        </a>

                        <a href=""
                            class="flex items-center justify-center py-3 space-x-2 transition-colors border border-gray-300 rounded-lg dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <i class="text-blue-600 fab fa-facebook"></i>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Facebook</span>
                        </a>
                    </div>

                    <p class="mt-8 text-center text-gray-600 dark:text-gray-400">
                        Don’t have an account?
                        <a href="{{ route('register') }}"
                            class="ml-1 font-semibold transition-colors text-primary hover:text-primary-dark">
                            Register Here <i class="ml-1 text-xs fas fa-arrow-right"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="flex items-center justify-center min-h-screen ">
        <div class="relative flex items-center justify-center w-full h-full px-4 py-24 mt-20 bg-center bg-cover md:mt-24"
            style="background-image: url('{{ asset('assets/images/bg-r.jpg') }}')">

            <div class="absolute inset-0 bg-black/60"></div>

            <div class="relative z-10 text-white">
                <div
                    class="max-w-3xl p-8 transition-all duration-300 bg-white shadow-2xl dark:bg-gray-800 rounded-2xl hover:shadow-3xl">
                    <div class="mb-8 text-center">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Welcome Back</h2>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">Sign in to continue to your account</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                <i class="mr-2 fas fa-envelope text-primary"></i>Email Address *
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                placeholder="you@example.com" required>
                            @error('email')
                                <p class="mt-1 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                <i class="mr-2 fas fa-lock text-primary"></i>Password *
                            </label>

                            <div class="relative">
                                <input type="password" id="password" name="password"
                                    class="w-full px-4 py-3 pr-10 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                    placeholder="••••••••" required>

                                <button type="button" onclick="togglePassword('password', this)"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <i class="text-gray-400 transition-colors fas fa-eye hover:text-gray-600"></i>
                                </button>
                            </div>

                            @error('password')
                                <p class="mt-1 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 text-gray-700 dark:text-gray-300">
                                <input type="checkbox" name="remember"
                                    class="border-gray-300 rounded dark:border-gray-600 text-primary focus:ring-primary">
                                <span class="text-sm">Remember me</span>
                            </label>

                            <a href="{{ route('password.request') }}"
                                class="text-sm font-medium text-primary hover:text-primary-dark">
                                Forgot Password?
                            </a>
                        </div>

                        <button type="submit"
                            class="flex items-center justify-center w-full py-4 font-bold text-white transition-all duration-300 transform rounded-lg shadow-lg bg-gradient-to-r from-primary to-pink-600 hover:from-primary-dark hover:to-pink-700 hover:shadow-xl hover:scale-105">
                            <i class="mr-2 fas fa-sign-in-alt"></i> Sign In
                        </button>
                    </form>

                    <div class="relative flex items-center py-4 mt-6">
                        <div class="flex-grow border-t border-gray-300 dark:border-gray-600"></div>
                        <span class="flex-shrink mx-4 text-sm text-gray-500 dark:text-gray-400">Or continue with</span>
                        <div class="flex-grow border-t border-gray-300 dark:border-gray-600"></div>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <a href=""
                            class="flex items-center justify-center py-3 space-x-2 transition-colors border border-gray-300 rounded-lg dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <i class="text-red-500 fab fa-google"></i>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Google</span>
                        </a>

                        <a href=""
                            class="flex items-center justify-center py-3 space-x-2 transition-colors border border-gray-300 rounded-lg dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <i class="text-blue-600 fab fa-facebook"></i>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Facebook</span>
                        </a>
                    </div>

                    <p class="mt-8 text-center text-gray-600 dark:text-gray-400">
                        Don’t have an account?
                        <a href="{{ route('register') }}"
                            class="ml-1 font-semibold transition-colors text-primary hover:text-primary-dark">
                            Register Here <i class="ml-1 text-xs fas fa-arrow-right"></i>
                        </a>
                    </p>
                </div>
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
        });
    </script>

@endsection
