# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS OBJEK

| Informasi Praktikan | Keterangan |
| :--- | :--- |
| **Nama** | Haikal Putra Pratama |
| **NPM** | 4525210106 |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Objek (PBO) |
| **Pertemuan** | 09 - Package, Namespace, dan Build Tool |
| **Tanggal** | 29 Oktober 2026 |

---

## 1. Implementasi Java

### 1.1. File: `Anggota.java`
**Penjelasan Kode:**
> File ini digunakan untuk mengelola keanggotaan perpustakaan. File ini menyimpan kode anggota, data mahasiswa yang menjadi anggota, serta tanggal mulai keanggotaan. File ini juga memiliki fungsi untuk memeriksa apakah masa keanggotaan masih berlaku atau sudah lebih dari tiga tahun.

Fungsi utamanya:
- Menyimpan kode anggota perpustakaan.
- Mencatat mahasiswa yang menjadi anggota.
- Menampilkan informasi keanggotaan.
- Memeriksa masa berlaku keanggotaan.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1942" height="2192" alt="anggota java" src="https://github.com/user-attachments/assets/e87ac1a7-1105-44ea-89f7-a211dcf1c202" />

### 1.2. File: `Buku.java`
**Penjelasan Kode:**
> File ini digunakan untuk mengelola data buku dan bab-bab di dalamnya. File ini menerapkan konsep komposisi, yaitu objek bab dibuat langsung oleh objek buku sehingga bab menjadi bagian dari buku tersebut. File ini juga mengelola jumlah stok buku yang tersedia.

Fungsi utamanya:
- Menyimpan nomor induk, judul, penulis, dan jumlah stok buku.
- Menambahkan bab ke dalam buku.
- Memeriksa ketersediaan stok buku.
- Menambah dan mengurangi stok buku.
- Menampilkan informasi buku.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1648" height="4016" alt="buku java" src="https://github.com/user-attachments/assets/79feaaa8-917b-48c7-88d5-acdd2010a8c3" />

### 1.3. File: `Jurusan.java`
**Penjelasan Kode:**
> File ini digunakan untuk mengelola data jurusan dan daftar mahasiswa yang terdaftar di dalamnya. File ini menerapkan konsep agregasi, yaitu mahasiswa tetap dapat berdiri sendiri meskipun sudah tidak terdaftar di suatu jurusan.

Fungsi utamanya:
- Menyimpan kode dan nama jurusan.
- Mendaftarkan mahasiswa ke dalam jurusan.
- Mengeluarkan mahasiswa dari jurusan.
- Menampilkan daftar mahasiswa yang terdaftar

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1618" height="2838" alt="jurusan java" src="https://github.com/user-attachments/assets/59a4adf2-a140-496b-8083-42f2048f8092" />

### 1.4. File: `PerpustakaanService.java`
**Penjelasan Kode:**
> File ini digunakan untuk mengelola layanan perpustakaan, terutama dalam hal penyimpanan dan pencarian koleksi buku serta simulasi peminjaman dan pengembalian buku.

Fungsi utamanya:
- Menyimpan koleksi buku perpustakaan.
- Menambahkan buku ke koleksi.
- Mencari buku berdasarkan nomor induk.
- Menjalankan fungsi peminjaman buku.
- Menjalankan fungsi pengembalian buku.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1664" height="2078" alt="perpus java" src="https://github.com/user-attachments/assets/5a9419dc-9cfb-48f1-8993-90383501ef4d" />

### 1.5. File: `Main.java`
**Penjelasan Kode:**
> File ini digunakan sebagai program utama untuk menjalankan dan menguji seluruh fungsi dari kelas-kelas lainnya. Di dalamnya terdapat contoh penggunaan kelas Buku, Jurusan, Anggota, dan PerpustakaanService.

Fungsi utamanya:
- Membuat objek buku beserta bab-babnya.
- Membuat jurusan dan mendaftarkan mahasiswa.
- Menguji konsep komposisi dan agregasi.
- Menjalankan simulasi peminjaman dan pengembalian buku.
- Menampilkan informasi anggota perpustakaan dan status keanggotaannya.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1910" height="3066" alt="main java" src="https://github.com/user-attachments/assets/6a7648ab-7e27-4313-a4df-fb892021349c" />

