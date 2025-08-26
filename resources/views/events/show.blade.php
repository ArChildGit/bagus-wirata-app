<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $event->name }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            {{-- Event detail --}}
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h3 class="text-lg font-bold">{{ $event->name }}</h3>
                <p class="text-gray-600">{{ $event->description }}</p>
                <p class="mt-2 text-sm text-gray-500">Tanggal: {{ $event->date }}</p>
                <p class="text-sm text-gray-500">Lokasi: {{ $event->location }}</p>
            </div>

            {{-- Comment list --}}
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Komentar</h3>

                @forelse($event->comments as $comment)
                    <div class="border-b border-gray-200 pb-2 mb-2">
                        <p class="text-gray-800">{{ $comment->content }}</p>
                        <small class="text-gray-500">
                            oleh {{ $comment->user->name ?? 'Anonim' }} • {{ $comment->created_at->diffForHumans() }}
                        </small>
                    </div>
                @empty
                    <p class="text-gray-500">Belum ada komentar.</p>
                @endforelse
            </div>

            {{-- Add comment form --}}
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Tambah Komentar</h3>
                <form action="{{ route('comments.store', $event->id) }}" method="POST" class="space-y-4">
                    @csrf
                    <textarea name="content" rows="3" required
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                        Kirim
                    </button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
