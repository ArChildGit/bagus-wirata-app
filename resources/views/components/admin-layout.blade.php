<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-gray-100 text-gray-900">
    <!-- Navigasi atas -->
    <nav class="bg-blue-800 text-white px-6 py-4 flex justify-between items-center shadow-md">
        <h1 class="font-bold text-xl tracking-wide">Admin Panel</h1>
        <ul class="flex space-x-4">
            <li>
                <a href="{{ route('admin.events.index') }}"
                    class="px-3 py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('admin.events.index') }}"
                    class="px-3 py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
                    Events
                </a>
            </li>
            <li>
                <a href="{{ route('admin.events.index') }}"
                    class="px-3 py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
                    Users
                </a>
            </li>
            <li>
                <a href="{{ route('admin.events.index') }}"
                    class="px-3 py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
                    Reports
                </a>
            </li>
            <li>
                <a href="{{ route('admin.events.index') }}"
                    class="px-3 py-2 rounded-md hover:bg-blue-700 transition-colors duration-200">
                    Settings
                </a>
            </li>
        </ul>
    </nav>

    <!-- Konten utama -->
    <main class="min-h-screen p-6 bg-gray-50">
        {{ $slot }}
    </main>

    <footer class="bg-white mt-8 py-4 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-500 text-sm">
            &copy; 2023 Admin Panel. All rights reserved.
        </div>
    </footer>
</body>

</html>