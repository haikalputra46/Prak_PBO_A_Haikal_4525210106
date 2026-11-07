# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS OBJEK

| Informasi Praktikan | Keterangan |
| :--- | :--- |
| **Nama** | Haikal Putra Pratama |
| **NPM** | 4525210106 |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Objek (PBO) |
| **Pertemuan** | 10 - Exception Handling dan Pemrograman Defensif |
| **Tanggal** | 05 November 2026 |

---

## 1. Implementasi Java

### 1.1. File: `AnggotaTidakDitemukanException.java`
**Penjelasan Kode:**
> File ini berfungsi untuk menangani kesalahan ketika ID anggota yang dimasukkan tidak terdaftar dalam sistem perpustakaan.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1464" height="862" alt="anggotatidakditemukan" src="https://github.com/user-attachments/assets/78eae036-2a97-47ed-892f-4e3b28291b55" />

### 1.2. File: `BatasPinjamTerlampauiException.java`
**Penjelasan Kode:**
> File ini berfungsi untuk menangani kesalahan ketika ID anggota yang dimasukkan tidak terdaftar dalam sistem perpustakaan.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1602" height="1128" alt="bataspinjamterlampaui" src="https://github.com/user-attachments/assets/d9787187-66b7-49f2-aa26-6a70b3feb1ce" />

### 1.3. File: `BukuSedangDipinjamException.java`
**Penjelasan Kode:**
> File ini berfungsi untuk menangani kondisi ketika buku sedang tidak tersedia karena telah dipinjam. File ini juga menyimpan ISBN dan judul buku yang bermasalah.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1494" height="1090" alt="bukusedangdipinjam" src="https://github.com/user-attachments/assets/56598c18-0d0b-4622-a3b6-8c645f2bd13b" />

### 1.4. File: `BukuTidakDitemukanException.java`
**Penjelasan Kode:**
> File ini digunakan untuk menangani kesalahan ketika buku dengan ISBN yang dimasukkan tidak ditemukan dalam sistem perpustakaan.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1418" height="862" alt="bukutidakditemukan" src="https://github.com/user-attachments/assets/925ea1bd-cc56-4adf-8d5d-9f447a49e111" />

### 1.5. File: `PerpustakaanException.java`
**Penjelasan Kode:**
> File ini merupakan kelas induk untuk seluruh exception dalam sistem perpustakaan. Kelas ini digunakan agar penanganan kesalahan menjadi lebih terstruktur.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1402" height="786" alt="perpustakaan" src="https://github.com/user-attachments/assets/276071a5-ef18-482f-89c5-ae836d4b0557" />

### 1.6. File: `LibraryService.java`
**Penjelasan Kode:**
> File ini berfungsi sebagai pengelola utama data perpustakaan, seperti stok buku, judul buku, data anggota, dan proses peminjaman. File ini menggunakan guard clause untuk melakukan validasi dan menangani kesalahan dengan exception khusus.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1556" height="2686" alt="libraryservice" src="https://github.com/user-attachments/assets/8fbf3e2d-120f-4bef-a629-263f8b70f6e8" />

### 1.7. File: `LibraryServiceKotor.java`
**Penjelasan Kode:**
> File ini merupakan contoh kode sebelum dilakukan refactoring. Proses peminjaman masih menggunakan banyak percabangan if bersarang sehingga struktur kode terlihat lebih panjang dan kurang sederhana.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1448" height="2420" alt="libraryservicekotor" src="https://github.com/user-attachments/assets/1fbb88a5-a5e6-40dc-803c-9a90a0b6f0b2" />

### 1.8. File: `PerpustakaanService.java`
**Penjelasan Kode:**
> File ini berfungsi untuk mengelola proses input data anggota, penambahan buku, dan peminjaman buku. File ini juga melakukan validasi input serta menangani exception yang terjadi.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1970" height="4358" alt="perpustakaanservice" src="https://github.com/user-attachments/assets/3af67c3c-23b7-44af-8ed6-829e43462669" />

### 1.9. File: `Main.java`
**Penjelasan Kode:**
> File ini merupakan program utama yang menjalankan sistem perpustakaan. File ini menampilkan menu interaktif untuk menambah buku, mendaftarkan anggota, meminjam buku, serta mengekspor laporan daftar buku ke dalam file teks.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="2110" height="3560" alt="main" src="https://github.com/user-attachments/assets/de616f7d-887a-400f-b571-1ea3e8b3ff2e" />


### Output
**Output Program:**<br>
<img width="352" height="142" alt="Screenshot 2026-11-06 151223" src="https://github.com/user-attachments/assets/eec64d15-c710-4232-b70b-4881b6c86892" />
<img width="366" height="167" alt="Screenshot 2026-11-06 151214" src="https://github.com/user-attachments/assets/c212ea17-640f-49cc-8057-b41d4f73b6d1" />
<img width="350" height="205" alt="Screenshot 2026-11-06 151229" src="https://github.com/user-attachments/assets/ec9af854-05e1-4d8b-9736-659a501e8260" />

---

## 2. Implementasi PHP

