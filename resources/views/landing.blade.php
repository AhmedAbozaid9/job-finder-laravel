@props(['title' => config('app.name')])

<x-layout :title="$title">
    <div class="relative isolate pt-14">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                 <div class="mb-8 flex justify-center animate-fade-in">
                    <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-white/10 hover:ring-neon-pink/50 hover:text-neon-pink transition-all">
                        Announcing our new <a href="#" class="font-semibold text-neon-pink"><span class="absolute inset-0" aria-hidden="true"></span>Developer API &rarr;</a>
                    </div>
                </div>
                
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-7xl mb-6 animate-slide-up">
                    Find work that <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-neon-pink to-purple-400">matters to you.</span>
                </h1>
                
                <p class="mt-6 text-lg leading-8 text-gray-400 animate-slide-up" style="animation-delay: 100ms;">
                    The most exclusive job board for designers, developers, and creative professionals. 
                    Curated listings, higher salary transparency, and direct connections to founders.
                </p>
                
                <div class="mt-10 flex items-center justify-center gap-x-6 animate-slide-up" style="animation-delay: 200ms;">
                    <a href="{{ route('jobs.index') }}" class="rounded-full bg-neon-pink px-8 py-3.5 text-sm font-semibold text-black shadow-[0_0_20px_rgba(255,143,171,0.3)] hover:bg-white hover:text-black hover:shadow-[0_0_30px_rgba(255,255,255,0.4)] transition-all transform hover:scale-105">
                        Start Searching
                    </a>
                    <a href="#features" class="text-sm font-semibold leading-6 text-white hover:text-neon-pink transition-colors">
                        Learn more <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
            
            <!-- Hero Image / Visual -->
             <div class="mt-16 flow-root sm:mt-24 animate-slide-up" style="animation-delay: 300ms;">
                <div class="-m-2 rounded-xl bg-white/5 p-2 ring-1 ring-inset ring-white/10 lg:-m-4 lg:rounded-2xl lg:p-4 backdrop-blur-md">
                    <div class="bg-black/40 rounded-lg overflow-hidden border border-white/5 p-8 flex items-center justify-center min-h-[300px] sm:min-h-[400px]">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-700 mb-2">Modern Job Dashboard</h3>
                            <p class="text-gray-600">Preview of the dashboard interface would go here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Stats / Social Proof -->
    <div class="py-12 sm:py-24 border-y border-white/5 bg-white/[0.02]">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg font-semibold leading-8 text-gray-500 mb-8">Trusted by the world's most innovative teams</h2>
            <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5 animate-pulse">
                <div class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 text-gray-500 font-bold text-2xl text-center">ACME</div>
                <div class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 text-gray-500 font-bold text-2xl text-center">Tuple</div>
                <div class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 text-gray-500 font-bold text-2xl text-center">SavvyCal</div>
                <div class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 text-gray-500 font-bold text-2xl text-center">Reform</div>
                <div class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 text-gray-500 font-bold text-2xl text-center">Orbit</div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24 sm:py-32" id="features">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-neon-pink">Deploy faster</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Everything you need to find your dream job</p>
            <p class="mt-6 text-lg leading-8 text-gray-400">
                We've stripped away the clutter. No ads, no spam, just high-quality listings from verified companies.
            </p>
        </div>
        
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                @foreach ([
                    ['title' => 'Curated Listings', 'desc' => 'Every job is hand-picked by our team to ensure quality and relevance.'],
                    ['title' => 'Salary Transparency', 'desc' => 'We require salary ranges on all listings so you don\'t waste your time.'],
                    ['title' => 'Direct access', 'desc' => 'Apply directly to the hiring manager or founder, skipping the ATS black hole.'],
                    ['title' => 'Advanced Filtering', 'desc' => 'Filter by tech stack, remote culture, funding stage, and more.'],
                ] as $feature)
                    <div class="relative pl-16 group">
                        <dt class="text-base font-semibold leading-7 text-white group-hover:text-neon-pink transition-colors">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-neon-pink/10 group-hover:bg-neon-pink group-hover:text-black transition-all duration-300">
                                <svg class="h-6 w-6 text-neon-pink group-hover:text-black transition-colors" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                </svg>
                            </div>
                            {{ $feature['title'] }}
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-400">{{ $feature['desc'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</x-layout>