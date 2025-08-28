@extends('layouts.main-layout')

@section('content')
    <div class="bg-secondary min-h-screen py-12">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-accent mb-10 text-center">
                Merches
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach($merches as $merch)
                    <div
                        class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
                        <a href="{{ route('merches.show', $merch->id) }}">
                            <img src="{{ asset('storage/' . $merch->image_path) }}" alt="{{ $merch->title }}"
                                class="w-full h-48 object-cover hover:opacity-90 transition duration-300">
                        </a>
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-white mb-2">{{ $merch->title }}</h3>
                            <p class="text-gray-300 text-sm mb-3 line-clamp-3">{{ $merch->description }}</p>

                            <a href="{{ $merch->link }}" target="_blank"
                               class="inline-block bg-primary text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-600 transition duration-300">
                                🛒 Go to Store
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
