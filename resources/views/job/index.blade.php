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
            <form action="{{ route('jobs.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-12 gap-4">
                <div class="md:col-span-5 relative group">
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

                <div class="md:col-span-4 relative group">
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

                <div class="md:col-span-3">
                    <button type="submit"
                        class="w-full h-full bg-gradient-pink text-black font-bold rounded-xl py-3.5 hover:scale-[1.02] transition-all glow-pink-sm flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        Find Jobs
                    </button>
                </div>
            </form>

            <!-- Quick Filters -->
            <div class="flex flex-wrap gap-2 mt-4 pt-4 border-t border-dark-border">
                <span class="text-text-muted text-sm">Quick filters:</span>
                @foreach (['Remote', 'Full-time', 'Part-time', 'Contract'] as $filter)
                    <a href="{{ route('jobs.index', ['search' => $filter]) }}"
                        class="px-3 py-1 rounded-full text-xs font-medium {{ request('search') === $filter ? 'bg-pink text-black' : 'bg-dark-elevated text-text-secondary border border-dark-border hover:border-pink hover:text-pink' }} transition-all">
                        {{ $filter }}
                    </a>
                @endforeach
            </div>
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
