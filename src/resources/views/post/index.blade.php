<x-app-layout>
    <section class="max-w-5xl mx-auto px-6 py-16">
        <h1 class="text-4xl font-bold mb-12">Blog</h1>

        <div class="space-y-4">
            @foreach ($posts as $post)
                <div class="border border-black cursor-pointer block bg-white rounded-2xl shadow hover:shadow-xl transition p-6"
                    data-href="{{ route('posts.show', ['slug' => $post->slug]) }}" onclick="location.href = this.dataset.href"
                >
                    <div class="p-4 text-lg">{{ $post->title }}</div>
                    <div class="p-4 text-sm text-gray-400">{{ $post->contentForList() }}</div>
                    <div class="text-sm text-gray-400 text-right">{{ $post->published_at }}</div>
                </div>
            @endforeach
        </div>

        <div class="mt-16">
            {{ $posts->links() }}
        </div>

    </section>
</x-app-layout>
