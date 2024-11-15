**# **Dokumen Persyaratan Bisnis (BRD)**  
### **Proyek:** Sistem Manajemen Data Barang Pada After Sunday Store   
**Versi:** 1.0
**Tanggal:** 15 November 2024  

---

## **1. Tujuan Proyek**
- **Objektif**: Aplikasi ini bertujuan untuk mempermudah pengelolaan data barang di toko After Sunday, serta memberikan akses yang terstruktur sesuai peran pengguna.

---

## **2. Fitur Utama**

### **Untuk Supervisor**
- **Melihat Data Barang**: Supervisor hanya memiliki hak akses untuk memantau rincian barang yang sudah ditambahkan, tanpa kemampuan untuk mengubah data. Berikut adalah rincian barangnya seperti
  - Nama barang
  - Stok tersedia
  - Harga satuan
  - Kode barang
  - Keterangan tambahan 
  - Kategori
  - Ukuran (S, M, L, XL)
  - Nama User untuk melihat siapa yang menambah atau mengedit pada data barang

### **Untuk Kepala Gudang**
- **Manajemen Barang**: Kepala gudang bertugas untuk mengelola seluruh data barang, termasuk stok, penambahan, pembaruan, dan penghapusan barang. Mereka juga dapat menentukan ukuran barang (S, M, L, XL) saat mengelola barang.

### **Untuk Admin**
- **Akses Penuh**: Admin memiliki kontrol penuh atas data barang dan manajemen pengguna, memastikan semua proses berjalan sesuai dengan kebutuhan.

---

## **3. Persyaratan Fungsional**

### **Sistem Login**
- **Akses Berdasarkan Peran**: Supervisor, kepala gudang, dan admin dapat login dengan hak akses berbeda.

### **Manajemen Data Barang**
- **Admin**: Mengelola semua data barang dan pengguna.
- **Kepala Gudang**: Mengelola data barang (input, update, delete) dan menentukan ukuran barang.
- **Supervisor**: Hanya melihat data barang yang ditambahkan oleh kepala gudang.

---

## **4. Persyaratan Non-Fungsional**

- **Kegunaan**: Antarmuka yang intuitif dan mudah digunakan sesuai peran pengguna.
- **Keamanan**: 
  - Akses terbatas sesuai peran pengguna
  - Admin memiliki akses penuh, kepala gudang dapat mengelola barang, dan supervisor hanya melihat data barang.

---

## **5. Model, Migrasi, Seeder, dan Resource yang Perlu Dibuat Pada Container `docker exec -it sample bash`**

### **Barang**
- **Model**: `Barang`. Menyimpan rincian lengkap tentang barang.
- **Migration**: Struktur tabel berikut ini akan dibuat pada database:
  - `id: bigint UNSIGNED` (Primary Key)
  - `nama: varchar(255)` - Nama barang
  - `stok: int` - Jumlah stok barang
  - `harga_satuan: decimal(10,2)` - Harga satuan barang
  - `kode_barang: varchar(50)` - Kode barang
  - `keterangan: text` - Keterangan tambahan (opsional)
  - `kategori` - Kategori barang
  - `ukuran: enum('S', 'M', 'L', 'XL')` - Ukuran barang yang tersedia
  - `created_at: timestamp` - Waktu data dibuat
  - `updated_at: timestamp` - Waktu data diubah
  - `user_id: unsignedBigInteger` - Menyimpan ID user yang bertanggung jawab untuk barang tersebut (relasi dengan tabel users).
  - `foreign('user_id')->references('id')->on('users')->onDelete('cascade')` - Relasi ke tabel users, dengan aturan onDelete('cascade') untuk menghapus barang secara otomatis jika user yang bertanggung jawab dihapus.
- **Seeder**: Data barang awal untuk pengujian.
- **Resource**: Endpoint API untuk data barang, dapat diakses oleh supervisor, kepala gudang, dan admin.

### **RoleSeeder**
- **Seeder**: `RoleSeeder`. Bertanggung jawab untuk mengisi data roles (peran) dan mengaitkan roles tersebut dengan users tertentu di aplikasi
  
### **Permissions**
- **Model**: `Permission`. digunakan untuk menyimpan data permissions dengan atribut berikut:
  - `id`: Primary key dari permission.
  - `name`: Nama dari permission (contoh: create_barang).
  - `guard_name`: Guard untuk permission (default: web).
  
- **Seeder**: `PermissionsSeeder`, bertugas menambahkan permissions dan menetapkannya ke role `admin, kepala gudang dan supervisor`

#### Mengapa Migration Permissions Tidak Dibuat? 

Karena saat membuat proyek baru dengan perintah `composer create-project --prefer-dist raugadh/fila-starter .`, migrasi untuk tabel permissions sudah disediakan oleh spatie/laravel-permission. Paket ini secara otomatis mengatur tabel dan kolom yang diperlukan untuk permissions dan roles, sehingga tidak perlu membuat migrasi permissions secara manual.

---

## **6. Analisis Permissions untuk Admin, Kepala Gudang, dan Supervisor**

Permissions digunakan untuk mengatur akses pengguna sesuai peran mereka di dalam sistem.

### **Permissions yang Diperlukan**

1. **Permissions untuk Admin**
   - Akses penuh untuk mengelola data barang dan pengguna.

2. **Permissions untuk Kepala Gudang**
   - `view_barang`: Mengizinkan kepala gudang melihat barang.
   - `view_any_barang`: Mengizinkan kepala gudang melihat semua barang.
   - `create_barang`: Mengizinkan kepala gudang menambah barang.
   - `update_barang`: Mengizinkan kepala gudang mengubah data barang.
   - `delete_barang`: Mengizinkan kepala gudang menghapus data barang.

3. **Permissions untuk Supervisor**
   - `view_barang`: Mengizinkan supervisor melihat barang.
   - `view_any_barang`: Mengizinkan supervisor melihat semua barang.

---

