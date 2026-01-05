@extends('layouts.app')

@section('title', 'Katalog Bucket - Oymadear')

@section('content')
<!-- Header -->
<section class="bg-gradient-to-r from-primary-500 to-pink-500 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in">Katalog Bucket</h1>
        <p class="text-xl animate-fade-in">Temukan bucket sempurna untuk momen spesialmu</p>
    </div>
</section>

<!-- Filter & Search -->
<section class="py-8 bg-white shadow-md sticky top-16 z-40">
    <div class="container mx-auto px-4">
        <form method="GET" action="{{ route('products.index') }}" class="flex flex-col md:flex-row gap-4">
            <!-- Search -->
            <div class="flex-1">
                <input type="text" 
                       name="search" 
                       value="{{ request('search') }}"
                       placeholder="Cari bucket..." 
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
            </div>
            
            <!-- Category Filter -->
            <div class="w-full md:w-64">
                <select name="category" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <option value="">Semua Kategori</option>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->slug }}" {{ request('category') == $cat->slug ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn-primary">
                Cari
            </button>
        </form>
    </div>
</section>

<!-- Products Grid -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        @if($products->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="card animate-slide-up" style="animation-delay: {{ $loop->index * 0.05 }}s;">
                <a href="{{ route('products.show', $product->slug) }}">
                    @if($product->image)
                    <img src="{{ Storage::url($product->image) }}" 
                         alt="{{ $product->name }}" 
                         class="w-full h-56 object-cover transition duration-300 transform hover:scale-110">
                    @else
                    <div class="w-full h-56 bg-gradient-to-br from-primary-100 to-pink-100 flex items-center justify-center">
                        <span class="text-6xl">🎁</span>
                    </div>
                    @endif
                </a>
                
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-2 flex-wrap">
                        @if($product->is_best_seller)
                        <span class="bg-red-100 text-red-600 text-xs font-semibold px-2 py-1 rounded-full">Best Seller</span>
                        @endif
                        @if($product->is_new)
                        <span class="bg-green-100 text-green-600 text-xs font-semibold px-2 py-1 rounded-full">New</span>
                        @endif
                    </div>
                    
                    <a href="{{ route('products.show', $product->slug) }}">
                        <h3 class="text-lg font-bold text-gray-800 mb-1 hover:text-primary-600 transition line-clamp-2">
                            {{ $product->name }}
                        </h3>
                    </a>
                    
                    <p class="text-sm text-gray-500 mb-3">{{ $product->category->name }}</p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-primary-600">{{ $product->formatted_price }}</span>
                        <a href="{{ route('products.show', $product->slug) }}" 
                           class="bg-primary-600 hover:bg-primary-700 text-white text-sm font-semibold py-2 px-4 rounded-lg transition duration-300">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-12">
            {{ $products->links() }}
        </div>
        @else
        <div class="text-center py-16">
            <div class="text-6xl mb-4">🔍</div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Produk Tidak Ditemukan</h3>
            <p class="text-gray-600 mb-6">Coba kata kunci atau kategori lain</p>
            <a href="{{ route('products.index') }}" class="btn-primary">
                Lihat Semua Produk
            </a>
        </div>
        @endif
    </div>
</section>
@endsection
