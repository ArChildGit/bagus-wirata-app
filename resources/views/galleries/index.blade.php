@extends('layouts.main-layout')

@section('content')
    <div class="bg-secondary min-h-screen py-12">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-accent mb-10 text-center">
                Gallery
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach($galleries as $gallery)
                    <div
                        class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
                        <a href="{{ route('galleries.show', $gallery->id) }}">
                            <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}"
                                class="w-full h-48 object-cover hover:opacity-90 transition duration-300">
                        </a>
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-white mb-2">{{ $gallery->title }}</h3>
                            <p class="text-gray-300 text-sm mb-3 line-clamp-3">{{ $gallery->description }}</p>
                            <p class="text-xs text-gray-500">{{ $gallery->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection