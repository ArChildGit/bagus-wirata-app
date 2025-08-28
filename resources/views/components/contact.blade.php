<section id="contact" class="py-20">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16">Hubungi <span class="text-accent">Kami</span></h2>

        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                <form action="{{ route('messages.store') }}" method="POST" class="space-y-6">
                    @csrf

                    {{-- tampilkan alert sukses --}}
                    @if(session('success'))
                        <div class="bg-green-600 text-white p-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- tampilkan error --}}
                    @if($errors->any())
                        <div class="bg-red-600 text-white p-3 rounded">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div>
                        <label for="name" class="block mb-2">Nama</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                            class="w-full bg-gray-800 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="email" class="block mb-2">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            class="w-full bg-gray-800 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="message" class="block mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full bg-gray-800 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">{{ old('message') }}</textarea>
                    </div>
                    <button type="submit"
                        class="bg-primary hover:bg-blue-600 text-white px-8 py-3 rounded-full font-medium transition">
                        Kirim Pesan
                    </button>
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