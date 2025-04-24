# 🚀 Panduan Setup **Livewire Dan Edit Dari Panel Admin** (Catatan Pert4)

1. Pastikan Anda telah melakukan setup utama. Jika belum, silakan cek panduannya [di sini](https://github.com/Moocchi/pemweb/blob/Main/pert3/dokumen/Catatan.md).

2. Setelah menyelesaikan setup terakhir, yaitu menjalankan perintah `php artisan project:init`, lanjutkan ke pembuatan file `blade.php`.

3. Struktur folder kali ini berbeda, berikut adalah strukturnya:
    ```
    resources/
    ├── views/
    │   ├── components/
    │   │   ├── layouts/
    │   │   │   └── app.blade.php
    │   │   ├── partials/
    │   │   │   ├── bottom.blade.php
    │   │   │   ├── head.blade.php
    │   │   │   ├── nav.blade.php
    │   │   │   └── script.blade.php
    │   ├── livewire/
    │   │   └── show-home-page.blade.php
    ```

4. **Poin Penting:**

   - Buat file berikut di dalam folder `partials`:
     - `bottom.blade.php`
     - `head.blade.php`
     - `nav.blade.php`
     - `script.blade.php`

5. Dari template **`Pert3`** kemarin, buka `index.html` dan pisahkan setiap isi kontennya seperti berikut:

    **`bottom.blade.php`**
    ```html
    <footer class="section-sm bg-tertiary">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Service</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="service-details.html">Digital Marketing</a></li>
                            <li class="mb-2"><a href="service-details.html">Web Design</a></li>
                            <li class="mb-2"><a href="service-details.html">Logo Design</a></li>
                            <li class="mb-2"><a href="service-details.html">Graphic Design</a></li>
                            <li class="mb-2"><a href="service-details.html">SEO</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#!">About Us</a></li>
                            <li class="mb-2"><a href="#!">Contact Us</a></li>
                            <li class="mb-2"><a href="#!">Blog</a></li>
                            <li class="mb-2"><a href="#!">Team</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Other Links</h5>
                        <ul class="list-unstyled">
                            <li class="list-inline-item me-4">
                                <a class="text-black" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a class="text-black" href="terms.html">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    ```

    **`head.blade.php`**
    ```html
    <head>
        <meta charset="utf-8">
        <title>Livewire and Filament</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
        <meta name="description" content="This is meta description">
        <meta name="author" content="Themefisher">
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('front/plugins/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/brands.css') }}">
        <link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/solid.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    </head>
    ```

    **`nav.blade.php`**
    ```html
    <header class="navigation bg-tertiary">
        <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img loading="preload" decoding="async" class="img-fluid" width="160" src="{{ asset('front/images/logo.png') }}" alt="Wallet">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                    </ul>
                    <a href="#!" class="btn btn-outline-primary">Contact Us</a>
                </div>
            </div>
        </nav>
    </header>
    ```

    **`script.blade.php`**
    ```html
    <script src="{{ asset('front/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('front/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('front/js/script.js')}}"></script>
    ```
    dan `php artisan make:livewire ShowHomePage`

    lalu isi show-home-page.blade.php sperti ini
    ```html
    <main>
        <section class="banner bg-tertiary position-relative overflow-hidden">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="block text-center text-lg-start pe-0 pe-xl-5">
                            <h1 class="text-capitalize mb-4">Innovate. Excel. Succeed!</h1>
                            <p class="mb-4">Unlocking Potential, Igniting Excellence</p>
                            <a type="button" class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#applyLoan">
                                See More<span style="font-size: 14px;" class="ms-2 fas fa-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-5 text-center">
                            <img loading="lazy" decoding="async" src="{{ asset('front/images/about-us.png') }}" alt="banner image" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="has-shapes">
                <svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-30.883 0C-41.3436 36.4248 -22.7145 75.8085 4.29154 102.398C31.2976 128.987 65.8677 146.199 97.6457 166.87C129.424 187.542 160.139 213.902 172.162 249.847C193.542 313.799 149.886 378.897 129.069 443.036C97.5623 540.079 122.109 653.229 191 728.495" stroke="currentColor" stroke-miterlimit="10" />
                    <path d="M-55.5959 7.52271C-66.0565 43.9475 -47.4274 83.3312 -20.4214 109.92C6.58466 136.51 41.1549 153.722 72.9328 174.393C104.711 195.064 135.426 221.425 147.449 257.37C168.829 321.322 125.174 386.42 104.356 450.559C72.8494 547.601 97.3965 660.752 166.287 736.018" stroke="currentColor" stroke-miterlimit="10" />
                    <path d="M-80.3302 15.0449C-90.7909 51.4697 -72.1617 90.8535 -45.1557 117.443C-18.1497 144.032 16.4205 161.244 48.1984 181.915C79.9763 202.587 110.691 228.947 122.715 264.892C144.095 328.844 100.439 393.942 79.622 458.081C48.115 555.123 72.6622 668.274 141.552 743.54" stroke="currentColor" stroke-miterlimit="10" />
                    <path d="M-105.045 22.5676C-115.506 58.9924 -96.8766 98.3762 -69.8706 124.965C-42.8646 151.555 -8.29436 168.767 23.4835 189.438C55.2615 210.109 85.9766 236.469 98.0001 272.415C119.38 336.367 75.7243 401.464 54.9072 465.604C23.4002 562.646 47.9473 675.796 116.838 751.063" stroke="currentColor" stroke-miterlimit="10" />
                </svg>
                <svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.1794 745.14C1.80036 707.275 -5.75764 666.015 8.73984 629.537C27.748 581.745 80.4729 554.968 131.538 548.843C182.604 542.703 234.032 552.841 285.323 556.748C336.615 560.64 391.543 557.276 433.828 527.964C492.452 487.323 511.701 408.123 564.607 360.255C608.718 320.353 675.307 307.183 731.29 327.323" stroke="currentColor" stroke-miterlimit="10" />
                    <path d="M51.0253 745.14C41.2045 709.326 34.0538 670.284 47.7668 635.783C65.7491 590.571 115.623 565.242 163.928 559.449C212.248 553.641 260.884 563.235 309.4 566.931C357.916 570.627 409.887 567.429 449.879 539.701C505.35 501.247 523.543 426.331 573.598 381.059C615.326 343.314 678.324 330.853 731.275 349.906" stroke="currentColor" stroke-miterlimit="10" />
                </svg>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="section-title pt-4">
                            <p class="text-primary text-uppercase fw-bold mb-3">Our Services</p>
                            <h1>Our online services</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus penatibus tincidunt.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <a class="text-black" href="service-details.html">
                            <div class="block">
                                <span class="colored-box text-center h3 mb-4">01</span>
                                <h3 class="mb-3 service-title">Digital Marketing</h3>
                                <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <a class="text-black" href="service-details.html">
                            <div class="block">
                                <span class="colored-box text-center h3 mb-4">02</span>
                                <h3 class="mb-3 service-title">Web Design</h3>
                                <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <a class="text-black" href="service-details.html">
                            <div class="block">
                                <span class="colored-box text-center h3 mb-4">03</span>
                                <h3 class="mb-3 service-title">SEO</h3>
                                <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <a class="text-black" href="service-details.html">
                            <div class="block">
                                <span class="colored-box text-center h3 mb-4">04</span>
                                <h3 class="mb-3 service-title">Logo Design</h3>
                                <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <a class="text-black" href="service-details.html">
                            <div class="block">
                                <span class="colored-box text-center h3 mb-4">05</span>
                                <h3 class="mb-3 service-title">Graphic Design</h3>
                                <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    ```
    dan setting routes nya seperti ini
    ```php
    <?php

    use App\Livewire\ShowHomePage;
    use Illuminate\Support\Facades\Route;
    use Livewire\Livewire;

    /*
    |--------------------------------------------------------------------------
    | Livewire Asset Handling
    |--------------------------------------------------------------------------
    | If using a subfolder in the domain, ensure Livewire assets are properly
    | routed. Do not remove the following configurations.
    */

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
    });

    Livewire::setScriptRoute(function ($handle) {
        return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
    });

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    | Define the application's web routes here.
    */

    Route::get('/', ShowHomePage::class)->name('home');
    ```
    
6. Setelah itu, buka `app.blade.php` dan ubah menjadi seperti berikut:
    ```html
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()-public function run(): void
    {
        
    }>getLocale()) }}">
    @include('components.partials.head')
    <body>
        @include('components.partials.nav')
        {{ $slot }}
        @include('components.partials.bottom')
    </body>
    @include('components.partials.script')
    </html>
    ```

7. Check di localhost jika work lanjut Ke step ke 2.

# Setup Migration,Seeder,Model !

1. buat kan model, migrasi dan seeder dari Product, Seo, Page Config, Logo, Footer

## Product 

### **`Migrasi`**

```php
$table->string('name');
$table->text('description');
$table->string('image');
```

### **`Seeder`**

**ProductSeeder.php**

```php
<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sample Product',
            'description' => 'This is a sample product description.',
            'image' => '',
        ]);
    }
}
```

### **`Model`**

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'image',
    ];
}
```

## Seo

### Migrasi

```php
$table->string('title');
$table->string('description');
$table->string('keywords');
$table->string('canonical_url');
$table->string('robots');
$table->string('og_image');
```

### Seeder

`SeoSeeder.php`

```php
<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seo::create([
            'title' => 'Sample SEO Title',
            'description' => 'This is a sample SEO description.',
            'keywords' => 'sample, seo, keywords',
            'canonical_url' => 'https://example.com',
            'robots' => 'index, follow',
            'og_image' => '',
        ]);
    }
}
```

### Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    protected $table = 'seos';

    protected $fillable = [
        'title',
        'description',
        'keywords',
        'canonical_url',
        'robots',
        'og_image',
    ];
}
```

