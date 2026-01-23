@props(['title' => config('app.name')])

<x-layout :title="$title">
    <div class="relative isolate pt-14">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <div class="mb-8 flex justify-center animate-fade-in">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-white/10 hover:ring-neon-pink/50 hover:text-neon-pink transition-all">
                        Announcing our new <a href="#" class="font-semibold text-neon-pink"><span
                                class="absolute inset-0" aria-hidden="true"></span>Developer API &rarr;</a>
                    </div>
                </div>

                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-7xl mb-6 animate-slide-up">
                    Find work that <br>
                    <span class="text-pink">Matters to you.</span>
                </h1>

                <p class="mt-6 text-lg leading-8 text-gray-400 animate-slide-up" style="animation-delay: 100ms;">
                    The most exclusive job board for designers, developers, and creative professionals.
                    Curated listings, higher salary transparency, and direct connections to founders.
                </p>

                <div class="mt-10 flex items-center justify-center gap-x-6 animate-slide-up"
                    style="animation-delay: 200ms;">
                    <a href="{{ route('jobs.index') }}"
                        class="rounded-full bg-gradient-pink px-8 py-3.5 text-sm font-bold text-black shadow-[0_0_20px_rgba(255,107,157,0.3)] hover:scale-105 hover:shadow-[0_0_30px_rgba(255,107,157,0.5)] transition-all">
                        Start Searching
                    </a>
                    <a href="#features"
                        class="text-sm font-semibold leading-6 text-white hover:text-pink transition-colors">
                        Learn more <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>

            <!-- Hero Image / Visual -->
            <div class="mt-16 flow-root sm:mt-24 animate-slide-up" style="animation-delay: 300ms;">
                <div
                    class="-m-2 rounded-xl bg-white/5 p-2 ring-1 ring-inset ring-white/10 lg:-m-4 lg:rounded-2xl lg:p-4 backdrop-blur-md">
                    <div
                        class="bg-dark-surface rounded-lg overflow-hidden border border-dark-border p-6 shadow-2xl relative">
                        <!-- Dashboard Header -->
                        <div class="flex items-center justify-between mb-8 border-b border-dark-border pb-4">
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-8 rounded-full bg-pink/20"></div>
                                <div class="h-2 w-24 bg-dark-elevated rounded"></div>
                            </div>
                            <div class="flex gap-2">
                                <div class="w-20 h-8 rounded-lg bg-dark-elevated"></div>
                                <div
                                    class="w-8 h-8 rounded-lg bg-pink flex items-center justify-center text-black font-bold">
                                    +</div>
                            </div>
                        </div>

                        <!-- Dashboard Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Sidebar -->
                            <div class="hidden md:block space-y-3">
                                <div class="h-10 w-full bg-pink/10 border-l-2 border-pink rounded-r-lg"></div>
                                <div class="h-10 w-full bg-transparent"></div>
                                <div class="h-10 w-full bg-transparent"></div>
                                <div class="h-10 w-full bg-transparent"></div>
                            </div>

                            <!-- Main Content -->
                            <div class="md:col-span-2 space-y-4">
                                <!-- Card 1 -->
                                <div
                                    class="p-4 rounded-xl bg-dark-elevated border border-dark-border flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-lg bg-purple/20"></div>
                                    <div class="flex-1 space-y-2">
                                        <div class="h-3 w-1/3 bg-white/10 rounded"></div>
                                        <div class="h-2 w-1/4 bg-white/5 rounded"></div>
                                    </div>
                                    <div class="px-3 py-1 rounded-full bg-pink/10 text-pink text-xs">New</div>
                                </div>
                                <!-- Card 2 -->
                                <div
                                    class="p-4 rounded-xl bg-dark-elevated border border-dark-border flex items-center gap-4 opacity-75">
                                    <div class="w-12 h-12 rounded-lg bg-blue-500/20"></div>
                                    <div class="flex-1 space-y-2">
                                        <div class="h-3 w-1/3 bg-white/10 rounded"></div>
                                        <div class="h-2 w-1/4 bg-white/5 rounded"></div>
                                    </div>
                                </div>
                                <!-- Card 3 -->
                                <div
                                    class="p-4 rounded-xl bg-dark-elevated border border-dark-border flex items-center gap-4 opacity-50">
                                    <div class="w-12 h-12 rounded-lg bg-green-500/20"></div>
                                    <div class="flex-1 space-y-2">
                                        <div class="h-3 w-1/3 bg-white/10 rounded"></div>
                                        <div class="h-2 w-1/4 bg-white/5 rounded"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats / Social Proof -->
    <div class="py-12 sm:py-24 border-y border-white/5 bg-white/[0.02]">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg font-semibold leading-8 text-gray-500 mb-8">Trusted by the world's most
                innovative teams</h2>
            <div
                class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5 animate-[fadeIn_1s_ease-out]">
                <div
                    class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 text-white font-bold text-2xl text-center opacity-70 hover:opacity-100 hover:text-pink transition-all cursor-default">
                    ACME</div>
                <div
                    class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 text-white font-bold text-2xl text-center opacity-70 hover:opacity-100 hover:text-purple transition-all cursor-default">
                    Tuple</div>
                <div
                    class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 text-white font-bold text-2xl text-center opacity-70 hover:opacity-100 hover:text-blue-400 transition-all cursor-default">
                    SavvyCal</div>
                <div
                    class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 text-white font-bold text-2xl text-center opacity-70 hover:opacity-100 hover:text-green-400 transition-all cursor-default">
                    Reform</div>
                <div
                    class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 text-white font-bold text-2xl text-center opacity-70 hover:opacity-100 hover:text-yellow-400 transition-all cursor-default">
                    Orbit</div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24 sm:py-32" id="features">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-neon-pink">Deploy faster</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Everything you need to find your
                dream job</p>
            <p class="mt-6 text-lg leading-8 text-gray-400">
                We've stripped away the clutter. No ads, no spam, just high-quality listings from verified companies.
            </p>
        </div>

        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-8">
                @foreach ([['title' => 'Curated Listings', 'desc' => 'Every job is hand-picked by our team to ensure quality and relevance.'], ['title' => 'Salary Transparency', 'desc' => 'We require salary ranges on all listings so you don\'t waste your time.'], ['title' => 'Direct access', 'desc' => 'Apply directly to the hiring manager or founder, skipping the ATS black hole.'], ['title' => 'Advanced Filtering', 'desc' => 'Filter by tech stack, remote culture, funding stage, and more.']] as $feature)
                    <div
                        class="bg-dark-surface border border-dark-border p-8 rounded-2xl hover:border-pink group transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_0_30px_rgba(255,107,157,0.15)] relative overflow-hidden">
                        <!-- Gradient Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-pink/5 to-purple/5 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                        </div>

                        <dt
                            class="text-xl font-bold text-white mb-3 group-hover:text-pink transition-colors relative z-10">
                            {{ $feature['title'] }}
                        </dt>
                        <dd class="text-base leading-7 text-text-secondary relative z-10">{{ $feature['desc'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</x-layout>