### Output
**Output Program:**<br>
<img width="568" height="448" alt="Screenshot 2026-10-30 224055" src="https://github.com/user-attachments/assets/ad0882eb-78f9-4ef3-a2d3-84107f5a6ed1" />

---

## 2. Implementasi PHP

### 2.1. File: `Anggota.php`
**Penjelasan Kode:**
> File ini digunakan untuk mengelola data keanggotaan perpustakaan. File ini menghubungkan mahasiswa dengan jurusannya sebagai anggota perpustakaan, mencatat tanggal mulai keanggotaan, dan memeriksa masa berlaku keanggotaan selama tiga tahun.

Fungsi utamanya:
- Menyimpan data jurusan dan kode anggota.
- Mendaftarkan mahasiswa sebagai anggota perpustakaan.
- Mencatat tanggal mulai keanggotaan.
- Menampilkan informasi anggota.
- Memeriksa apakah keanggotaan masih valid atau sudah lebih dari tiga tahun.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1602" height="2230" alt="anggota php" src="https://github.com/user-attachments/assets/9d9257fd-131a-454f-b2a8-87f66b5c4e86" />

### 2.2. File: `Bab.php`
**Penjelasan Kode:**
> File ini digunakan untuk menyimpan informasi setiap bab yang terdapat di dalam buku. Setiap bab memiliki nomor dan judul. File ini juga memastikan nomor bab harus positif dan judul bab tidak boleh kosong.

Fungsi utamanya:
- Menyimpan nomor bab.
- Menyimpan judul bab.
- Memvalidasi nomor dan judul bab.
- Menampilkan informasi bab dalam format teks.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1896" height="1204" alt="bab php" src="https://github.com/user-attachments/assets/2d0ae1b1-1496-4b42-b1e9-91103e3b8c82" />

### 2.3. File: `Buku.php`
**Penjelasan Kode:**
> File ini digunakan untuk mengelola data buku dan jumlah stok yang tersedia di perpustakaan. Selain itu, file ini mengelola bab-bab yang dimiliki buku serta menyediakan fungsi untuk menambah dan mengurangi stok.

Fungsi utamanya:
- Menyimpan nomor induk, judul, dan nama penulis buku.
- Menyimpan jumlah eksemplar buku.
- Menambahkan bab ke dalam buku.
- Memeriksa ketersediaan stok buku.
- Menambah dan mengurangi stok buku.
- Menampilkan informasi buku beserta jumlah stok dan babnya.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1864" height="3446" alt="buku php" src="https://github.com/user-attachments/assets/00d38960-681f-473b-904d-250d369da929" />

### 2.4. File: `Jurusan.php`
**Penjelasan Kode:**
> File ini digunakan untuk mengelola data jurusan dan daftar mahasiswa yang terdaftar di dalamnya. File ini menerapkan konsep agregasi, yaitu mahasiswa tetap dapat berdiri sendiri meskipun sudah dikeluarkan dari jurusan.

Fungsi utamanya:
- Menyimpan kode dan nama jurusan.
- Mendaftarkan mahasiswa ke dalam jurusan.
- Mengeluarkan mahasiswa dari jurusan.
- Menampilkan nama jurusan dan jumlah mahasiswa.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1848" height="2306" alt="jurusan php" src="https://github.com/user-attachments/assets/742a8133-c9c1-484a-9d83-f0ad012219a3" />

### 2.5. File: `Mahasiswa.php`
**Penjelasan Kode:**
> File ini digunakan untuk menyimpan identitas mahasiswa, yaitu Nomor Induk Mahasiswa (NIM) dan nama mahasiswa. File ini juga memastikan NIM dan nama tidak boleh kosong.

Fungsi utamanya:
- Menyimpan NIM mahasiswa.
- Menyimpan nama mahasiswa.
- Memvalidasi data mahasiswa.
- Menampilkan NIM dan nama mahasiswa.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1726" height="1584" alt="mahasiswa php" src="https://github.com/user-attachments/assets/c8b0f7f7-0943-4427-a402-cfad9f853322" />

### 2.6. File: `Peminjaman.php`
**Penjelasan Kode:**
> File ini digunakan untuk mengelola proses peminjaman buku, mulai dari mencatat tanggal peminjaman, menentukan batas waktu pengembalian, hingga mencatat waktu pengembalian buku. Secara default, durasi peminjaman adalah 14 hari.

