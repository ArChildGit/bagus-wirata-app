<h1>{{ $album->title }}</h1>
<img src="{{ asset('storage/'.$album->cover_path) }}" width="300"><br>
<p>{{ $album->description }}</p>
<p>Release Date: {{ $album->release_date }}</p>

<h2>Tracks</h2>
@foreach($album->tracks as $track)
    <div style="margin:10px 0;">
        <img src="{{ asset('storage/'.$track->image_path) }}" width="100">
        <h4>{{ $track->title }}</h4>
        <audio controls>
            <source src="{{ asset('storage/'.$track->audio_path) }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
@endforeach
<a href="{{ route('albums.index') }}">Back</a>
