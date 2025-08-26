<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Event
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg p-6 space-y-4">
                @forelse($events as $event)
                <div class="border-b pb-4 mb-4">
                    <h3 class="text-lg font-bold">
                        <a href="{{ route('events.show', $event->id) }}" class="text-indigo-600 hover:underline">
                            {{ $event->name }}
                        </a>
                    </h3>
                    <p class="text-gray-600">{{ substr($event->description, 0, 100) }}</p>
                    <p class="text-sm text-gray-500 mt-1">Tanggal: {{ $event->date }}</p>
                    <p class="text-sm text-gray-500">Lokasi: {{ $event->location }}</p>
                </div>
                @empty
                <p class="text-gray-500">Belum ada event.</p>
                @endforelse

                <div class="mt-4">
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>