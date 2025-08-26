<h1>Gallery</h1>

@foreach($galleries as $gallery)
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <a href="{{ route('galleries.show', $gallery->id) }}">
            <img src="{{ asset('storage/'.$gallery->image_path) }}" width="150">
        </a>
        <h3>{{ $gallery->title }}</h3>
        <p>{{ $gallery->description }}</p>
        <p>{{ $gallery->created_at }}</p>
    </div>
@endforeach

{{ $galleries->links() }} <!-- pagination -->
