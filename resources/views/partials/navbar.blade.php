<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-full h-10 object-fit">
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600 transition">About</a>
                <a href="#events" class="text-gray-700 hover:text-blue-600 transition">Events</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
            </div>
            <button class="md:hidden text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</nav>