@extends('layouts.main-layout')

@section('content')
  <div class="bg-secondary min-h-screen py-12">
    <div class="max-w-3xl mx-auto px-4">
      <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden">
        <!-- Poster -->
        @if($event->poster_path)
          <img src="{{ asset('storage/' . $event->poster_path) }}" 
               alt="{{ $event->name }}" 
               class="w-full h-80 object-cover">
        @endif

        <!-- Konten -->
        <div class="p-6">
          <h1 class="text-3xl font-bold text-accent mb-4">
            {{ $event->name }}
          </h1>
          <p class="text-gray-300 text-lg mb-6">
            {{ $event->description }}
          </p>
          <p class="text-sm text-gray-400 mb-2">
            <strong class="text-white">Tanggal:</strong> {{ $event->date }}
          </p>
          <p class="text-sm text-gray-400 mb-6">
            <strong class="text-white">Lokasi:</strong> {{ $event->location }}
          </p>

          <!-- Tombol Back -->
          <a href="{{ route('events.index') }}"
             class="inline-block bg-primary text-white px-5 py-2 rounded-lg font-medium hover:bg-blue-600 transition duration-300">
            ← Kembali ke Event
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
