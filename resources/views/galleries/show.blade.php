<h1>{{ $gallery->title }}</h1>
<img src="{{ asset('storage/'.$gallery->image_path) }}" width="300"><br>
<p>{{ $gallery->description }}</p>
<p>{{ $gallery->created_at }}</p>
<a href="{{ route('galleries.index') }}">Back</a>
