@props(['job'])

<x-layout title="{{ $job->title }}">
    <div class="max-w-7xl mx-auto">
        <!-- Back Button -->
        <a href="{{ route('jobs.index') }}"
            class="inline-flex items-center gap-2 text-sm text-text-secondary hover:text-pink mb-8 transition-colors group">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 transform group-hover:-translate-x-1 transition-transform" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M9.707 14.707a1 1 0 01-1.414 0L3.586 10l4.707-4.707a1 1 0 111.414 1.414L6.414 10l3.293 3.293a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg>
            Back to Jobs
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6 animate-fade-in">
                <!-- Header Card -->
                <div class="bg-dark-surface border border-dark-border rounded-2xl p-8 relative overflow-hidden">
                    <!-- Gradient Accent -->
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-pink"></div>

                    <div class="flex items-start gap-6">
                        <!-- Company Logo -->
                        <div
                            class="flex-shrink-0 w-16 h-16 rounded-2xl bg-dark-elevated border border-dark-border flex items-center justify-center text-2xl font-bold text-pink">
                            {{ strtoupper(substr($job->company ?? 'C', 0, 1)) }}
                        </div>

                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-text-muted">{{ $job->company ?? 'Company' }}</span>
                                @if (optional($job->created_at)->isToday())
                                    <span
                                        class="px-2 py-0.5 bg-green-500/20 text-green-400 text-xs font-medium rounded-full">New</span>
                                @endif
                            </div>
                            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">{{ $job->title }}</h1>

                            <div class="flex flex-wrap items-center gap-3">
                                @if (!empty($job->type))
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-pink/10 border border-pink/20 rounded-lg text-pink text-sm font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        {{ $job->type }}
                                    </span>
                                @endif

                                @if (!empty($job->location))
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-dark-elevated border border-dark-border rounded-lg text-text-secondary text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        {{ $job->location }}
                                    </span>
                                @endif

                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-dark-elevated border border-dark-border rounded-lg text-text-muted text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Posted {{ optional($job->created_at)->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description Card -->
                <div class="bg-dark-surface border border-dark-border rounded-2xl p-8">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                        <span class="w-1 h-6 bg-gradient-pink rounded-full"></span>
                        Job Description
                    </h2>
                    <div class="prose prose-invert prose-lg max-w-none text-text-secondary leading-relaxed">
                        {!! nl2br(e($job->description)) !!}
                    </div>
                </div>

                <!-- Requirements Card (placeholder) -->
                <div class="bg-dark-surface border border-dark-border rounded-2xl p-8">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                        <span class="w-1 h-6 bg-gradient-pink rounded-full"></span>
                        Requirements
                    </h2>
                    <ul class="space-y-3">
                        @foreach (['3+ years of experience in related field', 'Strong communication skills', 'Ability to work in a fast-paced environment', 'Bachelor\'s degree or equivalent'] as $req)
                            <li class="flex items-start gap-3 text-text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink flex-shrink-0 mt-0.5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $req }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6 animate-slide-up" style="animation-delay: 200ms;">
                <!-- Apply Card -->
                <div class="bg-dark-surface border border-dark-border rounded-2xl p-6 sticky top-28">
                    <!-- Salary -->
                    <div class="text-center mb-6 pb-6 border-b border-dark-border">
                        <div class="text-sm text-text-muted uppercase tracking-wider mb-1">Salary</div>
                        <div class="text-3xl font-bold text-white">
                            {{ isset($job->salary) && $job->salary ? '$' . number_format($job->salary) : 'Competitive' }}
                        </div>
                        <div class="text-text-muted text-sm">per year</div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-3">
                        <button
                            class="w-full py-4 bg-gradient-pink text-black font-bold rounded-xl hover:scale-[1.02] transition-all glow-pink flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                            </svg>
                            Apply Now
                        </button>

                        <button id="save-job-btn" data-job-id="{{ $job->id }}"
                            class="w-full py-3 bg-dark-elevated text-text-secondary font-medium rounded-xl hover:bg-dark-border hover:text-white transition-all border border-dark-border flex items-center justify-center gap-2 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 saved-icon transition-colors"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <span class="save-text">Save for Later</span>
                        </button>
                    </div>

                    <!-- Job Details -->
                    <div class="mt-6 pt-6 border-t border-dark-border space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-text-muted text-sm">Job Type</span>
                            <span
                                class="font-medium text-white text-sm">{{ ucfirst($job->type ?? 'Full-time') }}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-text-muted text-sm">Experience</span>
                            <span
                                class="font-medium text-white text-sm">{{ ucfirst($job->experience_level ?? 'Mid-Level') }}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-text-muted text-sm">Location</span>
                            <span class="font-medium text-white text-sm">{{ $job->location ?? 'Remote' }}</span>
                        </div>
                    </div>
                </div>

                <!-- Share Card -->
                <div class="bg-dark-surface border border-dark-border rounded-2xl p-6">
                    <h3 class="font-semibold text-white mb-4">Share this job</h3>
                    <div class="flex gap-3">
                        @foreach (['twitter', 'linkedin', 'facebook'] as $social)
                            <button
                                class="flex-1 py-2.5 bg-dark-elevated border border-dark-border rounded-xl text-text-muted hover:text-pink hover:border-pink transition-all">
                                @if ($social === 'twitter')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto"
                                        viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M22 4.01c-.77.35-1.6.59-2.47.69a4.32 4.32 0 001.9-2.38 8.7 8.7 0 01-2.75 1.05 4.36 4.36 0 00-7.44 3.98A12.38 12.38 0 013 3.9a4.36 4.36 0 001.35 5.81c-.66-.02-1.28-.2-1.82-.5v.05a4.36 4.36 0 003.5 4.27c-.37.1-.76.15-1.16.15-.28 0-.55-.03-.82-.08a4.36 4.36 0 004.07 3.02A8.75 8.75 0 012 19.54 12.34 12.34 0 008.29 21c7.55 0 11.68-6.26 11.68-11.68v-.53A8.34 8.34 0 0022 4.01z" />
                                    </svg>
                                @elseif($social === 'linkedin')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto"
                                        viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto"
                                        viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z" />
                                    </svg>
                                @endif
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {
            const btn = document.getElementById('save-job-btn');
            if (!btn) return;

            const jobId = String(btn.dataset.jobId || '');
            const STORAGE_KEY = 'savedJobs:v1';
            const textEl = btn.querySelector('.save-text');
            const iconEl = btn.querySelector('.saved-icon');

            function getSaved() {
                try {
                    return JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
                } catch (e) {
                    return [];
                }
            }

            function setSaved(list) {
                localStorage.setItem(STORAGE_KEY, JSON.stringify(list));
            }

            function updateButton() {
                const saved = getSaved();
                const isSaved = saved.includes(jobId);

                textEl.textContent = isSaved ? 'Saved' : 'Save for Later';
                if (isSaved) {
                    iconEl.classList.add('text-pink', 'fill-current');
                    iconEl.classList.remove('text-text-muted');
                    btn.classList.add('border-pink/50', 'bg-pink/10');
                } else {
                    iconEl.classList.remove('text-pink', 'fill-current');
                    iconEl.classList.add('text-text-muted');
                    btn.classList.remove('border-pink/50', 'bg-pink/10');
                }
            }

            btn.addEventListener('click', function() {
                const saved = getSaved();
                const idx = saved.indexOf(jobId);
                if (idx === -1) saved.push(jobId);
                else saved.splice(idx, 1);
                setSaved(saved);
                updateButton();
            });

            updateButton();
        })();
    </script>
</x-layout>
