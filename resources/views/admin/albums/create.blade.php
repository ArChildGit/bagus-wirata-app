<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Album
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                {{-- Error messages --}}
                @if ($errors->any())
                    <div class="mb-3 text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.albums.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Judul --}}
                    <div class="mb-3">
                        <label class="block font-medium">Judul Album</label>
                        <input type="text" name="title" value="{{ old('title') }}"
                               class="border w-full px-2 py-1 rounded" required>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="mb-3">
                        <label class="block font-medium">Deskripsi</label>
                        <textarea name="description" class="border w-full px-2 py-1 rounded" rows="4">{{ old('description') }}</textarea>
                    </div>

                    {{-- Tanggal Rilis --}}
                    <div class="mb-3">
                        <label class="block font-medium">Tanggal Rilis</label>
                        <input type="datetime-local" name="release_date" value="{{ old('release_date') }}"
                               class="border w-full px-2 py-1 rounded">
                    </div>

                    {{-- Cover --}}
                    <div class="mb-3">
                        <label class="block font-medium">Cover Album</label>
                        <input type="file" name="cover" accept="image/*"
                               class="border w-full px-2 py-1 rounded">
                    </div>

                    {{-- Tombol --}}
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                        Simpan
                    </button>
                    <a href="{{ route('admin.albums.index') }}"
                       class="ml-2 bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded shadow">
                        Batal
                    </a>
                </form>

            </div>
        </div>
    </div>
</x-admin-layout>
