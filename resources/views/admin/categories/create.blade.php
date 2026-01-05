@extends('layouts.admin')

@section('title', 'Tambah Kategori - Admin Oymadear')
@section('header', 'Tambah Kategori')

@section('content')
<div class="bg-white rounded-xl shadow-lg p-6 max-w-2xl">
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        
        <div class="mb-6">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Kategori *</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
            @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
            <textarea name="description" id="description" rows="4"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">{{ old('description') }}</textarea>
            @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6 flex items-center">
            <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                   class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
            <label for="is_active" class="ml-2 text-gray-700">Aktif</label>
        </div>

        <div class="flex gap-4">
            <button type="submit" 
                    class="bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                Simpan Kategori
            </button>
            <a href="{{ route('admin.categories.index') }}" 
               class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
