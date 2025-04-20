# 🚀 Panduan Setup **Laravel dan Livewire** (Catatan Pert3)

## 1. Buat dan Build Docker Compose

Buat file `docker-compose.yml` dengan konfigurasi berikut:

```yml
services:
  pemweb:
    build: ./php
    image: pemweb_php:latest
    container_name: pemweb
    hostname: "pemweb"
    volumes:
      - ./src:/var/www/html
      - ./php/www.conf:/usr/local/etc/php-fpm.d/www.conf
    working_dir: /var/www/html
    depends_on:
      - db_pemweb
  db_pemweb:
    image: mariadb:10.2
    container_name: db_pemweb
    restart: unless-stopped
    tty: true
    ports:
      - "13306:3306"
    volumes:
      - ./db/data:/var/lib/mysql
      - ./db/conf.d:/etc/mysql/conf.d:ro
    environment:
      MYSQL_USER: djambred
      MYSQL_PASSWORD: p455w0rd1!.
      MYSQL_ROOT_PASSWORD: p455w0rd
      TZ: Asia/Jakarta
      SERVICE_TAGS: dev
      SERVICE_NAME: mysql_pemweb
  nginx_pemweb:
    build: ./nginx
    image: nginx_pemweb:latest
    container_name: nginx_pemweb
    hostname: "nginx_pemweb"
    ports:
      - "80:80"
    volumes:
      - ./src:/var/www/html
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
    depends_on:
      - pemweb
```

Build dan jalankan dengan perintah:

```bash
docker compose up -d --build
```

## 2. Masuk ke Container Pemweb

```bash
docker exec -it pemweb bash
```

## 3. Buat Proyek Laravel

Gunakan Composer untuk membuat proyek baru:

```bash
composer create-project --prefer-dist raugadh/fila-starter .
```

## 4. Konfigurasi File `.env`

Ubah bagian berikut:

```bash
APP_NAME="PemWeb"
APP_URL=http://localhost
ASSET_URL=http://localhost
```

Set DB connection:

```bash
DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=p455w0rd
```

## 5. Generate Key

```bash
php artisan key:generate
```

## 6. Buat Storage Link

```bash
php artisan storage:link
```

## 7. Migrasi Database

```bash
php artisan migrate
php artisan migrate:fresh
```

## 8. Generate Shield

```bash
php artisan shield:generate --all
```

## 9. Seed Database

```bash
php artisan db:seed --force
```

> Jika ada error, abaikan. `--force` opsional.

## 10. Inisialisasi Proyek

```bash
php artisan project:init
```

## 11. Atur Izin Folder

```bash
chmod 777 -R storage/* && chmod 777 -R bootstrap/*
```

---

# Konfigurasi Livewire/Laravel

## 1. Struktur Folder Public

Buat folder `front` di dalam `public` dan salin folder `css`, `images`, `js`, dan `plugins` ke dalamnya:

```bash
public/
├── front/
│   ├── css/
│   ├── images/
│   │   └── Phone-theme.jpg
│   ├── js/
│   └── plugins/
```

## 2. Struktur Folder Resources

Buat struktur berikut di dalam folder `resources/views`:

```bash
resources/
├── views/
│   ├── components/
│   │   └── layouts/
│   │       └── app.blade.php
│   ├── livewire/
│   │   └── show-home-page.blade.php
├── welcome.blade.php
```

## 3. Template `app.blade.php`

Isi file `app.blade.php`:

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <title>{{ $title ?? 'PemWeb' }}</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=5"
    />
    <meta name="description" content="This is meta description" />
    <meta name="author" content="Themefisher" />
    <link
      rel="shortcut icon"
      href="{{ asset('front/images/favicon.png') }}"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    @livewireStyles
  </head>
  <body>
    <header class="navigation bg-tertiary">
      <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img
              src="{{ asset('front/images/logo.png') }}"
              alt="Logo"
              width="160"
            />
          </a>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a wire:navigate class="nav-link" href="{{ route('home') }}"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a wire:navigate class="nav-link" href="{{ route('profile') }}"
                  >Profile</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    {{ $slot }} //######## {{PENTING}} ########
    
    <footer class="section-sm bg-tertiary">
      <div class="container text-center">
        <a wire:navigate href="{{ route('home') }}">Copyright 2025</a>
      </div>
    </footer>
    <script src="{{ asset('front/js/script.js') }}"></script>
    @livewireScripts
  </body>
</html>
```

## 4. Ubah `welcome.blade.php`

Tambahkan:

```html
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>
```

## 5. Buat `show-home-page.blade.php`

Isi file:

```html
<main>
  <section class="banner bg-tertiary">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1>Innovate. Excel. Succeed!</h1>
          <p>Unlocking Potential, Igniting Excellence</p>
          <a class="btn btn-primary" href="#">See More</a>
        </div>
        <div class="col-lg-6 text-center">
          <img
            src="{{ asset('front/images/about-us.png') }}"
            alt="Banner"
            class="w-100"
          />
        </div>
      </div>
    </div>
  </section>
</main>
```

## 6. Struktur Folder App

Buat folder `Livewire` di dalam `app`:

```bash
app/
├── Livewire/
│   └── ShowHomePage.php
```

## 7. Buat `ShowHomePage.php`

Isi file:

```php
<?php

namespace App\Livewire;

use Livewire\Component;

class ShowHomePage extends Component
{
    public function render()
    {
        return view('livewire.show-home-page');
    }
}
```

## 8. Tambahkan Route

Edit `routes/web.php`:

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHomePage;

Route::get('/', ShowHomePage::class)->name('home');
```

## 9. Tambahkan Navigasi

Tambahkan di `app.blade.php`:

```html
<li class="nav-item">
  <a wire:navigate class="nav-link" href="{{ route('home') }}">Home</a>
</li>
```

Selesai.