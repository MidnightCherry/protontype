<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ProtonType') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="">
        <!-- Header/Nav -->
        <div class="bg-black text-white flex items-center justify-between p-4">
            <div class="header-logo">
                <a class="logo-light" href="./index.html">
                    <img src="{{ asset('images/proton-logo.png') }}" class="w-auto h-8">
                </a>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white focus:outline-none transition ease-in-out duration-150 bg-black">
                            <div>{{ __("Home") }}</div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        {{-- <x-dropdown-link :href="route('profile.edit')"> --}}
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Login') }}
                        </x-dropdown-link>    
                        <x-dropdown-link :href="route('profile.edit')">    
                            {{ __('X90') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('X70') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('X50') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

        <!-- main content -->
        <!-- first carousel for mainpage -->
        <div class="relative flex flex-col items-center justify-center h-screen">
            <div class="">
                @include ('layouts.carousel')
            </div>
            <button class="bg-red-700 hover:bg-gray-700 transition duration-300 ease-in-out transform hover:scale-105 text-white font-bold py-4 px-8 rounded-full">
                Click Me!
            </button>
        </div>
            
        <div class="flex items-center justify-center h-screen">
            <div class="w-70 mt-0">
                
            </div>
        </div>
    </body> 
    </html>
