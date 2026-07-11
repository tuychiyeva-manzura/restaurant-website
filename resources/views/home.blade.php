<!DOCTYPE html>
<html lang="uz" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Oshxona | Premium Restoran</title>
    
    <!-- Tailwind CSS 4 CDN -->
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
</head>
<body class="bg-gray-50">
    
    <!-- Navigatsiya -->
    <nav class="fixed w-full bg-white/95 backdrop-blur-sm shadow-lg z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#" class="font-playfair text-3xl font-bold text-amber-600 hover:text-amber-700 transition-colors">
                        Gourmet
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-amber-600 transition-colors font-medium">Bosh sahifa</a>
                    <a href="#about" class="text-gray-700 hover:text-amber-600 transition-colors font-medium">Biz haqimizda</a>
                    <a href="#menu" class="text-gray-700 hover:text-amber-600 transition-colors font-medium">Menyu</a>
                    <a href="#specials" class="text-gray-700 hover:text-amber-600 transition-colors font-medium">Maxsus taomlar</a>
                    <a href="#contact" class="text-gray-700 hover:text-amber-600 transition-colors font-medium">Aloqa</a>
                    <a href="#reservation" class="bg-amber-600 text-white px-6 py-2 rounded-full hover:bg-amber-700 transition-all transform hover:scale-105 font-medium">
                        Bron qilish
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-amber-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-3 space-y-3">
                <a href="#home" class="block text-gray-700 hover:text-amber-600 py-2 font-medium">Bosh sahifa</a>
                <a href="#about" class="block text-gray-700 hover:text-amber-600 py-2 font-medium">Biz haqimizda</a>
                <a href="#menu" class="block text-gray-700 hover:text-amber-600 py-2 font-medium">Menyu</a>
                <a href="#specials" class="block text-gray-700 hover:text-amber-600 py-2 font-medium">Maxsus taomlar</a>
                <a href="#contact" class="block text-gray-700 hover:text-amber-600 py-2 font-medium">Aloqa</a>
                <a href="#reservation" class="block bg-amber-600 text-white px-6 py-3 rounded-full hover:bg-amber-700 text-center font-medium">
                    Bron qilish
                </a>
            </div>
        </div>
    </nav>

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
                <a href="#menu" class="bg-amber-600 text-white px-8 py-4 rounded-full hover:bg-amber-700 transition-all transform hover:scale-105 font-medium text-lg">
                    Menyuni ko'rish
                </a>
                <a href="#reservation" class="border-2 border-white text-white px-8 py-4 rounded-full hover:bg-white hover:text-gray-900 transition-all transform hover:scale-105 font-medium text-lg">
                    Stol band qilish
                </a>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-white text-4xl">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Biz haqimizda
                </h2>
                <div class="w-24 h-1 bg-amber-600 mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    2010 yildan beri sizga eng yuqori sifatli taomlar va ajoyib atmosfera taqdim etamiz
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h3 class="font-playfair text-3xl font-bold text-gray-900">
                        Oshxonamizning tarixi
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Restoranimiz 2010 yilda ochilgan bo'lib, o'shandan beri biz eng yuqori sifatli mahsulotlardan 
                        tayyorlangan mazali taomlarni taklif etamiz. Bizning oshpazlarimiz Italiya va O'zbek oshxonasining 
                        eng yaxshi an'analarini birlashtirgan.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Har bir taom sevgi va e'tibor bilan tayyorlanadi. Biz faqat eng yaxshi mahalliy va import 
                        mahsulotlardan foydalanamiz.
                    </p>
                    
                    <div class="grid grid-cols-3 gap-4 pt-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-600 font-playfair">14+</div>
                            <div class="text-gray-600">Yillik tajriba</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-600 font-playfair">50+</div>
                            <div class="text-gray-600">Taom turlari</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-600 font-playfair">1000+</div>
                            <div class="text-gray-600">Mamnun mijozlar</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800" 
                         alt="Restoran ichki ko'rinishi"
                         class="rounded-2xl shadow-2xl"
                         onerror="this.src='https://via.placeholder.com/800x600?text=Restoran+Ichi'">
                    <div class="absolute -bottom-6 -right-6 bg-amber-600 text-white p-6 rounded-2xl shadow-xl hidden md:block">
                        <p class="font-playfair text-3xl font-bold">14+</p>
                        <p class="text-sm">Yillik tajriba</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Bizning Menyu
                </h2>
                <div class="w-24 h-1 bg-amber-600 mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Har qanday ta'mga mos keladigan keng taomlar tanlovi
                </p>
            </div>
            
            <!-- Menu Categories -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Taom 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden menu-card transform hover:scale-105 transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600" 
                             alt="Sezar salati"
                             class="w-full h-56 object-cover"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Sezar+Salati'">
                        <div class="absolute top-4 right-4 bg-amber-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                            Yangi
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-gray-900">Sezar salati</h3>
                            <span class="text-amber-600 font-bold text-xl">85,000 so'm</span>
                        </div>
                        <p class="text-gray-600 mb-4">Yangi salat barglari, parmezan pishlog'i, krutonlar va maxsus sezar souse</p>
                        <button class="w-full bg-gray-900 text-white py-2 rounded-lg hover:bg-amber-600 transition-colors">
                            Buyurtma berish
                        </button>
                    </div>
                </div>

                <!-- Taom 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden menu-card transform hover:scale-105 transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600" 
                             alt="Margarita pizza"
                             class="w-full h-56 object-cover"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Margarita+Pizza'">
                        <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                            Top
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-gray-900">Margarita pizza</h3>
                            <span class="text-amber-600 font-bold text-xl">120,000 so'm</span>
                        </div>
                        <p class="text-gray-600 mb-4">Motsarella pishlog'i, yangi pomidor sousi va rayhon barglari bilan</p>
                        <button class="w-full bg-gray-900 text-white py-2 rounded-lg hover:bg-amber-600 transition-colors">
                            Buyurtma berish
                        </button>
                    </div>
                </div>

                <!-- Taom 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden menu-card transform hover:scale-105 transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?w=600" 
                             alt="Lazanya"
                             class="w-full h-56 object-cover"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Lazanya'">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-gray-900">Lazanya</h3>
                            <span class="text-amber-600 font-bold text-xl">145,000 so'm</span>
                        </div>
                        <p class="text-gray-600 mb-4">Go'shtli klassik italiyan lazanyasi, beşamel sousi bilan</p>
                        <button class="w-full bg-gray-900 text-white py-2 rounded-lg hover:bg-amber-600 transition-colors">
                            Buyurtma berish
                        </button>
                    </div>
                </div>

                <!-- Taom 4 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden menu-card transform hover:scale-105 transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=600" 
                             alt="Steyk"
                             class="w-full h-56 object-cover"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Steyk'">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-gray-900">Ribay steyk</h3>
                            <span class="text-amber-600 font-bold text-xl">280,000 so'm</span>
                        </div>
                        <p class="text-gray-600 mb-4">Yuqori sifatli mol go'shti, grilda pishirilgan</p>
                        <button class="w-full bg-gray-900 text-white py-2 rounded-lg hover:bg-amber-600 transition-colors">
                            Buyurtma berish
                        </button>
                    </div>
                </div>

                <!-- Taom 5 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden menu-card transform hover:scale-105 transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1555126634-323283e090fa?w=600" 
                             alt="Pasta"
                             class="w-full h-56 object-cover"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Pasta'">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-gray-900">Karbonara pasta</h3>
                            <span class="text-amber-600 font-bold text-xl">130,000 so'm</span>
                        </div>
                        <p class="text-gray-600 mb-4">Italiyancha makaron, bekon, tuxum va parmezan bilan</p>
                        <button class="w-full bg-gray-900 text-white py-2 rounded-lg hover:bg-amber-600 transition-colors">
                            Buyurtma berish
                        </button>
                    </div>
                </div>

                <!-- Taom 6 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden menu-card transform hover:scale-105 transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?w=600" 
                             alt="Desert"
                             class="w-full h-56 object-cover"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Desert'">
                        <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                            Desert
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-gray-900">Tiramisu</h3>
                            <span class="text-amber-600 font-bold text-xl">95,000 so'm</span>
                        </div>
                        <p class="text-gray-600 mb-4">Klassik italiyan deserti, maskarpone va kofe bilan</p>
                        <button class="w-full bg-gray-900 text-white py-2 rounded-lg hover:bg-amber-600 transition-colors">
                            Buyurtma berish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specials Section -->
    <section id="specials" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Kun taomlari
                </h2>
                <div class="w-24 h-1 bg-amber-600 mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Har kuni yangi maxsus taomlar va chegirmalar
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Special 1 -->
                <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-8 shadow-lg border border-amber-200">
                    <div class="text-amber-600 text-4xl mb-4">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Biznes tushlik</h3>
                    <p class="text-gray-600 mb-4">Ish kunlari soat 12:00 dan 15:00 gacha</p>
                    <div class="text-3xl font-bold text-amber-600 mb-4">89,000 so'm</div>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Sho'rva</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Asosiy taom</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Salat</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Choy yoki kofe</li>
                    </ul>
                </div>

                <!-- Special 2 -->
                <div class="bg-gradient-to-br from-red-50 to-pink-50 rounded-2xl p-8 shadow-lg border border-red-200">
                    <div class="text-red-600 text-4xl mb-4">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Romantik kechki ovqat</h3>
                    <p class="text-gray-600 mb-4">2 kishilik maxsus menyu</p>
                    <div class="text-3xl font-bold text-red-600 mb-4">350,000 so'm</div>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Shampan vinosi</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>3 taomdan iborat kechki ovqat</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Shamlar va gullar</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Jonli musiqa</li>
                    </ul>
                </div>

                <!-- Special 3 -->
                <div class="bg-gradient-to-br from-purple-50 to-blue-50 rounded-2xl p-8 shadow-lg border border-purple-200">
                    <div class="text-purple-600 text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Oilaviy kechki ovqat</h3>
                    <p class="text-gray-600 mb-4">4 kishilik oilaviy paket</p>
                    <div class="text-3xl font-bold text-purple-600 mb-4">450,000 so'm</div>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>4 ta asosiy taom</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>2 ta salat</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Desertlar</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Ichimliklar</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Section -->
    <section id="reservation" class="py-20 bg-gray-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-4">
                    Stol band qilish
                </h2>
                <div class="w-24 h-1 bg-amber-600 mx-auto"></div>
                <p class="text-gray-300 mt-4">
                    Oldindan buyurtma qiling va biz sizni kutamiz
                </p>
            </div>
            
            <form class="bg-white text-gray-900 rounded-2xl p-8 shadow-2xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ismingiz</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none" placeholder="Ismingizni kiriting">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Telefon raqamingiz</label>
                        <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none" placeholder="+998 XX XXX XX XX">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Sana</label>
                        <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Vaqt</label>
                        <input type="time" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Kishilar soni</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none">
                            <option>1 kishi</option>
                            <option>2 kishi</option>
                            <option>3 kishi</option>
                            <option>4 kishi</option>
                            <option>5+ kishi</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Maxsus istaklar</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none">
                            <option>Oddiy stol</option>
                            <option>Deraza yonida</option>
                            <option>VIP xona</option>
                            <option>Terasada</option>
                        </select>
                    </div>
                </div>
                
                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Qo'shimcha xabar</label>
                    <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none" rows="3" placeholder="Qo'shimcha istaklaringiz bo'lsa yozing..."></textarea>
                </div>
                
                <button type="submit" class="w-full mt-8 bg-amber-600 text-white py-4 rounded-lg hover:bg-amber-700 transition-all transform hover:scale-105 font-bold text-lg">
                    Bron qilish
                </button>
            </form>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Biz bilan bog'laning
                </h2>
                <div class="w-24 h-1 bg-amber-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-gray-50 rounded-2xl">
                    <div class="text-amber-600 text-4xl mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Manzil</h3>
                    <p class="text-gray-600">
                        Toshkent shahri,<br>
                        Amir Temur ko'chasi, 123
                    </p>
                </div>
                
                <div class="text-center p-8 bg-gray-50 rounded-2xl">
                    <div class="text-amber-600 text-4xl mb-4">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Telefon</h3>
                    <p class="text-gray-600">
                        +998 71 200 00 00<br>
                        +998 90 123 45 67
                    </p>
                </div>
                
                <div class="text-center p-8 bg-gray-50 rounded-2xl">
                    <div class="text-amber-600 text-4xl mb-4">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Ish vaqti</h3>
                    <p class="text-gray-600">
                        Dushanba - Yakshanba<br>
                        10:00 - 23:00
                    </p>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="#home" class="hover:text-amber-600 transition-colors">Bosh sahifa</a></li>
                        <li><a href="#menu" class="hover:text-amber-600 transition-colors">Menyu</a></li>
                        <li><a href="#about" class="hover:text-amber-600 transition-colors">Biz haqimizda</a></li>
                        <li><a href="#contact" class="hover:text-amber-600 transition-colors">Aloqa</a></li>
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
                <p>&copy; 2024 Gourmet Oshxona. Barcha huquqlar himoyalangan.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking a link
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

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

        // Smooth scroll for all anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

</body>
</html>