<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).









# 🍛 Warteg Mulya - Sistem Pemesanan Makanan Online

**Warteg Mulya Web App** adalah aplikasi berbasis web yang dibangun menggunakan Framework Laravel. Aplikasi ini bertujuan untuk mendigitalisasi proses pemesanan makanan di Warung Tegal (Warteg), menghubungkan pelanggan di meja makan langsung dengan bagian dapur/admin.

---

## 📸 Screenshots

| Halaman Utama | Halaman Keranjang | Dapur Dashboard | Menu Dashboard |
|:---:|:---:|:---:|:---:|
| ![Home]( https://via.placeholder.com/300x200?text=Halaman+Menu](https://github.com/alft-azyn/Warteg-Mulya/blob/master/img/image4.jpeg ) | ![Keranjang]( https://via.placeholder.com/300x200?text=Keranjang](https://github.com/alft-azyn/Warteg-Mulya/blob/master/img/image3.jpeg ) | ![Dapur]( https://via.placeholder.com/300x200?text=Dapur](https://github.com/alft-azyn/Warteg-Mulya/blob/master/img/image2.jpeg ) | ![Menu]( https://via.placeholder.com/300x200?text=Dapur](https://github.com/alft-azyn/Warteg-Mulya/blob/master/img/image2.jpeg)](https://github.com/alft-azyn/Warteg-Mulya/blob/master/img/image.png ) |


---

## 🚀 Fitur Utama

Aplikasi ini dibagi menjadi dua modul utama:

### 1. Modul Pelanggan (Frontend)
- **Katalog Menu:** Menampilkan daftar makanan/minuman beserta harga dan kategori.
- **Pencarian:** Fitur *Search Bar* untuk mencari menu tertentu.
- **Keranjang Belanja (Cart):** Menyimpan item pesanan sementara sebelum checkout.
- **Checkout:** Pemesanan instan dengan input Nama Pemesan dan Nomor Meja.

### 2. Modul Admin/Dapur (Backend)
- **Login Security:** Proteksi halaman admin menggunakan *Hardcoded Password* & Session.
- **Manajemen Menu (CRUD):** Tambah, Edit, dan Hapus menu makanan secara dinamis.
- **Monitoring Pesanan:** Halaman khusus koki untuk melihat pesanan masuk secara *real-time*.
- **Manajemen Pesanan:** Menandai pesanan sebagai selesai (menghapus dari antrean).

---

## 🛠️ Teknologi yang Digunakan

- **Framework:** [Laravel 10/11](https://laravel.com) (PHP)
- **Frontend:** Blade Templates, Bootstrap 5
- **Database:** MySQL
- **Tools:** Composer, Artisan
