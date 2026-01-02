<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Framework-Laravel-red" />
  <img src="https://img.shields.io/badge/API-RESTful-blue" />
  <img src="https://img.shields.io/badge/Auth-JWT-green" />
  <img src="https://img.shields.io/badge/Database-MySQL-orange" />
</p>

# Pengembangan API Sistem E-Commerce Sederhana RESTful Web Service Menggunakan Laravel

## 📌 Deskripsi Singkat
Proyek ini merupakan **RESTful Web Service berbasis Laravel** yang dikembangkan untuk mendukung kebutuhan **sistem E-Commerce sederhana**.  
API ini menyediakan layanan backend untuk pengelolaan data **pengguna, produk, kategori, transaksi/pesanan**, serta **log aktivitas sistem**.

Sistem menerapkan **autentikasi JWT (JSON Web Token)** untuk menjaga keamanan akses endpoint API dan menyediakan **dokumentasi API menggunakan Postman** agar mudah diuji serta diintegrasikan dengan aplikasi lain.

Proyek ini dikembangkan sebagai **Ujian Akhir Semester (UAS) Mata Kuliah Pemrograman Web Service**.

---

## 🎯 Tujuan Proyek
- Mengembangkan RESTful Web Service menggunakan Laravel  
- Menerapkan autentikasi JWT untuk keamanan API  
- Mengelola minimal **5 resource utama**  
- Menerapkan validasi, error handling, dan HTTP status code sesuai standar REST  
- Menyediakan dokumentasi API yang jelas dan terstruktur  

---

## 📦 Resource Utama
- Users  
- Products  
- Categories  
- Orders / Transactions  
- Activity Logs  

---

## ▶️ Cara Menjalankan Sistem

Sistem ini dikembangkan menggunakan **framework Laravel**, sehingga server dijalankan dengan perintah `php artisan serve`.

### Langkah-langkah menjalankan sistem:

1. **Clone repositori**
   ```bash
   git clone https://github.com/username/nama-repository.git
   cd nama-repository

2. **Install dependency**
   ```bash
   composer install

3. **Konfigurasi Environment**
   ```bash
   cp .env.example .env
Sesuaikan konfigurasi database pada file .env.

4. **Generate application key (jika belum ada)**
   ```bash
   php artisan key:generate

5. **Generate JWT secret**
   ```bash
   php artisan jwt:secret


6. **Migrasi dan seeding database**
   ```bash
   php artisan migrate --seed

7. **Menjalankan server**
   ```bash
   php artisan serve


8. **Akses API**
   ```bash
   (http://127.0.0.1:8000/api)

Pengujian endpoint dilakukan menggunakan Postman sesuai dokumentasi API.
--
🔐 Informasi Akun Uji Coba

(Jika menggunakan seeder)

Email    : admin@example.com
Password : password


Atau pengguna dapat melakukan register melalui endpoint API.

----

📚 Dokumentasi API (Postman)

Link Dokumentasi Niken (Auth & Users):
https://documenter.getpostman.com/view/49209827/2sBXVZput2

Link Dokumentasi Ratu (Products & Categories):
https://documenter.getpostman.com/view/49032510/2sBXVbHu6e

Link Dokumentasi Zira (Orders, Log, Final API):
https://documenter.getpostman.com/view/49209827/2sBXVZput2

---
👥 Tim Pengembang

Niken – Autentikasi JWT & Manajemen Pengguna

Ratu – Database, Produk & Kategori

Zira – Transaksi, Log Aktivitas & Dokumentasi API

----
🛠️ Teknologi yang Digunakan

PHP

Laravel

MySQL

JWT (JSON Web Token)

Postman

Git & GitHub
