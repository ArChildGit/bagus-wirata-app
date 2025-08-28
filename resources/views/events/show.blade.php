<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $event->name }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                @if($event->poster_path)
                    <img src="{{ asset('storage/'.$event->poster_path) }}" alt="Poster" class="w-full rounded mb-4">
                @endif

                <h3 class="text-xl font-semibold mb-2">{{ $event->name }}</h3>
                <p class="mb-2">{{ $event->description }}</p>
                <p><strong>Tanggal:</strong> {{ $event->date }}</p>
                <p><strong>Lokasi:</strong> {{ $event->location }}</p>

                <a href="{{ route('events.index') }}" class="btn btn-secondary mt-4 inline-block">Kembali ke Daftar Event</a>
            </div>
        </div>
    </div>
</x-app-layout>
