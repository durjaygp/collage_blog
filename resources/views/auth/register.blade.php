{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block w-full mt-1"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block w-full mt-1"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="ndoryz0dzU8OeFsE81NBwTeOJ9XkhLTTK7Dmqerd">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="preload" as="style" href="http://apiit_blog.test/build/assets/app-Bv9eCx8e.css" /><link rel="modulepreload" href="http://apiit_blog.test/build/assets/app-CifqVuM1.js" /><link rel="stylesheet" href="http://apiit_blog.test/build/assets/app-Bv9eCx8e.css" data-navigate-track="reload" /><script type="module" src="http://apiit_blog.test/build/assets/app-CifqVuM1.js" data-navigate-track="reload"></script>
    <!-- Styles -->
    <!-- Livewire Styles --><style >[wire\:loading][wire\:loading], [wire\:loading\.delay][wire\:loading\.delay], [wire\:loading\.inline-block][wire\:loading\.inline-block], [wire\:loading\.inline][wire\:loading\.inline], [wire\:loading\.block][wire\:loading\.block], [wire\:loading\.flex][wire\:loading\.flex], [wire\:loading\.table][wire\:loading\.table], [wire\:loading\.grid][wire\:loading\.grid], [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none][wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short][wire\:loading\.delay\.short], [wire\:loading\.delay\.default][wire\:loading\.delay\.default], [wire\:loading\.delay\.long][wire\:loading\.delay\.long], [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {display: none;}[wire\:offline][wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none !important;}</style>
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    <script>
        // Function to show student form
        function showStudentForm() {
            document.getElementById('role').value = 1;
            setUnderline('studentBtn');
            document.getElementById('alumniFields').style.display = 'none';
            document.getElementById('commonFields').style.display = 'block';
        }

        // Function to show staff form
        function showStaffForm() {
            document.getElementById('role').value = 2;
            setUnderline('staffBtn');
            document.getElementById('alumniFields').style.display = 'none';
            document.getElementById('commonFields').style.display = 'block';
        }

        // Function to show alumni form
        function showAlumniForm() {
            document.getElementById('role').value = 5;
            setUnderline('alumniBtn');
            document.getElementById('alumniFields').style.display = 'block';
            document.getElementById('commonFields').style.display = 'block';
        }

        // Function to set underline to clicked button and remove underline from others
        function setUnderline(btnId) {
            const buttons = document.querySelectorAll('.registration-btn');
            buttons.forEach(button => {
                if (button.id === btnId) {
                    button.classList.add('underline');
                } else {
                    button.classList.remove('underline');
                }
            });
        }
    </script>


    <div class="bg-no-repeat bg-cover bg-top relative" style="background-image: url(https://apiit.lk/wp-content/uploads/2024/03/apit_9.jpeg); height:695px; background-position: 0 -100px;">
        <div class="absolute bg-gradient-to-b from-blue-500 to-blue-900 opacity-60 inset-0 z-0"></div>
        <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
            <div class="flex justify-center self-center z-10">
                <!-- Left side with branding -->
                <div class="self-start hidden lg:flex flex-col text-white mr-32">
                    <img src="" class="mb-3">
                    <h1 class="mb-3 mt-64 font-bold text-5xl">Hi! Welcome Back</h1>
                    <p class="pr-3">"Inspire Love for Learning – Welcome to APIIT, Your Pathway to Success."</p>
                </div>

                <!-- Authentication Card -->
                <div class="flex justify-center self-center z-10">
                    <div class="p-8 bg-white mx-auto rounded-2xl w-100 ">

                        <form method="POST" action="http://apiit_blog.test/register">
                            <input type="hidden" name="_token" value="ndoryz0dzU8OeFsE81NBwTeOJ9XkhLTTK7Dmqerd" autocomplete="off">                            <div class="mb-2">
                                <div class="flex justify-left items-left">
                                    <div class="relative">
                                        <div class="ml-2 mt-5 w-8 h-8 bg-gradient-to-br from-blue-400  to-green-500 rounded-full animate-pulse absolute top-1/12 left-1/12 transform -translate-x-1/2 -translate-y-1/2 opacity-15" ></div>
                                        <div class="ml-2 mt-5 w-6 h-6 bg-gradient-to-br from-blue-400  to-green-500 rounded-full animate-pulse absolute top-1/64 left-1/64 transform -translate-x-1/2 -translate-y-1/2 opacity-30"></div>
                                        <div class="ml-2 mt-5 w-4 h-4 bg-gradient-to-br from-blue-400  to-green-500 rounded-full animate-pulse absolute top-1/128 left-1/128 transform -translate-x-1/2 -translate-y-1/2 opacity-40"></div>
                                        <div class="ml-2 mt-5 w-3 h-3 bg-gradient-to-br from-blue-400  to-green-500 rounded-full animate-pulse absolute top-1/256 left-1/256 transform -translate-x-1/2 -translate-y-1/2"></div>
                                    </div>
                                </div>
                                <h3 class="font-bold text-2xl text-gray-800 pl-8 pt-1">Register</h3>
                                <p class="text-gray-500">Create your account to get started.</p>
                            </div>
                            <!-- Registration Type Buttons -->
                            <div class="space-x-2">
                                <button type="button"class="registration-btn hover:underline" id="studentBtn" onclick="showStudentForm()">Student</button>
                                <button type="button" class="registration-btn hover:underline" id="staffBtn" onclick="showStaffForm()">Staff</button>
                                <button type="button" class="registration-btn hover:underline" id="alumniBtn" onclick="showAlumniForm()">Alumni</button>
                            </div>
                            <input type="hidden" id="role" name="role" value="">

                            <div class="space-y-5">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-gray-700 tracking-wide">Name</label>
                                    <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full text-base px-4 py-1 border border-gray-300 rounded-lg focus:outline-none focus:border-green-400" id="name" type="text" name="name" required="required" autofocus="autofocus" autocomplete="name" placeholder="Your Name">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
                                    <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full text-base px-4 py-1 border border-gray-300 rounded-lg focus:outline-none focus:border-green-400" id="email" type="email" name="email" required="required" autocomplete="username" placeholder="mail@gmail.com">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-gray-700 tracking-wide">Password</label>
                                    <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full content-center text-base px-4 py-1 border border-gray-300 rounded-lg focus:outline-none focus:border-green-400" id="password" type="password" name="password" required="required" autocomplete="new-password" placeholder="Enter your password">
                                </div>
                                <div class="space-y-2">
                                    <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">Confirm Password</label>
                                    <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full content-center text-base px-4 py-1 border border-gray-300 rounded-lg focus:outline-none focus:border-green-400" id="password_confirmation" type="password" name="password_confirmation" required="required" autocomplete="new-password" placeholder="Confirm your password">
                                </div>
                                <!-- Additional Fields for Alumni -->
                                <div id="alumniFields" style="display: none;">
                                    <!-- NIC -->
                                    <div class="space-y-2">
                                        <label class="text-sm font-medium text-gray-700 tracking-wide">NIC</label>
                                        <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full text-base px-4 py-1 border border-gray-300 rounded-lg focus:outline-none focus:border-green-400" id="nic" type="text" name="nic" placeholder="Your NIC">
                                    </div>
                                </div>

                            </div>
                            <div>
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 w-full flex justify-center bg-blue-500 hover:bg-blue-700 text-gray-100 p-3 rounded-full tracking-wide font-bold shadow-lg cursor-pointer transition ease-in duration-500 mt-4">
                                    Register
                                </button>
                            </div>
                        </form>
                        <div class="pt-5 text-center text-gray-400 text-xs">
                        <span>
                            Copyright © 2021-2022
                            <a href="https://codepen.io/uidesignhub" rel="" target="_blank" title="Ajimon" class="text-green hover:text-green-500">AJI</a>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Livewire Scripts -->
    <script src="/livewire/livewire.js?id=d02a3788"   data-csrf="ndoryz0dzU8OeFsE81NBwTeOJ9XkhLTTK7Dmqerd" data-update-uri="/livewire/update" data-navigate-once="true"></script>
</body>
</html>
