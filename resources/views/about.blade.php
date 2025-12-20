@props(['title' => config('app.name')])

<x-layout :title="$title">
    <section class="relative bg-gradient-to-b from-white to-indigo-50 py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900">About {{ config('app.name') }}</h1>
            <p class="mt-4 text-gray-600">We connect talented makers with thoughtfully curated opportunities. Our mission is to make job search delightful and efficient.</p>

            <div id="ui" class="mt-12 bg-white rounded-2xl shadow-lg p-8 text-left">
                <h2 class="text-xl font-semibold text-gray-900">UI Design</h2>
                <p class="mt-3 text-gray-600">This site uses a clean, component-driven UI inspired by modern product pages — responsive, accessible, and crafted with subtle motion.</p>
                <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="p-4 bg-indigo-50 rounded">
                        <h3 class="font-medium">Design system</h3>
                        <p class="text-sm text-gray-600">Consistent tokens, spacing, and components promote clarity across pages.</p>
                    </div>
                    <div class="p-4 bg-indigo-50 rounded">
                        <h3 class="font-medium">Responsive</h3>
                        <p class="text-sm text-gray-600">Layouts adapt gracefully from phones to large displays.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