Fungsi utamanya:
- Menyimpan nomor anggota yang meminjam buku.
- Mencatat buku dan tanggal peminjaman.
- Menentukan tanggal jatuh tempo pengembalian.
- Memeriksa apakah peminjaman masih aktif.
- Mencatat waktu pengembalian buku.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1864" height="2382" alt="peminjaman php" src="https://github.com/user-attachments/assets/f04a303f-7310-4915-b414-c1c76126688f" />

### 2.7. File: `PerpustakaanService.php`
**Penjelasan Kode:**
> File ini digunakan untuk mengatur layanan utama perpustakaan, khususnya pengelolaan koleksi buku serta proses peminjaman dan pengembalian buku. File ini juga memeriksa ketersediaan buku dan mencegah anggota meminjam buku yang sama ketika peminjaman sebelumnya masih aktif.

Fungsi utamanya:
- Menambahkan buku ke koleksi perpustakaan.
- Mencari buku berdasarkan nomor induk.
- Memeriksa apakah buku tersedia.
- Memproses peminjaman dan mengurangi stok buku.
- Memproses pengembalian dan menambah stok buku.
- Mencegah peminjaman ganda untuk buku yang sama oleh anggota yang sama.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1834" height="3142" alt="perpus php" src="https://github.com/user-attachments/assets/50c150f5-f8d9-430b-b447-fe54f727b251" />

### 2.8. File: `Main.php`
**Penjelasan Kode:**
> File ini digunakan sebagai program utama untuk menjalankan dan menguji seluruh fungsi sistem perpustakaan. File ini membuat objek buku, bab, jurusan, mahasiswa, anggota, dan layanan perpustakaan, kemudian menjalankan simulasi peminjaman serta pengembalian buku.

Fungsi utamanya:
- Membuat data buku beserta bab-babnya.
- Menguji konsep komposisi antara buku dan bab.
- Membuat jurusan dan mendaftarkan mahasiswa.
- Menguji konsep agregasi antara jurusan dan mahasiswa.
- Menambahkan buku ke koleksi perpustakaan.
- Menjalankan simulasi peminjaman dan pengembalian buku.
- Menampilkan informasi dan status keanggotaan perpustakaan.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1710" height="2458" alt="main php" src="https://github.com/user-attachments/assets/213e2275-8f30-4026-9205-efea7ac88cb5" />

### Output
**Output Program:**<br>
<img width="480" height="352" alt="Screenshot 2026-10-30 233933" src="https://github.com/user-attachments/assets/d30dd7c6-5a4b-4411-ba12-d58c39620052" />

---

### File : `pom.xml`
**Bukti Eksekusi (Screenshot):**
<img width="1526" height="2648" alt="xml" src="https://github.com/user-attachments/assets/71689906-f9c9-492e-8eae-91416b7eaa08" />

---

## 3. Kesimpulan
> **Kesimpulan**<br>
Berdasarkan keseluruhan file Java dan PHP yang telah dibuat, keduanya merupakan implementasi sistem perpustakaan sederhana yang menerapkan konsep Pemrograman Berorientasi Objek (OOP). Sistem ini memiliki beberapa fungsi utama, yaitu mengelola data buku, bab, jurusan, mahasiswa, anggota perpustakaan, serta proses peminjaman dan pengembalian buku.<br><br>
Kedua program menerapkan konsep **komposisi** pada hubungan antara buku dan bab, serta **agregasi** pada hubungan antara jurusan dan mahasiswa. Selain itu, program juga menerapkan enkapsulasi untuk mengelola data dan menyediakan method untuk menjalankan berbagai fungsi sistem perpustakaan.<br><br>
Perbedaan keduanya terletak pada bahasa pemrograman dan cara implementasinya. Java menggunakan struktur kelas dan tipe data yang ditentukan secara eksplisit, sedangkan PHP menggunakan sintaks yang berbeda serta memanfaatkan pustaka tambahan, seperti Carbon untuk pengelolaan tanggal dan waktu. Meskipun memiliki perbedaan implementasi, keduanya memiliki tujuan yang sama, yaitu mengelola sistem perpustakaan secara terstruktur, mulai dari pengelolaan data hingga proses peminjaman dan pengembalian buku.<br><br>
Dengan demikian, pembuatan program menggunakan Java dan PHP ini membantu memahami penerapan konsep OOP dalam kasus nyata, khususnya dalam membangun sistem perpustakaan yang terorganisasi dan mudah dikembangkan.<br><br>
