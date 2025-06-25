<x-app-layout>
@section('content')
    <h1 class="text-2xl font-bold mb-4">📚 All Posts</h1>

    {{-- @foreach ($blog1 as $post)
        <div class="bg-white shadow p-4 mb-4 rounded">
            <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
            <p class="text-gray-700">{{ $post->content }}</p>
        </div>
    @endforeach --}}

    @foreach ($blog1 as $post)
    {{ $post->content }}</p>
    </div>

  <div class="flex space-x-2">
            <a href="{{ route('blogs.edit', $post->id) }}" class="bg-yellow-500 text-white px-4 py-1 rounded hover:bg-red-600">✏️ Edit</a>
            
            <form method="POST" action="{{ route('blogs.destroy', $post->id) }}">
              @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-600 text-black px-4 py-1 rounded hover:bg-red-700">
                    🗑️ Delete
                </button>
            </form>
            </div>
            </div>
@endforeach

@endsection
<div class="bg-white p-4 shadow mb-4 rounded flex gap-4 items-start">
    @if ($post->image)
        <div class="w-1/2">
            <img src="{{ asset('storage/' . $post->image) }}" class="rounded w-full h-70 object-cover">
        </div>
    @endif

    <div class="w-1/2">
        <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
        <p class="text-black-100">
        </x-app-layout>