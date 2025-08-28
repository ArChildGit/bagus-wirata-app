@extends('layouts.main-layout')

@section('content')
  <div class="bg-secondary min-h-screen py-12">
    <div class="max-w-3xl mx-auto px-4">
      <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden">
        <!-- Gambar -->
        <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}"
          class="w-full h-80 object-cover">

        <!-- Konten -->
        <div class="p-6">
          <h1 class="text-3xl font-bold text-accent mb-4">
            {{ $gallery->title }}
          </h1>
          <p class="text-gray-300 text-lg mb-6">
            {{ $gallery->description }}
          </p>
          <p class="text-sm text-gray-500 mb-6">
            Diposting pada {{ $gallery->created_at->format('d M Y, H:i') }}
          </p>

          <a href="{{ route('galleries.index') }}"
            class="inline-block bg-primary text-white px-5 py-2 rounded-lg font-medium hover:bg-blue-600 transition duration-300">
            ← Kembali ke Gallery
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection