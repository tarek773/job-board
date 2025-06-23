<x-layout :title="$pagetitle">
    @if (session('success'))
        <div class="bg-green-50 px-3 py-2">
            {{ session('success') }}
        </div>
    @endif

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/blog/create"
            class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-green-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Create</a>
    </div>
    @foreach ($posts as $post)
        <div class="flex justify-between items-center border border-gray-200 px-4 py-6 my-4 rounded-lg">
            <div >
                
                <h1><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h1>
                <p>{{ $post->author }}</p>
            </div>
            <div>
                <a class="text-yellow-500  hover:text-gray-500 " href="/blog/{{ $post->id }}/edit">Edit</a>
                <form action="/blog/{{ $post->id }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this post?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500  hover:text-gray-500 ml-2">Delete</button>
                </form>
            </div>
            
        </div>
    @endforeach
    <div class="pagination">
        {{ $posts->links() }}
    </div>
</x-layout>