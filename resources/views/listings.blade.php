<h1>{{ $heading }}</h1>

@unless (count($listings) == 0)

    @foreach ($listings as $listing)
        <h2>
            {{ $listing['id'] }}
            <br>
            <br>
            <a href="/listings/{{ $listing['id'] }}">
                {{ $listing['title'] }}
            </a>
            <br>
            <br>
            {{ $listing['description'] }}
        </h2>
    @endforeach
@else
    <h2>No listings found</h2>

@endunless
