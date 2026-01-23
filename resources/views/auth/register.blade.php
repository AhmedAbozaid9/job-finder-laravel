@props(['title' => 'Create account'])

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
        <!-- Left Side - Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md animate-fade-in">
                <!-- Mobile Logo -->
                <div class="lg:hidden mb-8 text-center">
                    <a href="{{ route('landing') }}" class="inline-flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-gradient-pink flex items-center justify-center text-black font-bold glow-pink-sm">
                            J
                        </div>
                        <span class="text-xl font-bold text-white">{{ config('app.name') }}</span>
                    </a>
                </div>

                <!-- Form Header -->
                <div class="text-center lg:text-left mb-8">
                    <h2 class="text-3xl font-bold text-white mb-2">Create your account</h2>
                    <p class="text-text-muted">
                        Already have an account?
                        <a href="{{ route('login') }}"
                            class="text-pink hover:text-pink-light font-medium transition-colors">Sign in</a>
                    </p>
                </div>

                <!-- Form -->
                <form class="space-y-5" action="{{ route('register') }}" method="POST">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-text-secondary mb-2">Full
                            name</label>
                        <input id="name" name="name" type="text" autocomplete="name" required
                            value="{{ old('name') }}"
                            class="block w-full rounded-xl bg-dark-surface border border-dark-border px-4 py-3.5 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                            placeholder="John Doe">
                        @error('name')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

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

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="password"
                                class="block text-sm font-medium text-text-secondary mb-2">Password</label>
                            <input id="password" name="password" type="password" required
                                class="block w-full rounded-xl bg-dark-surface border border-dark-border px-4 py-3.5 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                                placeholder="••••••••">
                            @error('password')
                                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation"
                                class="block text-sm font-medium text-text-secondary mb-2">Confirm</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="block w-full rounded-xl bg-dark-surface border border-dark-border px-4 py-3.5 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                                placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Terms -->
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" required
                            class="mt-0.5 w-4 h-4 rounded border-dark-border bg-dark-surface text-pink focus:ring-pink focus:ring-offset-0">
                        <span class="text-sm text-text-muted">
                            I agree to the <a href="{{ route('terms') }}" class="text-pink hover:text-pink-light">Terms
                                of Service</a>
                            and <a href="{{ route('privacy') }}" class="text-pink hover:text-pink-light">Privacy
                                Policy</a>
                        </span>
                    </label>

                    <button type="submit"
                        class="w-full py-4 bg-gradient-pink text-black font-bold rounded-xl hover:scale-[1.02] transition-all glow-pink flex items-center justify-center gap-2">
                        Create account
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </form>

                <!-- Divider -->
                <div class="relative my-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-dark-border"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-black text-text-muted">Or sign up with</span>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-4">
                    <button type="button"
                        class="flex items-center justify-center gap-2 px-4 py-3 bg-dark-surface border border-dark-border rounded-xl text-text-secondary hover:border-pink hover:text-white transition-all">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                            <path
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                            <path
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                            <path
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                        </svg>
                        Google
                    </button>
                    <button type="button"
                        class="flex items-center justify-center gap-2 px-4 py-3 bg-dark-surface border border-dark-border rounded-xl text-text-secondary hover:border-pink hover:text-white transition-all">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0012 2z" />
                        </svg>
                        GitHub
                    </button>
                </div>
            </div>
        </div>

        <!-- Right Side - Branding -->
        <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden">
            <!-- Background Gradient -->
            <div class="absolute inset-0 bg-gradient-to-bl from-purple via-pink to-pink-dark"></div>

            <!-- Pattern Overlay -->
            <div
                class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23000\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]">
            </div>

            <!-- Floating Elements -->
            <div class="absolute top-32 right-20 w-28 h-28 border-2 border-white/20 rounded-full animate-float"></div>
            <div class="absolute bottom-20 left-16 w-20 h-20 bg-white/10 rounded-2xl rotate-45"
                style="animation: float 5s ease-in-out infinite reverse"></div>
            <div class="absolute top-1/2 left-1/3 w-3 h-3 bg-white rounded-full animate-pulse"></div>

            <!-- Content -->
            <div class="relative z-10 flex flex-col justify-between p-12 text-black">
                <!-- Logo -->
                <a href="{{ route('landing') }}" class="flex items-center gap-3">
                    <div
                        class="w-12 h-12 rounded-xl bg-black flex items-center justify-center text-white font-bold text-xl">
                        J
                    </div>
                    <span class="text-2xl font-bold">{{ config('app.name') }}</span>
                </a>

                <!-- Main Content -->
                <div class="max-w-md">
                    <h1 class="text-5xl font-bold mb-6 leading-tight">Start your journey to success</h1>
                    <p class="text-xl text-black/70 leading-relaxed">
                        Create your profile once and apply to thousands of opportunities with a single click.
                    </p>

                    <!-- Features -->
                    <div class="space-y-4 mt-12">
                        @foreach (['AI-powered job matching', 'Direct company connections', 'Real-time notifications'] as $feature)
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-black/20 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="font-medium">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Social Proof -->
                <div class="flex items-center gap-4">
                    <div class="flex -space-x-3">
                        @foreach (['A', 'B', 'C', 'D'] as $initial)
                            <div
                                class="w-10 h-10 rounded-full bg-black/20 border-2 border-white/30 flex items-center justify-center text-sm font-bold">
                                {{ $initial }}
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <div class="font-semibold">Join 50,000+ professionals</div>
                        <div class="text-sm text-black/60">who found their dream jobs</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
