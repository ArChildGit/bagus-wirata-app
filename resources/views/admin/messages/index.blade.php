<x-admin-layout title="Manajemen Pesan">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-md p-6">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Daftar Pesan</h2>
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
              <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
              <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
              <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pesan</th>
              <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Kirim
              </th>
              <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @forelse($messages as $index => $msg)
              <tr class="hover:bg-gray-50 transition-colors">
                <td class="px-4 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                <td class="px-4 py-4 font-medium">{{ $msg->name }}</td>
                <td class="px-4 py-4 text-blue-600 underline">
                  <a href="mailto:{{ $msg->email }}">{{ $msg->email }}</a>
                </td>
                <td class="px-4 py-4 align-top w-64">
                  <div x-data="{ open: false }">
                    <p class="line-clamp-2 break-words">
                      {{ Str::limit($msg->message, 50) }}
                    </p>

                    @if(strlen($msg->message) > 50)
                      <button type="button" class="text-blue-600 text-sm mt-1" x-on:click="open = true">
                        Lihat Selengkapnya
                      </button>
                    @endif

                    <!-- Modal -->
                    <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50"
                      x-cloak>
                      <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6">
                        <h3 class="text-lg font-semibold mb-4">Detail Pesan</h3>
                        <p class="whitespace-pre-line break-words text-gray-700">
                          {{ $msg->message }}
                        </p>
                        <div class="mt-6 flex justify-end">
                          <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded"
                            x-on:click="open = false">
                            Tutup
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-4 whitespace-nowrap">
                  {{ \Carbon\Carbon::parse($msg->created_at)->translatedFormat('d F Y H:i') }}
                </td>
                <td class="px-4 py-4 whitespace-nowrap">
                  <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST"
                    onsubmit="return confirm('Hapus pesan ini?')">
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
                  Belum ada pesan masuk
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-admin-layout>