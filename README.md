# Aplikasi Koperasi

Aplikasi Koperasi adalah aplikasi manajemen koperasi berbasis web yang dibangun menggunakan framework Laravel. Aplikasi ini menyediakan fitur-fitur seperti manajemen anggota, manajemen simpanan, manajemen pinjaman, dan laporan keuangan.

## Fitur

- **Manajemen Anggota**: Tambah, edit, hapus, dan lihat data anggota koperasi.
- **Manajemen Simpanan**: Catat simpanan anggota dan lihat riwayat simpanan.
- **Manajemen Pinjaman**: Ajukan pinjaman, setujui pinjaman, dan lihat status pinjaman.
- **Laporan Keuangan**: Lihat laporan keuangan koperasi secara berkala.

## Prasyarat

Sebelum memulai, pastikan Anda sudah menginstall beberapa prasyarat berikut:

- PHP >= 7.3
- Composer
- MySQL atau database lainnya yang didukung oleh Laravel

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan aplikasi ini di lingkungan lokal Anda:

1. **Clone repository ini:**

    ```bash
    git clone https://github.com/username/repo-koperasi.git
    cd repo-koperasi
    ```

2. **Install dependencies menggunakan Composer:**

    ```bash
    composer install
    ```

3. **Buat file environment baru:**

    ```bash
    cp .env.example .env
    ```

4. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5. **Konfigurasi database di file `.env`:**

    Buka file `.env` dan ubah bagian berikut sesuai dengan konfigurasi database Anda:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=cooperation
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. **Migrasi database:**

    ```bash
    php artisan migrate
    ```

7. **Jalankan server pengembangan:**

    ```bash
    php artisan serve
    ```

8. **Buka aplikasi di browser:**

    Kunjungi `http://localhost:8000` untuk mengakses aplikasi.

## Menjalankan Perintah Artisan

Untuk menjalankan perintah `php artisan serve`, pastikan Anda berada di direktori root aplikasi Laravel Anda dan jalankan perintah berikut di terminal:

```bash
php artisan serve
