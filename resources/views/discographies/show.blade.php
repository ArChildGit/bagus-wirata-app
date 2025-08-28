<h1>{{ $discography->title }}</h1>
<img src="{{ asset('storage/'.$discography->image_path) }}" width="300"><br>
<p>{{ $discography->description }}</p>
<p>Album: {{ $discography->album?->title ?? 'No Album' }}</p>
<p>Release Date: {{ $discography->release_date }}</p>

<audio controls>
    <source src="{{ asset('storage/'.$discography->audio_path) }}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio><br>

<a href="{{ route('discographies.index') }}">Back</a>
