<h1>Merches</h1>

@foreach($merches as $merch)
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <a href="{{ route('merches.show', $merch->id) }}">
            <img src="{{ asset('storage/'.$merch->image_path) }}" width="150">
        </a>
        <h3>{{ $merch->title }}</h3>
        <p>{{ $merch->description }}</p>
        <a href="{{ $merch->link }}" target="_blank">Go to Store</a>
    </div>
@endforeach

{{ $merches->links() }} <!-- pagination -->
