<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo Resonance - Band Official Website</title>
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

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80');
            background-size: cover;
            background-position: center;
        }

        .music-card {
            transition: transform 0.3s ease;
        }

        .music-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <!-- Header & Navigation -->
    <header class="fixed w-full bg-gray-900 bg-opacity-90 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-accent">BAGUS <span class="text-primary">WIRATA</span></div>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <a href="#home" class="hover:text-accent transition">Home</a>
                    <a href="#about" class="hover:text-accent transition">Tentang</a>
                    <a href="#music" class="hover:text-accent transition">Musik</a>
                    <a href="{{ route('galleries.index') }}" class="hover:text-accent transition">Galeri</a>
                    <a href="{{ route('merches.index') }}" class="hover:text-accent transition">Merch</a>
                    <a href="#shows" class="hover:text-accent transition">Konser</a>
                    <a href="#contact" class="hover:text-accent transition">Kontak</a>
                </nav>
                <div class="md:hidden">
                    <button id="menu-btn" class="text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-secondary py-4 px-6">
            <div class="flex flex-col space-y-4">
                <a href="#home" class="hover:text-accent transition">Home</a>
                <a href="#about" class="hover:text-accent transition">Tentang</a>
                <a href="#music" class="hover:text-accent transition">Musik</a>
                <a href="{{ route('galleries.index') }}" class="hover:text-accent transition">Galeri</a>
                <a href="{{ route('merches.index') }}" class="hover:text-accent transition">Merch</a>
                <a href="#shows" class="hover:text-accent transition">Konser</a>
                <a href="#contact" class="hover:text-accent transition">Kontak</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero min-h-screen flex items-center pt-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">BAGUS <span class="text-accent">WIRATA</span></h1>
            <p class="text-xl md:text-2xl mb-10 max-w-2xl mx-auto">Goyang nonstop dengan irama koplo Bali, OAOE!</p>
            <div class="flex justify-center space-x-4">
                <a href="#music"
                    class="bg-primary hover:bg-blue-600 text-white px-8 py-3 rounded-full font-medium transition">Dengarkan
                    Musik</a>
                <a href="#shows"
                    class="border-2 border-white hover:bg-white hover:text-gray-900 text-white px-8 py-3 rounded-full font-medium transition">Jadwal
                    Konser</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">Tentang <span class="text-accent">Kami</span></h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="https://images.unsplash.com/photo-1511735111819-9a3f7709049c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                        alt="Band Photo" class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h3 class="text-2xl font-bold mb-6">Cerita Kami</h3>
                    <p class="mb-6">Echo Resonance terbentuk pada tahun 2018 di Jakarta. Dengan perpaduan suara rock
                        klasik dan sentuhan modern, kami menciptakan musik yang beresonansi dengan pendengar dari
                        berbagai generasi.</p>
                    <p class="mb-8">Dengan dua album dan berbagai penampilan di panggung nasional, kami terus berkarya
                        untuk memberikan pengalaman musik terbaik bagi para penggemar.</p>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-bold text-accent mb-2">Genre</h4>
                            <p>Indie Rock, Alternative</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-accent mb-2">Terbentuk</h4>
                            <p>Jakarta, 2018</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-accent mb-2">Album</h4>
                            <p>2 Studio Album</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-accent mb-2">Penghargaan</h4>
                            <p>5 Nominasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Music Section -->
    <section id="music" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4">Musik <span class="text-accent">Kami</span></h2>
            <p class="text-center text-xl mb-16">Dengarkan single dan album terbaru kami</p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Music Card 1 -->
                <div class="music-card bg-gray-800 p-6 rounded-lg shadow-lg">
                    <div class="mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1571330735066-03aaa9429d89?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                            alt="Album Cover" class="rounded-lg">
                        <button
                            class="absolute bottom-4 right-4 bg-primary w-12 h-12 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                            <i class="fas fa-play text-white"></i>
                        </button>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Echoes of Tomorrow</h3>
                    <p class="text-gray-400 mb-4">Single, 2023</p>
                    <div class="flex justify-between items-center">
                        <span class="text-accent">4:26</span>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-spotify"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-apple"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Music Card 2 -->
                <div class="music-card bg-gray-800 p-6 rounded-lg shadow-lg">
                    <div class="mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                            alt="Album Cover" class="rounded-lg">
                        <button
                            class="absolute bottom-4 right-4 bg-primary w-12 h-12 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                            <i class="fas fa-play text-white"></i>
                        </button>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Resonance</h3>
                    <p class="text-gray-400 mb-4">Album, 2022</p>
                    <div class="flex justify-between items-center">
                        <span class="text-accent">42:18</span>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-spotify"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-apple"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Music Card 3 -->
                <div class="music-card bg-gray-800 p-6 rounded-lg shadow-lg">
                    <div class="mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                            alt="Album Cover" class="rounded-lg">
                        <button
                            class="absolute bottom-4 right-4 bg-primary w-12 h-12 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                            <i class="fas fa-play text-white"></i>
                        </button>
                    </div>
                    <h3 class="text-xl font-bold mb-2">First Light</h3>
                    <p class="text-gray-400 mb-4">Album, 2020</p>
                    <div class="flex justify-between items-center">
                        <span class="text-accent">38:45</span>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-spotify"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-apple"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center text-primary hover:text-accent">
                    <span>Lihat lebih banyak</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Shows Section -->
    <section id="shows" class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4">Jadwal <span class="text-accent">Konser</span></h2>
            <p class="text-center text-xl mb-16">Saksikan kami tampil live di kota Anda</p>

            <div class="max-w-3xl mx-auto">
                <!-- Show Item 1 -->
                <div class="bg-gray-900 rounded-lg p-6 mb-6 flex flex-col md:flex-row items-center">
                    <div class="mb-4 md:mb-0 md:mr-6 text-center">
                        <div class="text-3xl font-bold text-accent">25</div>
                        <div class="text-lg">JUNI</div>
                        <div class="text-gray-400">2023</div>
                    </div>
                    <div class="flex-1 md:mr-6 text-center md:text-left">
                        <h3 class="text-xl font-bold mb-2">Java Rockin' Land</h3>
                        <p class="text-gray-400">Jakarta, GBK Stadium</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <button class="bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded-full transition">Beli
                            Tiket</button>
                    </div>
                </div>

                <!-- Show Item 2 -->
                <div class="bg-gray-900 rounded-lg p-6 mb-6 flex flex-col md:flex-row items-center">
                    <div class="mb-4 md:mb-0 md:mr-6 text-center">
                        <div class="text-3xl font-bold text-accent">12</div>
                        <div class="text-lg">JULI</div>
                        <div class="text-gray-400">2023</div>
                    </div>
                    <div class="flex-1 md:mr-6 text-center md:text-left">
                        <h3 class="text-xl font-bold mb-2">Rock Concert Series</h3>
                        <p class="text-gray-400">Bandung, Gedung Sate</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <button class="bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded-full transition">Beli
                            Tiket</button>
                    </div>
                </div>

                <!-- Show Item 3 -->
                <div class="bg-gray-900 rounded-lg p-6 mb-6 flex flex-col md:flex-row items-center">
                    <div class="mb-4 md:mb-0 md:mr-6 text-center">
                        <div class="text-3xl font-bold text-accent">28</div>
                        <div class="text-lg">AGUSTUS</div>
                        <div class="text-gray-400">2023</div>
                    </div>
                    <div class="flex-1 md:mr-6 text-center md:text-left">
                        <h3 class="text-xl font-bold mb-2">Summer Festival</h3>
                        <p class="text-gray-400">Surabaya, City Park</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <button class="bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded-full transition">Beli
                            Tiket</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">Hubungi <span class="text-accent">Kami</span></h2>

            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block mb-2">Nama</label>
                            <input type="text" id="name"
                                class="w-full bg-gray-800 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="email" class="block mb-2">Email</label>
                            <input type="email" id="email"
                                class="w-full bg-gray-800 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="message" class="block mb-2">Pesan</label>
                            <textarea id="message" rows="5"
                                class="w-full bg-gray-800 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-primary hover:bg-blue-600 text-white px-8 py-3 rounded-full font-medium transition">Kirim
                            Pesan</button>
                    </form>
                </div>

                <div class="md:w-1/2 md:pl-10">
                    <div class="bg-gray-800 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold mb-6">Info Kontak</h3>

                        <div class="mb-6 flex items-start">
                            <div class="text-accent mr-4 mt-1">
                                <i class="fas fa-envelope text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Email</h4>
                                <p class="text-gray-400">management@echoresonance.com</p>
                            </div>
                        </div>

                        <div class="mb-6 flex items-start">
                            <div class="text-accent mr-4 mt-1">
                                <i class="fas fa-phone-alt text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Telepon</h4>
                                <p class="text-gray-400">+62 21 1234 5678</p>
                            </div>
                        </div>

                        <div class="mb-6 flex items-start">
                            <div class="text-accent mr-4 mt-1">
                                <i class="fas fa-map-marker-alt text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Lokasi</h4>
                                <p class="text-gray-400">Jakarta Selatan, Indonesia</p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h4 class="font-bold mb-4">Ikuti Kami</h4>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#"
                                    class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition">
                                    <i class="fab fa-spotify"></i>
                                </a>
                                <a href="#"
                                    class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="#"
                                    class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <div class="text-2xl font-bold text-accent">BAGUS <span class="text-primary">WIRATA</span></div>
                    <p class="text-gray-400 mt-2">© 2023 Echo Resonance. All rights reserved.</p>
                </div>

                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-spotify text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-btn').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function () {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });
    </script>
</body>

</html>