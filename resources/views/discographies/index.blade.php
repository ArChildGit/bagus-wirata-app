@extends('layouts.main-layout')

@section('content')
<div class="py-10">
    <div class="max-w-6xl mx-auto px-6">
        <h1 class="text-4xl font-bold text-accent mb-10 text-center">
            Discography
        </h1>

        @php
        // Group track berdasarkan album
        $grouped = $discographies->groupBy(fn($t) => $t->album->title ?? 'Singles');
        @endphp

        @foreach($grouped as $albumName => $tracks)
        <div class="mb-10">

            {{-- Album Header --}}
            <div class="flex items-center gap-4 mb-5">
                @php
                $albumCover = $tracks->first()->album->cover_path ?? null;
                @endphp

                <div class="w-20 h-20 bg-gray-200 rounded-lg overflow-hidden shadow">
                    @if($albumCover)
                    <img src="{{ asset('storage/' . $albumCover) }}" class="object-cover w-full h-full"
                        alt="Album Cover">
                    @else
                    <div class="w-full h-full flex items-center justify-center text-gray-400 text-sm">
                        No Cover
                    </div>
                    @endif
                </div>

                <div>
                    <h2 class="text-xl font-bold">{{ $albumName }}</h2>
                    <p class="text-sm text-gray-500">{{ $tracks->count() }} Track</p>
                </div>
            </div>

            {{-- Track List --}}
            <div class="grid md:grid-cols-2 gap-6">
                @foreach($tracks as $track)
                <a href="{{ route('discographies.show', $track->id) }}" class="relative block rounded-xl shadow-lg hover:shadow-xl transition p-4
               bg-white/70 backdrop-blur-md border border-white/20 overflow-hidden">

                    {{-- Glossy Shine Layer --}}
                    <div class="pointer-events-none absolute inset-0 
                    bg-gradient-to-br from-white/40 via-white/10 to-transparent opacity-70">
                    </div>

                    <div class="flex gap-4 relative z-10">
                        {{-- Thumbnail --}}
                        @if($track->image_path)
                        <img src="{{ asset('storage/' . $track->image_path) }}"
                            class="w-24 h-24 rounded-lg object-cover shadow-md" alt="{{ $track->title }}">
                        @else
                        <div class="w-24 h-24 rounded-lg bg-gray-300/40 backdrop-blur-sm"></div>
                        @endif

                        {{-- Info --}}
                        <div class="flex flex-col justify-center">
                            <h3 class="text-lg font-semibold text-gray-800">
                                {{ $track->title }}
                            </h3>

                            <p class="text-sm text-gray-600">
                                {{ Str::limit($track->description, 80) }}
                            </p>

                            <p class="text-xs text-gray-500 mt-1">
                                Release: {{ $track->release_date }}
                            </p>
                        </div>
                    </div>

                </a>
                @endforeach
            </div>
        </div>
        @endforeach

        @if($discographies->isEmpty())
        <p class="text-gray-500">Belum ada track.</p>
        @endif
    </div>
</div>
@endsection