@extends('layouts.main-layout')

@section('content')
    <div class="py-6">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-6">

                @forelse($events as $event)
                    <div class="bg-white shadow-sm rounded-lg p-4 flex gap-4 items-center">
                        @if($event->poster_path)
                            <img src="{{ asset('storage/' . $event->poster_path) }}" alt="Poster" width="120" class="rounded">
                        @endif
                        <div>
                            <h3 class="text-lg font-bold">
                                <a href="{{ route('events.show', $event->id) }}" class="text-indigo-600 hover:underline">
                                    {{ $event->name }}
                                </a>
                            </h3>
                            <p class="text-gray-600">{{ Str::limit($event->description, 100) }}</p>
                            <p class="text-sm text-gray-500 mt-1">Tanggal: {{ $event->date }}</p>
                            <p class="text-sm text-gray-500">Lokasi: {{ $event->location }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500">Belum ada event.</p>
                @endforelse

                <div class="mt-4">
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection