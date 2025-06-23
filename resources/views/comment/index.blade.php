<x-layout :title="$pagetitle">
<h3>commentd</h3>
@foreach ($comments as $comment)
    <div class="comment">
        
        <h5>{{ $comment->post->title }}</h5>
        <br>
        <h5>{{ $comment->author }}</h5>
        <br>
        <h4>{{ $comment->content }}</h4>       
        <br>
        <hr>
    </div>
@endforeach   
    <div class="pagination">
        {{ $comments->links() }}
    </div> 
</x-layout>