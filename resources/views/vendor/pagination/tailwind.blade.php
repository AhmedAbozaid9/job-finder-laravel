@if ($paginator->hasPages())
    <div class="flex flex-col sm:flex-row items-center justify-between gap-3">
        @php
            $from = $paginator->firstItem();
            $to = $paginator->lastItem();
            $total = $paginator->total();
        @endphp

        @if ($total)
            <div class="text-sm text-slate-500">Showing {{ $from }}&ndash;{{ $to }} of
                {{ $total }} items</div>
        @else
            <div></div>
        @endif

        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center">
            <span class="relative z-0 inline-flex -space-x-px rounded-md shadow-sm">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                        <span
                            class="relative inline-flex items-center px-2 py-2 rounded-l-md bg-white text-indigo-300 cursor-default"
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
                        class="relative inline-flex items-center px-2 py-2 rounded-l-md bg-indigo-50 text-indigo-600 hover:bg-indigo-100 focus:z-20 focus:outline-none focus:ring-2 focus:ring-indigo-200"
                        aria-label="{{ __('pagination.previous') }}">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                @endif

                {{-- Pagination Elements: show first 2, ellipsis, last 2 (or all when small) --}}
                @php
                    $totalPages = $paginator->lastPage();
                    $currentPage = $paginator->currentPage();
                @endphp

                @php
                    // Build smart pages array:
                    // - If small number of pages, show all
                    // - Otherwise show current and next at the start, then ellipsis, then last two pages
                    // - When near start or end, fall back to sensible ranges
                    $pages = [];

                    if ($totalPages <= 6) {
                        for ($i = 1; $i <= $totalPages; $i++) {
                            $pages[] = $i;
                        }
                    } else {
                        if ($currentPage >= $totalPages - 1) {
                            // near the end: always show first two, ellipsis, then last two
                            $pages = [1, 2, '...', $totalPages - 1, $totalPages];
                        } else {
                            // middle/start: put current and next at the beginning
                            $first = $currentPage;
                            $second = min($totalPages, $currentPage + 1);
                            $pages = [$first, $second, '...', $totalPages - 1, $totalPages];
                        }
                    }

                    // Normalize pages: keep order, remove duplicates/out-of-range, avoid useless ellipses
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

                    // Remove leading/trailing ellipses
                    if (!empty($normalized) && $normalized[0] === '...') {
                        array_shift($normalized);
                    }
                    if (!empty($normalized) && end($normalized) === '...') {
                        array_pop($normalized);
                    }

                    // Remove ellipses that are redundant (adjacent numbers)
                    $final = [];
                    $len = count($normalized);
                    for ($i = 0; $i < $len; $i++) {
                        $item = $normalized[$i];
                        if ($item === '...') {
                            $prev = $final[count($final) - 1] ?? null;
                            $next = $normalized[$i + 1] ?? null;
                            if (is_int($prev) && is_int($next) && $prev + 1 >= $next) {
                                // consecutive or overlapping pages, skip ellipsis
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
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium bg-white text-indigo-500">{{ $page }}</span>
                    @else
                        @if ($page == $currentPage)
                            <span aria-current="page"
                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium bg-indigo-600 text-white">{{ $page }}</span>
                        @else
                            <a href="{{ $paginator->url($page) }}"
                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium bg-white text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-indigo-200">{{ $page }}</a>
                        @endif
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                        class="relative inline-flex items-center px-2 py-2 -ml-px rounded-r-md bg-indigo-50 text-indigo-600 hover:bg-indigo-100 focus:z-20 focus:outline-none focus:ring-2 focus:ring-indigo-200"
                        aria-label="{{ __('pagination.next') }}">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                        <span
                            class="relative inline-flex items-center px-2 py-2 -ml-px rounded-r-md bg-white text-indigo-300 cursor-default"
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
