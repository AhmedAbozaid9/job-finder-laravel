<x-layout title="About Us">
    <div class="max-w-7xl mx-auto">
        <!-- Hero Section -->
        <section class="text-center py-16 animate-fade-in">
            <span
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-pink/10 border border-pink/30 text-pink text-sm font-medium mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                Our Story
            </span>
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">About {{ config('app.name') }}</h1>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto leading-relaxed">
                We're on a mission to transform how people find meaningful work.
                Connecting exceptional talent with innovative companies, one match at a time.
            </p>
        </section>

        <!-- Stats Grid -->
        <section class="py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @php
                    $stats = [
                        [
                            'value' => '10K+',
                            'label' => 'Active Jobs',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />',
                        ],
                        [
                            'value' => '50K+',
                            'label' => 'Users',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />',
                        ],
                        [
                            'value' => '5K+',
                            'label' => 'Companies',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />',
                        ],
                        [
                            'value' => '95%',
                            'label' => 'Success Rate',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />',
                        ],
                    ];
                @endphp

                @foreach ($stats as $stat)
                    <div class="bg-dark-surface border border-dark-border rounded-2xl p-6 text-center card-glow">
                        <div
                            class="w-12 h-12 mx-auto mb-4 rounded-xl bg-pink/10 flex items-center justify-center text-pink">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                {!! $stat['icon'] !!}
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-white mb-1">{{ $stat['value'] }}</div>
                        <div class="text-text-muted text-sm">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Mission Section -->
        <section class="py-16">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-pink font-semibold text-sm uppercase tracking-wider">Our Mission</span>
                    <h2 class="text-4xl font-bold text-white mt-4 mb-6">Making job search delightful and efficient</h2>
                    <p class="text-text-secondary text-lg leading-relaxed mb-6">
                        We believe finding the right job shouldn't feel like a job itself.
                        That's why we've built a platform that puts people first, using smart technology to surface the
                        most relevant opportunities.
                    </p>
                    <p class="text-text-secondary leading-relaxed">
                        From AI-powered matching to direct company connections, every feature we build is designed to
                        help you find work that truly matters.
                    </p>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-pink rounded-3xl blur-3xl opacity-20"></div>
                    <div class="relative bg-dark-surface border border-dark-border rounded-3xl p-8">
                        <div class="space-y-6">
                            @foreach (['Connect with purpose', 'Grow your career', 'Find your community'] as $value)
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-10 h-10 rounded-xl bg-gradient-pink flex items-center justify-center flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="text-white font-medium text-lg">{{ $value }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Design Philosophy -->
        <section id="ui" class="py-16">
            <div class="bg-dark-surface border border-dark-border rounded-3xl p-8 lg:p-12">
                <div class="text-center mb-12">
                    <span class="text-pink font-semibold text-sm uppercase tracking-wider">UI/UX</span>
                    <h2 class="text-3xl font-bold text-white mt-4">Design Philosophy</h2>
                    <p class="text-text-secondary mt-4 max-w-2xl mx-auto">
                        Clean, component-driven UI inspired by modern product design — responsive, accessible, and
                        crafted with subtle motion.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @php
                        $features = [
                            [
                                'title' => 'Dark Mode First',
                                'desc' =>
                                    'Designed for comfort and visual hierarchy using high-contrast pink accents on deep black backgrounds.',
                            ],
                            [
                                'title' => 'Fluid Typography',
                                'desc' =>
                                    'Using Inter font for a modern, geometric feel that scales perfectly across all devices.',
                            ],
                            [
                                'title' => 'Micro-interactions',
                                'desc' =>
                                    'Subtle hover states, glow effects, and smooth transitions add delight to every interaction.',
                            ],
                        ];
                    @endphp

                    @foreach ($features as $feature)
                        <div
                            class="p-6 bg-dark-elevated border border-dark-border rounded-2xl hover:border-pink transition-all card-glow">
                            <div
                                class="w-10 h-10 rounded-xl bg-pink/10 flex items-center justify-center text-pink mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </div>
                            <h3 class="font-bold text-white mb-2">{{ $feature['title'] }}</h3>
                            <p class="text-text-muted text-sm">{{ $feature['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-layout>
