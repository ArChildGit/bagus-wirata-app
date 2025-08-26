<h1>Add New Merch</h1>
<form action="{{ route('admin.merches.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title" required><br><br>
    <textarea name="description" placeholder="Description"></textarea><br><br>
    <input type="text" name="link" placeholder="Link to e-commerce"><br><br>
    <input type="file" name="image" required><br><br>
    <button type="submit">Save</button>
</form>
<a href="{{ route('admin.merches.index') }}">Back</a>
