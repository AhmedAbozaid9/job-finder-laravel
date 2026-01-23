@props(['title' => config('app.name')])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black font-sans min-h-screen flex flex-col antialiased">
    <!-- Animated Background Gradients -->
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute top-0 left-1/4 w-[600px] h-[600px] rounded-full bg-pink/20 blur-[150px] animate-float">
        </div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] rounded-full bg-purple/15 blur-[150px]"
            style="animation: float 4s ease-in-out infinite reverse"></div>
    </div>

    <!-- Navigation -->
    <header class="fixed top-0 w-full z-50 transition-all duration-300">
        <div class="mx-4 mt-4">
            <div class="max-w-7xl mx-auto backdrop-blur-xl bg-dark-surface/80 border border-dark-border rounded-2xl">
                <div class="px-6 flex justify-between items-center h-16">
                    <!-- Logo -->
                    <a href="{{ route('landing') }}" class="group flex items-center gap-3">
                        <img src="{{ asset('logo.png') }}" class="h-24 w-auto" alt="{{ config('app.name') }}">
                    </a>

                    <!-- Desktop Nav -->
                    <nav class="hidden md:flex items-center space-x-2">
                        <a href="{{ route('jobs.index') }}"
                            class="px-4 py-2 rounded-xl text-sm font-medium text-text-secondary hover:text-white hover:bg-white/5 transition-all">
                            Browse Jobs
                        </a>
                        <a href="{{ route('about') }}"
                            class="px-4 py-2 rounded-xl text-sm font-medium text-text-secondary hover:text-white hover:bg-white/5 transition-all">
                            About
                        </a>

                        @auth
                            <div class="flex items-center space-x-2 ml-4 pl-4 border-l border-dark-border">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="px-4 py-2 rounded-xl text-sm font-medium text-text-secondary hover:text-pink transition-colors">
                                        Log Out
                                    </button>
                                </form>
                                <a href="#"
                                    class="px-5 py-2.5 rounded-xl bg-gradient-pink text-black text-sm font-bold hover:scale-105 transition-all duration-300 glow-pink-sm">
                                    Post a Job
                                </a>
                            </div>
                        @else
                            <div class="flex items-center space-x-2 ml-4 pl-4 border-l border-dark-border">
                                <a href="{{ route('login') }}"
                                    class="px-4 py-2 rounded-xl text-sm font-medium text-text-secondary hover:text-white hover:bg-white/5 transition-all">
                                    Log in
                                </a>
                                <a href="{{ route('register') }}"
                                    class="px-5 py-2.5 rounded-xl bg-gradient-pink text-black text-sm font-bold hover:scale-105 transition-all duration-300 glow-pink-sm">
                                    Get Started
                                </a>
                            </div>
                        @endauth
                    </nav>

                    <!-- Mobile Menu Button -->
                    <button class="md:hidden p-2 rounded-lg hover:bg-white/5 transition-colors text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow relative z-10 pt-28 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
        @if (session('success'))
            <div
                class="mb-8 rounded-2xl bg-pink/10 border border-pink/30 p-4 text-pink flex items-center gap-3 animate-fade-in glow-pink-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                <span class="font-medium text-white">{{ session('success') }}</span>
            </div>
        @endif

        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="relative z-10 mt-32">
        <div class="border-t border-dark-border bg-dark-surface/50 backdrop-blur-xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                    <!-- Brand -->
                    <div class="space-y-6">
                        <a href="{{ route('landing') }}" class="flex items-center gap-3">

                            <img src="{{ asset('logo.png') }}" class="h-24 w-auto" alt="{{ config('app.name') }}" move
                                starts here. </p>
                            <!-- Social Icons -->
                            <div class="flex space-x-3">
                                <a href="#"
                                    class="w-10 h-10 rounded-xl bg-dark-elevated border border-dark-border flex items-center justify-center text-text-muted hover:text-pink hover:border-pink transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M22 4.01c-.77.35-1.6.59-2.47.69a4.32 4.32 0 001.9-2.38 8.7 8.7 0 01-2.75 1.05 4.36 4.36 0 00-7.44 3.98A12.38 12.38 0 013 3.9a4.36 4.36 0 001.35 5.81c-.66-.02-1.28-.2-1.82-.5v.05a4.36 4.36 0 003.5 4.27c-.37.1-.76.15-1.16.15-.28 0-.55-.03-.82-.08a4.36 4.36 0 004.07 3.02A8.75 8.75 0 012 19.54 12.34 12.34 0 008.29 21c7.55 0 11.68-6.26 11.68-11.68v-.53A8.34 8.34 0 0022 4.01z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 rounded-xl bg-dark-elevated border border-dark-border flex items-center justify-center text-text-muted hover:text-pink hover:border-pink transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.41 2.87 8.15 6.84 9.48.5.09.68-.22.68-.48 0-.24-.01-.87-.01-1.71-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.61.07-.61 1.01.07 1.54 1.04 1.54 1.04.9 1.54 2.36 1.1 2.94.84.09-.66.35-1.1.64-1.35-2.22-.25-4.56-1.11-4.56-4.93 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.74 1.02a9.5 9.5 0 015 0c1.9-1.3 2.74-1.02 2.74-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.83-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85 0 1.33-.01 2.4-.01 2.73 0 .27.18.58.69.48A9.97 9.97 0 0022 12c0-5.5-4.46-9.96-9.96-9.96z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 rounded-xl bg-dark-elevated border border-dark-border flex items-center justify-center text-text-muted hover:text-pink hover:border-pink transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z" />
                                    </svg>
                                </a>
                            </div>
                    </div>

                    <!-- Links -->
                    <div>
                        <h4 class="font-semibold text-white mb-5">Product</h4>
                        <ul class="space-y-3">
                            <li><a href="{{ route('jobs.index') }}"
                                    class="text-text-muted hover:text-pink transition-colors text-sm">Browse Jobs</a>
                            </li>
                            <li><a href="#" class="text-text-muted hover:text-pink transition-colors text-sm">For
                                    Companies</a></li>
                            <li><a href="#"
                                    class="text-text-muted hover:text-pink transition-colors text-sm">Pricing</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold text-white mb-5">Company</h4>
                        <ul class="space-y-3">
                            <li><a href="{{ route('about') }}"
                                    class="text-text-muted hover:text-pink transition-colors text-sm">About Us</a></li>
                            <li><a href="{{ route('contact') }}"
                                    class="text-text-muted hover:text-pink transition-colors text-sm">Contact</a></li>
                            <li><a href="#"
                                    class="text-text-muted hover:text-pink transition-colors text-sm">Careers</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold text-white mb-5">Legal</h4>
                        <ul class="space-y-3">
                            <li><a href="{{ route('privacy') }}"
                                    class="text-text-muted hover:text-pink transition-colors text-sm">Privacy
                                    Policy</a></li>
                            <li><a href="{{ route('terms') }}"
                                    class="text-text-muted hover:text-pink transition-colors text-sm">Terms of
                                    Service</a></li>
                            <li><a href="#"
                                    class="text-text-muted hover:text-pink transition-colors text-sm">Cookie Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Bar -->
                <div
                    class="mt-12 pt-8 border-t border-dark-border flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-sm text-text-muted">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                    </p>
                    <p class="text-sm text-text-muted flex items-center gap-2">
                        Made with <span class="text-pink">♥</span> for job seekers everywhere
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
