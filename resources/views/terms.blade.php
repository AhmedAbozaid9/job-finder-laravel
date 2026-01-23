@props(['title' => config('app.name')])

<x-layout :title="$title">
    <section class="relative pt-32 pb-20 overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-20 left-0 w-[500px] h-[500px] bg-purple/10 blur-[120px] rounded-full pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-pink/10 blur-[100px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <!-- Header -->
            <div class="animate-[fadeIn_0.6s_ease-out] text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-purple/10 border border-purple/30 rounded-full text-purple text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Legal Agreement
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Terms of Service</h1>
                <p class="text-text-muted">Last updated: <span
                        class="text-purple font-medium">{{ date('F j, Y') }}</span></p>
            </div>

            <!-- Content Card -->
            <div
                class="bg-dark-surface border border-dark-border rounded-2xl p-8 md:p-12 animate-[slideUp_0.6s_ease-out]">
                <p class="text-lg text-text-secondary leading-relaxed mb-10">
                    These Terms govern your use of <span
                        class="text-white font-semibold">{{ config('app.name') }}</span>. By using the service you agree
                    to these terms.
                </p>

                <div class="space-y-10">
                    <!-- Section 1 -->
                    <div class="group">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-purple/10 border border-purple/30 rounded-xl flex items-center justify-center text-purple">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-white mb-3 group-hover:text-purple transition-colors">
                                    Use of Service</h2>
                                <p class="text-text-secondary leading-relaxed">You agree to use the site in compliance
                                    with applicable laws and not to abuse or interfere with the site's functionality or
                                    security features.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2 -->
                    <div class="group">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-pink/10 border border-pink/30 rounded-xl flex items-center justify-center text-pink">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-white mb-3 group-hover:text-pink transition-colors">
                                    Content</h2>
                                <p class="text-text-secondary leading-relaxed">Users are responsible for the content
                                    they post. We reserve the right to remove content that violates our policies, is
                                    harmful, or infringes on others' rights.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3 -->
                    <div class="group">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-purple/10 border border-purple/30 rounded-xl flex items-center justify-center text-purple">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-white mb-3 group-hover:text-purple transition-colors">
                                    Limitation of Liability</h2>
                                <p class="text-text-secondary leading-relaxed">{{ config('app.name') }} is provided "as
                                    is" and is not liable for indirect damages, data loss, or service interruptions. For
                                    full details, consult legal counsel.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 4 -->
                    <div class="group">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-pink/10 border border-pink/30 rounded-xl flex items-center justify-center text-pink">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-white mb-3 group-hover:text-pink transition-colors">
                                    Contact</h2>
                                <p class="text-text-secondary leading-relaxed">
                                    Questions about these terms? Please
                                    <a href="{{ route('contact') }}"
                                        class="text-pink hover:text-pink-light transition-colors underline decoration-pink/30 hover:decoration-pink/60">contact
                                        us</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Agreement Notice -->
                <div class="mt-10 p-6 bg-dark-elevated border border-dark-border rounded-xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-pink/10 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-text-secondary text-sm leading-relaxed">
                                By creating an account or using our services, you acknowledge that you have read,
                                understood, and agree to be bound by these Terms of Service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Links -->
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('privacy') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-dark-surface border border-dark-border text-text-secondary font-medium rounded-xl hover:border-purple hover:text-purple transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Privacy Policy
                </a>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-pink text-black font-bold rounded-xl glow-pink-sm hover:scale-105 transition-transform">
                    Contact Us
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</x-layout>
