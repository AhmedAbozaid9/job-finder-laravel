@if ($paginator->hasPages())
    <div class="flex flex-col sm:flex-row items-center justify-between gap-3">
        {{-- Removed "Showing X to Y of Z results" text as requested --}}

        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center w-full">
            <span class="relative z-0 inline-flex -space-x-px rounded-xl shadow-sm">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                        <span
                            class="relative inline-flex items-center px-3 py-2 rounded-l-xl bg-dark-surface border border-dark-border text-text-muted cursor-default"
                            aria-hidden="true">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </span>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                        class="relative inline-flex items-center px-3 py-2 rounded-l-xl bg-dark-surface border border-dark-border text-text-secondary hover:text-pink hover:bg-white/5 transition-all focus:z-20 focus:outline-none focus:ring-2 focus:ring-pink/20"
                        aria-label="{{ __('pagination.previous') }}">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                @endif

                {{-- Pagination Elements --}}
                @php
                    $totalPages = $paginator->lastPage();
                    $currentPage = $paginator->currentPage();
                @endphp

                @php
                    $pages = [];
                    if ($totalPages <= 6) {
                        for ($i = 1; $i <= $totalPages; $i++) {
                            $pages[] = $i;
                        }
                    } else {
                        if ($currentPage >= $totalPages - 1) {
                            $pages = [1, 2, '...', $totalPages - 1, $totalPages];
                        } else {
                            $first = $currentPage;
                            $second = min($totalPages, $currentPage + 1);
                            $pages = [$first, $second, '...', $totalPages - 1, $totalPages];
                        }
                    }

                    $normalized = [];
                    foreach ($pages as $p) {
                        if (is_string($p)) {
                            if (empty($normalized) || end($normalized) === '...') {
                                continue;
                            }
                            $normalized[] = '...';
                        } else {
                            $p = (int) $p;
                            if ($p < 1 || $p > $totalPages) {
                                continue;
                            }
                            if (!in_array($p, $normalized, true)) {
                                $normalized[] = $p;
                            }
                        }
                    }
                    if (!empty($normalized) && $normalized[0] === '...') {
                        array_shift($normalized);
                    }
                    if (!empty($normalized) && end($normalized) === '...') {
                        array_pop($normalized);
                    }

                    $final = [];
                    $len = count($normalized);
                    for ($i = 0; $i < $len; $i++) {
                        $item = $normalized[$i];
                        if ($item === '...') {
                            $prev = $final[count($final) - 1] ?? null;
                            $next = $normalized[$i + 1] ?? null;
                            if (is_int($prev) && is_int($next) && $prev + 1 >= $next) {
                                continue;
                            }
                            $final[] = '...';
                        } else {
                            $final[] = $item;
                        }
                    }
                @endphp

                @foreach ($final as $page)
                    @if ($page === '...')
                        <span
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium bg-dark-surface border border-dark-border text-text-muted">{{ $page }}</span>
                    @else
                        @if ($page == $currentPage)
                            <span aria-current="page"
                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-bold bg-gradient-pink text-black border border-pink z-10">{{ $page }}</span>
                        @else
                            <a href="{{ $paginator->url($page) }}"
                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium bg-dark-surface border border-dark-border text-text-secondary hover:text-white hover:bg-white/5 transition-all focus:outline-none focus:ring-2 focus:ring-pink/20">{{ $page }}</a>
                        @endif
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                        class="relative inline-flex items-center px-3 py-2 -ml-px rounded-r-xl bg-dark-surface border border-dark-border text-text-secondary hover:text-pink hover:bg-white/5 transition-all focus:z-20 focus:outline-none focus:ring-2 focus:ring-pink/20"
                        aria-label="{{ __('pagination.next') }}">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                        <span
                            class="relative inline-flex items-center px-3 py-2 -ml-px rounded-r-xl bg-dark-surface border border-dark-border text-text-muted cursor-default"
                            aria-hidden="true">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </span>
                @endif
            </span>
        </nav>
    </div>
@endif
