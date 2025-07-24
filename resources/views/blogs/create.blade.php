<x-app-layout>

    <h1 class="text-2xl font-bold mb-4">➕ Create blog</h1>
  {{-- enctype: helps me  to insert pic  --}}
    <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data" class="bg-white shadow p-6 rounded">
        @csrf
        <div class="mb-4">
            <label class="block font-bold">Title</label>
            <input type="text" name="title" class="w-full border px-4 py-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Content</label>
            <textarea name="content" class="w-full border px-4 py-2 rounded" required></textarea>
        </div>

         <div class="mb-4">
        <label class="block font-bold">Upload Image</label>
        <input type="file" name="image" class="w-full border px-4 py-2 rounded">
    </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Submit
        </button>
    </form>
</x-app-layout>