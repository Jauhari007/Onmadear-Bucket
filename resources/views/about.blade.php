@extends('layouts.app')

@section('title', 'Tentang Kami - Oymadear')

@section('content')
<section class="bg-gradient-to-r from-primary-500 to-pink-500 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in">Tentang Oymadear</h1>
        <p class="text-xl animate-fade-in">Bucket untuk setiap momen spesialmu</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12 animate-slide-up">
            <div class="text-6xl mb-6">🎁</div>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Siapa Kami?</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Oymadear adalah brand bucket bunga dan hadiah yang berkomitmen untuk membuat setiap momen spesialmu 
                menjadi lebih berkesan. Kami menyediakan berbagai pilihan bucket yang dapat disesuaikan dengan kebutuhan 
                dan keinginanmu.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="text-center p-6 bg-gradient-to-br from-primary-50 to-pink-50 rounded-xl animate-slide-up">
                <div class="text-4xl mb-4">💕</div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Dibuat dengan Cinta</h3>
                <p class="text-gray-600">Setiap bucket dibuat dengan penuh perhatian dan kasih sayang</p>
            </div>

            <div class="text-center p-6 bg-gradient-to-br from-primary-50 to-pink-50 rounded-xl animate-slide-up" style="animation-delay: 0.1s;">
                <div class="text-4xl mb-4">✨</div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Kualitas Terbaik</h3>
                <p class="text-gray-600">Menggunakan bahan berkualitas untuk hasil terbaik</p>
            </div>

            <div class="text-center p-6 bg-gradient-to-br from-primary-50 to-pink-50 rounded-xl animate-slide-up" style="animation-delay: 0.2s;">
                <div class="text-4xl mb-4">🎨</div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Custom Sesuai Keinginan</h3>
                <p class="text-gray-600">Personalisasi bucket sesuai dengan keinginanmu</p>
            </div>
        </div>

        <div class="bg-gradient-to-r from-primary-500 to-pink-500 text-white rounded-2xl p-8 text-center animate-fade-in">
            <h3 class="text-2xl font-bold mb-4">Kenapa Memilih Oymadear?</h3>
            <ul class="space-y-3 text-left max-w-2xl mx-auto">
                <li class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Desain bucket yang unik dan menarik</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Proses pemesanan yang mudah via WhatsApp</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Pelayanan ramah dan responsif</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Harga yang kompetitif dan terjangkau</span>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection
