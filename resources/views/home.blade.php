@extends('layouts.app')

@section('title', 'Oymadear - Bucket untuk Setiap Momen Spesialmu')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-primary-500 to-pink-500 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center animate-fade-in">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-slide-up">
                Oymadear
            </h1>
            <p class="text-xl md:text-2xl mb-8 animate-slide-up" style="animation-delay: 0.2s;">
                Bucket untuk setiap momen spesialmu 🎁
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-up" style="animation-delay: 0.4s;">
                <a href="{{ route('products.index') }}" class="bg-white text-primary-600 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                    Lihat Katalog
                </a>
                <a href="#best-sellers" class="bg-transparent border-2 border-white hover:bg-white hover:text-primary-600 font-semibold py-3 px-8 rounded-lg transition duration-300">
                    Produk Terlaris
                </a>
            </div>
        </div>
    </div>
    
    <!-- Decorative elements -->
    <div class="absolute top-10 left-10 text-6xl animate-bounce-slow opacity-50">🎉</div>
    <div class="absolute bottom-10 right-10 text-6xl animate-bounce-slow opacity-50" style="animation-delay: 1s;">🎈</div>
</section>

<!-- Categories Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Kategori Bucket</h2>
            <p class="text-gray-600">Pilih bucket sesuai dengan momen spesialmu</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($categories as $category)
            <a href="{{ route('products.index', ['category' => $category->slug]) }}" 
               class="group bg-gradient-to-br from-primary-50 to-pink-50 rounded-xl p-6 text-center hover:shadow-xl transition duration-300 transform hover:-translate-y-2 animate-slide-up"
               style="animation-delay: {{ $loop->index * 0.1 }}s;">
                <div class="text-4xl mb-3">
                    @if(stripos($category->name, 'wisuda') !== false) 🎓
                    @elseif(stripos($category->name, 'anniversary') !== false) 💕
                    @elseif(stripos($category->name, 'birthday') !== false) 🎂
                    @else 🎁
                    @endif
                </div>
                <h3 class="font-semibold text-gray-800 group-hover:text-primary-600 transition">{{ $category->name }}</h3>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Best Sellers Section -->
@if($bestSellers->count() > 0)
<section id="best-sellers" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Produk Terlaris 🔥</h2>
            <p class="text-gray-600">Bucket favorit yang paling banyak dipesan</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($bestSellers as $product)
            <div class="card animate-slide-up" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                @if($product->image)
                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
                @else
                <div class="w-full h-64 bg-gradient-to-br from-primary-100 to-pink-100 flex items-center justify-center">
                    <span class="text-6xl">🎁</span>
                </div>
                @endif
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-red-100 text-red-600 text-xs font-semibold px-3 py-1 rounded-full">Best Seller</span>
                        <span class="text-gray-500 text-sm">{{ $product->category->name }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ Str::limit($product->description, 80) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-primary-600">{{ $product->formatted_price }}</span>
                        <a href="{{ route('products.show', $product->slug) }}" 
                           class="bg-primary-600 hover:bg-primary-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 transform hover:scale-105">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('products.index') }}" class="btn-primary inline-block">
                Lihat Semua Produk
            </a>
        </div>
    </div>
</section>
@endif

<!-- New Products Section -->
@if($newProducts->count() > 0)
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Produk Terbaru ✨</h2>
            <p class="text-gray-600">Koleksi bucket terbaru kami</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($newProducts as $product)
            <div class="card animate-slide-up" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                @if($product->image)
                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
                @else
                <div class="w-full h-64 bg-gradient-to-br from-primary-100 to-pink-100 flex items-center justify-center">
                    <span class="text-6xl">🎁</span>
                </div>
                @endif
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-green-100 text-green-600 text-xs font-semibold px-3 py-1 rounded-full">New</span>
                        <span class="text-gray-500 text-sm">{{ $product->category->name }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ Str::limit($product->description, 80) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-primary-600">{{ $product->formatted_price }}</span>
                        <a href="{{ route('products.show', $product->slug) }}" 
                           class="bg-primary-600 hover:bg-primary-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 transform hover:scale-105">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-primary-500 to-pink-500 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 animate-fade-in">Siap Membuat Momen Spesialmu?</h2>
        <p class="text-xl mb-8 animate-fade-in">Pesan bucket custom sesuai keinginanmu sekarang!</p>
        <a href="{{ route('products.index') }}" 
           class="bg-white text-primary-600 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105 inline-block animate-bounce-slow">
            Mulai Pesan
        </a>
    </div>
</section>
@endsection
