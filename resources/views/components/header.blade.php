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