@props(['title' => config('app.name')])

<x-layout :title="$title">
    <section class="py-16">
        <div class="max-w-3xl mx-auto px-6">
            <h1 class="text-3xl font-extrabold text-gray-900">Terms of Service</h1>
            <p class="mt-4 text-gray-600">Last updated: {{ date('F j, Y') }}</p>

            <div class="mt-6 space-y-6 text-gray-700">
                <p>These Terms govern your use of {{ config('app.name') }}. By using the service you agree to these
                    terms.</p>

                <h2 class="font-semibold text-gray-900">Use of Service</h2>
                <p>You agree to use the site in compliance with applicable laws and not to abuse or interfere with the
                    site.</p>

                <h2 class="font-semibold text-gray-900">Content</h2>
                <p>Users are responsible for the content they post. We reserve the right to remove content that violates
                    our policies.</p>

                <h2 class="font-semibold text-gray-900">Limitation of Liability</h2>
                <p>{{ config('app.name') }} is provided "as is" and is not liable for indirect damages. For full
                    details, consult legal counsel.</p>

                <h2 class="font-semibold text-gray-900">Contact</h2>
                <p>Questions about these terms? Please <a href="{{ route('contact') }}"
                        class="text-indigo-600 hover:underline">contact us</a>.</p>
            </div>
        </div>
    </section>
</x-layout>
