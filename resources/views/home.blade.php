<x-guest-layout>
    <header>
        <div class="relative sm:flex sm:justify-center sm:items-center bg-center bg-gray-500 dark:bg-gray-900 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white h-32">
            <div class="sm:fixed sm:top-0 sm:left-0 p-6 text-left z-10">
                <img src="{{ asset('images/proton-logo.png') }}" class="w-auto h-9">
            </div>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </header>
    <section>
        <main class="max-h-96 bg-white">
            <div>
                <p>this is main body</p>
            </div>
        </main>
    </section>
    </x-guest-layout>