### Analisis

Diketahui bahwa Database Product memiliki Nama Produk, Harga Produk, dan Kategori Produk, dengan ketentuan sebagai berikut:
1. Setiap produk memiliki nama produk dengan tipe data string dan panjang maksimal 255 karakter.
2. Setiap produk memiliki harga dengan tipe data integer.
3. Setiap produk memiliki kategori yang terpisah dari tabel produk. Relasi antara produk dan kategori menggunakan id Kategori dan id Produk. Relasi produk ke kategori adalah "has many", sedangkan relasi kategori ke produk adalah "belongs to".
4. Setiap kategori produk memiliki nama kategori dengan tipe data string dan panjang maksimal 255 karakter.

---

### Langkah-langkah untuk Membangun Sampleapp

1. Ekstrak file `sampleapp.zip`.
2. Masuk ke direktori `sampleapp`.
3. Nyalakan docker dengan perintah:
   ```sh
   docker compose up -d 
   ```
4. Masuk ke dalam container dengan perintah:
   ```sh
   docker exec -it sample bash
   ```
5. Build Laravel dengan perintah:
   ```sh
   composer create-project --prefer-dist raugadh/fila-starter .
   ```
6. Sesuaikan konfigurasi pada file `.env`.
7. Generate kunci aplikasi dengan perintah:
   ```sh
   php artisan key:generate
   ```
8. Buat link storage dengan perintah:
   ```sh
   php artisan storage:link
   ```
9. Jalankan migrasi database dengan perintah:
   ```sh
   php artisan migrate
   ```
10. Atur izin akses dengan perintah:
    ```sh
    chown -R www-data:www-data storage/*
    chown -R www-data:www-data bootstrap/*
    ```
11. Inisialisasi proyek dengan perintah:
    ```sh
    php artisan project:init
    ```

---

### Pembuatan dan Konfigurasi Model

1. Buat model Kategori dan Product dengan perintah:
   ```sh
   php artisan make:model Kategori -ms
   php artisan make:model Product -ms
   ```
   **Catatan**: Buat model kategori terlebih dahulu karena product akan mengambil id dari kategori.

2. Sesuaikan migration di `sampleapp/src/database/migrations`:
   - **Tabel Product**: Kolom nama (string, panjang maksimal 255 karakter), kolom harga (integer).
   - **Tabel Kategori**: Kolom nama kategori (string, panjang maksimal 255 karakter).
   - Buat relasi antara tabel produk dan kategori dengan foreign key yang menghubungkan id kategori ke id product di **Tabel Product**

3. Sesuaikan Seeder dengan data berikut:
   - **Kategori**:
     - Sepatu
     - Celana
     - Baju
   - **Produk**:
     - Adidas (1000), Nike (999) kategori (sepatu)
     - Levis (500) kategori (celana)
     - Uniqlo (100) kategori (baju)
   - **Database**: Email `admin@admin.com`, password `password`
   - **Role**: Buat role `super_admin` untuk admin
      **Catatan**: Seeder akan mengisi database dengan data produk yang sesuai dengan kategori masing-masing dan membuat akun admin dengan email `admin@admin.com` dan password `password`. Akun ini juga akan diberikan role `super_admin`.

4. Sesuaikan model di `App/Model/` dan buat relasi pada product yaitu `belongsTo` sedangkan kategori itu `hasMany`.
   - **Relasi belongsTo dan hasMany**: Pada model Product, relasi `belongsTo` digunakan untuk menghubungkan produk dengan kategori, sementara pada model Kategori, relasi `hasMany` digunakan untuk menghubungkan kategori dengan produk yang ada.

5. Generate `KategoriResource` dan `ProductResource`.

6. Jalankan:
   ```sh
   php artisan project:init
   ```