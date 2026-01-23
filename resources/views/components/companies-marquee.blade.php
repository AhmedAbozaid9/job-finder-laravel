<div class="py-12 sm:py-24 border-y border-white/5 bg-white/[0.02] overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 mb-8">
        <h2 class="text-center text-lg font-semibold leading-8 text-white/60">Trusted by the world's most innovative
            teams</h2>
    </div>

    <div class="relative w-full overflow-hidden mask-gradient-x">
        <div class="flex whitespace-nowrap animate-marquee">
            {{-- Set 1 --}}
            <div class="flex items-center gap-16 px-8 py-4">
                @foreach (['ACME', 'Tuple', 'SavvyCal', 'Reform', 'Orbit', 'Vertex', 'Nebula', 'Echo', 'Cyberdyne', 'Stark', 'Wayne', 'Umbrella', 'Massive', 'Hooli', 'Initech'] as $company)
                    <div
                        class="text-2xl font-bold text-white/40 hover:text-pink transition-colors cursor-default select-none">
                        {{ $company }}
                    </div>
                @endforeach
            </div>

            {{-- Set 2 (Duplicate for seamless loop) --}}
            <div class="flex items-center gap-16 px-8 py-4">
                @foreach (['ACME', 'Tuple', 'SavvyCal', 'Reform', 'Orbit', 'Vertex', 'Nebula', 'Echo', 'Cyberdyne', 'Stark', 'Wayne', 'Umbrella', 'Massive', 'Hooli', 'Initech'] as $company)
                    <div
                        class="text-2xl font-bold text-white/40 hover:text-pink transition-colors cursor-default select-none">
                        {{ $company }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    .mask-gradient-x {
        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }
</style>
