<section id="shows" class="py-8 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="pt-8">
            <h2 class="text-4xl font-bold text-center mb-4">Jadwal <span class="text-accent">Konser</span></h2>
            <p class="text-center text-xl mb-4">Saksikan kami tampil live di kota Anda</p>
        </div>

        <div class="max-w-5xl mx-auto space-y-6">
            @foreach($events as $event)
            <div class="bg-gray-900 rounded-lg p-6 flex flex-col md:flex-row items-center">

                <!-- Poster -->
                @if($event->poster_path)
                <div class="mb-4 md:mb-0 md:mr-6 w-full md:w-48 flex-shrink-0">
                    <img src="{{ asset('storage/'.$event->poster_path) }}" alt="{{ $event->name }}"
                        class="rounded-lg w-full h-48 object-cover">
                </div>
                @endif

                <!-- Info Event -->
                <div class="flex-1 md:mr-6 text-center md:text-left">
                    <div class="flex justify-center md:justify-start mb-2">
                        <div class="text-3xl font-bold text-accent mr-2">{{ $event->date->format('d') }}</div>
                        <div class="text-lg mr-2">{{ strtoupper($event->date->format('F')) }}</div>
                        <div class="text-gray-400">{{ $event->date->format('Y') }}</div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">{{ $event->name }}</h3>
                    <p class="text-gray-400">{{ $event->location }}</p>
                </div>

                <!-- Button Beli Tiket -->
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('events.show', $event->id) }}"
                        class="bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded-full transition">
                        Lihat detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Tombol Lihat Selengkapnya -->
        <div class="flex justify-center mt-12">
            <a href="{{ route('events.index') }}"
                class="bg-primary text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-600 transition duration-300">
                Lihat Selengkapnya
            </a>
        </div>
    </div>
</section>