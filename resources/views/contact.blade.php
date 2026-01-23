<x-layout title="Contact Us">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Left Side - Info -->
            <div class="animate-fade-in">
                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-pink/10 border border-pink/30 text-pink text-sm font-medium mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Get in Touch
                </span>

                <h1 class="text-5xl font-bold text-white mb-6">Let's start a conversation</h1>
                <p class="text-xl text-text-secondary mb-12 leading-relaxed">
                    Have a question, want to list a role, or just want to say hi? We'd love to hear from you.
                </p>

                <!-- Contact Info Cards -->
                <div class="space-y-4">
                    @php
                        $contacts = [
                            [
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />',
                                'title' => 'Email Us',
                                'value' => 'hello@jobfinder.com',
                                'desc' => 'We\'ll respond within 24 hours',
                            ],
                            [
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />',
                                'title' => 'Visit Us',
                                'value' => 'San Francisco, CA',
                                'desc' => 'Mon-Fri, 9am-5pm PST',
                            ],
                            [
                                'icon' =>
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />',
                                'title' => 'Call Us',
                                'value' => '+1 (555) 123-4567',
                                'desc' => 'Available during business hours',
                            ],
                        ];
                    @endphp

                    @foreach ($contacts as $contact)
                        <div
                            class="flex items-start gap-4 p-4 bg-dark-surface border border-dark-border rounded-2xl hover:border-pink transition-all card-glow">
                            <div
                                class="w-12 h-12 rounded-xl bg-pink/10 flex items-center justify-center text-pink flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    {!! $contact['icon'] !!}
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-white">{{ $contact['title'] }}</h3>
                                <p class="text-pink">{{ $contact['value'] }}</p>
                                <p class="text-text-muted text-sm">{{ $contact['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Side - Form -->
            <div class="animate-slide-up">
                <div class="bg-dark-surface border border-dark-border rounded-3xl p-8 relative overflow-hidden">
                    <!-- Gradient Accent -->
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-pink"></div>

                    <h2 class="text-2xl font-bold text-white mb-6">Send us a message</h2>

                    <form class="space-y-5">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-text-secondary mb-2">First Name</label>
                                <input type="text" name="first_name" placeholder="John"
                                    class="w-full bg-dark-elevated border border-dark-border rounded-xl px-4 py-3.5 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-text-secondary mb-2">Last Name</label>
                                <input type="text" name="last_name" placeholder="Doe"
                                    class="w-full bg-dark-elevated border border-dark-border rounded-xl px-4 py-3.5 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-text-secondary mb-2">Email Address</label>
                            <input type="email" name="email" placeholder="john@example.com"
                                class="w-full bg-dark-elevated border border-dark-border rounded-xl px-4 py-3.5 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-text-secondary mb-2">Subject</label>
                            <select name="subject"
                                class="w-full bg-dark-elevated border border-dark-border rounded-xl px-4 py-3.5 text-white focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all">
                                <option value="" class="bg-dark-surface">Select a topic</option>
                                <option value="general" class="bg-dark-surface">General Inquiry</option>
                                <option value="support" class="bg-dark-surface">Support</option>
                                <option value="business" class="bg-dark-surface">Business Partnership</option>
                                <option value="careers" class="bg-dark-surface">Careers</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-text-secondary mb-2">Message</label>
                            <textarea name="message" rows="5" placeholder="How can we help you?"
                                class="w-full bg-dark-elevated border border-dark-border rounded-xl px-4 py-3.5 text-white placeholder-text-muted focus:border-pink focus:ring-2 focus:ring-pink/20 transition-all resize-none"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full py-4 bg-gradient-pink text-black font-bold rounded-xl hover:scale-[1.02] transition-all glow-pink flex items-center justify-center gap-2">
                            Send Message
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
