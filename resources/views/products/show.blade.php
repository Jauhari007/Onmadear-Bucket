@extends('layouts.app')

@section('title', $product->name . ' - Oymadear')

@section('content')
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="mb-8 animate-fade-in">
            <ol class="flex items-center space-x-2 text-gray-600">
                <li><a href="{{ route('home') }}" class="hover:text-primary-600">Home</a></li>
                <li>/</li>
                <li><a href="{{ route('products.index') }}" class="hover:text-primary-600">Katalog</a></li>
                <li>/</li>
                <li class="text-primary-600">{{ $product->name }}</li>
            </ol>
        </nav>

        <!-- Product Detail -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Product Image -->
                <div class="p-8 animate-slide-up">
                    @if($product->image)
                    <img src="{{ Storage::url($product->image) }}" 
                         alt="{{ $product->name }}" 
                         class="w-full h-auto rounded-xl shadow-lg">
                    @else
                    <div class="w-full aspect-square bg-gradient-to-br from-primary-100 to-pink-100 rounded-xl flex items-center justify-center">
                        <span class="text-9xl">🎁</span>
                    </div>
                    @endif
                </div>

                <!-- Product Info -->
                <div class="p-8 animate-slide-up" style="animation-delay: 0.2s;">
                    <!-- Badges -->
                    <div class="flex items-center gap-2 mb-4 flex-wrap">
                        @if($product->is_best_seller)
                        <span class="bg-red-100 text-red-600 text-sm font-semibold px-3 py-1 rounded-full">🔥 Best Seller</span>
                        @endif
                        @if($product->is_new)
                        <span class="bg-green-100 text-green-600 text-sm font-semibold px-3 py-1 rounded-full">✨ New</span>
                        @endif
                        <span class="bg-blue-100 text-blue-600 text-sm font-semibold px-3 py-1 rounded-full">
                            {{ $product->category->name }}
                        </span>
                    </div>

                    <!-- Product Name -->
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ $product->name }}</h1>

                    <!-- Price -->
                    <div class="mb-6">
                        <div class="text-sm text-gray-500 mb-1">Harga mulai dari</div>
                        <div class="text-4xl font-bold text-primary-600">{{ $product->formatted_price }}</div>
                    </div>

                    <!-- Description -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Deskripsi Produk</h3>
                        <p class="text-gray-600 leading-relaxed whitespace-pre-line">{{ $product->description }}</p>
                    </div>

                    <!-- Custom Options Info -->
                    <div class="bg-gradient-to-r from-primary-50 to-pink-50 rounded-xl p-6 mb-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">✨ Opsi Custom</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-600 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Custom teks ucapan sesuai keinginan</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-600 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Pilihan warna bucket</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary-600 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Request tambahan isi bucket</span>
                            </li>
                        </ul>
                    </div>

                    <!-- WhatsApp Button -->
                    <a href="{{ route('products.whatsapp', $product->slug) }}" 
                       target="_blank"
                       class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-6 rounded-xl transition duration-300 transform hover:scale-105 flex items-center justify-center shadow-lg animate-bounce-slow">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Pesan via WhatsApp
                    </a>

                    <p class="text-sm text-gray-500 text-center mt-4">
                        📱 Hubungi admin untuk informasi lebih lanjut dan konfirmasi pesanan
                    </p>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        @if($relatedProducts->count() > 0)
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center animate-fade-in">Produk Terkait</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($relatedProducts as $related)
                <div class="card animate-slide-up" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                    <a href="{{ route('products.show', $related->slug) }}">
                        @if($related->image)
                        <img src="{{ Storage::url($related->image) }}" 
                             alt="{{ $related->name }}" 
                             class="w-full h-48 object-cover transition duration-300 transform hover:scale-110">
                        @else
                        <div class="w-full h-48 bg-gradient-to-br from-primary-100 to-pink-100 flex items-center justify-center">
                            <span class="text-5xl">🎁</span>
                        </div>
                        @endif
                    </a>
                    
                    <div class="p-4">
                        <a href="{{ route('products.show', $related->slug) }}">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 hover:text-primary-600 transition line-clamp-2">
                                {{ $related->name }}
                            </h3>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-primary-600">{{ $related->formatted_price }}</span>
                            <a href="{{ route('products.show', $related->slug) }}" 
                               class="text-primary-600 hover:text-primary-700 font-semibold text-sm">
                                Detail →
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
