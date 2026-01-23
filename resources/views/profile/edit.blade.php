<x-layout title="Profile Settings">
    <div class="max-w-7xl mx-auto pb-12">
        <h1 class="text-3xl font-bold text-white mb-8 border-b border-dark-border pb-4">Profile Dashboard</h1>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <x-profile-sidebar />
            </div>

            <!-- Content -->
            <div class="lg:col-span-3 space-y-8">
                <!-- Profile Information -->
                <div class="bg-dark-surface border border-dark-border rounded-2xl p-6 md:p-8 animate-slide-up"
                    style="animation-delay: 100ms;">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="p-2 rounded-lg bg-pink/10 text-pink">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        Personal Information
                    </h2>

                    <form action="{{ route('profile.update') }}" method="POST" class="space-y-5">
                        @csrf
                        @method('PATCH')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-medium text-text-secondary mb-1">Full
                                    Name</label>
                                <input type="text" name="name" id="name"
                                    value="{{ old('name', $user->name) }}" required
                                    class="w-full bg-dark-elevated border border-dark-border rounded-xl px-4 py-3 text-white focus:outline-none focus:border-pink focus:ring-1 focus:ring-pink transition-all">
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-text-secondary mb-1">Email
                                    Address</label>
                                <input type="email" name="email" id="email"
                                    value="{{ old('email', $user->email) }}" required
                                    class="w-full bg-dark-elevated border border-dark-border rounded-xl px-4 py-3 text-white focus:outline-none focus:border-pink focus:ring-1 focus:ring-pink transition-all">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                class="px-6 py-2.5 bg-gradient-pink text-black font-bold rounded-xl hover:scale-[1.02] transition-transform glow-pink-sm">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Update Password -->
                <div class="bg-dark-surface border border-dark-border rounded-2xl p-6 md:p-8 animate-slide-up"
                    style="animation-delay: 200ms;">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="p-2 rounded-lg bg-pink/10 text-pink">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        Change Password
                    </h2>

                    <form action="{{ route('password.update') }}" method="POST" class="space-y-5">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                            <div>
                                <label for="current_password"
                                    class="block text-sm font-medium text-text-secondary mb-1">Current Password</label>
                                <input type="password" name="current_password" id="current_password" required
                                    class="w-full bg-dark-elevated border border-dark-border rounded-xl px-4 py-3 text-white focus:outline-none focus:border-pink focus:ring-1 focus:ring-pink transition-all">
                                @error('current_password')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-text-secondary mb-1">New
                                    Password</label>
                                <input type="password" name="password" id="password" required
                                    class="w-full bg-dark-elevated border border-dark-border rounded-xl px-4 py-3 text-white focus:outline-none focus:border-pink focus:ring-1 focus:ring-pink transition-all">
                                @error('password')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password_confirmation"
                                    class="block text-sm font-medium text-text-secondary mb-1">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" required
                                    class="w-full bg-dark-elevated border border-dark-border rounded-xl px-4 py-3 text-white focus:outline-none focus:border-pink focus:ring-1 focus:ring-pink transition-all">
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                class="px-6 py-2.5 bg-dark-elevated text-white font-bold border border-dark-border rounded-xl hover:bg-dark-border transition-colors">
                                Update Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
