@extends('layouts.app')

@section('title', 'Gourmet Oshxona | Premium Restoran')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1920" 
                 alt="Restoran interyeri" 
                 class="w-full h-full object-cover"
                 onerror="this.src='https://via.placeholder.com/1920x1080?text=Restoran+Interyeri'">
            <div class="absolute inset-0 hero-gradient"></div>
        </div>
        
        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="font-playfair text-5xl md:text-7xl font-bold mb-6 animate-fade-in">
                <span class="text-amber-400">Gourmet</span> Oshxona
            </h1>
            <p class="text-xl md:text-2xl mb-8 font-light">
                Italiya va O'zbek oshxonasining eng sara taomlari
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('menu') }}" class="bg-amber-600 text-white px-8 py-4 rounded-full hover:bg-amber-700 transition-all transform hover:scale-105 font-medium text-lg">
                    Menyuni ko'rish
                </a>
                <a href="{{ route('reservation') }}" class="border-2 border-white text-white px-8 py-4 rounded-full hover:bg-white hover:text-gray-900 transition-all transform hover:scale-105 font-medium text-lg">
                    Stol band qilish
                </a>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#features" class="text-white text-4xl">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Nega aynan biz?
                </h2>
                <div class="w-24 h-1 bg-amber-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-gray-50 rounded-2xl hover:shadow-xl transition-all">
                    <div class="text-amber-600 text-5xl mb-4">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Yuqori sifat</h3>
                    <p class="text-gray-600">Faqat eng yaxshi mahalliy va import mahsulotlardan tayyorlangan taomlar</p>
                </div>
                
                <div class="text-center p-8 bg-gray-50 rounded-2xl hover:shadow-xl transition-all">
                    <div class="text-amber-600 text-5xl mb-4">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Professional oshpazlar</h3>
                    <p class="text-gray-600">Xalqaro tajribaga ega professional oshpazlar jamoasi</p>
                </div>
                
                <div class="text-center p-8 bg-gray-50 rounded-2xl hover:shadow-xl transition-all">
                    <div class="text-amber-600 text-5xl mb-4">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Qulay muhit</h3>
                    <p class="text-gray-600">Oilaviy va romantik kechki ovqatlar uchun maxsus atmosfera</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Dishes Preview -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Mashhur taomlar
                </h2>
                <div class="w-24 h-1 bg-amber-600 mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Mijozlarimizning eng sevimli taomlari
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600" 
                         alt="Sezar salati"
                         class="w-full h-56 object-cover"
                         onerror="this.src='https://via.placeholder.com/600x400?text=Sezar+Salati'">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Sezar salati</h3>
                        <p class="text-gray-600 mb-4">Yangi salat barglari, parmezan pishlog'i va maxsus souse</p>
                        <a href="{{ route('menu') }}" class="text-amber-600 font-medium hover:text-amber-700">
                            Batafsil <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600" 
                         alt="Margarita pizza"
                         class="w-full h-56 object-cover"
                         onerror="this.src='https://via.placeholder.com/600x400?text=Margarita+Pizza'">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Margarita pizza</h3>
                        <p class="text-gray-600 mb-4">Motsarella, yangi pomidor sousi va rayhon bilan</p>
                        <a href="{{ route('menu') }}" class="text-amber-600 font-medium hover:text-amber-700">
                            Batafsil <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?w=600" 
                         alt="Tiramisu"
                         class="w-full h-56 object-cover"
                         onerror="this.src='https://via.placeholder.com/600x400?text=Tiramisu'">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Tiramisu</h3>
                        <p class="text-gray-600 mb-4">Klassik italiyan deserti, maskarpone va kofe bilan</p>
                        <a href="{{ route('menu') }}" class="text-amber-600 font-medium hover:text-amber-700">
                            Batafsil <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="{{ route('menu') }}" class="inline-block bg-amber-600 text-white px-8 py-4 rounded-full hover:bg-amber-700 transition-all transform hover:scale-105 font-medium text-lg">
                    To'liq menyuni ko'rish
                </a>
            </div>
        </div>
    </section>
@endsection