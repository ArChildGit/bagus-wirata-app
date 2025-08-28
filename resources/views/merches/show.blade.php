@extends('layouts.main-layout')

@section('content')
  <div class="bg-secondary min-h-screen py-12">
    <div class="max-w-3xl mx-auto px-4">
      <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden">
        <!-- Gambar -->
        <img src="{{ asset('storage/' . $merch->image_path) }}" 
             alt="{{ $merch->title }}"
             class="w-full h-80 object-cover">

        <!-- Konten -->
        <div class="p-6">
          <h1 class="text-3xl font-bold text-accent mb-4">
            {{ $merch->title }}
          </h1>
          <p class="text-gray-300 text-lg mb-6">
            {{ $merch->description }}
          </p>

          <!-- Tombol Go to Store -->
          <a href="{{ $merch->link }}" target="_blank"
             class="inline-block bg-accent text-white px-5 py-2 rounded-lg font-medium hover:bg-yellow-600 transition duration-300 mb-4">
            🛒 Go to Store
          </a>
          <br>

          <!-- Tombol Back -->
          <a href="{{ route('merches.index') }}"
             class="inline-block bg-primary text-white px-5 py-2 rounded-lg font-medium hover:bg-blue-600 transition duration-300">
            ← Kembali ke Merches
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
