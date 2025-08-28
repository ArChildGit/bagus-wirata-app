<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            dark: {
              900: '#0f0f13',
              800: '#1a1a23',
              700: '#252532',
              600: '#2f2f42'
            },
            primary: {
              500: '#3B82F6',
              600: '#2563EB'
            },
            secondary: {
              500: '#1F2937',
              600: '#111827'
            },
            accent: {
              500: '#F59E0B',
              600: '#D97706'
            }
          }
        }
      }
    }
  </script>
</head>

<body class="bg-dark-900 min-h-screen text-gray-100">
  <div class="container mx-auto px-4 py-12">
    <div class="text-center mb-12">
      <h1 class="text-4xl font-bold mb-2">Dashboard Admin</h1>
      <p class="text-gray-400">Kelola semua konten dan data website</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Events Card -->
      <a href="/admin/events" class="group">
        <div
          class="bg-secondary-500 rounded-xl p-6 h-full border border-dark-700 transition-all duration-300 group-hover:border-primary-500 group-hover:shadow-lg group-hover:shadow-primary-500/10 group-hover:translate-y-1">
          <div class="flex items-center mb-5">
            <div class="bg-primary-500/10 p-3 rounded-lg mr-4">
              <i class="fa-solid fa-calendar-days text-primary-500 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold">Atur Events</h3>
          </div>
          <p class="text-gray-400">Kelola semua jadwal konser dan acara</p>
        </div>
      </a>

      <!-- Album Card -->
      <a href="/admin/albums" class="group">
        <div
          class="bg-secondary-500 rounded-xl p-6 h-full border border-dark-700 transition-all duration-300 group-hover:border-primary-500 group-hover:shadow-lg group-hover:shadow-primary-500/10 group-hover:translate-y-1">
          <div class="flex items-center mb-5">
            <div class="bg-primary-500/10 p-3 rounded-lg mr-4">
              <i class="fa-solid fa-compact-disc text-primary-500 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold">Atur Album</h3>
          </div>
          <p class="text-gray-400">Tambah, edit, dan hapus album musik</p>
        </div>
      </a>

      <!-- Discography Card -->
      <a href="/admin/discographies" class="group">
        <div
          class="bg-secondary-500 rounded-xl p-6 h-full border border-dark-700 transition-all duration-300 group-hover:border-primary-500 group-hover:shadow-lg group-hover:shadow-primary-500/10 group-hover:translate-y-1">
          <div class="flex items-center mb-5">
            <div class="bg-primary-500/10 p-3 rounded-lg mr-4">
              <i class="fa-solid fa-music text-primary-500 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold">Discography</h3>
          </div>
          <p class="text-gray-400">Kelola daftar lagu dalam album</p>
        </div>
      </a>

      <!-- Gallery Card -->
      <a href="/admin/galleries" class="group">
        <div
          class="bg-secondary-500 rounded-xl p-6 h-full border border-dark-700 transition-all duration-300 group-hover:border-accent-500 group-hover:shadow-lg group-hover:shadow-accent-500/10 group-hover:translate-y-1">
          <div class="flex items-center mb-5">
            <div class="bg-accent-500/10 p-3 rounded-lg mr-4">
              <i class="fa-solid fa-images text-accent-500 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold">Galeri</h3>
          </div>
          <p class="text-gray-400">Upload dan atur foto kegiatan</p>
        </div>
      </a>

      <!-- Merch Card -->
      <a href="/admin/merches" class="group">
        <div
          class="bg-secondary-500 rounded-xl p-6 h-full border border-dark-700 transition-all duration-300 group-hover:border-accent-500 group-hover:shadow-lg group-hover:shadow-accent-500/10 group-hover:translate-y-1">
          <div class="flex items-center mb-5">
            <div class="bg-accent-500/10 p-3 rounded-lg mr-4">
              <i class="fa-solid fa-shirt text-accent-500 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold">Merch</h3>
          </div>
          <p class="text-gray-400">Kelola produk merchandise resmi</p>
        </div>
      </a>

      <!-- Messages Card -->
      <a href="/admin/messages" class="group">
        <div
          class="bg-secondary-500 rounded-xl p-6 h-full border border-dark-700 transition-all duration-300 group-hover:border-primary-500 group-hover:shadow-lg group-hover:shadow-primary-500/10 group-hover:translate-y-1">
          <div class="flex items-center mb-5">
            <div class="bg-primary-500/10 p-3 rounded-lg mr-4">
              <i class="fa-solid fa-envelope text-primary-500 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold">Pesan</h3>
          </div>
          <p class="text-gray-400">Baca dan tanggapi pesan penggemar</p>
        </div>
      </a>
    </div>
  </div>
</body>

</html>