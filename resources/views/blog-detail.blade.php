<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>

    {{-- Main --}}
    {{-- <article class="py-8 px-4 lg:px-0 max-w-screen-md border-b border-gray-300">
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
    </article> --}}
    {{-- End Main --}}
    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <a href="/blog" class="font-medium text-blue-500 block mb-4 lg:mb-6 hover:underline">&laquo; Back to blog</a>
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->user->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->category->name }}</p>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="2022-02-08" title="February 8th, 2022">{{ $post->created_at->diffForHumans() }}</time></p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}
                    </h1>
                    <p>
                        {{ $post->body }}
                    </p>
                </header>
                
            </article>
        </div>
    </main>
</x-layout>
