<x-layout>
    <section class="relative bg-linear-to-b from-white to-indigo-50 py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900">Welcome to {{ config('app.name') }}</h1>
            <p class="mt-4 text-gray-600">Discover your next opportunity with our curated job listings for makers and
                creators.</p>

        </div>
    </section>
    <section class="mt-8">
        <div class="max-w-7xl mx-auto ">
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($jobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>

            @if (method_exists($jobs, 'links') && $jobs->hasPages())
                <div class="mt-6 flex justify-center">
                    {{ $jobs->links() }}
                </div>
            @endif
        </div>
    </section>
</x-layout>
