<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Posts') }}
            </h2>
            <a
                href="{{ route('posts.create') }}"
                class="inline-flex items-center rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700"
            >
                New Post
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if (session('status'))
                <div class="bg-green-100 border border-green-200 text-green-800 px-4 py-3 rounded">
                    {{ session('status') }}
                </div>
            @endif

            @forelse ($posts as $post)
                <article class="bg-white shadow-sm rounded-lg p-6 space-y-3">
                    <header>
                        <h3 class="text-xl font-semibold text-gray-900">
                            <a href="{{ route('posts.show', $post) }}" class="hover:underline">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">
                            By {{ $post->user->name }} &middot; {{ $post->created_at->diffForHumans() }}
                        </p>
                    </header>

                    <p class="text-gray-700 whitespace-pre-line">
                        {{ \Illuminate\Support\Str::limit($post->body, 220) }}
                    </p>

                    @if ($post->user_id === auth()->id())
                        <footer class="flex gap-3">
                            <a href="{{ route('posts.edit', $post) }}" class="text-blue-600 hover:underline text-sm">
                                Edit
                            </a>
                            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    class="text-red-600 hover:underline text-sm"
                                    onclick="return confirm('Delete this post?')"
                                >
                                    Delete
                                </button>
                            </form>
                        </footer>
                    @endif
                </article>
            @empty
                <p class="text-center text-gray-600">No posts yet. Create one to get started!</p>
            @endforelse

            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
