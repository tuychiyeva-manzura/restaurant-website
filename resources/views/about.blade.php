@extends('layouts.app')

@section('title', 'Biz haqimizda | Gourmet Oshxona')

@section('content')
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-gradient-to-r from-amber-600 to-amber-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-playfair text-5xl md:text-6xl font-bold mb-4">Biz haqimizda</h1>
            <p class="text-xl text-amber-100">Gourmet Oshxona tarixi va qadriyatlari</p>
        </div>
    </section>

    <!-- About Story -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-6">
                    <h2 class="font-playfair text-4xl font-bold text-gray-900">
                        Oshxonamizning tarixi
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Restoranimiz 2010 yilda ochilgan bo'lib, o'shandan beri biz eng yuqori sifatli mahsulotlardan 
                        tayyorlangan mazali taomlarni taklif etamiz. Bizning oshpazlarimiz Italiya va O'zbek oshxonasining 
                        eng yaxshi an'analarini birlashtirgan.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Har bir taom sevgi va e'tibor bilan tayyorlanadi. Biz faqat eng yaxshi mahalliy va import 
                        mahsulotlardan foydalanamiz. Mijozlarimizning mamnuniyati biz uchun eng muhim mukofotdir.
                    </p>
                    
                    <div class="grid grid-cols-3 gap-4 pt-6">
                        <div class="text-center p-4 bg-amber-50 rounded-xl">
                            <div class="text-3xl font-bold text-amber-600 font-playfair">14+</div>
                            <div class="text-gray-600 text-sm">Yillik tajriba</div>
                        </div>
                        <div class="text-center p-4 bg-amber-50 rounded-xl">
                            <div class="text-3xl font-bold text-amber-600 font-playfair">50+</div>
                            <div class="text-gray-600 text-sm">Taom turlari</div>
                        </div>
                        <div class="text-center p-4 bg-amber-50 rounded-xl">
                            <div class="text-3xl font-bold text-amber-600 font-playfair">1000+</div>
                            <div class="text-gray-600 text-sm">Mamnun mijozlar</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800" 
                         alt="Restoran ichki ko'rinishi"
                         class="rounded-2xl shadow-2xl w-full"
                         onerror="this.src='https://via.placeholder.com/800x600?text=Restoran+Ichi'">
                    <div class="absolute -bottom-6 -right-6 bg-amber-600 text-white p-6 rounded-2xl shadow-xl hidden md:block">
                        <p class="font-playfair text-3xl font-bold">14+</p>
                        <p class="text-sm">Yillik tajriba</p>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="mt-20">
                <div class="text-center mb-16">
                    <h2 class="font-playfair text-4xl font-bold text-gray-900 mb-4">Bizning jamoa</h2>
                    <div class="w-24 h-1 bg-amber-600 mx-auto"></div>
                    <p class="text-gray-600 mt-4">Professional oshpazlar va xodimlar jamoasi</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Bosh oshpaz -->
                    <div class="text-center group">
                        <div class="relative inline-block">
                            <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?w=400" 
                                 alt="Bosh oshpaz"
                                 class="w-48 h-48 rounded-full mx-auto mb-4 object-cover shadow-lg group-hover:shadow-2xl transition-all"
                                 onerror="this.src='https://via.placeholder.com/400x400?text=Bosh+Oshpaz'">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Marco Rossi</h3>
                        <p class="text-amber-600 font-medium">Bosh oshpaz</p>
                        <p class="text-gray-600 mt-2">Italiyadan kelgan 20 yillik tajribaga ega professional oshpaz</p>
                    </div>
                    
                    <!-- Sous oshpaz -->
                    <div class="text-center group">
                        <div class="relative inline-block">
                            <img src="https://images.unsplash.com/photo-1583394293214-28ded15ee548?w=400" 
                                 alt="Sous oshpaz"
                                 class="w-48 h-48 rounded-full mx-auto mb-4 object-cover shadow-lg group-hover:shadow-2xl transition-all"
                                 onerror="this.src='https://via.placeholder.com/400x400?text=Sous+Oshpaz'">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Dilshod Karimov</h3>
                        <p class="text-amber-600 font-medium">Sous oshpaz</p>
                        <p class="text-gray-600 mt-2">O'zbek milliy taomlari bo'yicha mutaxassis, 10 yillik tajriba</p>
                    </div>
                    
                    <!-- Administrator -->
                    <div class="text-center group">
                        <div class="relative inline-block">
                            <img src="https://images.unsplash.com/photo-1581299894007-aaa50297cf16?w=400" 
                                 alt="Administrator"
                                 class="w-48 h-48 rounded-full mx-auto mb-4 object-cover shadow-lg group-hover:shadow-2xl transition-all"
                                 onerror="this.src='https://via.placeholder.com/400x400?text=Administrator'">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Anna Petrova</h3>
                        <p class="text-amber-600 font-medium">Restoran administratori</p>
                        <p class="text-gray-600 mt-2">Mehmonlarga yuqori darajadagi xizmat ko'rsatish bo'yicha mutaxassis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl font-bold text-gray-900 mb-4">Bizning qadriyatlarimiz</h2>
                <div class="w-24 h-1 bg-amber-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl transition-all">
                    <div class="text-amber-600 text-4xl mb-4">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sifat</h3>
                    <p class="text-gray-600">Faqat eng yaxshi va yangi mahsulotlardan foydalanamiz</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl transition-all">
                    <div class="text-amber-600 text-4xl mb-4">
                        <i class="fas fa-hand-sparkles"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Tozalik</h3>
                    <p class="text-gray-600">Yuqori gigiyena standartlariga amal qilamiz</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl transition-all">
                    <div class="text-amber-600 text-4xl mb-4">
                        <i class="fas fa-smile"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mehmondo'stlik</h3>
                    <p class="text-gray-600">Har bir mehmonga alohida e'tibor va xizmat</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl transition-all">
                    <div class="text-amber-600 text-4xl mb-4">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">An'analar</h3>
                    <p class="text-gray-600">Italiya va O'zbek oshxonasi an'analarini saqlaymiz</p>
                </div>
            </div>
        </div>
    </section>
@endsection