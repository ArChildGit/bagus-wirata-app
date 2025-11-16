<section id="music" class="py-20">

  <!-- Title -->
  <h2 class="text-4xl font-bold text-center mb-16 text-white">
    Music
  </h2>

  <!-- Grid List -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-items-center px-6">
    @foreach($discographies as $discography)
    <div
      class="music-card bg-gray-800 p-8 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 flex flex-col justify-between w-full max-w-sm">

      <!-- Image + Play -->
      <div class="mb-6 relative">
        <img src="{{ asset('storage/' . $discography->image_path) }}" alt="{{ $discography->title }}"
          class="rounded-lg w-full h-64 object-cover">
        @php
        $hasAudio = $discography->audio_path && Storage::exists($discography->audio_path);
        @endphp

        @if($hasAudio)
        <button
          class="absolute bottom-4 right-4 bg-primary w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-600 transition duration-300">
          <i class="fas fa-play text-white text-lg"></i>
        </button>
        @else
        {{-- Placeholder supaya layout tidak berubah --}}
        <div class="absolute bottom-4 right-4 w-14 h-14 invisible"></div>
        @endif
      </div>

      <!-- Title -->
      <h3 class="text-xl font-bold mb-3 text-center text-white">
        {{ $discography->title }}
      </h3>

      <!-- Info -->
      <p class="text-gray-400 text-center text-sm">
        @if($discography->album_id)
        Album: {{ $discography->album->title ?? '-' }},
        @else
        Single,
        @endif
        {{ $discography->release_date ? $discography->release_date->format('Y') : '-' }}
      </p>

      <!-- Duration + Links -->
      <!-- <div class="flex justify-between items-center mt-auto">
        @php
        $duration = null;

        if ($discography->audio_path && Storage::exists($discography->audio_path)) {
        $size = Storage::size($discography->audio_path);
        $duration = gmdate('i:s', $size / 1000);
        }
        @endphp

        <span class="text-accent font-medium {{ $duration ? '' : 'invisible' }}">
          {{ $duration ?? '00:00' }}
        </span>

        <div class="flex space-x-4">
          <a href="#" class="text-gray-400 hover:text-white transition">
            <i class="fab fa-spotify"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-white transition">
            <i class="fab fa-apple"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-white transition">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div> -->

    </div>
    @endforeach
  </div>

  <!-- See More -->
  <div class="flex justify-center pt-10">
    <a href="{{ route('discographies.index') }}" class="text-white px-6 py-3 font-semibold">
      Lihat Selengkapnya
    </a>
  </div>

</section>