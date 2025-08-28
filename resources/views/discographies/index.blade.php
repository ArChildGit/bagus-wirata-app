<h1>Discography / Tracks</h1>

@foreach($discographies as $track)
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <a href="{{ route('discographies.show', $track->id) }}">
            <img src="{{ asset('storage/'.$track->image_path) }}" width="100">
        </a>
        <h3>{{ $track->title }}</h3>
        <p>{{ $track->description }}</p>
        <p>Album: {{ $track->album?->title ?? 'No Album' }}</p>
        <p>Release: {{ $track->release_date }}</p>
    </div>
@endforeach

{{ $discographies->links() }}
