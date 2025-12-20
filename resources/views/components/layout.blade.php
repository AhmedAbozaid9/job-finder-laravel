@props(['title' => config('app.name')])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-50 text-gray-900">
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('landing') }}" class="text-xl font-bold text-indigo-600">{{ $title }}</a>
                <nav class="space-x-4 text-sm">
                    <a href="{{ route('jobs.index') }}" class="text-gray-600 hover:text-indigo-600">Browse Jobs</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600">About</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="#" class="text-gray-600 hover:text-indigo-600">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-600 hover:text-indigo-600">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-600 hover:text-indigo-600">Register</a>
                            @endif
                        @endauth
                    @endif
                </nav>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @if (session('success'))
            <div class="mb-6 rounded-md bg-green-50 border border-green-100 p-4 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        {{ $slot }}
    </main>

    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <a href="{{ route('jobs.index') }}"
                        class="text-xl font-bold text-indigo-400">{{ $title }}</a>
                    <p class="mt-3 text-sm text-gray-400">Helping makers find meaningful jobs — fast.</p>
                </div>

                <div>
                    <h4 class="font-semibold text-gray-200">Product</h4>
                    <ul class="mt-3 space-y-2 text-sm">
                        <li><a href="{{ route('jobs.index') }}" class="hover:text-white">Browse Jobs</a></li>
                        <li><a href="#" class="hover:text-white">For Companies</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-gray-200">Company</h4>
                    <ul class="mt-3 space-y-2 text-sm">
                        <li><a href="{{ route('about') }}" class="hover:text-white">About</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                        <li><a href="{{ route('about') }}#ui" class="hover:text-white">UI Design</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-gray-200">Follow</h4>
                    <div class="mt-3 flex items-center space-x-3">
                        <a href="#" class="p-2 rounded-md bg-gray-800 hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M22 4.01c-.77.35-1.6.59-2.47.69a4.32 4.32 0 001.9-2.38 8.7 8.7 0 01-2.75 1.05 4.36 4.36 0 00-7.44 3.98A12.38 12.38 0 013 3.9a4.36 4.36 0 001.35 5.81c-.66-.02-1.28-.2-1.82-.5v.05a4.36 4.36 0 003.5 4.27c-.37.1-.76.15-1.16.15-.28 0-.55-.03-.82-.08a4.36 4.36 0 004.07 3.02A8.75 8.75 0 012 19.54 12.34 12.34 0 008.29 21c7.55 0 11.68-6.26 11.68-11.68v-.53A8.34 8.34 0 0022 4.01z" />
                            </svg>
                        </a>
                        <a href="#" class="p-2 rounded-md bg-gray-800 hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.41 2.87 8.15 6.84 9.48.5.09.68-.22.68-.48 0-.24-.01-.87-.01-1.71-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.61.07-.61 1.01.07 1.54 1.04 1.54 1.04.9 1.54 2.36 1.1 2.94.84.09-.66.35-1.1.64-1.35-2.22-.25-4.56-1.11-4.56-4.93 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.74 1.02a9.5 9.5 0 015 0c1.9-1.3 2.74-1.02 2.74-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.83-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85 0 1.33-.01 2.4-.01 2.73 0 .27.18.58.69.48A9.97 9.97 0 0022 12c0-5.5-4.46-9.96-9.96-9.96z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 border-t border-gray-800 pt-6 text-sm text-gray-500">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('privacy') }}" class="hover:text-white">Privacy</a>
                        <a href="{{ route('terms') }}" class="hover:text-white">Terms</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
