<h1>{{ $heading }}</h1>

@unless (count($listings) == 0)

    @foreach ($listings as $listing)
        <h2>
            {{ $listing['id'] }}
            <br>
            <br>
            {{ $listing['title'] }}
            <br>
            <br>
            {{ $listing['price'] }}
            <br>
            <br>
            {{ $listing['description'] }}
            <br>
            <br>
            <img src={{ $listing['image'] }} alt="" width="300px" height="400px">
        </h2>
    @endforeach
@else
    <h2>No listings found</h2>

@endunless
