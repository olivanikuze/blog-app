{{-- @extends('layouts.app') --}}
<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">✏️ Edit Blog</h1>

    <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data" class="bg-white shadow p-6 rounded">
        @csrf
        {{-- ethod('PUT') is necessary for Laravel to recognize the request as an update. --}}
        @method('PUT')    

        <div class="mb-4">
            <label class="block font-bold">Title</label>
            <input type="text" name="title" value="{{ $blog->title }}" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block font-bold">Content</label>
            <textarea name="content" class="w-full border px-4 py-2 rounded">{{ $blog->content }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-bold">Image</label>
            <input type="file" name="image" class="w-full border px-4 py-2 rounded">
            @if ($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" class="w-32 mt-2 rounded">
            @endif
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Update
        </button>
    </form>
</x-app-layout>