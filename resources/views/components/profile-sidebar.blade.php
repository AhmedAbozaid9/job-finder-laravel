<div class="bg-dark-surface border border-dark-border rounded-2xl p-6 h-fit sticky top-28">
    <div class="text-center mb-6">
        <div class="w-24 h-24 rounded-full bg-gradient-pink p-1 mx-auto mb-4">
            <div
                class="w-full h-full rounded-full bg-black flex items-center justify-center text-3xl font-bold text-white uppercase">
                {{ substr(auth()->user()->name, 0, 1) }}
            </div>
        </div>
        <h2 class="text-xl font-bold text-white">{{ auth()->user()->name }}</h2>
        <p class="text-text-muted text-sm uppercase tracking-wider mt-1">{{ auth()->user()->role }} Account</p>
    </div>

    <nav class="space-y-2 border-t border-dark-border pt-6">
        <a href="{{ route('profile.edit') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('profile.edit') ? 'bg-pink/10 text-pink font-medium' : 'text-text-secondary hover:text-white hover:bg-white/5' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            Personal Info
        </a>

        @if (auth()->user()->isRecruiter())
            <a href="{{ route('profile.my-jobs') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('profile.my-jobs') ? 'bg-pink/10 text-pink font-medium' : 'text-text-secondary hover:text-white hover:bg-white/5' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                My Jobs
            </a>
        @else
            <a href="{{ route('profile.applications') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('profile.applications') ? 'bg-pink/10 text-pink font-medium' : 'text-text-secondary hover:text-white hover:bg-white/5' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Applied Jobs
            </a>

            <a href="{{ route('profile.saved') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('profile.saved') ? 'bg-pink/10 text-pink font-medium' : 'text-text-secondary hover:text-white hover:bg-white/5' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                Saved Jobs
            </a>
        @endif

        <div class="pt-4 mt-4 border-t border-dark-border">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:text-red-500 hover:bg-red-500/10 transition-all font-medium group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:text-red-500 transition-colors"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Log Out
                </button>
            </form>
        </div>
    </nav>
</div>
