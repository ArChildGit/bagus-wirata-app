<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Merch
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                {{-- tampilkan error --}}
                @if ($errors->any())
                    <div class="mb-3 text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.merches.store') }}" 
                      method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="block font-medium">Judul</label>
                        <input type="text" name="title" value="{{ old('title') }}" 
                               class="border w-full px-2 py-1 rounded" required>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Deskripsi</label>
                        <textarea name="description" rows="4" 
                                  class="border w-full px-2 py-1 rounded">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Link e-commerce</label>
                        <input type="url" name="link" value="{{ old('link') }}" 
                               placeholder="https://toko-online.com/product"
                               class="border w-full px-2 py-1 rounded">
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Gambar</label>
                        <input type="file" name="image" accept="image/*" 
                               class="border w-full px-2 py-1 rounded" required>
                    </div>

                    <div class="flex items-center space-x-3">
                        <button type="submit" 
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                            Simpan
                        </button>
                        <a href="{{ route('admin.merches.index') }}" 
                           class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded shadow">
                            Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-admin-layout>
