<x-admin-layout title="Manajemen Tracks / Discographies">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-800">Daftar Tracks</h2>
                <a href="{{ route('admin.discographies.create') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow transition-colors">
                    + Tambah Track
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cover</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Album</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rilis</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Audio</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($discographies as $index => $track)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    @if($track->image_path)
                                        <img src="{{ asset('storage/'.$track->image_path) }}" alt="Cover {{ $track->title }}"
                                             class="w-16 h-16 object-cover rounded">
                                    @else
                                        <div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center">
                                            <span class="text-gray-400 text-xs">No image</span>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap font-medium">{{ $track->title }}</td>
                                <td class="px-4 py-4">{{ Str::limit($track->description, 60) }}</td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    {{ $track->album?->title ?? 'No Album' }}
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    {{ $track->release_date ? \Carbon\Carbon::parse($track->release_date)->translatedFormat('d F Y') : '-' }}
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    @if($track->audio_path)
                                        <audio controls class="w-32">
                                            <source src="{{ asset('storage/'.$track->audio_path) }}" type="audio/mpeg">
                                        </audio>
                                    @else
                                        <span class="text-gray-400 text-xs">No audio</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap flex space-x-2">
                                    <a href="{{ route('admin.discographies.edit', $track->id) }}"
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded shadow-sm text-sm transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.discographies.destroy', $track->id) }}" method="POST"
                                          onsubmit="return confirm('Yakin hapus track ini?')">
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
                                <td colspan="8" class="px-4 py-4 text-center text-gray-500">
                                    Belum ada track
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
