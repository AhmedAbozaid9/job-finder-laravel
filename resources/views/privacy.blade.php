@props(['title' => config('app.name')])

<x-layout :title="$title">
    <section class="relative pt-32 pb-20 overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-20 right-0 w-[500px] h-[500px] bg-pink/10 blur-[120px] rounded-full pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-purple/10 blur-[100px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <!-- Header -->
            <div class="animate-[fadeIn_0.6s_ease-out] text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-pink/10 border border-pink/30 rounded-full text-pink text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Your Privacy Matters
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Privacy Policy</h1>
                <p class="text-text-muted">Last updated: <span class="text-pink font-medium">{{ date('F j, Y') }}</span>
                </p>
            </div>

            <!-- Content Card -->
            <div
                class="bg-dark-surface border border-dark-border rounded-2xl p-8 md:p-12 animate-[slideUp_0.6s_ease-out]">
                <p class="text-lg text-text-secondary leading-relaxed mb-10">
                    At <span class="text-white font-semibold">{{ config('app.name') }}</span>, we respect your privacy.
                    This page explains what information we collect, how we use it, and the choices you have.
                </p>

                <div class="space-y-10">
                    <!-- Section 1 -->
                    <div class="group">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-pink/10 border border-pink/30 rounded-xl flex items-center justify-center text-pink">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-white mb-3 group-hover:text-pink transition-colors">
                                    Information We Collect</h2>
                                <p class="text-text-secondary leading-relaxed">We may collect information you provide
                                    directly (for example, when creating an account or contacting us), usage
                                    information, and cookies to improve the site. This data is handled with the utmost
                                    security.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2 -->
                    <div class="group">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-purple/10 border border-purple/30 rounded-xl flex items-center justify-center text-purple">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-white mb-3 group-hover:text-purple transition-colors">
                                    How We Use Information</h2>
                                <p class="text-text-secondary leading-relaxed">We use data to operate and improve the
                                    service, communicate with you, and for security and fraud prevention. We do not use
                                    your data for unauthorized marketing purposes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3 -->
                    <div class="group">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-pink/10 border border-pink/30 rounded-xl flex items-center justify-center text-pink">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-white mb-3 group-hover:text-pink transition-colors">
                                    Third Parties</h2>
                                <p class="text-text-secondary leading-relaxed">We may share information with trusted
                                    service providers who perform services on our behalf (such as hosting or analytics).
                                    We never sell your personal data to third-party advertisers.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 4 -->
                    <div class="group">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-purple/10 border border-purple/30 rounded-xl flex items-center justify-center text-purple">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-white mb-3 group-hover:text-purple transition-colors">
                                    Your Choices</h2>
                                <p class="text-text-secondary leading-relaxed">You can contact us to access, update, or
                                    delete your personal information. You may also control cookies via your browser
                                    settings at any time.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 5 -->
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
                                    If you have questions about this policy, please
                                    <a href="{{ route('contact') }}"
                                        class="text-pink hover:text-pink-light transition-colors underline decoration-pink/30 hover:decoration-pink/60">contact
                                        us</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="mt-12 text-center">
                <p class="text-text-muted mb-4">Have concerns about your data?</p>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-pink text-black font-bold rounded-xl glow-pink-sm hover:scale-105 transition-transform">
                    Get in Touch
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</x-layout>
