@extends('layouts.admin')

@section('title', 'Kelola Kategori - Admin Oymadear')
@section('header', 'Kelola Kategori')

@section('content')
<div class="bg-white rounded-xl shadow-lg p-6 mb-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Daftar Kategori</h2>
        <a href="{{ route('admin.categories.create') }}" 
           class="bg-primary-600 hover:bg-primary-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
            + Tambah Kategori
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b-2 border-gray-200">
                    <th class="text-left py-3 px-4 text-gray-600 font-semibold">Nama Kategori</th>
                    <th class="text-left py-3 px-4 text-gray-600 font-semibold">Slug</th>
                    <th class="text-left py-3 px-4 text-gray-600 font-semibold">Jumlah Produk</th>
                    <th class="text-left py-3 px-4 text-gray-600 font-semibold">Status</th>
                    <th class="text-center py-3 px-4 text-gray-600 font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4 font-medium">{{ $category->name }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ $category->slug }}</td>
                    <td class="py-3 px-4">
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $category->products_count }} produk
                        </span>
                    </td>
                    <td class="py-3 px-4">
                        @if($category->is_active)
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">Aktif</span>
                        @else
                        <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-semibold">Nonaktif</span>
                        @endif
                    </td>
                    <td class="py-3 px-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="{{ route('admin.categories.edit', $category) }}" 
                               class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm transition">
                                Edit
                            </a>
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Yakin ingin menghapus kategori ini?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm transition">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-8 text-gray-500">
                        Belum ada kategori. <a href="{{ route('admin.categories.create') }}" class="text-primary-600 hover:underline">Tambah kategori pertama</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $categories->links() }}
    </div>
</div>
@endsection
