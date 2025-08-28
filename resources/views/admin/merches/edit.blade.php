<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Merch
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

                <form action="{{ route('admin.merches.update', $merch->id) }}" 
                      method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="block font-medium">Judul Merch</label>
                        <input type="text" name="title" 
                               value="{{ old('title', $merch->title) }}" 
                               class="border w-full px-2 py-1 rounded" required>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Deskripsi</label>
                        <textarea name="description" rows="4"
                                  class="border w-full px-2 py-1 rounded">{{ old('description', $merch->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Link e-commerce</label>
                        <input type="url" name="link" 
                               value="{{ old('link', $merch->link) }}" 
                               class="border w-full px-2 py-1 rounded"
                               placeholder="https://toko-online.com/product">
                    </div>

                    <div class="mb-3">
                        <label class="block font-medium">Gambar Merch</label>
                        @if($merch->image_path)
                            <img src="{{ asset('storage/' . $merch->image_path) }}" 
                                 alt="Merch Image" width="150" 
                                 class="mb-2 rounded shadow">
                        @endif
                        <input type="file" name="image" accept="image/*" 
                               class="border w-full px-2 py-1 rounded">
                    </div>

                    <div class="flex items-center space-x-3">
                        <button type="submit" 
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                            Perbarui
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
