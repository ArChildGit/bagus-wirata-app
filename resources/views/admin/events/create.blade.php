<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Event
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if ($errors->any())
                    <div class="mb-3 text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="block font-medium">Nama Event</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="border w-full px-2 py-1"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Deskripsi</label>
                        <textarea name="description" class="border w-full px-2 py-1" rows="4"
                            required>{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Tanggal & Waktu</label>
                        <input type="datetime-local" name="date" value="{{ old('date') }}"
                            class="border w-full px-2 py-1" required>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Lokasi</label>
                        <input type="text" name="location" value="{{ old('location') }}" class="border w-full px-2 py-1"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Poster Event</label>
                        <input type="file" name="poster" accept="image/*" class="border w-full px-2 py-1">
                    </div>

                    <div class="flex items-center space-x-3">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                            Simpan
                        </button>
                        <a href="{{ route('admin.events.index') }}"
                            class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded shadow">
                            Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-admin-layout>