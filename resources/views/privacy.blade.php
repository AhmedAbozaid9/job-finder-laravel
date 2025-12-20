@props(['title' => config('app.name')])

<x-layout :title="$title">
    <section class="py-16">
        <div class="max-w-3xl mx-auto px-6">
            <h1 class="text-3xl font-extrabold text-gray-900">Privacy Policy</h1>
            <p class="mt-4 text-gray-600">Last updated: {{ date('F j, Y') }}</p>

            <div class="mt-6 space-y-6 text-gray-700">
                <p>At {{ config('app.name') }}, we respect your privacy. This page explains what information we collect,
                    how we use it, and the choices you have.</p>

                <h2 class="font-semibold text-gray-900">Information We Collect</h2>
                <p>We may collect information you provide directly (for example, when creating an account or contacting
                    us), usage information, and cookies to improve the site.</p>

                <h2 class="font-semibold text-gray-900">How We Use Information</h2>
                <p>We use data to operate and improve the service, communicate with you, and for security and fraud
                    prevention.</p>

                <h2 class="font-semibold text-gray-900">Third Parties</h2>
                <p>We may share information with service providers who perform services on our behalf. We never sell
                    personal data.</p>

                <h2 class="font-semibold text-gray-900">Your Choices</h2>
                <p>You can contact us to access, update, or delete your personal information. You may also control
                    cookies via your browser settings.</p>

                <h2 class="font-semibold text-gray-900">Contact</h2>
                <p>If you have questions about this policy, please <a href="{{ route('contact') }}"
                        class="text-indigo-600 hover:underline">contact us</a>.</p>
            </div>
        </div>
    </section>
</x-layout>
