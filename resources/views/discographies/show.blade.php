@extends('layouts.main-layout')

@section('content')
  <div class="bg-secondary min-h-screen py-12">
    <div class="max-w-3xl mx-auto px-4">
      <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden">
        <!-- Gambar -->
        <img src="{{ asset('storage/' . $discography->image_path) }}" 
             alt="{{ $discography->title }}"
             class="w-full h-80 object-cover">

        <!-- Konten -->
        <div class="p-6">
          <h1 class="text-3xl font-bold text-accent mb-4">
            {{ $discography->title }}
          </h1>
          <p class="text-gray-300 text-lg mb-6">
            {{ $discography->description }}
          </p>
          <p class="text-sm text-gray-400 mb-2">
            Album: <span class="text-white">{{ $discography->album?->title ?? 'No Album' }}</span>
          </p>
          <p class="text-sm text-gray-400 mb-6">
            Release Date: <span class="text-white">{{ $discography->release_date }}</span>
          </p>

          <!-- Audio Player -->
          <div class="mb-6">
            <audio controls class="w-full">
              <source src="{{ asset('storage/' . $discography->audio_path) }}" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </div>

          <!-- Tombol Back -->
          <a href="{{ route('discographies.index') }}"
             class="inline-block bg-primary text-white px-5 py-2 rounded-lg font-medium hover:bg-blue-600 transition duration-300">
            ← Kembali ke Discography
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
