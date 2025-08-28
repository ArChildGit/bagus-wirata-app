<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Album
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                {{-- Error Messages --}}
                @if ($errors->any())
                    <div class="mb-3 text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.albums.update', $album->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Judul --}}
                    <div class="mb-3">
                        <label class="block font-medium">Judul Album</label>
                        <input type="text" name="title" 
                               value="{{ old('title', $album->title) }}" 
                               class="border w-full px-2 py-1 rounded" required>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="mb-3">
                        <label class="block font-medium">Deskripsi</label>
                        <textarea name="description" class="border w-full px-2 py-1 rounded" rows="4">{{ old('description', $album->description) }}</textarea>
                    </div>

                    {{-- Tanggal Rilis --}}
                    <div class="mb-3">
                        <label class="block font-medium">Tanggal Rilis</label>
                        <input type="datetime-local" name="release_date" 
                               value="{{ old('release_date', $album->release_date ? date('Y-m-d\TH:i', strtotime($album->release_date)) : '') }}" 
                               class="border w-full px-2 py-1 rounded">
                    </div>

                    {{-- Cover --}}
                    <div class="mb-3">
                        <label class="block font-medium">Cover Album</label>
                        @if($album->cover_path)
                            <img src="{{ asset('storage/'.$album->cover_path) }}" 
                                 alt="Cover" width="120" class="mb-2 rounded">
                        @endif
                        <input type="file" name="cover" accept="image/*" 
                               class="border w-full px-2 py-1 rounded">
                    </div>

                    {{-- Tombol --}}
                    <button type="submit" 
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                        Perbarui
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
