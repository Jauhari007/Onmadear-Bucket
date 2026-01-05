@extends('layouts.admin')

@section('title', 'Kelola Produk - Admin Oymadear')
@section('header', 'Kelola Produk')

@section('content')
<div class="bg-white rounded-xl shadow-lg p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Daftar Produk</h2>
        <a href="{{ route('admin.products.create') }}" 
           class="bg-primary-600 hover:bg-primary-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
            + Tambah Produk
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b-2 border-gray-200">
                    <th class="text-left py-3 px-4 text-gray-600 font-semibold">Gambar</th>
                    <th class="text-left py-3 px-4 text-gray-600 font-semibold">Nama Produk</th>
                    <th class="text-left py-3 px-4 text-gray-600 font-semibold">Kategori</th>
                    <th class="text-left py-3 px-4 text-gray-600 font-semibold">Harga</th>
                    <th class="text-left py-3 px-4 text-gray-600 font-semibold">Status</th>
                    <th class="text-left py-3 px-4 text-gray-600 font-semibold">Klik WA</th>
                    <th class="text-center py-3 px-4 text-gray-600 font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">
                        @if($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-16 h-16 object-cover rounded-lg">
                        @else
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center text-2xl">
                            🎁
                        </div>
                        @endif
                    </td>
                    <td class="py-3 px-4">
                        <div class="font-medium">{{ $product->name }}</div>
                        <div class="flex gap-1 mt-1">
                            @if($product->is_best_seller)
                            <span class="bg-red-100 text-red-600 px-2 py-0.5 rounded-full text-xs">Best Seller</span>
                            @endif
                            @if($product->is_new)
                            <span class="bg-green-100 text-green-600 px-2 py-0.5 rounded-full text-xs">New</span>
                            @endif
                        </div>
                    </td>
                    <td class="py-3 px-4">{{ $product->category->name }}</td>
                    <td class="py-3 px-4 font-semibold">{{ $product->formatted_price }}</td>
                    <td class="py-3 px-4">
                        @if($product->is_active)
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">Aktif</span>
                        @else
                        <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-semibold">Nonaktif</span>
                        @endif
                    </td>
                    <td class="py-3 px-4 text-center">
                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $product->whatsapp_click_count }}
                        </span>
                    </td>
                    <td class="py-3 px-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="{{ route('admin.products.edit', $product) }}" 
                               class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm transition">
                                Edit
                            </a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Yakin ingin menghapus produk ini?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm transition">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-8 text-gray-500">
                        Belum ada produk. <a href="{{ route('admin.products.create') }}" class="text-primary-600 hover:underline">Tambah produk pertama</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $products->links() }}
    </div>
</div>
@endsection
