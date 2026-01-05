@extends('layouts.app')

@section('title', 'Kontak - Oymadear')

@section('content')
<section class="bg-gradient-to-r from-primary-500 to-pink-500 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in">Hubungi Kami</h1>
        <p class="text-xl animate-fade-in">Kami siap membantu mewujudkan bucket impianmu</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Info -->
            <div class="animate-slide-up">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>
                
                <div class="space-y-6">
                    <!-- WhatsApp -->
                    <div class="flex items-start p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-xl hover:shadow-lg transition">
                        <div class="bg-green-500 text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">WhatsApp</h3>
                            <p class="text-gray-600 mb-2">+62 853-3657-3814</p>
                            <a href="https://wa.me/6285336573814" target="_blank" 
                               class="text-green-600 hover:text-green-700 font-semibold">
                                Chat Sekarang →
                            </a>
                        </div>
                    </div>

                    <!-- Instagram -->
                    <div class="flex items-start p-4 bg-gradient-to-br from-pink-50 to-purple-100 rounded-xl hover:shadow-lg transition">
                        <div class="bg-gradient-to-br from-pink-500 to-purple-600 text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">Instagram</h3>
                            <p class="text-gray-600 mb-2">@oymadear.id</p>
                            <a href="https://www.instagram.com/oymadear.id/" target="_blank" 
                               class="text-pink-600 hover:text-pink-700 font-semibold">
                                Follow Kami →
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-6 bg-gradient-to-br from-primary-50 to-pink-50 rounded-xl">
                    <h3 class="font-bold text-gray-800 mb-3">⏰ Jam Operasional</h3>
                    <p class="text-gray-600">Senin - Sabtu: 09.00 - 21.00 WIB</p>
                    <p class="text-gray-600">Minggu: 10.00 - 18.00 WIB</p>
                </div>
            </div>

            <!-- Quick Message -->
            <div class="animate-slide-up" style="animation-delay: 0.2s;">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Pesan Cepat</h2>
                
                <div class="bg-gradient-to-br from-primary-50 to-pink-50 rounded-xl p-6">
                    <p class="text-gray-700 mb-4">
                        Klik tombol di bawah untuk langsung chat dengan admin kami via WhatsApp!
                    </p>
                    
                    <a href="https://wa.me/6285336573814?text=Halo%20admin%20oymadear%20%F0%9F%91%8B%0ASaya%20ingin%20bertanya%20tentang%20bucket" 
                       target="_blank"
                       class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-6 rounded-xl transition duration-300 transform hover:scale-105 flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Chat WhatsApp
                    </a>

                    <div class="mt-6">
                        <h4 class="font-bold text-gray-800 mb-3">Yang Bisa Kami Bantu:</h4>
                        <ul class="space-y-2 text-gray-700 text-sm">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-primary-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Konsultasi desain bucket
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-primary-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Informasi harga dan promo
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-primary-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Custom request khusus
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-primary-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Tracking pesanan
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
