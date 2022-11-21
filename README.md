<h1 align="center">
  E-Commerce Project Repository
</h1>

<p align="center">Dokumentasi project E-Commerce</p><br>

## ⚡️ Development Setup

### Prerequisites

- Install PHP versi `>= 8.0` dan juga MySQL (atau gunakan XAMPP jika ingin langsung menginstall keduanya).
- Clone project ini dan buka melalui text editor.

### Setting Up Project

- Buat file `.env` yang berisikan konfigurasi aplikasi. Contoh untuk isi dari file ini bisa dilihat pada file [.env.example](https://github.com/Buat-Besok/buatbesok_mg_backend/blob/dev/.env.example).

- Install dependencies (membutuhkan Composer & npm):

  ```bash
  composer install
  npm install
  ```

- Jalankan migration:

  ```bash
  php artisan migrate
  ```

- Jalankan app:

  ```bash
  php artisan serve
  ```

## 📖 Contributing Guidelines

Sebelum melakukan kontribusi, ikuti langkah berikut:

- Clone repo ini.

- Buat branch git yang baru:

  ```shell
  git checkout -b myname-featureX
  ```

- Buat perubahan pada branch ini.

- Untuk memastikan konsistensi style pada *codebase*, jalankan linter sebelum melakukan pull request:

  ```shell
  composer run lint
  ```

- Lakukan testing untuk perubahan yang telah dibuat.

- Commit perubahan menggunakan pesan commit yang mengikuti style [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/).

- Push branch ke remote repository (Github):

  ```bash
  git push origin myname-featureX
  ```

- Buka Github, lalu buat pull request baru ke branch `e-commerce-project:dev`.
