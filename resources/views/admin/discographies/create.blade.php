<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Track / Discography
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

                <form action="{{ route('admin.discographies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="block font-medium">Track Title</label>
                        <input type="text" name="title" value="{{ old('title') }}"
                            class="border w-full px-2 py-1 rounded" required>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Description</label>
                        <textarea name="description" rows="4"
                            class="border w-full px-2 py-1 rounded">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Album</label>
                        <select name="album_id" class="border w-full px-2 py-1 rounded">
                            <option value="">--No Album--</option>
                            @foreach($albums as $album)
                            <option value="{{ $album->id }}" {{ old('album_id')==$album->id ? 'selected' : '' }}>
                                {{ $album->title }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Release Date</label>
                        <input type="date" name="release_date" value="{{ old('release_date') }}"
                            class="border w-full px-2 py-1 rounded">
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Cover Image</label>
                        <input type="file" name="image" accept="image/*" class="border w-full px-2 py-1 rounded"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Audio File</label>
                        <input type="file" name="audio" accept="audio/*" class="border w-full px-2 py-1 rounded">
                    </div>

                    <div class="flex items-center space-x-3">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                            Simpan
                        </button>
                        <a href="{{ route('admin.discographies.index') }}"
                            class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded shadow">
                            Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-admin-layout>