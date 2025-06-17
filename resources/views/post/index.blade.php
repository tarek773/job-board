<x-layout :title="$pagetitle">
<h3>blog</h3>
@foreach ($posts as $post)
    <div class="post">
        <br>
        <h5>{{$post->id}}</h5>
        <br>
        <h4>{{ $post->title }}</h4>
        <br>
        <p>{{ $post->body }}</p>
        <br>
        <p>Posted on: {{ $post->created_at->format('Y-m-d H:i') }}</p>
        <br>
        <hr>
    </div>
@endforeach   
    <div class="pagination">
        {{ $posts->links() }}
    </div> 
</x-layout>