---

## PageConfig

### Migrasi

```php
$table->string('title');
$table->string('detail');
$table->string('image');
```

### Seeder

`PageConfigSeeder.php`

```php
<?php

namespace Database\Seeders;

use App\Models\PageConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(PageConfig::count()==0){
            PageConfig::create([
                'title' => 'Welcome to Our Website',
                'detail' => 'We are glad to have you here. Explore our services and offerings.',
                'image' => '',
            ]);
        } 
    }
}

```

### Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageConfig extends Model
{
    use HasFactory;
    protected $table = 'page_configs';
    protected $fillable = [
        'title',
        'detail',
        'image',
    ];
}

```

---

## Logo

### Migrasi

```php
$table->string('title');
$table->string('image');
```

### Seeder

`LogoSeeder.php`

```php
<?php

namespace Database\Seeders;

use App\Models\Logo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        if(Logo::count()==0){
            Logo::create([
                'title' => 'PemWeb',
                'image' => '',
            ]);
        } 
    }
}

```

### Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    protected $table = 'logos';
    protected $fillable = [
        'title',
        'image',
    ];
}

```

---

## Footer

### Migrasi

```php
$table->string('section');
$table->string('label');
$table->string('url');
$table->integer('order')->default(0);
```

### Seeder

`FooterSeeder.php`

