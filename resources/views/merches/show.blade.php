<h1>{{ $merch->title }}</h1>
<img src="{{ asset('storage/'.$merch->image_path) }}" width="300"><br>
<p>{{ $merch->description }}</p>
<a href="{{ $merch->link }}" target="_blank">Go to Store</a><br>
<a href="{{ route('merches.index') }}">Back</a>
