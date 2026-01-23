<x-layout title="Browse Jobs">
    <div class="mb-12 animate-fade-in">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-4xl font-bold text-white mb-2">Browse Jobs</h1>
                <p class="text-text-secondary">Find your next opportunity from thousands of listings</p>
            </div>
            <div class="flex items-center gap-2 text-sm text-text-muted">
                <span class="w-2 h-2 rounded-full bg-pink animate-pulse"></span>
                <span><strong class="text-white">{{ $jobs->total() ?? count($jobs) }}</strong> jobs available</span>
            </div>
        </div>

        <!-- Search & Filter Bar -->
        <div
            class="bg-dark-surface border border-dark-border rounded-2xl p-6 shadow-lg backdrop-blur-md sticky top-24 z-30">
            <form action="{{ route('jobs.index') }}" method="GET">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                    <!-- Search Input -->
                    <div class="md:col-span-12 lg:col-span-5 relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-text-muted group-focus-within:text-pink transition-colors"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Search by title, skill, or company..."
                            class="w-full bg-dark-elevated text-white rounded-xl py-3.5 pl-12 pr-4 border border-dark-border focus:border-pink focus:ring-2 focus:ring-pink/20 placeholder-text-muted transition-all">
                    </div>

                    <!-- Location Input -->
                    <div class="md:col-span-12 lg:col-span-4 relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-text-muted group-focus-within:text-pink transition-colors"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" name="location" value="{{ request('location') }}"
                            placeholder="City, country, or remote"
                            class="w-full bg-dark-elevated text-white rounded-xl py-3.5 pl-12 pr-4 border border-dark-border focus:border-pink focus:ring-2 focus:ring-pink/20 placeholder-text-muted transition-all">
                    </div>

                    <!-- Actions -->
                    <div class="md:col-span-12 lg:col-span-3 flex gap-2">
                        <button type="submit"
                            class="flex-1 bg-gradient-pink text-black font-bold rounded-xl py-3.5 hover:scale-[1.02] transition-all glow-pink-sm flex items-center justify-center gap-2">
                            Find Jobs
                        </button>
                    </div>
                </div>

                <!-- Expanded Filters -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4 pt-4 border-t border-dark-border">

                    <!-- Job Type -->
                    <div>
                        <label class="block text-xs font-medium text-text-muted mb-1.5">Job Type</label>
                        <select name="type"
                            class="w-full bg-dark-elevated text-white rounded-lg py-2.5 px-3 border border-dark-border focus:border-pink focus:ring-2 focus:ring-pink/20 text-sm transition-all">
                            <option value="">Any Type</option>
                            @foreach (App\Models\Job::$types as $type)
                                <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>
                                    {{ ucfirst(str_replace('-', ' ', $type)) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Experience Level -->
                    <div>
                        <label class="block text-xs font-medium text-text-muted mb-1.5">Experience</label>
                        <select name="experience_level"
                            class="w-full bg-dark-elevated text-white rounded-lg py-2.5 px-3 border border-dark-border focus:border-pink focus:ring-2 focus:ring-pink/20 text-sm transition-all">
                            <option value="">Any Level</option>
                            @foreach (App\Models\Job::$experience_levels as $level)
                                <option value="{{ $level }}"
                                    {{ request('experience_level') == $level ? 'selected' : '' }}>
                                    {{ ucfirst($level) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-xs font-medium text-text-muted mb-1.5">Category</label>
                        <select name="category"
                            class="w-full bg-dark-elevated text-white rounded-lg py-2.5 px-3 border border-dark-border focus:border-pink focus:ring-2 focus:ring-pink/20 text-sm transition-all">
                            <option value="">Any Category</option>
                            @foreach (App\Models\Job::$categories as $category)
                                <option value="{{ $category }}"
                                    {{ request('category') == $category ? 'selected' : '' }}>
                                    {{ $category }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Min Salary -->
                    <div>
                        <label class="block text-xs font-medium text-text-muted mb-1.5">Min Salary ($)</label>
                        <input type="number" name="min_salary" value="{{ request('min_salary') }}"
                            placeholder="e.g. 50000"
                            class="w-full bg-dark-elevated text-white rounded-lg py-2.5 px-3 border border-dark-border focus:border-pink focus:ring-2 focus:ring-pink/20 text-sm transition-all">
                    </div>
                </div>
            </form>


        </div>
    </div>

    <!-- Results -->
    <section class="animate-slide-up" style="animation-delay: 100ms;">
        @if (count($jobs) > 0)
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($jobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        @else
            <div class="text-center py-20">
                <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-pink/10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">No jobs found</h3>
                <p class="text-text-muted mb-6">Try adjusting your search or filters</p>
                <a href="{{ route('jobs.index') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-pink text-black font-bold rounded-xl hover:scale-105 transition-all">
                    Clear Filters
                </a>
            </div>
        @endif

        @if (method_exists($jobs, 'links') && $jobs->hasPages())
            <div class="mt-12 flex justify-center">
                {{ $jobs->links() }}
            </div>
        @endif
    </section>
</x-layout>
