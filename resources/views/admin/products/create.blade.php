@extends('layouts.admin')

@section('title', 'Tambah Produk - Admin Oymadear')
@section('header', 'Tambah Produk')

@section('content')
<div class="bg-white rounded-xl shadow-lg p-6">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Nama Produk -->
            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Produk *</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kategori -->
            <div>
                <label for="category_id" class="block text-gray-700 font-semibold mb-2">Kategori *</label>
                <select name="category_id" id="category_id" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Harga -->
            <div>
                <label for="price" class="block text-gray-700 font-semibold mb-2">Harga *</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}" required step="0.01" min="0"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                @error('price')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Gambar -->
            <div>
                <label for="image" class="block text-gray-700 font-semibold mb-2">Gambar Produk</label>
                <input type="file" name="image" id="image" accept="image/*"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                <p class="text-gray-500 text-sm mt-1">Format: JPG, PNG, GIF. Max 2MB</p>
                @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Deskripsi -->
        <div class="mt-6">
            <label for="description" class="block text-gray-700 font-semibold mb-2">Deskripsi *</label>
            <textarea name="description" id="description" rows="5" required
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">{{ old('description') }}</textarea>
            @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Checkboxes -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="flex items-center">
                <input type="checkbox" name="is_best_seller" id="is_best_seller" value="1" {{ old('is_best_seller') ? 'checked' : '' }}
                       class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                <label for="is_best_seller" class="ml-2 text-gray-700">Best Seller</label>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="is_new" id="is_new" value="1" {{ old('is_new') ? 'checked' : '' }}
                       class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                <label for="is_new" class="ml-2 text-gray-700">Produk Baru</label>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                       class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                <label for="is_active" class="ml-2 text-gray-700">Aktif</label>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-8 flex gap-4">
            <button type="submit" 
                    class="bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                Simpan Produk
            </button>
            <a href="{{ route('admin.products.index') }}" 
               class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
