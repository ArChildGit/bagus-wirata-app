<x-admin-layout title="Manajemen Gallery">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-800">Daftar Gallery</h2>
                <a href="{{ route('admin.galleries.create') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow transition-colors">
                    + Tambah Gallery
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Upload</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($galleries as $index => $gallery)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    @if($gallery->image_path)
                                        <img src="{{ asset('storage/'.$gallery->image_path) }}"
                                             alt="{{ $gallery->title }}"
                                             class="w-16 h-16 object-cover rounded">
                                    @else
                                        <div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center">
                                            <span class="text-gray-400 text-xs">No image</span>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-4 py-4 font-medium">{{ $gallery->title }}</td>
                                <td class="px-4 py-4">{{ Str::limit($gallery->description, 60) }}</td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    {{ \Carbon\Carbon::parse($gallery->created_at)->translatedFormat('d F Y') }}
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap flex space-x-2">
                                    <a href="{{ route('admin.galleries.edit', $gallery->id) }}"
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded shadow-sm text-sm transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST"
                                          onsubmit="return confirm('Yakin hapus gallery ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded shadow-sm text-sm transition-colors">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-4 text-center text-gray-500">
                                    Belum ada gallery
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