```php
<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Footer::count()==0){
            Footer::create([
                'section' => 'service',
                'label' => 'Online Service',
                'url' => 'http://localhost',
                'order' => 1,
            ]);
        } 
    }
}
```

### Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footers';
    protected $fillable = [
        'section',
        'url',
        'label',
        'order',
    ];
}

```

2. Setelah itu masukan semua seeder ke database seeder seperti ini
```php
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::count() == 0) {
            $user = \App\Models\User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
            ]);

            $user->assignRole('super_admin');
        }

        $this->call([
            ProductSeeder::class,
            PageConfigSeeder::class,
            LogoSeeder::class,
            SeoSeeder::class,
            FooterSeeder::class,
        ]);
    }
}
```

3. Lalu buar resource nya dengan command ini
```bash
php artisan make:filament-resource Product --generate

//lakukan ke Products,PageConfig,See dll
```

4. lalu lakukan migrate dan db:seed
```bash
php artisan migrate
php artisan db:seed
```
---
# Menghubungkan DB Ke partials

1. Setelah Membuat migrate dan Melakukan semua step diatas, langkah selanjutnya yauit menghubungkan Database ke app.blade, bottom, head, dan lain lain

**`Bottom.blade.php`**
```html
@php
    $footer = \App\Models\Footer::first();
@endphp


<footer class="section-sm bg-tertiary">
	<div class="container">
        <div class="container d-flex justify-content-center">
            <a wire:navigate href="{{ route ('home') }}"> {{$footer->label ?? ''}}</a>
        </div>
	</div>
</footer>
```

**`head.blade.app`**
```html
@php
    $seo = \App\Models\Seo::first();
@endphp


