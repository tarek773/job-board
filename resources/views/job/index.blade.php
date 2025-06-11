<div>
    <h1>job page</h1>

    @foreach ($jobs as $job)
        <div class="job">
            <h2>{{ $job['title'] }}</h2>
            <p>{{ $job['company'] }}</p>
            <p>Location: {{ $job['location'] }}</p>
        </div>
    
    @endforeach
</div>
