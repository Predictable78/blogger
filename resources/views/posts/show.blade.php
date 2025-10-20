<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $post->title }}
            </h2>
            <a href="{{ route('posts.index') }}" class="text-sm text-blue-600 hover:underline">
                ← Back to posts
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <article class="bg-white shadow-sm rounded-lg p-6 space-y-4">
                <header>
                    <p class="text-sm text-gray-500">
                        By {{ $post->user->name }} &middot; {{ $post->created_at->format('M d, Y h:i A') }}
                    </p>
                </header>

                <div class="text-gray-800 whitespace-pre-line">
                    {{ $post->body }}
                </div>
            </article>
        </div>
    </div>
</x-app-layout>
