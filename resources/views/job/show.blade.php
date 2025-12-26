@props(['job'])

<x-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white/60 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden">
            <header class="px-6 py-6 sm:px-10 sm:py-8 border-b border-slate-100">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    <div class="flex-1">
                        <div>
                            <a href="{{ route('jobs.index') }}"
                                class="text-sm text-indigo-600 hover:underline inline-flex items-center gap-2 mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M9.707 14.707a1 1 0 01-1.414 0L3.586 10l4.707-4.707a1 1 0 111.414 1.414L6.414 10l3.293 3.293a1 1 0 010 1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                Back to listings
                            </a>

                            <h1 class="mt-1 text-2xl sm:text-3xl font-extrabold text-slate-900 leading-tight">
                                {{ $job->title }}</h1>
                            <p class="text-sm text-slate-600 mt-1">
                                {{ $job->company_name ?? ($job->company ?? 'Company') }} ·
                                <span>{{ $job->location ?? 'Remote' }}</span>
                            </p>

                            <div class="mt-3 flex items-center gap-2 flex-wrap">
                                @if (!empty($job->type))
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700 ring-1 ring-indigo-100">{{ ucfirst($job->type) }}</span>
                                @endif

                                @if (!empty($job->experience_level))
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-50 text-amber-700 ring-1 ring-amber-100">{{ ucfirst($job->experience_level) }}</span>
                                @endif

                                @if (!empty($job->category))
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-slate-50 text-slate-700 ring-1 ring-slate-100">{{ $job->category }}</span>
                                @endif

                                <span class="text-xs text-gray-500">Posted
                                    {{ optional($job->created_at)->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex-shrink-0 flex items-center gap-3">
                        @if (isset($job->salary) && $job->salary)
                            <div class="text-right hidden sm:block">
                                <div class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                                    ${{ number_format($job->salary) }}</div>
                                <div class="text-xs text-slate-500">Estimated salary</div>
                            </div>
                        @endif

                        <div class="flex items-center gap-2">
                            <button type="button" data-job-id="{{ $job->id }}" aria-label="Apply for job"
                                class="apply-btn inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-indigo-600 to-indigo-500 text-white rounded-lg shadow-lg hover:from-indigo-700 hover:to-indigo-600">
                                <span class="text-sm font-semibold">Apply</span>
                            </button>

                            <button type="button" data-job-id="{{ $job->id }}" aria-pressed="false"
                                class="save-btn inline-flex items-center gap-2 px-3 py-2 bg-white border border-slate-200 rounded-lg shadow-sm hover:bg-slate-50 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 saved-icon" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M5 3v16l7-5 7 5V3z" />
                                </svg>
                                <span class="save-text">Save</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <div class="p-6 sm:p-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                <main class="lg:col-span-2 prose max-w-none text-slate-800">
                    {!! nl2br(e($job->description)) !!}
                </main>

                <aside class="space-y-5">
                    <!-- removed 'How to apply' email block; application flow will be implemented later -->

                    <div class="p-5 bg-white rounded-xl shadow-md border border-slate-50">
                        <h4 class="text-sm font-semibold text-slate-700">Quick Info</h4>
                        <ul class="mt-3 text-sm text-slate-600 space-y-2">
                            <li><strong class="text-slate-800">Type:</strong> {{ $job->type ?? '-' }}</li>
                            <li><strong class="text-slate-800">Experience:</strong> {{ $job->experience_level ?? '-' }}
                            </li>
                            <li><strong class="text-slate-800">Category:</strong> {{ $job->category ?? '-' }}</li>
                            <li><strong class="text-slate-800">Salary:</strong>
                                {{ isset($job->salary) && $job->salary ? '$' . number_format($job->salary) : '—' }}
                            </li>
                        </ul>
                    </div>

                    <div class="p-5 bg-white rounded-xl shadow-md border border-slate-50">
                        <h4 class="text-sm font-semibold text-slate-700">Company</h4>
                        <div class="mt-3 flex items-center gap-3">
                            <div
                                class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 overflow-hidden">
                                @if (!empty($job->company_logo))
                                    <img src="{{ $job->company_logo }}" alt="{{ $job->company_name }} logo"
                                        class="h-full w-full object-cover">
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M4 22h16V6H4v16zM8 8h2v2H8V8zm0 4h2v2H8v-2zm4-4h2v2h-2V8zm0 4h2v2h-2v-2z" />
                                    </svg>
                                @endif
                            </div>
                            <div class="text-sm text-slate-700">{{ $job->company_name ?? ($job->company ?? '—') }}
                            </div>
                        </div>

                        <div class="mt-3 text-sm text-slate-600 space-y-1">
                            <div><strong class="text-slate-800">Location:</strong> {{ $job->location ?? '—' }}</div>
                            <div><strong class="text-slate-800">Status:</strong> {{ ucfirst($job->status ?? 'open') }}
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <script>
        (function() {
            const btn = document.querySelector('.save-btn');
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
                btn.setAttribute('aria-pressed', isSaved ? 'true' : 'false');
                textEl.textContent = isSaved ? 'Saved' : 'Save';
                if (isSaved) {
                    btn.classList.add('bg-emerald-50');
                    btn.classList.remove('bg-white');
                } else {
                    btn.classList.remove('bg-emerald-50');
                    btn.classList.add('bg-white');
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
