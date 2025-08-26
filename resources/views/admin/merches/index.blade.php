<h1>Merches Admin</h1>
<a href="{{ route('admin.merches.create') }}">Add New Merch</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

@foreach($merches as $merch)
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <img src="{{ asset('storage/'.$merch->image_path) }}" width="150">
        <h3>{{ $merch->title }}</h3>
        <p>{{ $merch->description }}</p>
        <p>{{ $merch->link }}</p>
        <a href="{{ route('admin.merches.edit', $merch->id) }}">Edit</a>
        <form action="{{ route('admin.merches.destroy', $merch->id) }}" method="POST" style="display:inline;">
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
