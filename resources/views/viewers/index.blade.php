<x-guest-layout>
    <div>
        <h1 class="text-3xl font-bold mb-8 text-blue-700">📰 POSTS</h1>

        @foreach($readers as $reader)
            <div class="bg-red shadow p-4 rounded mb-4  flex flex-col md:flex-row space-y-4 md:space-y-1 ">
                
                {{-- Show Image if it exists --}}
                @if ($reader->image)
                    <img src="{{ asset('storage/' . $reader->image) }}" alt="Post Image" class="rounded-lg w-full  md:w-1/3  h-200 object-cover mb-4 space-y-4">
                @endif

         <div class="flex flex-col ">
                    <h2 class="text-xl font-semibold text-green-700">{{ $reader->title }}</h2>
                    <p class="text-gray-700">{{ Str::limit($reader->content, 100) }}</p>
                    <a href="{{ route('viewers.show', $reader->id) }}" class="text-blue-500">Read More →</a>
                </div>

               
            </div>
        @endforeach
    </div>
</x-guest-layout>
