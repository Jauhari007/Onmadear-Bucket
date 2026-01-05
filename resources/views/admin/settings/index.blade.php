@extends('layouts.admin')

@section('title', 'Pengaturan - Admin Oymadear')
@section('header', 'Pengaturan')

@section('content')
<div class="bg-white rounded-xl shadow-lg p-6 max-w-3xl">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Pengaturan Website</h2>
    
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-6">
            <label for="whatsapp_number" class="block text-gray-700 font-semibold mb-2">
                📱 Nomor WhatsApp *
            </label>
            <input type="text" name="whatsapp_number" id="whatsapp_number" 
                   value="{{ old('whatsapp_number', $settings['whatsapp_number']) }}" required
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500"
                   placeholder="+62 853-3657-3814">
            <p class="text-gray-500 text-sm mt-1">Format: +62 atau 08xx (tanpa atau dengan spasi/tanda hubung)</p>
            @error('whatsapp_number')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="instagram_url" class="block text-gray-700 font-semibold mb-2">
                📷 URL Instagram *
            </label>
            <input type="url" name="instagram_url" id="instagram_url" 
                   value="{{ old('instagram_url', $settings['instagram_url']) }}" required
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500"
                   placeholder="https://www.instagram.com/oymadear.id/">
            @error('instagram_url')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="whatsapp_message_template" class="block text-gray-700 font-semibold mb-2">
                💬 Template Pesan WhatsApp *
            </label>
            <textarea name="whatsapp_message_template" id="whatsapp_message_template" rows="6" required
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">{{ old('whatsapp_message_template', $settings['whatsapp_message_template']) }}</textarea>
            <p class="text-gray-500 text-sm mt-1">Template pesan yang akan muncul saat customer klik "Pesan via WhatsApp"</p>
            @error('whatsapp_message_template')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
            <h3 class="font-semibold text-blue-800 mb-2">ℹ️ Informasi</h3>
            <ul class="text-blue-700 text-sm space-y-1">
                <li>• Pastikan nomor WhatsApp aktif dan dapat menerima pesan</li>
                <li>• Template pesan akan ditambahkan otomatis dengan informasi produk</li>
                <li>• URL Instagram akan ditampilkan di footer website</li>
            </ul>
        </div>

        <div class="flex gap-4">
            <button type="submit" 
                    class="bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105">
                💾 Simpan Pengaturan
            </button>
        </div>
    </form>
</div>
@endsection
