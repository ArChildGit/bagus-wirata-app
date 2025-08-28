<div id="music" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center py-12">
  @foreach($discographies as $discography)
    <div
      class="music-card bg-gray-800 p-8 rounded-xl shadow-lg transform hover:scale-105 hover:shadow-2xl transition duration-300 flex flex-col justify-between w-full max-w-sm">
      <div class="mb-6 relative">
        <img src="{{ asset('storage/' . $discography->image_path) }}" alt="{{ $discography->title }}"
          class="rounded-lg w-full h-64 object-cover">
        <button
          class="absolute bottom-4 right-4 bg-primary w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-600 transition duration-300">
          <i class="fas fa-play text-white text-lg"></i>
        </button>
      </div>
      <h3 class="text-xl font-bold mb-3 text-center text-white">{{ $discography->title }}</h3>
      <p class="text-gray-400 mb-6 text-center text-sm">
        @if($discography->album_id)
          Album: {{ $discography->album->name ?? '-' }},
        @else
          Single,
        @endif
        {{ $discography->release_date ? $discography->release_date->format('Y') : '-' }}
      </p>
      <div class="flex justify-between items-center mt-auto">
        <span class="text-accent font-medium">
          @php
            $audioSize = Storage::exists($discography->audio_path) ? Storage::size($discography->audio_path) : 0;
          @endphp
          {{ gmdate('i:s', $audioSize / 1000) }}
        </span>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-spotify"></i></a>
          <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-apple"></i></a>
          <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
  @endforeach
</div>

<!-- Tombol Lihat Selengkapnya -->
<div class="flex justify-center pb-4">
  <a href="{{ route('discographies.index') }}" class="text-white px-6 py-3 font-semibold">
    Lihat Selengkapnya
  </a>
</div>