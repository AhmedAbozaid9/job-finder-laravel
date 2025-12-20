@props(['job'])

<article
    class="job-card bg-white rounded-lg shadow-sm hover:shadow-md transition transform hover:-translate-y-0.5 duration-150 overflow-hidden flex flex-col border border-transparent hover:border-gray-100">
    <div class="p-4 flex flex-col h-full">
        <header class="mb-3 flex items-start justify-between gap-3">
            <div class="flex-1">
                <h3 class="text-base sm:text-lg font-semibold text-slate-900">{{ $job->title }}</h3>
                <p class="text-sm text-slate-500 mt-1">{{ $job->company_name ?? ($job->company ?? 'Company') }}</p>
            </div>
            <div class="flex-shrink-0">
                <span
                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700 border border-indigo-100">View</span>
            </div>
        </header>

        <div class="text-sm text-slate-700 leading-relaxed mb-4 description line-clamp-2">{{ $job->description ?? '' }}
        </div>

        <div class="mt-auto pt-3 border-t border-gray-100 flex items-center justify-between gap-4">
            <div class="flex items-center gap-2 flex-wrap">
                @if (!empty($job->type))
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">{{ $job->type }}</span>
                @endif

                @if (!empty($job->experience_level))
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-50 text-amber-700 border border-amber-100">{{ $job->experience_level }}</span>
                @endif

                @if (!empty($job->location))
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-50 text-slate-700 border border-slate-100">{{ $job->location }}</span>
                @endif
            </div>

            <div class="flex items-center gap-3">
                @if (isset($job->salary) && $job->salary)
                    <div
                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-50 text-gray-800 border border-gray-100">
                        ${{ number_format($job->salary) }}</div>
                @endif

                <a href="{{ route('jobs.show', $job) }}"
                    class="inline-flex items-center px-3 py-1.5 bg-indigo-600 text-white text-sm rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-200">Apply</a>
            </div>
        </div>
    </div>
</article>
