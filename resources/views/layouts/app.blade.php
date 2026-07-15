<!DOCTYPE html>
<html lang="uz" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gourmet Oshxona | Premium Restoran')</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
        }
        
        .menu-card:hover .menu-overlay {
            opacity: 1;
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-gray-50">
    
    <!-- Navigatsiya -->
    <nav class="fixed w-full bg-white/95 backdrop-blur-sm shadow-lg z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}" class="font-playfair text-3xl font-bold text-amber-600 hover:text-amber-700 transition-colors">
                        Gourmet
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-6">
                    <a href="{{ url('/') }}" 
                       class="{{ request()->is('/') ? 'text-amber-600 font-medium border-b-2 border-amber-600 pb-1' : 'text-gray-700 hover:text-amber-600 transition-colors font-medium' }}">
                        Bosh sahifa
                    </a>
                    <a href="{{ url('/about') }}" 
                       class="{{ request()->is('about') ? 'text-amber-600 font-medium border-b-2 border-amber-600 pb-1' : 'text-gray-700 hover:text-amber-600 transition-colors font-medium' }}">
                        Biz haqimizda
                    </a>
                    <a href="{{ url('/menu') }}" 
                       class="{{ request()->is('menu') ? 'text-amber-600 font-medium border-b-2 border-amber-600 pb-1' : 'text-gray-700 hover:text-amber-600 transition-colors font-medium' }}">
                        Menyu
                    </a>
                    <a href="{{ url('/specials') }}" 
                       class="{{ request()->is('specials') ? 'text-amber-600 font-medium border-b-2 border-amber-600 pb-1' : 'text-gray-700 hover:text-amber-600 transition-colors font-medium' }}">
                        Aksiyalar
                    </a>
                    <a href="{{ url('/gallery') }}" 
                       class="{{ request()->is('gallery') ? 'text-amber-600 font-medium border-b-2 border-amber-600 pb-1' : 'text-gray-700 hover:text-amber-600 transition-colors font-medium' }}">
                        Galereya
                    </a>
                    <a href="{{ url('/contact') }}" 
                       class="{{ request()->is('contact') ? 'text-amber-600 font-medium border-b-2 border-amber-600 pb-1' : 'text-gray-700 hover:text-amber-600 transition-colors font-medium' }}">
                        Aloqa
                    </a>
                    <a href="{{ url('/reservation') }}" 
                       class="bg-amber-600 text-white px-6 py-2 rounded-full hover:bg-amber-700 transition-all transform hover:scale-105 font-medium ml-2">
                        Bron qilish
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-amber-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t shadow-lg">
            <div class="px-4 py-3 space-y-2">
                <a href="{{ url('/') }}" class="block py-3 px-4 rounded-lg {{ request()->is('/') ? 'text-amber-600 bg-amber-50 font-medium' : 'text-gray-700 hover:bg-gray-50' }}">
                    <i class="fas fa-home mr-2"></i> Bosh sahifa
                </a>
                <a href="{{ url('/about') }}" class="block py-3 px-4 rounded-lg {{ request()->is('about') ? 'text-amber-600 bg-amber-50 font-medium' : 'text-gray-700 hover:bg-gray-50' }}">
                    <i class="fas fa-info-circle mr-2"></i> Biz haqimizda
                </a>
                <a href="{{ url('/menu') }}" class="block py-3 px-4 rounded-lg {{ request()->is('menu') ? 'text-amber-600 bg-amber-50 font-medium' : 'text-gray-700 hover:bg-gray-50' }}">
                    <i class="fas fa-utensils mr-2"></i> Menyu
                </a>
                <a href="{{ url('/specials') }}" class="block py-3 px-4 rounded-lg {{ request()->is('specials') ? 'text-amber-600 bg-amber-50 font-medium' : 'text-gray-700 hover:bg-gray-50' }}">
                    <i class="fas fa-tag mr-2"></i> Aksiyalar
                </a>
                <a href="{{ url('/gallery') }}" class="block py-3 px-4 rounded-lg {{ request()->is('gallery') ? 'text-amber-600 bg-amber-50 font-medium' : 'text-gray-700 hover:bg-gray-50' }}">
                    <i class="fas fa-images mr-2"></i> Galereya
                </a>
                <a href="{{ url('/contact') }}" class="block py-3 px-4 rounded-lg {{ request()->is('contact') ? 'text-amber-600 bg-amber-50 font-medium' : 'text-gray-700 hover:bg-gray-50' }}">
                    <i class="fas fa-envelope mr-2"></i> Aloqa
                </a>
                <a href="{{ url('/reservation') }}" class="block bg-amber-600 text-white px-6 py-3 rounded-full hover:bg-amber-700 text-center font-medium mt-2">
                    <i class="fas fa-calendar-check mr-2"></i> Bron qilish
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="font-playfair text-2xl font-bold text-amber-600 mb-4">Gourmet</h3>
                    <p class="text-gray-400">
                        Italiya va O'zbek oshxonasining eng sara taomlari
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Tezkor havolalar</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ url('/') }}" class="hover:text-amber-600 transition-colors">Bosh sahifa</a></li>
                        <li><a href="{{ url('/about') }}" class="hover:text-amber-600 transition-colors">Biz haqimizda</a></li>
                        <li><a href="{{ url('/menu') }}" class="hover:text-amber-600 transition-colors">Menyu</a></li>
                        <li><a href="{{ url('/specials') }}" class="hover:text-amber-600 transition-colors">Aksiyalar</a></li>
                        <li><a href="{{ url('/gallery') }}" class="hover:text-amber-600 transition-colors">Galereya</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Ish vaqti</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Dushanba - Juma: 10:00 - 23:00</li>
                        <li>Shanba: 10:00 - 00:00</li>
                        <li>Yakshanba: 10:00 - 22:00</li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Ijtimoiy tarmoqlar</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-amber-600 text-2xl transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-amber-600 text-2xl transition-colors">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-amber-600 text-2xl transition-colors">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-amber-600 text-2xl transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Gourmet Oshxona. Barcha huquqlar himoyalangan.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            const mobileMenuLinks = mobileMenu.querySelectorAll('a');
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = '0 2px 4px -1px rgba(0, 0, 0, 0.1)';
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>