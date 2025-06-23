<x-layout :title="$pagetitle">
<h3>tag</h3>
@foreach ($tags as $tag)
    <div class="tag">
        
        <h4>{{ $tag->title }}</h4>
        
        <br>
        <hr>
    </div>
@endforeach   
    <div class="pagination">
        {{ $tags->links() }}
    </div> 
</x-layout>