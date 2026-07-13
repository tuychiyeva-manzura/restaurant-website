@extends('layouts.app')

@section('title', 'Aloqa | Gourmet Oshxona')

@section('content')
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-gradient-to-r from-amber-600 to-amber-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-playfair text-5xl md:text-6xl font-bold mb-4">Biz bilan bog'laning</h1>
            <p class="text-xl text-amber-100">Savol va takliflaringiz uchun biz bilan aloqaga chiqing</p>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Manzil -->
                <div class="text-center p-8 bg-gray-50 rounded-2xl hover:shadow-xl transition-all">
                    <div class="text-amber-600 text-5xl mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Manzil</h3>
                    <p class="text-gray-600">
                        Toshkent shahri,<br>
                        Amir Temur ko'chasi, 123
                    </p>
                    <a href="https://maps.google.com" target="_blank" class="inline-block mt-4 text-amber-600 hover:text-amber-700 font-medium">
                        Xaritada ko'rish <i class="fas fa-external-link-alt ml-1"></i>
                    </a>
                </div>
                
                <!-- Telefon -->
                <div class="text-center p-8 bg-gray-50 rounded-2xl hover:shadow-xl transition-all">
                    <div class="text-amber-600 text-5xl mb-4">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Telefon</h3>
                    <p class="text-gray-600">
                        <a href="tel:+998712000000" class="hover:text-amber-600">+998 71 200 00 00</a><br>
                        <a href="tel:+998901234567" class="hover:text-amber-600">+998 90 123 45 67</a>
                    </p>
                    <a href="tel:+998712000000" class="inline-block mt-4 bg-amber-600 text-white px-6 py-2 rounded-full hover:bg-amber-700 transition-all">
                        Qo'ng'iroq qilish
                    </a>
                </div>
                
                <!-- Ish vaqti -->
                <div class="text-center p-8 bg-gray-50 rounded-2xl hover:shadow-xl transition-all">
                    <div class="text-amber-600 text-5xl mb-4">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 font-playfair">Ish vaqti</h3>
                    <div class="text-gray-600 space-y-2">
                        <p><strong>Dushanba - Juma:</strong><br>10:00 - 23:00</p>
                        <p><strong>Shanba:</strong><br>10:00 - 00:00</p>
                        <p><strong>Yakshanba:</strong><br>10:00 - 22:00</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-10">
                    <h2 class="font-playfair text-3xl font-bold text-gray-900 mb-4">Xabar yuborish</h2>
                    <p class="text-gray-600">Biz bilan bog'lanish uchun quyidagi formani to'ldiring</p>
                </div>
                
                <form action="#" method="POST" class="bg-gray-50 rounded-2xl p-8 shadow-lg">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Ismingiz *</label>
                            <input type="text" name="name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none" 
                                   placeholder="Ismingizni kiriting">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email manzilingiz *</label>
                            <input type="email" name="email" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none" 
                                   placeholder="email@example.com">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Telefon raqamingiz</label>
                        <input type="tel" name="phone" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none" 
                               placeholder="+998 XX XXX XX XX">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Mavzu *</label>
                        <input type="text" name="subject" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none" 
                               placeholder="Xabar mavzusi">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Xabaringiz *</label>
                        <textarea name="message" required rows="5" 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-600 focus:border-transparent outline-none" 
                                  placeholder="Xabaringizni yozing..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-amber-600 text-white py-4 rounded-lg hover:bg-amber-700 transition-all transform hover:scale-105 font-bold text-lg">
                        Xabar yuborish
                    </button>
                </form>
            </div>

            <!-- Social Media -->
            <div class="mt-16 text-center">
                <h3 class="font-playfair text-2xl font-bold text-gray-900 mb-6">Ijtimoiy tarmoqlarda kuzating</h3>
                <div class="flex justify-center space-x-6">
                    <a href="#" class="text-gray-400 hover:text-amber-600 text-3xl transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-amber-600 text-3xl transition-colors">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-amber-600 text-3xl transition-colors">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-amber-600 text-3xl transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection