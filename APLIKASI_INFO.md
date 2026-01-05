# 🎁 Oymadear - Aplikasi Penjualan Bucket

Web aplikasi penjualan bucket dengan Laravel 12 dan Tailwind CSS.

## 📋 Fitur

### User (Pengunjung)
- ✅ Landing page dengan animasi menarik
- ✅ Katalog produk bucket dengan filter kategori
- ✅ Detail produk lengkap
- ✅ Pesan langsung via WhatsApp
- ✅ Halaman About & Contact

### Admin Panel
- ✅ Dashboard dengan statistik
- ✅ CRUD Produk (Create, Read, Update, Delete)
- ✅ CRUD Kategori
- ✅ Pengaturan WhatsApp & Instagram
- ✅ Tracking klik WhatsApp per produk

## 🚀 Instalasi & Setup

Aplikasi sudah siap digunakan! Database sudah termigrasi dan terisi dengan data sample.

### Akses Admin
- URL: `http://localhost:8000/login`
- Email: `admin@oymadear.com`
- Password: `password`

### Akses Website
- URL: `http://localhost:8000`

## 📁 Struktur Database

### Tables
1. **users** - Data pengguna dan admin
2. **categories** - Kategori bucket (Wisuda, Anniversary, Birthday, Custom)
3. **products** - Data produk bucket
4. **settings** - Pengaturan aplikasi (WhatsApp, Instagram, Template pesan)

## 🎨 Teknologi

- **Backend**: Laravel 12
- **Frontend**: Tailwind CSS 4
- **Database**: MySQL (oymadear_db)
- **Assets**: Vite

## 📱 Kontak

- WhatsApp: +62 853-3657-3814
- Instagram: https://www.instagram.com/oymadear.id/

## 🎯 Menu Website

### User Menu
- Home
- Katalog
- Detail Produk
- Tentang Kami
- Kontak

### Admin Menu
- Dashboard
- Kelola Produk
- Kelola Kategori
- Pengaturan
- Logout

## 📝 Cara Menggunakan

### Untuk Admin:
1. Login ke `/login`
2. Kelola produk dan kategori di admin panel
3. Update pengaturan WhatsApp dan Instagram
4. Lihat statistik klik WhatsApp

### Untuk Customer:
1. Browse katalog produk
2. Filter berdasarkan kategori
3. Klik produk untuk melihat detail
4. Klik "Pesan via WhatsApp" untuk langsung chat dengan admin
5. Admin akan menerima pesan otomatis dengan detail produk

## 🎁 Data Sample

Aplikasi sudah terisi dengan:
- 1 Admin user
- 4 Kategori (Wisuda, Anniversary, Birthday, Custom)
- 4 Produk sample
- Pengaturan WhatsApp & Instagram

## 🔧 Command Laravel Penting

```bash
# Menjalankan server
php artisan serve

# Migrasi database
php artisan migrate

# Seed database
php artisan db:seed

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## 🌟 Fitur Unggulan

- ✨ Design modern dengan animasi Tailwind CSS
- 📱 Responsive untuk semua device
- 🚀 Fast loading dengan Vite
- 💬 Integrasi WhatsApp otomatis
- 📊 Dashboard admin lengkap
- 🎨 Custom warna dan tema
- 🔒 Authentication untuk admin
- 📈 Tracking engagement (WhatsApp clicks)

---

Dibuat dengan ❤️ untuk Oymadear
