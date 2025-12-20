@props(['title' => config('app.name')])

<x-layout :title="$title">
    <section class="relative bg-gradient-to-b from-white to-indigo-50 py-20">
        <div class="max-w-3xl mx-auto px-6">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 text-center">Contact</h1>
            <p class="mt-4 text-gray-600 text-center">Have a question or want to list a role? Get in touch.</p>

            <div class="mt-10 bg-white rounded-2xl shadow-lg p-8">
                <form class="grid grid-cols-1 gap-4">
                    <input type="text" name="name" placeholder="Your name" class="w-full border rounded px-3 py-2" />
                    <input type="email" name="email" placeholder="Email" class="w-full border rounded px-3 py-2" />
                    <textarea name="message" rows="5" placeholder="Message" class="w-full border rounded px-3 py-2"></textarea>
                    <div class="text-right">
                        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Send message</button>
                    </div>
                </form>
            </div>

            <div class="mt-8 bg-indigo-50 rounded p-6 text-sm text-gray-600">
                <h3 class="font-semibold">UI Design</h3>
                <p class="mt-2">This contact page follows the same UI approach as the landing page: clear hierarchy, soft shadows, and subtle motion.</p>
            </div>
        </div>
    </section>
</x-layout>
