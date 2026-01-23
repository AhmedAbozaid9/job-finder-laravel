<x-layout title="My Posted Jobs">
    <div class="max-w-7xl mx-auto pb-12">
        <h1 class="text-3xl font-bold text-white mb-8 border-b border-dark-border pb-4">Recruiter Dashboard</h1>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <x-profile-sidebar />
            </div>

            <!-- Content -->
            <div class="lg:col-span-3 space-y-6">
                <!-- Header -->
                <div class="bg-dark-surface border border-dark-border rounded-2xl p-6 md:p-8 animate-slide-up"
                    style="animation-delay: 100ms;">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-bold text-white flex items-center gap-3">
                            <span class="p-2 rounded-lg bg-pink/10 text-pink">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            My Posted Jobs
                        </h2>
                        <a href="{{ route('jobs.create') }}"
                            class="px-4 py-2 bg-gradient-pink text-black text-sm font-bold rounded-lg hover:scale-[1.02] transition-transform glow-pink-sm">
                            Post New Job
                        </a>
                    </div>

                    @if ($jobs->count() > 0)
                        <div class="space-y-4">
                            @foreach ($jobs as $job)
                                <div
                                    class="block p-4 rounded-xl bg-dark-elevated border border-dark-border hover:border-pink/30 hover:shadow-lg hover:shadow-pink/5 transition-all group">
                                    <div
                                        class="flex flex-col md:flex-row gap-4 items-start md:items-center justify-between">
                                        <div>
                                            <h3
                                                class="font-bold text-white group-hover:text-pink transition-colors text-lg">
                                                {{ $job->title }}</h3>
                                            <div class="flex flex-wrap items-center gap-2 text-sm text-text-muted mt-1">
                                                <span>{{ $job->location }}</span>
                                                <span>•</span>
                                                <span>{{ $job->type }}</span>
                                                <span>•</span>
                                                <span class="text-white">Posted
                                                    {{ $job->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-3">
                                            <div
                                                class="px-4 py-2 bg-white/5 rounded-lg border border-white/10 text-sm font-medium text-white">
                                                {{ $job->applicants_count }} Candidates
                                            </div>

                                            <a href="{{ route('profile.candidates', $job) }}"
                                                class="px-4 py-2 bg-pink/10 hover:bg-pink/20 text-pink text-sm font-medium rounded-lg border border-pink/20 transition-all flex items-center gap-2">
                                                View Candidates
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-6">
                            {{ $jobs->links('vendor.pagination.tailwind') }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <div
                                class="w-16 h-16 bg-dark-elevated rounded-full flex items-center justify-center mx-auto mb-4 text-text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-white mb-2">No Jobs Posted</h3>
                            <p class="text-text-muted mb-6">You haven't posted any jobs yet.</p>
                            <a href="{{ route('jobs.create') }}"
                                class="px-6 py-2.5 bg-gradient-pink text-black font-bold rounded-xl hover:scale-[1.02] transition-transform glow-pink-sm">
                                Post Your First Job
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
