<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="/logo-soj-sqr.webp">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1F2937',
                        accent: '#F59E0B',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
        }

        .music-card {
            transition: transform 0.3s ease;
        }

        .music-card:hover {
            transform: translateY(-5px);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    @yield('content')

    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function () {
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });

                // Close mobile menu when clicking on a link
                document.querySelectorAll('#mobile-menu a').forEach(link => {
                    link.addEventListener('click', function () {
                        mobileMenu.classList.add('hidden');
                    });
                });
            }
        });
    </script>
</body>

</html>