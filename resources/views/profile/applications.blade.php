<x-layout title="Applied Jobs">
    <div class="max-w-7xl mx-auto pb-12">
        <h1 class="text-3xl font-bold text-white mb-8 border-b border-dark-border pb-4">Profile Dashboard</h1>

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
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="p-2 rounded-lg bg-pink/10 text-pink">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </span>
                        Applied Jobs
                    </h2>

                    @if ($applications->count() > 0)
                        <div class="space-y-4">
                            @foreach ($applications as $job)
                                <div
                                    class="block p-4 rounded-xl bg-dark-elevated border border-dark-border hover:border-pink/30 hover:shadow-lg hover:shadow-pink/5 transition-all group">
                                    <div
                                        class="flex flex-col md:flex-row gap-4 items-start md:items-center justify-between">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="w-12 h-12 rounded-lg bg-white/5 flex items-center justify-center text-lg font-bold text-white border border-white/10">
                                                {{ strtoupper(substr($job->company ?? 'C', 0, 1)) }}
                                            </div>
                                            <div>
                                                <h3
                                                    class="font-bold text-white group-hover:text-pink transition-colors text-lg">
                                                    {{ $job->title }}</h3>
                                                <div
                                                    class="flex flex-wrap items-center gap-2 text-sm text-text-muted mt-1">
                                                    <span>{{ $job->company }}</span>
                                                    <span>•</span>
                                                    <span>{{ $job->location }}</span>
                                                    <span>•</span>
                                                    <span class="text-text-secondary">Applied
                                                        {{ $job->pivot->created_at->diffForHumans() }}</span>

                                                    @if ($job->pivot->status === 'accepted')
                                                        <span
                                                            class="px-2 py-0.5 rounded text-xs font-bold bg-green-500/10 text-green-500 border border-green-500/20">Accepted</span>
                                                    @elseif($job->pivot->status === 'rejected')
                                                        <span
                                                            class="px-2 py-0.5 rounded text-xs font-bold bg-red-500/10 text-red-500 border border-red-500/20">Rejected</span>
                                                    @else
                                                        <span
                                                            class="px-2 py-0.5 rounded text-xs font-bold bg-yellow-500/10 text-yellow-500 border border-yellow-500/20">Pending</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <a href="{{ route('jobs.show', $job) }}"
                                            class="shrink-0 px-4 py-2 bg-white/5 hover:bg-white/10 text-white text-sm font-medium rounded-lg border border-white/10 transition-all flex items-center gap-2">
                                            View Job
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-6">
                            {{ $applications->links('vendor.pagination.tailwind') }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <div
                                class="w-16 h-16 bg-dark-elevated rounded-full flex items-center justify-center mx-auto mb-4 text-text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-white mb-2">No Applications Yet</h3>
                            <p class="text-text-muted mb-6">You haven't applied to any jobs yet. Start browsing to find
                                your next opportunity!</p>
                            <a href="{{ route('jobs.index') }}"
                                class="px-6 py-2.5 bg-gradient-pink text-black font-bold rounded-xl hover:scale-[1.02] transition-transform glow-pink-sm">
                                Browse Jobs
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
