@extends('layouts.app')

@section('title', 'Maxsus Takliflar | Gourmet Oshxona')

@section('content')
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-gradient-to-r from-red-600 to-amber-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-playfair text-5xl md:text-6xl font-bold mb-4">Maxsus Takliflar</h1>
            <p class="text-xl text-amber-100">Chegirmalar va aksiyalar</p>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Bugungi maxsus taklif -->
            <div class="bg-gradient-to-r from-amber-500 to-red-500 rounded-3xl p-8 md:p-12 text-white mb-12">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0">
                        <span class="bg-white text-red-600 px-4 py-2 rounded-full text-sm font-bold">KUN TAKLIFI</span>
                        <h2 class="font-playfair text-3xl md:text-4xl font-bold mt-4 mb-3">50% Chegirma!</h2>
                        <p class="text-xl mb-4">Har dushanba kuni barcha pizzalar 50% chegirma bilan</p>
                        <p class="text-5xl font-bold font-playfair">50%</p>
                    </div>
                    <a href="{{ url('/reservation') }}" class="bg-white text-red-600 px-8 py-4 rounded-full hover:bg-gray-100 transition-all font-bold text-lg">
                        Hoziroq bron qilish
                    </a>
                </div>
            </div>

            <!-- Boshqa takliflar -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Biznes tushlik -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-amber-200">
                    <div class="text-amber-600 text-4xl mb-4">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Biznes Tushlik</h3>
                    <p class="text-gray-600 mb-2">Dushanba - Juma</p>
                    <p class="text-gray-600 mb-4">12:00 - 15:00</p>
                    <div class="text-3xl font-bold text-amber-600 mb-4">89,000 so'm</div>
                    <ul class="space-y-2 text-gray-600 mb-6">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Kun sho'rvasi</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Asosiy taom</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Salat</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Ichimlik</li>
                    </ul>
                    <a href="{{ url('/reservation') }}" class="block text-center bg-amber-600 text-white py-3 rounded-lg hover:bg-amber-700 transition-colors font-medium">
                        Buyurtma berish
                    </a>
                </div>

                <!-- Romantik kechki ovqat -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-red-200">
                    <div class="text-red-600 text-4xl mb-4">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Romantik Kechki Ovqat</h3>
                    <p class="text-gray-600 mb-2">2 kishilik</p>
                    <p class="text-gray-600 mb-4">Har kuni 18:00 - 23:00</p>
                    <div class="text-3xl font-bold text-red-600 mb-4">350,000 so'm</div>
                    <ul class="space-y-2 text-gray-600 mb-6">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Shampan vinosi</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>3 taomli kechki ovqat</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Shamlar va gullar</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Jonli musiqa</li>
                    </ul>
                    <a href="{{ url('/reservation') }}" class="block text-center bg-red-600 text-white py-3 rounded-lg hover:bg-red-700 transition-colors font-medium">
                        Bron qilish
                    </a>
                </div>

                <!-- Oilaviy paket -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-purple-200">
                    <div class="text-purple-600 text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Oilaviy Paket</h3>
                    <p class="text-gray-600 mb-2">4 kishilik</p>
                    <p class="text-gray-600 mb-4">Har yakshanba</p>
                    <div class="text-3xl font-bold text-purple-600 mb-4">450,000 so'm</div>
                    <ul class="space-y-2 text-gray-600 mb-6">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>4 ta asosiy taom</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>2 ta salat</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Desertlar</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Bolalar uchun sovg'a</li>
                    </ul>
                    <a href="{{ url('/reservation') }}" class="block text-center bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition-colors font-medium">
                        Buyurtma berish
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
