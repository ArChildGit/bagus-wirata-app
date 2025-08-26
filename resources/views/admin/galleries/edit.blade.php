<h1>Edit Gallery</h1>
<form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $gallery->title }}" required><br><br>
    <textarea name="description">{{ $gallery->description }}</textarea><br><br>
    <input type="file" name="image"><br>
    <img src="{{ asset('storage/'.$gallery->image_path) }}" width="150"><br><br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('admin.galleries.index') }}">Back</a>
