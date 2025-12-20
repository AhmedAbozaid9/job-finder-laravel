@props(['job'])

<article class="job-card bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-150 overflow-hidden flex flex-col">
    <div class="p-4  flex flex-col">
        <header class="mb-4">
            <h3 class="text-lg font-semibold text-gray-900">{{ $job->title }}</h3>
            <p class="text-sm text-gray-600">{{ $job->company_name ?? $job->company ?? 'Company' }}</p>
        </header>

        <div class="text-sm text-gray-600 leading-relaxed mb-4 description line-clamp-2">{{ $job->description ?? '' }}</div>

        <div class="mt-auto pt-2 border-t border-gray-100 flex items-center justify-between gap-4">
            <div class="text-xs text-gray-500 gap-1 flex items-center text-center">
                <span>{{ $job->type ?? '' }}</span>
                <span>&middot;</span>
                <span>{{ $job->experience_level ?? '' }}</span>
                <span>&middot;</span>
                <span>{{ $job->location ?? '' }}</span>
            </div>

            <div class="flex items-center gap-2">
                <div class="text-sm text-gray-700">{{ isset($job->salary) ? '$' . number_format($job->salary) : '' }}</div>
                <a href="{{ route('jobs.show', $job) }}" class="inline-flex items-center px-3 py-1.5 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700">Apply</a>
            </div>
        </div>
    </div>
</article>
