<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>

    {{-- Main --}}
    <article class="py-8 px-4 lg:px-0 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>

        <div>
            Created by <a href="/users/{{ $post->user->username }}"
                class="text-base text-blue-500 hover:underline">{{ $post->user->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}"
                class="text-base text-blue-500 hover:underline">{{ $post->category->name }}</a> |
            {{ $post->created_at->diffForHumans() }}
        </div>

        <p class="my-4 font-light">{{ $post['body'] }}</p>

        <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back to blog</a>
    </article>
    {{-- End Main --}}
</x-layout>
