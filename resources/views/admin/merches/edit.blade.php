<h1>Edit Merch</h1>
<form action="{{ route('admin.merches.update', $merch->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $merch->title }}" required><br><br>
    <textarea name="description">{{ $merch->description }}</textarea><br><br>
    <input type="text" name="link" value="{{ $merch->link }}"><br><br>
    <input type="file" name="image"><br>
    <img src="{{ asset('storage/'.$merch->image_path) }}" width="150"><br><br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('admin.merches.index') }}">Back</a>
