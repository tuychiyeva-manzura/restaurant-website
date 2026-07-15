@extends('layouts.app')

@section('title', 'Galereya | Gourmet Oshxona')

@section('content')
    <section class="pt-32 pb-16 bg-gradient-to-r from-gray-800 to-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-playfair text-5xl md:text-6xl font-bold mb-4">Galereya</h1>
            <p class="text-xl text-gray-300">Restoranimiz muhiti va taomlarimizdan lavhalar</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Galereya filter -->
            <div class="flex justify-center space-x-4 mb-12">
                <button class="px-6 py-2 bg-amber-600 text-white rounded-full">Barchasi</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-amber-600 hover:text-white transition-colors">Interyer</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-amber-600 hover:text-white transition-colors">Taomlar</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-amber-600 hover:text-white transition-colors">Tadbirlar</button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="relative group overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=600" alt="Restoran" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white text-lg font-bold">Asosiy zal</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600" alt="Interyer" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white text-lg font-bold">Romantik burchak</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600" alt="Taom" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white text-lg font-bold">Sezar salati</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600" alt="Pizza" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white text-lg font-bold">Margarita Pizza</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?w=600" alt="Bar" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white text-lg font-bold">Bar burchagi</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?w=600" alt="Desert" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white text-lg font-bold">Tiramisu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection