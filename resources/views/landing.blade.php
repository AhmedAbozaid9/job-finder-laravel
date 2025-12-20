@props(['title' => config('app.name')])

<x-layout :title="$title">
    <style>
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
            100% { transform: translateY(0); }
        }
        .animate-fade-up { animation: fadeUp 700ms cubic-bezier(.16,.84,.44,1) both; }
        .animate-fade-up-delay-1 { animation-delay: 80ms; }
        .animate-fade-up-delay-2 { animation-delay: 180ms; }
        .animate-fade-up-delay-3 { animation-delay: 300ms; }
        .animate-float-slow { animation: float 6s ease-in-out infinite; }

        /* Decorative blob sizes adjust per breakpoint */
        .blob-1 { width: 36rem; height: 36rem; }
        @media (min-width: 1280px) { .blob-1 { width: 48rem; height: 48rem; } }
        .blob-2 { width: 24rem; height: 24rem; }
        @media (min-width: 1280px) { .blob-2 { width: 32rem; height: 32rem; } }
    </style>

    <section class="relative overflow-hidden bg-gradient-to-b from-white to-indigo-50">
        <!-- Decorative blobs (responsive, lightweight) -->
        <div class="absolute -top-20 -left-12 opacity-30 pointer-events-none">
            <svg class="blob-1" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="b1" x1="0" x2="1">
                        <stop offset="0%" stop-color="#6366f1" stop-opacity="0.18"/>
                        <stop offset="100%" stop-color="#8b5cf6" stop-opacity="0.08"/>
                    </linearGradient>
                </defs>
                <g transform="translate(300,300)">
                    <circle r="260" fill="url(#b1)" />
                </g>
            </svg>
        </div>

        <div class="absolute -bottom-24 -right-8 opacity-25 pointer-events-none">
            <svg class="blob-2" viewBox="0 0 420 420" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="b2" x1="0" x2="1">
                        <stop offset="0%" stop-color="#60a5fa" stop-opacity="0.16"/>
                        <stop offset="100%" stop-color="#a78bfa" stop-opacity="0.06"/>
                    </linearGradient>
                </defs>
                <g transform="translate(210,210)">
                    <ellipse rx="180" ry="140" fill="url(#b2)" />
                </g>
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-16 sm:py-20 lg:py-28">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="order-1 lg:order-1 space-y-6">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight animate-fade-up animate-fade-up-delay-1">Find your next great job — faster.</h1>
                    <p class="text-base sm:text-lg text-gray-600 max-w-2xl animate-fade-up animate-fade-up-delay-2">Curated listings, smarter matches, and a simple application flow so you spend less time searching and more time interviewing.</p>

                    <div class="mt-6 flex flex-wrap gap-3 items-center animate-fade-up animate-fade-up-delay-3">
                        <a href="{{ route('jobs.index') }}" class="inline-flex items-center gap-2 px-5 py-3 bg-indigo-600 text-white rounded-lg shadow-lg hover:bg-indigo-500 transition">
                            <!-- Search Icon (fixed) -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            Browse Jobs
                        </a>
                        <a href="#features" class="text-sm text-gray-600 hover:text-indigo-600">See features</a>
                    </div>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-600">
                        <div class="flex items-start gap-3">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 flex-shrink-0">
                                <!-- Star Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.158c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.176 0l-3.37 2.448c-.784.57-1.838-.197-1.539-1.118l1.286-3.957a1 1 0 00-.364-1.118L2.066 9.384c-.783-.57-.38-1.81.588-1.81h4.158a1 1 0 00.95-.69L9.05 2.927z" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium">Hand-picked jobs</div>
                                <div class="text-xs text-gray-500">Curated by experts</div>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 flex-shrink-0">
                                <!-- Lightning Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M11 3L4 12h5l-1 5 7-9h-5l1-5z" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium">Fast applications</div>
                                <div class="text-xs text-gray-500">Apply in a few clicks</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-2 lg:order-2 flex justify-center lg:justify-end">
                    <div class="w-full max-w-md transform transition-all duration-500 hover:scale-[1.02]">
                        <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden">
                            <div class="p-6 bg-gradient-to-br from-indigo-600 to-indigo-400 text-white">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <div class="text-xs uppercase tracking-wide opacity-90">Featured</div>
                                        <div class="mt-2 text-xl font-semibold">Senior Laravel Developer</div>
                                        <div class="mt-1 text-sm opacity-90">Remote • Full-time • $90k–$120k</div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img src="/storage/placeholder-company.svg" alt="Company" class="h-10 w-10 rounded-md bg-white/20 p-1" />
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 grid grid-cols-2 gap-4">
                                <div class="text-sm text-gray-700">Acme Corp</div>
                                <div class="text-right">
                                    <a href="#" class="inline-flex items-center px-3 py-1 bg-indigo-50 text-indigo-700 rounded">Apply</a>
                                </div>
                                <div class="col-span-2 text-xs text-gray-500">Looking for experienced backend engineers with strong Laravel and MySQL experience.</div>
                            </div>
                        </div>

                        <div class="-mt-8 ml-8 w-56 transform rotate-2 shadow-lg rounded-xl overflow-hidden animate-float-slow hidden sm:block">
                            <div class="bg-white p-4">
                                <div class="text-sm font-medium">Frontend Engineer</div>
                                <div class="text-xs text-gray-500">Hybrid • $70k–$95k</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-16">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold">Designed for creators and makers</h2>
            <p class="mt-2 text-gray-600">A few features that make hiring and applying delightful.</p>
        </div>
        <style>
            .card-anim { transition: transform 300ms cubic-bezier(.2,.9,.2,1), box-shadow 300ms; }
            .card-anim:hover { transform: translateY(-6px) scale(1.01); box-shadow: 0 12px 30px rgba(99,102,241,0.12); }
            .icon-bounce { transition: transform 300ms; }
            .card-anim:hover .icon-bounce { transform: translateY(-4px); }
        </style>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 bg-white rounded-lg shadow-sm card-anim animate-fade-up animate-fade-up-delay-1">
                <div class="h-12 w-12 rounded-md bg-indigo-50 text-indigo-600 flex items-center justify-center">
                    <!-- Briefcase Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-bounce" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="7" width="18" height="13" rx="2" />
                        <path d="M16 3H8v4h8V3z" />
                    </svg>
                </div>
                <h3 class="mt-4 font-semibold">Curated listings</h3>
                <p class="mt-2 text-sm text-gray-600">We surface roles that matter — no spam, no filler.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-sm card-anim animate-fade-up animate-fade-up-delay-2">
                <div class="h-12 w-12 rounded-md bg-indigo-50 text-indigo-600 flex items-center justify-center">
                    <!-- Spark Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-bounce" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                    </svg>
                </div>
                <h3 class="mt-4 font-semibold">Smart matching</h3>
                <p class="mt-2 text-sm text-gray-600">Match with roles that fit your experience and preferences.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-sm card-anim animate-fade-up animate-fade-up-delay-3">
                <div class="h-12 w-12 rounded-md bg-indigo-50 text-indigo-600 flex items-center justify-center">
                    <!-- Lock Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-bounce" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="11" width="18" height="11" rx="2" />
                        <path d="M7 11V8a5 5 0 0110 0v3" />
                    </svg>
                </div>
                <h3 class="mt-4 font-semibold">Privacy first</h3>
                <p class="mt-2 text-sm text-gray-600">Control what you share with prospective employers.</p>
            </div>
        </div>
    </section>

    <section class="bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div>
                <div class="font-semibold text-lg">Ready to find your next role?</div>
                <div class="text-sm opacity-90">Explore thousands of openings from trusted companies.</div>
            </div>
            <div>
                <a href="{{ route('jobs.index') }}" class="inline-block bg-white text-indigo-600 px-4 py-2 rounded shadow hover:opacity-95 transition">Get started</a>
            </div>
        </div>
    </section>

</x-layout>
