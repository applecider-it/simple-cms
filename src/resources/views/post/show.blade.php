<x-app-layout>
    <article class="max-w-3xl mx-auto px-6 py-16">
        <h1 class="text-4xl font-bold mb-4">
            {{ $post->title }}
        </h1>

        <p class="text-gray-500 mb-6">
            {{ $post->published_at->format('Y-m-d H:i') }}
        </p>

        <div class="app-post-content-container max-w-none">
            {!! $post->contentHtml() !!}
        </div>
    </article>
</x-app-layout>