### 2.1. File: `AnggotaTidakDitemukanException.php`
**Penjelasan Kode:**
> File ini digunakan untuk menangani kesalahan ketika anggota yang ingin meminjam buku belum terdaftar dalam sistem. Program akan menampilkan pesan bahwa ID anggota tersebut tidak ditemukan.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1526" height="976" alt="anggotatidakditemukan" src="https://github.com/user-attachments/assets/c9dca336-be7a-4070-ba83-227a5948f20f" />

### 2.2. File: `BatasPinjamTerlampauiException.php`
**Penjelasan Kode:**
> File ini digunakan untuk menangani kesalahan ketika anggota sudah mencapai batas maksimal peminjaman buku, yaitu 3 buku. Jika anggota mencoba meminjam lebih dari batas tersebut, program akan menghasilkan exception.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1588" height="1318" alt="bataspinjamterlampaui" src="https://github.com/user-attachments/assets/9408e3de-a5f3-42f1-b7c7-3f97129e1b5d" />

### 2.3. File: `BukuSedangDipinjamException.php`
**Penjelasan Kode:**
> File ini digunakan untuk menangani kondisi ketika stok buku sudah habis atau seluruh eksemplarnya sedang dipinjam. Program akan menampilkan pesan bahwa buku tersebut sedang dipinjam.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1556" height="1242" alt="bukusedangdipinjam" src="https://github.com/user-attachments/assets/8307e7a2-f79c-4af0-86b8-fa2bfeb745f7" />

### 2.4. File: `BukuTidakDitemukanException.php`
**Penjelasan Kode:**
> File ini digunakan untuk menangani kesalahan ketika buku yang dicari tidak ditemukan berdasarkan ISBN. Jika buku tidak tersedia dalam katalog, program akan menampilkan pesan bahwa buku tersebut tidak ditemukan.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1434" height="976" alt="bukutidakditemukan" src="https://github.com/user-attachments/assets/df6a7b0a-a7c8-4389-b684-0b6231745dd5" />

### 2.5. File: `PerpustakaanException.php`
**Penjelasan Kode:**
> File ini merupakan kelas induk (parent class) untuk seluruh exception atau penanganan kesalahan dalam sistem perpustakaan. Kelas ini digunakan agar berbagai jenis kesalahan dapat ditangani melalui satu jenis exception utama.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1434" height="938" alt="perpustakaan" src="https://github.com/user-attachments/assets/68277bd9-5481-48f1-b480-a18515f40f86" />

### 2.6. File: `LibraryService.php`
**Penjelasan Kode:**
> File ini merupakan kelas utama yang mengatur proses peminjaman buku di perpustakaan. Di dalamnya terdapat fungsi untuk menambahkan buku, mendaftarkan anggota, meminjam buku, mengecek sisa stok, serta menampilkan seluruh judul buku. File ini juga menggunakan exception untuk menangani kesalahan peminjaman.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1618" height="3104" alt="libraryservice" src="https://github.com/user-attachments/assets/745b7118-fff7-41a0-9ff2-dece8b7460bd" />

### 2.7. File: `LibraryServiceKotor.php`
**Penjelasan Kode:**
> File ini merupakan versi awal dari program peminjaman buku yang belum dilakukan refactoring. Kode peminjamannya masih menggunakan banyak percabangan if-else bersarang sehingga terlihat lebih panjang dan sulit dibaca. File ini digunakan sebagai bahan latihan untuk memperbaiki struktur kode agar lebih sederhana.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1618" height="2648" alt="libraryservicekotor" src="https://github.com/user-attachments/assets/adbb0350-e071-4272-87e2-755e6b82d503" />

### 2.8. File: `Main.php`
**Penjelasan Kode:**
> File ini merupakan file utama untuk menjalankan dan menguji program perpustakaan. File ini membuat data buku dan anggota, melakukan beberapa percobaan peminjaman, menampilkan pesan berhasil atau gagal, serta membuat laporan daftar buku dalam bentuk file .txt.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1786" height="5460" alt="main" src="https://github.com/user-attachments/assets/67b20ba4-2127-41c3-9a7e-bcf853aec515" />

### Output
**Output Program:**<br>
<img width="701" height="248" alt="Screenshot 2026-11-06 155510" src="https://github.com/user-attachments/assets/0cf19922-1651-43e1-a170-c03b8638353f" />

---

## 3. Kesimpulan
> Semua file PHP dan Java tersebut saling berhubungan dalam membangun sistem peminjaman buku perpustakaan. Program ini menerapkan konsep OOP, Exception Handling, dan Defensive Programming untuk membuat sistem lebih aman, terstruktur, serta mudah dikelola. Penggunaan exception khusus membantu menangani berbagai kesalahan, sedangkan penerapan validasi input dan guard clause membuat kode lebih sederhana, mudah dibaca, dan dipahami. Selain itu, konsep refactoring diterapkan untuk meningkatkan kualitas struktur kode serta dilengkapi fitur pengelolaan data buku, anggota, peminjaman, dan ekspor laporan.
