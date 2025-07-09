<x-guest-layout>

    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold">{{ $reader->title }}</h1>
        <p class="text-sm text-gray-600 mb-4">Published on {{ $reader->created_at->format('M d, Y') }}</p>
        <div class="text-gray-800 leading-relaxed">
               {{-- Image Section --}}
        @if ($reader->image)
            <img src="{{ asset('storage/' . $reader->image) }}" 
                 alt="Post Image" 
                 class="w-full h-72 object-cover rounded-lg mb-6">
        @endif
            {!! nl2br(e($reader->content)) !!}
        </div>
        <a href="{{ route('viewers.index') }}" class="inline-block mt-4 text-blue-600">← Back to Posts</a>
    </div>
</x-guest-layout>
