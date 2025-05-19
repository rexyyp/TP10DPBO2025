# TP10DPBO2025

---

saya Rexy Putra Nur Laksana dengan NIM 2309578 mengerjakan soal TP 10 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Struktur Folder

---

```
Project/
├── index.php
├── config/
│   └── Database.php
├── database/
│   └── coffeeshop.sql
├── model/
│   ├── Categories.php
│   ├── Orders.php
│   └── Products.php
├── viewmodel/
│   ├── CategoriesViewModel.php
│   ├── OrdersViewModel.php
│   └── ProductsViewModel.php
└── views/
    ├── categories_form.php
    ├── categories_list.php
    ├── orders_form.php
    ├── orders_list.php
    ├── products_form.php
    ├── products_list.php
    └── template/
        ├── header.php
        └── footer.php
```

## Desain Program
---

Aplikasi ini menggunakan arsitektur Model-View-ViewModel (MVVM) untuk mengelola data coffeeshop, seperti produk, kategori, dan pesanan. Berikut struktur utama program:

- **config/**
  - `Database.php`: Konfigurasi dan koneksi ke database MySQL.
- **database/**
  - `coffeeshop.sql`: Skrip SQL untuk membuat dan mengisi tabel database.
- **model/**
  - `Categories.php`, `Orders.php`, `Products.php`: Kelas model yang merepresentasikan data dan operasi dasar (CRUD) untuk masing-masing entitas.
- **viewmodel/**
  - `CategoriesViewModel.php`, `OrdersViewModel.php`, `ProductsViewModel.php`: Menjembatani antara model dan view, mengelola logika bisnis dan data yang akan ditampilkan.
- **views/**
  - `categories_form.php`, `categories_list.php`, `orders_form.php`, `orders_list.php`, `products_form.php`, `products_list.php`: Tampilan (UI) untuk input dan daftar data.
  - `template/header.php`, `template/footer.php`: Template untuk bagian atas dan bawah halaman.
- **index.php**
  - Halaman utama aplikasi, biasanya sebagai entry point dan router sederhana.

## Penjelasan Alur Aplikasi
---

1. **User Interaction**

   - Pengguna mengakses aplikasi melalui browser dan berinteraksi dengan halaman-halaman di folder `views/`.
   - Contoh: Pengguna membuka `products_list.php` untuk melihat daftar produk.

2. **View ke ViewModel**

   - View (misal, `products_list.php`) akan memanggil ViewModel terkait (`ProductsViewModel.php`) untuk mengambil atau memproses data.

3. **ViewModel ke Model**

   - ViewModel akan memanggil fungsi pada Model (`Products.php`) untuk melakukan operasi database (ambil data, tambah, edit, hapus).

4. **Model ke Database**

   - Model menggunakan koneksi dari `Database.php` untuk menjalankan query ke database MySQL.

5. **Data Flow Balik**

   - Hasil query dikembalikan ke Model, lalu ke ViewModel, dan akhirnya ke View untuk ditampilkan ke user.

6. **Template**
   - Setiap halaman view menggunakan `header.php` dan `footer.php` untuk konsistensi tampilan.

## Alur Program

---

### 1. Menampilkan Daftar

- User membuka halaman daftar (misal, `products_list.php`).
- View memanggil ViewModel untuk mengambil data dari Model.
- Model mengambil data dari database dan mengembalikannya ke ViewModel.
- ViewModel meneruskan data ke View untuk ditampilkan dalam bentuk tabel/list.

### 2. Menambahkan Data

- User mengisi form tambah data (misal, `products_form.php`) dan submit.
- Data dikirim ke ViewModel untuk divalidasi.
- Jika valid, ViewModel meneruskan data ke Model untuk disimpan ke database.
- Setelah berhasil, user diarahkan kembali ke halaman daftar untuk melihat data terbaru.

### 3. Mengedit Data

- User memilih data yang ingin diedit dari daftar, lalu diarahkan ke form edit.
- Data lama diambil dari database melalui ViewModel dan Model, lalu ditampilkan di form.
- User mengubah data dan submit.
- ViewModel memvalidasi dan meneruskan perubahan ke Model untuk update di database.
- Setelah berhasil, user kembali ke halaman daftar.

### 4. Menghapus Data

- User memilih data yang ingin dihapus dari daftar.
- ViewModel menerima permintaan hapus dan meneruskan ke Model.
- Model menjalankan query DELETE ke database.
- Setelah berhasil, halaman daftar diperbarui tanpa data yang dihapus.

## Dokumentasi
---
https://github.com/user-attachments/assets/9597a599-59be-49dd-af90-22a5586a222c
