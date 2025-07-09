<x-app-layout>
        <div class="max-w-6xl mx-auto py-6 px-4">
        {{-- Title and Add Button --}}
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">📚 All Posts</h1>
            <a href="{{ route('blogs.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                ➕ Add Blog
            </a>
        </div>

        @foreach ($blog1 as $post)
            <div class="bg-white p-6 shadow mb-6 rounded-lg">
                {{-- Post Container: Flex layout --}}
                <div class="flex flex-col md:flex-row md:items-start gap-6">
                    {{-- Left: Image --}}
                    @if ($post->image)
                        <div class="md:w-1/2">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="rounded-lg w-full h-64 object-cover">
                        </div>
                    @endif

                    {{-- Right: Text Content --}}
                    <div class="md:w-1/2 flex flex-col justify-between space-y-4">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $post->title }}</h2>
                            <p class="text-gray-700">{{ Str::limit($post->content, 300) }}</p>
                        </div>

                        {{-- Edit & Delete Buttons --}}
                        <div class="flex space-x-4">
                            <a href="{{ route('blogs.edit', $post->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
                                ✏️ Edit
                            </a>

                            <form method="POST" action="{{ route('blogs.destroy', $post->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                    🗑️ Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- No posts message --}}
        @if ($blog1->isEmpty())
            <p class="text-gray-500">Nta post ziraboneka.</p>
        @endif
    </div>
</x-app-layout>
