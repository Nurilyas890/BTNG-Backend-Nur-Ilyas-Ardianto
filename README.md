# BTNG Backend — API Manajemen Mobil

REST API untuk mengelola data mobil, dibuat menggunakan Laravel sebagai project tugas akhir.

## Teknologi

- PHP
- Laravel
- MySQL
- Postman untuk pengujian API
- Scramble untuk dokumentasi API
- Clever Cloud untuk deployment
- GitHub untuk version control

## Fitur

- Menampilkan daftar mobil
- Menampilkan detail mobil berdasarkan ID
- Menambahkan data mobil
- Memperbarui data mobil
- Menghapus data mobil
- Validasi input
- Respons API dalam format JSON
- Dokumentasi endpoint API

## Deployment

- **Base URL API:** `https://app-87a2d4d8-68e6-4130-aaae-65a2e68517ad.cleverapps.io/api/mobil`
- **Dokumentasi API:** `https://app-87a2d4d8-68e6-4130-aaae-65a2e68517ad.cleverapps.io/docs/api`

## Endpoint API

| Method | Endpoint | Fungsi |
|---|---|---|
| GET | `/api/mobil` | Menampilkan daftar mobil |
| GET | `/api/mobil/{mobil}` | Menampilkan detail mobil |
| POST | `/api/mobil` | Menambahkan mobil |
| PUT | `/api/mobil/{mobil}` | Memperbarui mobil |
| PATCH | `/api/mobil/{mobil}` | Memperbarui sebagian data mobil |
| DELETE | `/api/mobil/{mobil}` | Menghapus mobil |

## Contoh Request

Contoh menambahkan mobil menggunakan method `POST` dengan Body berformat JSON:

```json
{
  "nama": "Avanza Veloz",
  "brand": "Toyota",
  "harga": 250000000,
  "tahun": 2024,
  "transmisi": "Matic",
  "bahan_bakar": "Bensin",
  "status": "tersedia"
}
```

Sesuaikan nilai dengan aturan validasi yang diterapkan pada API.

## Cara Menjalankan Secara Lokal

1. Clone repository ini.
2. Masuk ke direktori project.
3. Instal dependency:

   ```bash
   composer install
   ```

4. Salin `.env.example` menjadi `.env`, lalu sesuaikan konfigurasi database.
5. Buat application key:

   ```bash
   php artisan key:generate
   ```

6. Jalankan migrasi database:

   ```bash
   php artisan migrate
   ```

7. Jalankan server lokal:

   ```bash
   php artisan serve
   ```

## Pengujian

Endpoint API diuji menggunakan Postman. Pengujian pada deployment Clever Cloud mencakup GET, POST, PUT, dan DELETE.

## Repository

Kode sumber tersedia di GitHub:

https://github.com/Nurilyas890/BTNG-Backend-Nur-Ilyas-Ardianto
