<h1>Gallery Admin</h1>
<a href="{{ route('admin.galleries.create') }}">Add New Gallery</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

@foreach($galleries as $gallery)
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <img src="{{ asset('storage/'.$gallery->image_path) }}" width="150">
        <h3>{{ $gallery->title }}</h3>
        <p>{{ $gallery->description }}</p>
        <p>{{ $gallery->created_at }}</p>
        <a href="{{ route('admin.galleries.edit', $gallery->id) }}">Edit</a>
        <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" style="display:inline;">
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
