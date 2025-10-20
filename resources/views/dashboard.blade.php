<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg font-medium">Welcome back, {{ auth()->user()->name }}!</p>
                    <p class="mt-2 text-sm text-gray-600">Here are the five most recent posts from everyone.</p>
                </div>
            </div>

            @forelse ($latestPosts as $post)
                <article class="bg-white shadow-sm sm:rounded-lg p-6 space-y-2">
                    <header>
                        <h3 class="text-xl font-semibold text-gray-900">
                            <a href="{{ route('posts.show', $post) }}" class="hover:underline">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">
                            By {{ $post->user->name }} • {{ $post->created_at->diffForHumans() }}
                        </p>
                    </header>
                    <p class="text-gray-700 whitespace-pre-line">
                        {{ \Illuminate\Support\Str::limit($post->body, 160) }}
                    </p>
                </article>
            @empty
                <div class="bg-white shadow-sm sm:rounded-lg p-6 text-gray-600 text-center">
                    No posts yet. Head over to the <a class="text-blue-600 hover:underline" href="{{ route('posts.create') }}">posts page</a> to write the first one!
                </div>
            @endforelse

            <div class="text-center">
                <a href="{{ route('posts.index') }}" class="inline-flex items-center rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500">
                    View all posts
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
