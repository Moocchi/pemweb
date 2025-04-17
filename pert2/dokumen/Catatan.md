# Catatan pert2

# Catatan tentang Bootstrap Berdasarkan Kode HTML

## Struktur Dasar Bootstrap
1. **Setup Awal**:
   - Menggunakan Bootstrap 5.3.5 via CDN
   - Memerlukan CSS Bootstrap dan dua file JS (Popper dan Bootstrap JS)
   - Viewport di-set untuk responsif di perangkat mobile

2. **Komponen yang Digunakan**:
   - Navbar dengan dropdown menu
   - Card untuk profile section
   - Grid system (row dan col)
   - Button dengan berbagai variasi
   - Progress bar
   - List group

## Implementasi Spesifik

### 1. Navbar
```html
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <!-- Konten navbar -->
</nav>
```
- `navbar-expand-lg`: Navbar akan collapse di breakpoint large (≥992px)
- `bg-body-tertiary`: Warna background navbar
- Fitur yang digunakan:
  - Brand logo dengan gambar
  - Toggler untuk mobile view
  - Dropdown menu
  - Search form

### 2. Grid System
```html
<div class="row">
  <div class="col-lg-5 mx-auto">
    <!-- Konten card -->
  </div>
</div>
```
- `row`: Container untuk kolom
- `col-lg-5`: Lebar 5/12 kolom pada breakpoint large
- `mx-auto`: Margin horizontal auto untuk posisi tengah

### 3. Card Profile
```html
<div class="card mb-4">
  <div class="card-body text-center">
    <!-- Konten profile -->
  </div>
</div>
```
- `mb-4`: Margin bottom size 4 (1.5rem)
- `text-center`: Teks rata tengah
- Menggunakan gambar lingkaran (`rounded-circle`) dengan lebar tetap

### 4. Button
```html
<button type="button" class="btn btn-primary">Tangerang</button>
<button type="button" class="btn btn-outline-success ms-1">09 Mei 2005</button>
```
- Variasi button:
  - Solid (`btn-primary`)
  - Outline (`btn-outline-success`)
- `ms-1`: Margin start (kiri) size 1 (0.25rem)

### 5. Progress Bar
```html
<div class="progress rounded mb-3" style="height: 8px;">
  <div class="progress-bar" role="progressbar" style="width: 90%;"></div>
</div>
```
- `rounded`: Sudut membulat
- Height di-set inline karena bukan kelas default Bootstrap
- Width progress di-set sesuai skill level

### 6. List Group untuk Link
```html
<ul class="list-group list-group-flush rounded-3">
  <!-- Item list -->
</ul>
```
- `list-group-flush`: Hapus border dan rounded corners
- `rounded-3`: Border radius size 3

## Best Practices yang Terlihat

1. **Struktur yang Terorganisir**:
   - Section dipisahkan dengan komentar jelas
   - Penggunaan semantic HTML

2. **Responsive Design**:
   - Navbar yang collapse di mobile
   - Grid system yang adaptif

3. **Utility Classes**:
   - Banyak menggunakan utility classes seperti margin/padding
   - Text alignment dan spacing yang konsisten

## Yang Perlu Diperhatikan

1. **Font Awesome**:
   - Kode menggunakan kelas `fa` tapi tidak ada link ke Font Awesome
   - Perlu ditambahkan: `<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">`

2. **Image Path**:
   - `src="./assets/Phone theme.jpg"` - pastikan path gambar benar
   - Nama file dengan spasi bisa menyebabkan masalah (lebih baik gunakan hyphen)

3. **Accessibility**:
   - Beberapa elemen bisa ditambah `aria-label` untuk aksesibilitas lebih baik
   - Progress bar sudah menggunakan `aria-valuenow` dengan baik

4. **Konsistensi**:
   - Beberapa bagian menggunakan `text-body` dan `text-black` yang mungkin redundant
   - Label "My Website" muncul dua kali di bagian link

Dokumentasi lengkap Bootstrap 5 bisa dilihat di: [https://getbootstrap.com/docs/5.3/getting-started/introduction/](https://getbootstrap.com/docs/5.3/getting-started/introduction/)