@props(['job'])

<a href="{{ route('jobs.show', $job) }}" class="block group h-full">
    <article class="relative h-full bg-dark-surface border border-dark-border rounded-2xl p-6 hover:border-pink hover:shadow-[0_0_40px_rgba(255,107,157,0.15)] transition-all duration-300 flex flex-col group-hover:-translate-y-1 overflow-hidden">
        <!-- Hover Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-pink/5 to-purple/5 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
        
        <div class="relative">
            <!-- Header -->
            <div class="flex items-start gap-4 mb-4">
                <!-- Company Avatar -->
                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-dark-elevated border border-dark-border flex items-center justify-center text-lg font-bold text-pink group-hover:bg-pink/10 group-hover:border-pink/30 transition-all">
                    {{ strtoupper(substr($job->company ?? 'C', 0, 1)) }}
                </div>
                
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-text-muted mb-1">{{ $job->company ?? 'Company' }}</p>
                    <h3 class="text-lg font-bold text-white group-hover:text-pink transition-colors line-clamp-1">
                        {{ $job->title }}
                    </h3>
                </div>

                @if (isset($job->salary) && $job->salary)
                    <span class="flex-shrink-0 px-3 py-1.5 rounded-full text-xs font-bold bg-pink/10 text-pink border border-pink/20">
                        ${{ number_format($job->salary) }}
                    </span>
                @endif
            </div>

            <!-- Description -->
            <div class="mb-5">
                <p class="text-sm text-text-secondary leading-relaxed line-clamp-2">
                    {{ $job->description ?? '' }}
                </p>
            </div>

            <!-- Tags -->
            <div class="flex items-center gap-2 flex-wrap mt-auto">
                @if (!empty($job->type))
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium bg-pink/10 text-pink border border-pink/20">
                        {{ $job->type }}
                    </span>
                @endif

                @if (!empty($job->experience_level))
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium bg-purple/10 text-purple border border-purple/20">
                        {{ $job->experience_level }}
                    </span>
                @endif

                @if (!empty($job->location))
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium bg-dark-elevated text-text-secondary border border-dark-border">
                        {{ $job->location }}
                    </span>
                @endif
            </div>
        </div>

        <!-- Hover Action -->
        <div class="absolute bottom-5 right-5 opacity-0 transform translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
            <div class="flex items-center gap-2 text-pink text-sm font-medium">
                View Details
                <div class="w-8 h-8 rounded-full bg-gradient-pink text-black flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </article>
</a>
