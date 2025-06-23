<x-layout :title="$pagetitle">
    <div class="post bg-white shadow-md rounded-2xl p-6 mb-8 space-y-4">
        <h1 class="text-3xl font-bold text-gray-800">{{ $post->title }}</h1>

        <p class="text-gray-700 text-base leading-relaxed">{{ $post->body }}</p>

        <p class="text-sm text-gray-500">Author: <span class="font-medium text-gray-700">{{ $post->author }}</span></p>

        <p class="text-sm text-gray-500">Posted on: {{ $post->created_at->format('Y-m-d H:i') }}</p>

        <hr class="border-gray-300">
    </div>

    <form method="post" action="/comment">
        @csrf

        <input type="hidden" name="post_id" value="{{ $post->id }}">
        

        <div class="space-y-20">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Add New Comment</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Used this form to add new comment to this blog</p>


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="author" class="block text-sm/6 font-medium text-gray-900">author</label>
                        <div class="mt-2">
                            <input type="text" value="{{old('author')  }}" name="author" id="author"
                                autocomplete="given-name"
                                class=" {{ $errors->has('author') ? 'outline-red-500' : 'outline-gray-300' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1  placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                        @error('author')
                            <div class="text-red-500 text-sm/6 mt-2">{{ $message }}</div>
                        @enderror
                    </div>



                    
                </div>

                <br>

                <div class="col-span-full">
                    <label for="contant" class="block text-sm/6 font-medium text-gray-900">Content</label>
                    <div class="mt-2">
                        <textarea name="content" id="content" rows="3"
                            class="{{ $errors->has('content') ? 'outline-red-500' : 'outline-gray-300' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1  placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            {{old('content')  }}</textarea>
                    </div>
                    <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about article.</p>
                    @error('content')
                        <div class="text-red-500 text-sm/6 mt-2">{{ $message }}</div>
                    @enderror
                </div>



                

            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/blog" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>

    </form>
</x-layout>