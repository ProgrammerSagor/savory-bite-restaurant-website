@extends('layouts.main')

@section('title', 'Profile Page')

@section('style')



    <style>
        .tab-active {
            border-bottom: 3px solid #e11d48;
            color: #e11d48;
        }
    </style>

@endsection

@section('conntent')

    <div class="mt-20 md:mt-24 dark:bg-gray-800">

        <div class="max-w-4xl p-8 mx-auto">

            <div class="flex overflow-x-auto bg-gray-100 rounded-md dark:bg-gray-950 dark:text-white" id="profileTabs">
                <span data-target="#profileInfo"
                    class="flex-1 px-6 py-4 font-medium text-center border-b-2 cursor-pointer tab-btn tab-active">
                    <i class="mr-2 fas fa-user-circle"></i>Profile Info
                </span>

                <span data-target="#security"
                    class="flex-1 px-6 py-4 font-medium text-center border-b-2 cursor-pointer tab-btn">
                    <i class="mr-2 fas fa-lock"></i>Security
                </span>

                <span data-target="#dangerZone"
                    class="flex-1 px-6 py-4 font-medium text-center border-b-2 cursor-pointer tab-btn">
                    <i class="mr-2 fas fa-exclamation-triangle"></i>Danger Zone
                </span>
            </div>

            <div id="profileSections" class="mt-6">

                <!-- update info -->
                <div id="profileInfo" class="section">
                    <div class="transition-all duration-300 bg-gray-100 shadow form-card dark:bg-gray-900 sm:rounded-lg">
                        <div class="p-6 sm:p-8">
                            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="flex flex-col items-center mx-auto my-4">
                                    <div class="overflow-hidden transition duration-300 border-4 rounded-full shadow-lg cursor-pointer w-28 h-28 sm:w-40 sm:h-40 profile-wrapper border-primary dark:border-white hover:shadow-xl"
                                        onclick="updatePro()">

                                        @if (!empty($user->image))
                                            <img id="profilePreview" src="{{ asset('uploads/profile/' . $user->image) }}"
                                                class="object-cover w-full h-full" alt="Profile Image">
                                        @else
                                            <img id="profilePreview" src="{{ asset('assets/images/avater.jpg') }}"
                                                class="object-cover w-full h-full" alt="Profile Image">
                                        @endif



                                        <input type="file" id="profileUpload" name="pro_image" class="hidden"
                                            accept="image/*">
                                    </div>
                                </div>

                                <div class="flex items-center justify-between mb-10">
                                    <div>
                                        <h3 class="flex items-center text-xl font-bold text-gray-800 dark:text-white">
                                            <i class="mr-3 fas fa-user-circle text-primary"></i>
                                            Profile Information
                                        </h3>
                                        <p class="mt-1 text-gray-600 dark:text-gray-400">Update your account's profile
                                            information and email address</p>
                                    </div>

                                </div>


                                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                            <i class="mr-2 fas fa-user text-primary"></i>First Name
                                        </label>
                                        <input type="text" value="{{ old('frist_name', auth()->user()->first_name) }}"
                                            name="first_name"
                                            class="w-full px-4 py-3 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white">

                                        @error('first_name')
                                            <p>{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div>
                                        <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                            <i class="mr-2 fas fa-user text-primary"></i>Last Name
                                        </label>
                                        <input type="text" value="{{ old('last_name', auth()->user()->last_name) }}"
                                            name="last_name"
                                            class="w-full px-4 py-3 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white">

                                        @error('last_name')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                        <i class="mr-2 fas fa-envelope text-primary"></i>Email Address
                                    </label>
                                    <input type="email" value="{{ old('email', auth()->user()->email) }}" name="email"
                                        class="w-full px-4 py-3 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white">
                                    @error('email')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                        <i class="mr-2 fas fa-phone text-primary"></i>Phone Number
                                    </label>
                                    <input type="tel" value="{{ old('phone', auth()->user()->phone) }}" name="phone"
                                        class="w-full px-4 py-3 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white">
                                    @error('phone')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                        <i class="mr-2 fas fa-map-marker-alt text-primary"></i>Location
                                    </label>
                                    <input type="text" value="{{ old('location', auth()->user()->location) }}"
                                        name="location"
                                        class="w-full px-4 py-3 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white">
                                    @error('location')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                        <i class="mr-2 fas fa-info-circle text-primary"></i>Bio
                                    </label>
                                    <textarea rows="4"
                                        class="w-full px-4 py-3 text-gray-800 transition-all bg-white border border-gray-300 rounded-lg resize-none dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white"
                                        name="bio">{{ old('bio', auth()->user()->bio) }}</textarea>
                                    @error('bio')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex justify-end pt-4 space-x-4">
                                    <a href="{{ route('profile.edit') }}"
                                        class="block px-6 py-3 font-medium text-gray-700 transition-colors border border-gray-300 rounded-lg dark:border-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                                        Cancel
                                    </a>
                                    <button type="submit"
                                        class="flex items-center px-6 py-3 font-medium text-white transition-colors rounded-lg bg-primary hover:bg-primary-dark">
                                        <i class="mr-2 fas fa-save"></i> Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>





                <!-- change password -->
                <div id="security" class="hidden section">
                    <div class="transition-all duration-300 bg-gray-100 shadow form-card dark:bg-gray-900 sm:rounded-lg">
                        <div class="p-6 sm:p-8">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <h3 class="flex items-center text-xl font-bold text-gray-800 dark:text-white">
                                        <i class="mr-3 fas fa-lock text-primary"></i>
                                        Update Password
                                    </h3>
                                    <p class="mt-1 text-gray-600 dark:text-gray-400">Ensure your account is using a
                                        long, random password to stay secure</p>
                                </div>

                            </div>

                            <form method="post" action="{{ route('password.update') }}" class="space-y-6">
                                @csrf
                                @method('put')


                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                        <i class="mr-2 fas fa-lock text-primary"></i>Current Password
                                    </label>
                                    <div class="relative">
                                        <input type="password" id="current_password" name="current_password" required
                                            class="w-full px-4 py-3 pr-10 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                            placeholder="••••••••">
                                        <button type="button" onclick="togglePassword('current_password', this)"
                                            class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <i class="text-gray-400 transition-colors fas fa-eye hover:text-gray-600"></i>
                                        </button>
                                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                    </div>
                                </div>




                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                        <i class="mr-2 fas fa-lock text-primary"></i>Password *
                                    </label>
                                    <div class="relative">
                                        <input type="password" id="password" name="password"
                                            class="w-full px-4 py-3 pr-10 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                            placeholder="••••••••" required>
                                        <button type="button" onclick="togglePassword('password', this)"
                                            class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <i class="text-gray-400 transition-colors fas fa-eye hover:text-gray-600"></i>
                                        </button>
                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                    </div>

                                    <div class="w-full h-2 mt-2 overflow-hidden bg-gray-200 rounded-full dark:bg-gray-600">
                                        <div id="password-strength-bar" class="w-0 h-full transition-all duration-300">
                                        </div>
                                    </div>

                                    <p id="password-strength-text" class="mt-1 text-sm font-medium"></p>
                                </div>

                                <div class="mt-4">
                                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                        <i class="mr-2 fas fa-lock text-primary"></i>Confirm Password *
                                    </label>
                                    <div class="relative">
                                        <input type="password" id="confirm_password" name="password_confirmation"
                                            required
                                            class="w-full px-4 py-3 pr-10 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                            placeholder="••••••••">
                                        <button type="button" onclick="togglePassword('confirm_password', this)"
                                            class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <i class="text-gray-400 transition-colors fas fa-eye hover:text-gray-600"></i>
                                        </button>
                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>

                                <div
                                    class="flex items-center p-4 space-x-3 border border-blue-200 rounded-lg bg-blue-50 dark:bg-blue-900/20 dark:border-blue-800">
                                    <i class="text-xl text-blue-500 fas fa-info-circle"></i>
                                    <p class="text-sm text-blue-700 dark:text-blue-300">
                                        Make sure your new password is strong and different from previous passwords.
                                    </p>
                                </div>

                                <div class="flex justify-end pt-4 space-x-4">
                                    <a href="{{ route('profile.edit') }}"
                                        class="px-6 py-3 font-medium text-gray-700 transition-colors border border-gray-300 rounded-lg dark:border-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                                        Cancel
                                    </a>
                                    <button type="submit"
                                        class="flex items-center px-6 py-3 font-medium text-white transition-colors rounded-lg bg-primary hover:bg-primary-dark">
                                        <i class="mr-2 fas fa-save"></i> Update Password
                                    </button>
                                </div>
                            </form>




                        </div>
                    </div>

                </div>

                <!-- delete account -->
                <div id="dangerZone" class="hidden section">
                    <div class="transition-all duration-300 bg-gray-100 shadow form-card dark:bg-gray-900 sm:rounded-lg">


                        <div class="p-6 sm:p-8">
                            <h3 class="flex items-center mb-4 text-xl font-bold text-gray-800 dark:text-white">
                                <i class="mr-3 text-red-500 fas fa-exclamation-triangle"></i>
                                Delete Account
                            </h3>

                            <p class="mb-6 text-gray-600 dark:text-gray-400">
                                Permanently delete your account and all associated data.
                            </p>

                            <div class="space-y-6">

                                <div
                                    class="p-4 border border-red-200 rounded-lg bg-red-50 dark:bg-red-900/20 dark:border-red-800">
                                    <div class="flex items-start space-x-3">
                                        <i class="fas fa-exclamation-circle text-red-500 text-xl mt-0.5"></i>
                                        <div>
                                            <h4 class="font-semibold text-red-800 dark:text-red-300">Warning: This action
                                                cannot be undone</h4>
                                            <p class="mt-1 text-sm text-red-700 dark:text-red-400">
                                                Once you delete your account, all of your data including reviews, photos,
                                                and preferences will be permanently removed.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center p-4 space-x-3 border border-yellow-200 rounded-lg bg-yellow-50 dark:bg-yellow-900/20 dark:border-yellow-800">
                                    <i class="text-xl text-yellow-500 fas fa-download"></i>
                                    <div>
                                        <p class="text-sm text-yellow-700 dark:text-yellow-300">
                                            <strong>Before you proceed:</strong> Consider downloading your data first. You
                                            can export your reviews and photos from the account settings.
                                        </p>
                                    </div>
                                </div>

                                <form method="POST" action="{{ route('profile.destroy') }}" class="space-y-4">
                                    @csrf
                                    @method('delete')

                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="confirm-delete"
                                            class="text-red-500 rounded focus:ring-red-500">
                                        <label for="confirm-delete" class="text-sm text-gray-700 dark:text-gray-300">
                                            I understand that this action is permanent and cannot be undone
                                        </label>
                                    </div>


                                    <div class="mt-4">
                                        <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                            <i class="mr-2 fas fa-lock text-primary"></i>Current Password *
                                        </label>
                                        <div class="relative">
                                            <input type="password" id="password_remove" name="password" required
                                                class="w-full px-4 py-3 pr-10 text-gray-800 placeholder-gray-400 transition-all bg-white border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                                placeholder="••••••••">
                                            <button type="button" onclick="togglePassword('password_remove', this)"
                                                class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <i
                                                    class="text-gray-400 transition-colors fas fa-eye hover:text-gray-600"></i>
                                            </button>

                                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                        </div>
                                    </div>


                                    <div class="flex justify-end pt-4 space-x-4">
                                        <a href="{{ route('profile.edit') }}"
                                            class="px-6 py-3 font-medium text-gray-700 transition-colors border border-gray-300 rounded-lg dark:border-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                                            Cancel
                                        </a>
                                        <button type="submit" id="delete-btn"
                                            class="flex items-center px-6 py-3 font-medium text-white transition-colors bg-red-500 rounded-lg hover:bg-red-600 disabled:opacity-50"
                                            disabled>
                                            <i class="mr-2 fas fa-trash-alt"></i> Delete Account
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>











                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')


    <script>
        function updatePro() {
            document.getElementById('profileUpload').click();
        }

        document.getElementById('profileUpload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profilePreview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });


        $(document).ready(function() {
            $(".tab-btn").removeClass("tab-active");
            $(".tab-btn").first().addClass("tab-active");

            $(".section").hide();
            $(".section").first().show();

            $(".tab-btn").click(function() {

                $(".tab-btn").removeClass("tab-active");
                $(this).addClass("tab-active");

                let target = $(this).data("target");
                $(".section").hide();
                $(target).show();
            });




            $('#confirm-delete').on('change', function() {
                $('#delete-btn').prop('disabled', !this.checked);
            });

        });


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
