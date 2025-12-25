@props(['job'])

<div class="job-card border rounded-lg p-4 hover:shadow-lg transition-shadow duration-300">
    <h2 class="text-xl font-semibold mb-2">{{ $job->title }}</h2>
    <p class="text-gray-600 mb-4">{{ $job->company }}</p>
    <p class="text-gray-800 mb-4">{{ Str::limit($job->description, 100) }}</p>
    <a href="{{ route('jobs.show', $job->id) }}" class="text-blue-500 hover:underline">View Details</a>
</div>