<head>
	<meta charset="utf-8">
	<title>{{ $seo->title ?? 'Default Title' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="{{ $seo->description ?? 'Default description' }}">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<meta name="keywords" content="{{ $seo->keywords ?? 'Default, Keywords' }}">

	@if(!empty($seo->canonical_url))
		<link rel="canonical" href="{{ $seo->canonical_url }}">
	@endif

	<meta name="robots" content="{{ $seo->robots ?? 'index, follow' }}">
	
	@if(!empty($seo->og_image))
		<meta property="og:image" content="{{ asset('storage/' . $seo->og_image) }}">
	@endif
	
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="{{ asset('front/plugins/slick/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/brands.css')}}">
	<link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/solid.css')}}">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="{{ asset('front/css/style.css')}}">
</head>
```

**`nav.blade.php`**
```html
@php
$logo = \App\Models\Logo::first();

@endphp

<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">
				<img src="{{ asset('storage/' . $logo->image) }}" 
				alt=""
				class="img-fluid" width="200px" height="200px">				
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a wire:navigate class="nav-link" href="{{ route ('home') }}">Home</a></li>
					<li class="nav-item"> <a wire:navigate class="nav-link" href="{{ route ('profile') }}">Profile</a></li>
					<li class="nav-item"> <a wire:navigate class="nav-link" href="{{ route ('about') }}">About Me</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
```
**`script.blade.php`**
```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.partials.head')

<body>
    @include('components.partials.nav')
    {{ $slot }}
    @include('components.partials.bottom')
</body>
@include('components.partials.script')

</html>
```

**`show-home-pade.blade.php`**
```html
@php
  use App\Models\PageConfig;
  $config = PageConfig::first();
@endphp

@php
  use App\Models\Product;
  $product = Product::orderBy('id')->get();
@endphp
<main>
<section class="banner bg-tertiary position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="block text-center text-lg-start pe-0 pe-xl-5">
          <h1 class="text-capitalize mb-4">{{ $config->title ?? ''}}</h1>
          <p class="mb-4">{{ $config->detail ?? ''}}</p> <a type="button"
            class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#applyLoan">See More<span style="font-size: 14px;" class="ms-2 fas fa-arrow-right"></span></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ps-lg-5 text-center">
          <img loading="lazy" decoding="async"
            src="{{ asset('storage/' . $config->image) }}"
            alt="banner image" 
            class="img-fluid rounded shadow-lg w-75"
            style="max-height: 400px; object-fit: cover;">
        </div>
      </div>
    </div>
  </div>
  <div class="has-shapes">
    <svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M-30.883 0C-41.3436 36.4248 -22.7145 75.8085 4.29154 102.398C31.2976 128.987 65.8677 146.199 97.6457 166.87C129.424 187.542 160.139 213.902 172.162 249.847C193.542 313.799 149.886 378.897 129.069 443.036C97.5623 540.079 122.109 653.229 191 728.495"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M-55.5959 7.52271C-66.0565 43.9475 -47.4274 83.3312 -20.4214 109.92C6.58466 136.51 41.1549 153.722 72.9328 174.393C104.711 195.064 135.426 221.425 147.449 257.37C168.829 321.322 125.174 386.42 104.356 450.559C72.8494 547.601 97.3965 660.752 166.287 736.018"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M-80.3302 15.0449C-90.7909 51.4697 -72.1617 90.8535 -45.1557 117.443C-18.1497 144.032 16.4205 161.244 48.1984 181.915C79.9763 202.587 110.691 228.947 122.715 264.892C144.095 328.844 100.439 393.942 79.622 458.081C48.115 555.123 72.6622 668.274 141.552 743.54"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M-105.045 22.5676C-115.506 58.9924 -96.8766 98.3762 -69.8706 124.965C-42.8646 151.555 -8.29436 168.767 23.4835 189.438C55.2615 210.109 85.9766 236.469 98.0001 272.415C119.38 336.367 75.7243 401.464 54.9072 465.604C23.4002 562.646 47.9473 675.796 116.838 751.063"
        stroke="currentColor" stroke-miterlimit="10" />
    </svg>
    <svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M12.1794 745.14C1.80036 707.275 -5.75764 666.015 8.73984 629.537C27.748 581.745 80.4729 554.968 131.538 548.843C182.604 542.703 234.032 552.841 285.323 556.748C336.615 560.64 391.543 557.276 433.828 527.964C492.452 487.323 511.701 408.123 564.607 360.255C608.718 320.353 675.307 307.183 731.29 327.323"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M51.0253 745.14C41.2045 709.326 34.0538 670.284 47.7668 635.783C65.7491 590.571 115.623 565.242 163.928 559.449C212.248 553.641 260.884 563.235 309.4 566.931C357.916 570.627 409.887 567.429 449.879 539.701C505.35 501.247 523.543 426.331 573.598 381.059C615.326 343.314 678.324 330.853 731.275 349.906"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M89.8715 745.14C80.6239 711.363 73.8654 674.568 86.8091 642.028C103.766 599.396 150.788 575.515 196.347 570.054C241.906 564.578 287.767 573.629 333.523 577.099C379.278 580.584 428.277 577.567 465.976 551.423C518.279 515.172 535.431 444.525 582.62 401.832C621.964 366.229 681.356 354.493 731.291 372.46"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M128.718 745.14C120.029 713.414 113.678 678.838 125.837 648.274C141.768 608.221 185.939 585.788 228.737 580.659C271.536 575.515 314.621 584.008 357.6 587.282C400.58 590.556 446.607 587.719 482.028 563.16C531.163 529.111 547.275 462.733 591.612 422.635C628.572 389.19 684.375 378.162 731.276 395.043"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M167.564 745.14C159.432 715.451 153.504 683.107 164.863 654.519C179.753 617.046 221.088 596.062 261.126 591.265C301.164 586.452 341.473 594.402 381.677 597.465C421.88 600.527 464.95 597.872 498.094 574.896C544.061 543.035 559.146 480.942 600.617 443.423C635.194 412.135 687.406 401.817 731.276 417.612"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M817.266 289.466C813.108 259.989 787.151 237.697 759.261 227.271C731.372 216.846 701.077 215.553 671.666 210.904C642.254 206.24 611.795 197.156 591.664 175.224C555.853 136.189 566.345 75.5336 560.763 22.8649C552.302 -56.8256 498.487 -130.133 425 -162.081"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M832.584 276.159C828.427 246.683 802.469 224.391 774.58 213.965C746.69 203.539 716.395 202.246 686.984 197.598C657.573 192.934 627.114 183.85 606.982 161.918C571.172 122.883 581.663 62.2275 576.082 9.55873C567.62 -70.1318 513.806 -143.439 440.318 -175.387"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M847.904 262.853C843.747 233.376 817.789 211.084 789.9 200.659C762.011 190.233 731.716 188.94 702.304 184.292C672.893 179.627 642.434 170.544 622.303 148.612C586.492 109.577 596.983 48.9211 591.402 -3.74766C582.94 -83.4382 529.126 -156.746 455.638 -188.694"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M863.24 249.547C859.083 220.07 833.125 197.778 805.236 187.353C777.347 176.927 747.051 175.634 717.64 170.986C688.229 166.321 657.77 157.237 637.639 135.306C601.828 96.2707 612.319 35.6149 606.738 -17.0538C598.276 -96.7443 544.462 -170.052 470.974 -202"
        stroke="currentColor" stroke-miterlimit="10" />
    </svg>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="section-title pt-4">
          <p class="text-primary text-uppercase fw-bold mb-3">Our Services</p>
          <h1>Our online services</h1>
          <p>Explore a range of digital services designed to simplify your daily needs. Fast, secure, and accessible anytime, anywhere.</p>
        </div>
      </div>

      @foreach ($product as $index => $item)
        <div class="col-lg-4 col-md-6 service-item">
          <a class="text-black text-decoration-none" href="#">
            <div class="block">
              <span class="colored-box text-center h3 mb-4">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
              @if ($item->image)
                <div class="overflow-hidden rounded-lg shadow-lg" style="max-height: 400px;">
                  <img
                  loading="lazy"
                  decoding="async"
                  src="{{ asset('storage/' . $item->image) }}"
                  alt="{{ $item->name }}"
                  class="img-fluid w-100 transition-transform duration-300 ease-in-out"
                  style="object-fit: cover; height: 100%;"
                  onmouseover="this.style.transform='scale(1.05)'"
                  onmouseout="this.style.transform='scale(1)'"
                  >
                </div>
              @endif
            </div>
            <h3 class="mb-3 service-title">{{ $item->name }}</h3>
            <p class="mb-0 service-description">{{ $item->description }}</p>
          </a>
        </div>
      @endforeach
      <!-- <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">01</span>
            <h3 class="mb-3 service-title">Digital Marketing</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">02</span>
            <h3 class="mb-3 service-title">Web Design</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">03</span>
            <h3 class="mb-3 service-title">SEO</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">04</span>
            <h3 class="mb-3 service-title">Logo Design</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">05</span>
            <h3 class="mb-3 service-title">Graphic Design</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div> -->
    </div>
  </div>
</section>
</main>
```

Tinggal ubah isi database nya dan Selesai.
