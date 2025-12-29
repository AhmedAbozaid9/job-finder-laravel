@props(['title' => 'Log in'])

<x-layout :title="$title">
    <div class="max-w-5xl mx-auto my-12 sm:my-20 ">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden lg:flex lg:items-stretch">

            <div class="lg:hidden w-full bg-gradient-to-br from-indigo-600 to-indigo-400 p-6 text-white rounded-t-3xl">
                <h2 class="text-2xl font-bold text-center">Welcome back</h2>
                <p class="mt-2 text-sm text-center opacity-95">Sign in to continue to {{ config('app.name') }}.</p>
            </div>

            <div class="hidden lg:block lg:w-1/2 bg-gradient-to-br from-indigo-600 to-indigo-400 p-12 text-white">
                <h2 class="text-3xl font-bold">Welcome back</h2>
                <p class="mt-4 text-base opacity-95">Sign in to continue to {{ config('app.name') }} and get personalized
                    job recommendations.</p>
                <div class="mt-8 opacity-90">
                    <svg class="w-48 h-48" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50" fill="rgba(255,255,255,0.06)" />
                    </svg>
                </div>
            </div>

            <div class="w-full lg:w-3/4 p-6 sm:p-12">
                <form method="POST" action="{{ route('login') }}" class="space-y-8">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required
                            autofocus
                            class="mt-3 block w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 sm:px-6 sm:py-4 text-base sm:text-lg text-gray-900 shadow-sm placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-indigo-100" />
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required
                            class="mt-3 block w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 sm:px-6 sm:py-4 text-base sm:text-lg text-gray-900 shadow-sm placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-indigo-100" />
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-start gap-4">
                        <label class="inline-flex items-center gap-3">
                            <input type="checkbox" name="remember"
                                class="h-5 w-5 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <span class="text-gray-700">Remember me</span>
                        </label>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full inline-flex items-center justify-center gap-2 rounded-2xl bg-gradient-to-br from-indigo-600 to-indigo-500 px-6 py-3 sm:px-8 sm:py-4 text-base sm:text-lg font-semibold text-white shadow-xl hover:opacity-95 transition">
                            Sign in
                        </button>
                    </div>
                </form>

                <div class="mt-8 text-center text-sm text-gray-600">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-indigo-600 font-medium hover:underline">Create an
                        account</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
