@extends('layouts.app')

@section('title', 'Menyu | Gourmet Oshxona')

@section('content')
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-gradient-to-r from-amber-600 to-amber-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-playfair text-5xl md:text-6xl font-bold mb-4">Bizning Menyu</h1>
            <p class="text-xl text-amber-100">Har qanday ta'mga mos keladigan keng taomlar tanlovi</p>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Menu Category: Salatlar -->
            <div class="mb-16">
                <h2 class="font-playfair text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <i class="fas fa-leaf text-amber-600 mr-3"></i> Salatlar
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Sezar salati -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600" 
                                 alt="Sezar salati"
                                 class="w-full h-56 object-cover">
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
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>

                    <!-- Grek salati -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=600" 
                                 alt="Grek salati"
                                 class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Grek salati</h3>
                                <span class="text-amber-600 font-bold text-xl">75,000 so'm</span>
                            </div>
                            <p class="text-gray-600 mb-4">Yangi pomidor, bodring, zaytun, feta pishlog'i va zaytun moyi bilan</p>
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>

                    <!-- Kapreze salati -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1608032077018-c9aad9565d2b?w=600" 
                                 alt="Kapreze salati"
                                 class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Kapreze salati</h3>
                                <span class="text-amber-600 font-bold text-xl">90,000 so'm</span>
                            </div>
                            <p class="text-gray-600 mb-4">Motsarella, pomidor, rayhon va balzamik souse bilan</p>
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Category: Pizzalar -->
            <div class="mb-16">
                <h2 class="font-playfair text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <i class="fas fa-pizza-slice text-amber-600 mr-3"></i> Pizzalar
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Margarita -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600" 
                                 alt="Margarita pizza"
                                 class="w-full h-56 object-cover">
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
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>

                    <!-- Pepperoni -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?w=600" 
                                 alt="Pepperoni pizza"
                                 class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Pepperoni pizza</h3>
                                <span class="text-amber-600 font-bold text-xl">130,000 so'm</span>
                            </div>
                            <p class="text-gray-600 mb-4">Pepperoni kolbasa, motsarella va maxsus pomidor sousi bilan</p>
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>

                    <!-- 4 pishloq -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=600" 
                                 alt="4 pishloq pizza"
                                 class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="text-xl font-bold text-gray-900">4 pishloq pizza</h3>
                                <span class="text-amber-600 font-bold text-xl">140,000 so'm</span>
                            </div>
                            <p class="text-gray-600 mb-4">Motsarella, parmezan, gorgonzola va rikotta pishloqlari bilan</p>
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Category: Pasta -->
            <div class="mb-16">
                <h2 class="font-playfair text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <i class="fas fa-utensils text-amber-600 mr-3"></i> Pasta
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Karbonara -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1555126634-323283e090fa?w=600" 
                                 alt="Karbonara pasta"
                                 class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Karbonara pasta</h3>
                                <span class="text-amber-600 font-bold text-xl">130,000 so'm</span>
                            </div>
                            <p class="text-gray-600 mb-4">Italiyancha makaron, bekon, tuxum va parmezan bilan</p>
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>

                    <!-- Lazanya -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?w=600" 
                                 alt="Lazanya"
                                 class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Lazanya</h3>
                                <span class="text-amber-600 font-bold text-xl">145,000 so'm</span>
                            </div>
                            <p class="text-gray-600 mb-4">Go'shtli klassik italiyan lazanyasi, beşamel sousi bilan</p>
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>

                    <!-- Boloneze -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1598866594230-a7c12756260f?w=600" 
                                 alt="Boloneze pasta"
                                 class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Boloneze pasta</h3>
                                <span class="text-amber-600 font-bold text-xl">125,000 so'm</span>
                            </div>
                            <p class="text-gray-600 mb-4">Go'shtli boloneze sousi va parmezan pishlog'i bilan</p>
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Category: Desertlar -->
            <div>
                <h2 class="font-playfair text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <i class="fas fa-cake text-amber-600 mr-3"></i> Desertlar
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Tiramisu -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?w=600" 
                                 alt="Tiramisu"
                                 class="w-full h-56 object-cover">
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
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>

                    <!-- Panna Kotta -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1488477181946-6428a0291777?w=600" 
                                 alt="Panna Kotta"
                                 class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Panna Kotta</h3>
                                <span class="text-amber-600 font-bold text-xl">85,000 so'm</span>
                            </div>
                            <p class="text-gray-600 mb-4">Qaymoqli italiyan deserti, mevali sous bilan</p>
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>

                    <!-- Shokoladli sufle -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1541783245831-57d6fb0926d3?w=600" 
                                 alt="Shokoladli sufle"
                                 class="w-full h-56 object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Shokoladli sufle</h3>
                                <span class="text-amber-600 font-bold text-xl">110,000 so'm</span>
                            </div>
                            <p class="text-gray-600 mb-4">Issiq shokoladli sufle, vanil muzqaymoq bilan</p>
                            <a href="{{ url('/reservation') }}" class="block w-full bg-amber-600 text-white py-2 rounded-lg hover:bg-amber-700 transition-colors text-center">
                                Buyurtma berish
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection