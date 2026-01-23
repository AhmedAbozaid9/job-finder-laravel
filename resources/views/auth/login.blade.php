@props(['title' => 'Log in'])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black font-sans min-h-screen antialiased">
    <div class="min-h-screen flex">
        <!-- Left Side - Branding -->
        <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden">
            <!-- Background Gradient -->
            <div class="absolute inset-0 bg-gradient-to-br from-pink via-pink-dark to-purple"></div>

            <!-- Pattern Overlay -->
            <div
                class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23000\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]">
            </div>

            <!-- Floating Elements -->
            <div class="absolute top-20 left-20 w-32 h-32 border-2 border-white/20 rounded-3xl rotate-12 animate-float">
            </div>
            <div class="absolute bottom-32 right-20 w-24 h-24 bg-white/10 rounded-full"
                style="animation: float 4s ease-in-out infinite reverse"></div>
            <div class="absolute top-1/3 right-1/4 w-4 h-4 bg-white rounded-full animate-pulse"></div>

            <!-- Content -->
            <div class="relative z-10 flex flex-col justify-between p-12 text-black">
                <!-- Logo -->


                <!-- Main Content -->
                <div class="max-w-md">
                    <h1 class="text-5xl font-bold mb-6 leading-tight">Find your dream job today</h1>
                    <p class="text-xl text-black/70 leading-relaxed">
                        Join thousands of professionals who've discovered amazing opportunities through our platform.
                    </p>

                    <!-- Stats -->
                    <div class="flex gap-8 mt-12">
                        <div>
                            <div class="text-3xl font-bold">10K+</div>
                            <div class="text-black/60 text-sm">Active Jobs</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold">5K+</div>
                            <div class="text-black/60 text-sm">Companies</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold">95%</div>
                            <div class="text-black/60 text-sm">Success Rate</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial -->
                <div class="max-w-md">
                    <blockquote class="text-lg text-black/80 italic mb-4">
                        "I found my dream job within 2 weeks of signing up. The platform made it so easy to connect with
                        the right companies."
                    </blockquote>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-black/20 flex items-center justify-center text-black font-bold">
                            S</div>
                        <div>
                            <div class="font-semibold">Sarah Chen</div>
                            <div class="text-sm text-black/60">Software Engineer at Google</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md animate-fade-in">
                <!-- Mobile Logo -->


                <!-- Form Header -->
                <div class="text-center lg:text-left mb-8">
                    <h2 class="text-3xl font-bold text-white mb-2">Welcome back</h2>
                    <p class="text-text-muted">
                        Don't have an account?
                        <a href="{{ route('register') }}"
                            class="text-pink hover:text-pink-light font-medium transition-colors">Sign up free</a>
                    </p>
                </div>

                <!-- Account Type Tabs -->
                <div class="grid grid-cols-2 gap-2 p-1 bg-dark-surface/50 rounded-xl border border-dark-border mb-8">
                    <button type="button" data-tab-trigger="seeker" data-active="true"
                        class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-200 bg-dark-elevated text-white shadow-lg">
                        Individual
                    </button>
                    <button type="button" data-tab-trigger="recruiter" data-active="false"
                        class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-200 text-text-muted hover:text-white">
                        Company
                    </button>
                </div>

                <!-- Form -->
                <form class="space-y-5" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-text-secondary mb-2">Email
                            address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            value="{{ old('email') }}"
                            class="block w-full rounded-xl bg-dark-surface border border-dark-border px-4 py-3.5 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                            placeholder="you@example.com">
                        @error('email')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password"
                            class="block text-sm font-medium text-text-secondary mb-2">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-xl bg-dark-surface border border-dark-border px-4 py-3.5 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                            placeholder="••••••••">
                        @error('password')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input id="remember-me" name="remember" type="checkbox"
                                class="w-4 h-4 rounded border-dark-border bg-dark-surface text-pink focus:ring-pink focus:ring-offset-0">
                            <span class="text-sm text-text-secondary">Remember me</span>
                        </label>
                        <a href="#" class="text-sm text-pink hover:text-pink-light transition-colors">Forgot
                            password?</a>
                    </div>

                    <button type="submit"
                        class="w-full py-4 bg-gradient-pink text-black font-bold rounded-xl hover:scale-[1.02] transition-all glow-pink flex items-center justify-center gap-2">
                        Sign in
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </form>

                <!-- Divider -->

            </div>
        </div>
    </div>
</body>

</html>
