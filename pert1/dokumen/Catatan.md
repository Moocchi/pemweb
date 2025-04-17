# Catatan Pert1

# Html

HTML (`HyperText Markup Language`) adalah bahasa markup yang digunakan untuk membuat dan menyusun halaman web. HTML terdiri dari elemen-elemen (`tag`) yang mendefinisikan struktur dan konten dari sebuah halaman web.

## Contoh HTML Awal

Berikut adalah contoh struktur dasar dari sebuah dokumen HTML:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Showdong</title>
  </head>
  <body>
    <h1>My First Heading</h1>
  </body>
</html>
```

## Penjelasan Tag-Tag

- `<!DOCTYPE html>`: Mendeklarasikan tipe dokumen sebagai HTML5.
- `<html>` : Elemen root dari dokumen HTML.
- `<head>` : Berisi informasi metadata tentang dokumen, seperti judul dan pengaturan karakter.
- `<title>` : Menentukan judul halaman yang muncul di tab browser.
- `<body>` : Berisi konten utama yang akan ditampilkan di browser.
- `<header>` : Bagian header dari halaman, biasanya berisi judul atau navigasi.
- `<main>` : Bagian utama dari konten halaman.
- `<p>` : Elemen paragraf untuk teks.
- `<a>` : Elemen hyperlink untuk membuat tautan.
- `<footer>` : Bagian footer dari halaman, biasanya berisi informasi hak cipta atau kontak.
---

# Website

Website adalah kumpulan halaman web yang saling terhubung dan dapat diakses melalui internet menggunakan browser. Website biasanya berisi informasi, layanan, atau aplikasi yang disediakan oleh individu, organisasi, atau perusahaan. Website dapat dibuat menggunakan berbagai teknologi seperti `HTML`, `CSS`, dan `JavaScript`.

---

## Address

Address merujuk pada alamat website atau URL yang digunakan untuk mengakses situs web. Alamat website biasanya terdiri dari protokol (seperti `http://` atau `https://`), nama domain (contoh: example.com), dan path (contoh: `/about`).

# Docker

Docker adalah platform yang memungkinkan pengembang untuk mengemas aplikasi dan dependensinya ke dalam sebuah kontainer. Kontainer ini dapat dijalankan di berbagai lingkungan (`development`, `testing`, `production`) secara konsisten.

# Docker Compose

Docker Compose adalah alat untuk mendefinisikan dan menjalankan multi-container Docker aplikasi. Konfigurasi ditulis dalam file `docker-compose.yml.`

```yml
version: "3"

services:
  web:
    image: nginx:latest
    ports:
      - 80:80
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf-
      - ./src:/usr/share/nginx/html
```

Penjelasan Detail:

- `version: '3'`

Menunjukkan versi dari Docker Compose yang digunakan. Versi 3 adalah versi yang stabil dan banyak digunakan.

- `services:`

Bagian ini mendefinisikan layanan (`container`) yang akan dijalankan. Dalam contoh ini, hanya ada satu layanan bernama web.

- `web:`

Nama layanan. Anda bisa mengganti nama ini sesuai kebutuhan, misalnya `nginx-service`.

- `image: nginx:latest`

Menggunakan image Docker resmi dari Nginx dengan tag latest (`versi terbaru`). Image ini akan diunduh dari Docker Hub jika belum ada di lokal.

- `ports:`

80:80: Memetakan port 80 pada host (komputer Anda) ke port 80 pada container. Artinya, aplikasi Nginx di container akan bisa diakses melalui `http://localhost:80` di browser.

- `volumes:`

`./nginx/nginx.conf:/etc/nginx/conf.d/default.conf:`

Memetakan file konfigurasi Nginx (`nginx.conf`) dari direktori lokal (./nginx/) ke dalam container di path `/etc/nginx/conf.d/default.conf.` Ini memungkinkan Anda untuk mengubah konfigurasi Nginx tanpa perlu membangun ulang image Docker.

# Nginx.conf

```nginx
server {
    listen 80;
    server_name localhost;

    root /usr/share/nginx/html;
    index index.html index.htm;

    location / {
        try_files $uri $uri/  =404;
    }
}
```

1. `listen 80;`

   Baris ini menginstruksikan Nginx untuk mendengarkan koneksi HTTP pada port 80, yang merupakan port default untuk HTTP.

2. `server_name localhost;`

   Baris ini menentukan nama server yang akan digunakan untuk menangani permintaan. Dalam hal ini, server hanya akan merespons permintaan yang ditujukan ke `localhost`.

3. `root /usr/share/nginx/html;`

   Direktif `root` menentukan direktori root tempat file situs web Anda berada. Dalam contoh ini, file situs web akan diambil dari `/usr/share/nginx/html.`

4. `index index.html index.htm;`

   Direktif index menentukan file default yang akan dicari Nginx ketika pengguna mengakses direktori tanpa menentukan file tertentu. Dalam hal ini, Nginx akan mencari `index.html` terlebih dahulu, lalu `index.htm.`

5. `location / { ... }`

   Blok location menentukan bagaimana Nginx menangani permintaan untuk jalur tertentu. Dalam hal ini, / berarti semua permintaan ke root URL.

- `try_files $uri $uri/ =404;`
  Direktif ini mencoba menemukan file atau direktori yang diminta:

  - `$uri`: Mencoba mencocokkan permintaan dengan file yang sesuai.

  - `$uri/`: Jika tidak ada file, mencoba mencocokkan direktori.

  - `=404`: Jika tidak ada file atau direktori yang cocok, Nginx akan mengembalikan kode status HTTP 404 (Not Found).
