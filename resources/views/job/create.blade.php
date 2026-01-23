@props(['title' => 'Post a Job'])

<x-layout :title="$title">
    <div class="relative isolate pt-14">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl">
                <div class="mb-10 text-center animate-fade-in">
                    <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl mb-4">Post a new Job</h1>
                    <p class="text-lg text-text-muted">Find the best talent for your team.</p>
                </div>

                <div class="bg-dark-surface border border-dark-border rounded-2xl p-8 shadow-xl animate-slide-up">
                    <form action="{{ route('jobs.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-text-secondary mb-2">Job
                                Title</label>
                            <input type="text" name="title" id="title" required value="{{ old('title') }}"
                                class="block w-full rounded-xl bg-dark-elevated border border-dark-border px-4 py-3 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                                placeholder="e.g. Senior Frontend Engineer">
                            @error('title')
                                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Company Name -->
                        <div>
                            <label for="company_name" class="block text-sm font-medium text-text-secondary mb-2">Company
                                Name</label>
                            <input type="text" name="company_name" id="company_name" required
                                value="{{ old('company_name') }}"
                                class="block w-full rounded-xl bg-dark-elevated border border-dark-border px-4 py-3 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                                placeholder="Your Company">
                            @error('company_name')
                                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2">
                            <!-- Salary -->
                            <div>
                                <label for="salary" class="block text-sm font-medium text-text-secondary mb-2">Salary
                                    ($)</label>
                                <input type="number" name="salary" id="salary" required min="0"
                                    value="{{ old('salary') }}"
                                    class="block w-full rounded-xl bg-dark-elevated border border-dark-border px-4 py-3 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                                    placeholder="e.g. 120000">
                                @error('salary')
                                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Location -->
                            <div>
                                <label for="location"
                                    class="block text-sm font-medium text-text-secondary mb-2">Location</label>
                                <input type="text" name="location" id="location" required
                                    value="{{ old('location') }}"
                                    class="block w-full rounded-xl bg-dark-elevated border border-dark-border px-4 py-3 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                                    placeholder="e.g. Remote, NY">
                                @error('location')
                                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Type -->
                            <div>
                                <label for="type" class="block text-sm font-medium text-text-secondary mb-2">Job
                                    Type</label>
                                <select name="type" id="type" required
                                    class="block w-full rounded-xl bg-dark-elevated border border-dark-border px-4 py-3 text-white focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all">
                                    <option value="">Select Type</option>
                                    @foreach (App\Models\Job::$types as $type)
                                        <option value="{{ $type }}"
                                            {{ old('type') == $type ? 'selected' : '' }}>
                                            {{ ucfirst(str_replace('-', ' ', $type)) }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('type')
                                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Experience Level -->
                            <div>
                                <label for="experience_level"
                                    class="block text-sm font-medium text-text-secondary mb-2">Experience Level</label>
                                <select name="experience_level" id="experience_level" required
                                    class="block w-full rounded-xl bg-dark-elevated border border-dark-border px-4 py-3 text-white focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all">
                                    <option value="">Select Level</option>
                                    @foreach (App\Models\Job::$experience_levels as $level)
                                        <option value="{{ $level }}"
                                            {{ old('experience_level') == $level ? 'selected' : '' }}>
                                            {{ ucfirst($level) }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('experience_level')
                                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="category"
                                class="block text-sm font-medium text-text-secondary mb-2">Category</label>
                            <select name="category" id="category" required
                                class="block w-full rounded-xl bg-dark-elevated border border-dark-border px-4 py-3 text-white focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all">
                                <option value="">Select Category</option>
                                @foreach (App\Models\Job::$categories as $category)
                                    <option value="{{ $category }}"
                                        {{ old('category') == $category ? 'selected' : '' }}>
                                        {{ $category }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>


                        <!-- Description -->
                        <div>
                            <label for="description"
                                class="block text-sm font-medium text-text-secondary mb-2">Description</label>
                            <textarea name="description" id="description" rows="5" required
                                class="block w-full rounded-xl bg-dark-elevated border border-dark-border px-4 py-3 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                                placeholder="Describe the role responsibilities and requirements...">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Requirements -->
                        <div>
                            <label for="requirements"
                                class="block text-sm font-medium text-text-secondary mb-2">Requirements</label>
                            <p class="text-xs text-text-muted mb-2">Enter each requirement on a new line.</p>
                            <textarea name="requirements" id="requirements" rows="5"
                                class="block w-full rounded-xl bg-dark-elevated border border-dark-border px-4 py-3 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all"
                                placeholder="- 3+ years experience with Laravel&#10;- Knowledge of AWS&#10;- Strong communication skills">{{ old('requirements') }}</textarea>
                            @error('requirements')
                                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="pt-4">
                            <button type="submit"
                                class="w-full rounded-full bg-gradient-pink px-8 py-3.5 text-sm font-bold text-black shadow-[0_0_20px_rgba(255,107,157,0.3)] hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(255,107,157,0.5)] transition-all">
                                Post Job
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
