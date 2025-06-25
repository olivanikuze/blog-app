<x-app-layout>
@section('content')
    <h1 class="text-3xl font-bold mb-4">📰 Latest Posts</h1>

    @foreach($readers as $reader)
        <div class="bg-white shadow p-4 rounded mb-4">
            <h2 class="text-xl font-semibold">{{ $reader->title }}</h2>
            <p class="text-gray-700 mt-2">{{ Str::limit($reader->content, 150) }}</p>
            <a href="{{ route('viewers.show', $reader->id) }}" class="text-blue-500 mt-2 inline-block">Read More →</a>
        </div>
    @endforeach

    {{ $readers->links() }}
@endsection
</x-app-layout>
