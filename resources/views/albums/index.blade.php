<h1>Albums</h1>
@foreach($albums as $album)
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <a href="{{ route('albums.show', $album->id) }}">
            <img src="{{ asset('storage/'.$album->cover_path) }}" width="150">
            <h3>{{ $album->title }}</h3>
        </a>
        <p>{{ $album->release_date }}</p>
    </div>
@endforeach
{{ $albums->links() }}
