@extends('layouts.main-layout')

@section('content')
    <div class="py-6">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold mb-6">Discography / Tracks</h1>

            <div class="space-y-6">
                @forelse($discographies as $track)
                    <div class="bg-white shadow-sm rounded-lg p-4 flex gap-4 items-center">
                        @if($track->image_path)
                            <a href="{{ route('discographies.show', $track->id) }}">
                                <img src="{{ asset('storage/' . $track->image_path) }}" 
                                     alt="{{ $track->title }}" 
                                     width="120" 
                                     class="rounded">
                            </a>
                        @endif

                        <div>
                            <h3 class="text-lg font-bold">
                                <a href="{{ route('discographies.show', $track->id) }}" 
                                   class="text-indigo-600 hover:underline">
                                    {{ $track->title }}
                                </a>
                            </h3>
                            <p class="text-gray-600">{{ Str::limit($track->description, 100) }}</p>
                            <p class="text-sm text-gray-500 mt-1">Album: {{ $track->album?->title ?? 'No Album' }}</p>
                            <p class="text-sm text-gray-500">Release: {{ $track->release_date }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500">Belum ada track.</p>
                @endforelse

                <div class="mt-4">
                    {{ $discographies->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
