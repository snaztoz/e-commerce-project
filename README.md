<h1 align="center">
  E-Commerce Project Repository
</h1>

<p align="center">Dokumentasi project E-Commerce</p><br>

## ⚡️ Development Setup

### Prerequisites

- Install PHP versi `>= 8.0` dan juga MySQL (atau gunakan XAMPP jika ingin langsung keduanya terinstall).
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

- [Fork](https://docs.github.com/en/github/getting-started-with-github/fork-a-repo) repo ini.

- Pada repository fork, buat perubahan pada branch git yang baru:

  ```shell
  git checkout -b my-fix-branch
  ```

- Untuk memastikan konsistensi style pada *codebase*, jalankan linter sebelum melakukan commit:

  ```shell
  composer run lint
  ```

- Lakukan testing untuk perubahan yang telah dibuat.

- Commit perubahan menggunakan pesan commit yang mengikuti style [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/).

- Push branch ke GitHub:

  ```bash
  git push origin my-fix-branch
  ```

- Buka GitHub, lalu buat pull request baru ke branch `e-commerce-project:dev`.
