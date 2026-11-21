# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS OBJEK

| Informasi Praktikan | Keterangan |
| :--- | :--- |
| **Nama** | Haikal Putra Pratama |
| **NPM** | 4525210106 |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Objek (PBO) |
| **Pertemuan** | 12 - Prinsip SOLID dan Design Pattern Dasar |
| **Tanggal** | 19 November 2026 |

---

## 1. Implementasi Java

### 1.1. File: `AturanDenda.java`
**Penjelasan Kode:**
> File ini merupakan interface yang menjadi aturan dasar untuk seluruh jenis perhitungan denda. Di dalamnya terdapat dua method, yaitu hitung() untuk menghitung jumlah denda dan nama() untuk menampilkan nama aturan denda.

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1618" height="862" alt="aturandenda java" src="https://github.com/user-attachments/assets/266b59e7-92fa-43ae-a164-509c0bed0051" />

### 1.2. File: `AturanDendaFactory.java`
**Penjelasan Kode:**
> File ini digunakan untuk memilih jenis aturan denda berdasarkan status anggota, seperti mahasiswa, dosen, kehormatan, atau alumni. Dengan adanya Factory Pattern, program dapat menentukan aturan denda secara otomatis tanpa harus membuat objek secara manual di bagian lain program.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1834" height="1318" alt="aturandendafactory java" src="https://github.com/user-attachments/assets/8830576b-171a-4b10-928b-b9e7b3a0b5c0" />

### 1.3. File: `BookRepository.java`
**Penjelasan Kode:**
> File ini merupakan interface yang berisi aturan atau kontrak untuk pengelolaan data buku. Di dalamnya terdapat method untuk menyimpan buku, mencari buku berdasarkan ISBN, menampilkan seluruh buku, dan mengurangi stok buku. Interface ini memisahkan proses penyimpanan data dari logika utama program.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1434" height="1204" alt="bookrepository java" src="https://github.com/user-attachments/assets/6530bf3a-2e2b-44b2-9f0c-131102e69fa6" />

### 1.4. File: `DendaAlumni.java`
**Penjelasan Kode:**
> File ini digunakan untuk menghitung denda keterlambatan bagi anggota alumni. Tarif dendanya adalah Rp750 per hari. Jika tidak ada keterlambatan, maka denda yang dikenakan adalah Rp0.  

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1218" height="900" alt="dendaalunmi java" src="https://github.com/user-attachments/assets/5a2d779b-f56b-475b-9ede-5506f0403758" />

### 1.5. File: `DendaBebas.java`
**Penjelasan Kode:**
> File ini digunakan untuk mengatur perhitungan denda bagi anggota kehormatan. Anggota kehormatan tidak dikenakan denda keterlambatan, sehingga nilai denda yang dihasilkan selalu Rp0.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1402" height="862" alt="dendabebas java" src="https://github.com/user-attachments/assets/ea29b571-90da-4cc3-882d-3166777350f3" />

### 1.6. File: `DendaDosen.java`
**Penjelasan Kode:**
> File ini digunakan untuk menghitung denda keterlambatan bagi anggota yang berstatus dosen. Tarif dendanya adalah Rp500 per hari. Jika tidak terlambat, maka denda yang dikenakan adalah Rp0.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1234" height="938" alt="dendadosen java" src="https://github.com/user-attachments/assets/164a65be-5fd2-482b-bf2d-397bd67222b3" />

### 1.7. File: `DendaMahasiswa.java`
**Penjelasan Kode:**
> File ini digunakan untuk menghitung denda keterlambatan bagi anggota mahasiswa. Tarif dendanya adalah Rp1.000 per hari keterlambatan. Perhitungan tidak menghasilkan denda jika jumlah hari keterlambatan bernilai negatif atau nol.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1326" height="938" alt="dendamahasiswa java" src="https://github.com/user-attachments/assets/d26ba0fd-e07e-4803-a1dd-cdaf52694533" />

### 1.8. File: `InMemoryBookRepository.java`
**Penjelasan Kode:**
> File ini digunakan untuk menyimpan dan mengelola data buku sementara di dalam memori menggunakan LinkedHashMap. File ini memiliki fungsi untuk menyimpan buku, mencari buku berdasarkan ISBN, menampilkan seluruh buku, dan mengurangi stok buku ketika dipinjam.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1480" height="2078" alt="inmemorybookrepository java" src="https://github.com/user-attachments/assets/f55e81a8-7192-457f-8569-84ca66ef10b2" />

### 1.9. File: `Main.java`
**Penjelasan Kode:**
> File ini merupakan program utama yang menjalankan sistem perpustakaan. Di dalamnya terdapat menu untuk menambahkan buku, menambahkan anggota, meminjam buku, dan melihat laporan. File ini juga memiliki fitur ekspor laporan daftar buku ke dalam file teks bernama laporan_buku.txt.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="2110" height="4016" alt="main java" src="https://github.com/user-attachments/assets/fb46eb50-c5f6-4c45-8d3d-603032bd39eb" />

### 1.10. File: `pom.xml`
**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1526" height="3180" alt="pom xml" src="https://github.com/user-attachments/assets/0a93434d-c82b-479d-a592-6f4eadb12877" />

### Output
**Output Program:**<br>
<img width="431" height="416" alt="Screenshot 2026-11-21 151802" src="https://github.com/user-attachments/assets/6284b805-86af-4b83-81f3-d92c095f1fbf" />
<img width="359" height="341" alt="Screenshot 2026-11-21 151928" src="https://github.com/user-attachments/assets/49edb4a0-9481-4078-b484-1acab9cbe866" />
<img width="374" height="305" alt="Screenshot 2026-11-21 151952" src="https://github.com/user-attachments/assets/6dbf1f35-1a3f-4e91-a56f-8c352dc5527f" />
<img width="441" height="184" alt="Screenshot 2026-11-21 152035" src="https://github.com/user-attachments/assets/521ac2a3-23bb-475f-8ab5-8b803ed6fddc" />

---

## 2. Implementasi PHP

### 2.1. File: `AturanDenda.php`
**Penjelasan Kode:**
> File ini merupakan interface yang menjadi aturan dasar untuk seluruh jenis denda.
> - Method hitung() digunakan untuk menghitung jumlah denda.
> - Method nama() digunakan untuk mendapatkan nama aturan denda.
> - Semua class denda harus mengikuti kedua method tersebut.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1140" height="824" alt="aturandenda php" src="https://github.com/user-attachments/assets/f3ab0c3a-2f0f-45de-8814-dfeb63b8af07" />

### 2.2. File: `AturanDendaFactory.php`
**Penjelasan Kode:**
> File ini berfungsi untuk menentukan jenis denda berdasarkan jenis anggota perpustakaan.
> - Mahasiswa mendapatkan denda Rp1.000 per hari.
> - Dosen mendapatkan denda Rp500 per hari.
> - Kehormatan atau bebas mendapatkan denda Rp0.
> - Alumni mendapatkan denda Rp750 per hari.
> - Jika jenis anggota tidak dikenal, program akan menghasilkan error InvalidArgumentException.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1942" height="1090" alt="aturandendafactory php" src="https://github.com/user-attachments/assets/63e74238-ec56-44b9-be90-6f086a4dc8e8" />

### 2.3. File: `BookRepository.php`
**Penjelasan Kode:**
> File ini merupakan interface yang menentukan aturan pengelolaan data buku.
> - Menentukan method untuk menyimpan buku.
> - Menentukan method untuk mencari buku berdasarkan ISBN.
> - Menentukan method untuk mengambil semua data buku.
> - Menentukan method untuk mengurangi stok buku.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1434" height="1128" alt="bookrepository php" src="https://github.com/user-attachments/assets/a0a63c1f-46e3-4f46-b6bc-96ae0251f741" />

### 2.4. File: `DendaAlumni.php`
**Penjelasan Kode:**
> File ini berfungsi untuk menghitung denda keterlambatan pengembalian buku bagi alumni.
> - Tarif denda sebesar Rp750 per hari.
> - Method hitung() menghitung total denda berdasarkan jumlah hari keterlambatan.
> - Method nama() menampilkan nama aturan denda alumni.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1388" height="1052" alt="dendaalumni php" src="https://github.com/user-attachments/assets/dcf896c0-0c12-4eea-abb6-e1e326ef2ade" />

### 2.5. File: `DendaBebas.php`
**Penjelasan Kode:**
> File ini berfungsi untuk mengatur denda bagi anggota kehormatan atau anggota yang mendapatkan bebas denda.
> - Method hitung() selalu mengembalikan nilai 0.
> - Method nama() menampilkan nama aturan denda.
> - Anggota tidak perlu membayar denda meskipun terlambat mengembalikan buku.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1126" height="976" alt="dendabebas php" src="https://github.com/user-attachments/assets/d7344a90-dbc3-4172-a2a0-4d8bbb19e04a" />

### 2.6. File: `DendaDosen.php`
**Penjelasan Kode:**
> File ini berfungsi untuk menghitung denda keterlambatan pengembalian buku bagi dosen.
> - Tarif denda sebesar Rp500 per hari.
> - Method hitung() mengalikan jumlah hari keterlambatan dengan tarif denda.
> - Jika jumlah hari negatif, perhitungannya dianggap 0.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1248" height="1052" alt="dendadosen php" src="https://github.com/user-attachments/assets/7a79617f-6b1c-4e51-8850-36b605288366" />

### 2.7. File: `DendaMahasiswa.php`
**Penjelasan Kode:**
> File ini berfungsi untuk menghitung denda keterlambatan pengembalian buku bagi mahasiswa.
> - Tarif denda sebesar Rp1.000 per hari.
> - Method hitung() menghitung total denda berdasarkan jumlah hari keterlambatan.
> - Jika tidak terlambat, denda tetap 0.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1248" height="1052" alt="dendamahasiswa php" src="https://github.com/user-attachments/assets/c9ad4225-7302-402e-ab83-f11fb3c3641c" />

### 2.8. File: `InMemoryBookRepository.php`
**Penjelasan Kode:**
> File ini berfungsi untuk menyimpan dan mengelola data buku sementara menggunakan array.
> - simpan() menyimpan data buku.
> - cariByIsbn() mencari buku berdasarkan ISBN.
> - cariSemua() mengambil seluruh data buku.
> - kurangiStok() mengurangi jumlah stok buku ketika dipinjam.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1310" height="1584" alt="inmemorybookrepository php" src="https://github.com/user-attachments/assets/37a8db75-dfc1-4c5a-8990-616b1ba224e1" />

### 2.9. File: `main.php`
**Penjelasan Kode:**
> File ini merupakan file utama untuk menjalankan dan menguji program perpustakaan.
> - Membuat objek repository dan aturan denda.
> - Menambahkan data buku dan mendaftarkan anggota.
> - Menguji proses peminjaman buku, termasuk kondisi berhasil dan gagal.
> - Menampilkan laporan perpustakaan.
> - Membuat file laporan_buku.txt yang berisi daftar buku, stok, dan status ketersediaannya.
> - Menggunakan try-catch-finally untuk menangani error dan memastikan file ditutup setelah digunakan.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="2064" height="3750" alt="main php" src="https://github.com/user-attachments/assets/83e64ad4-870c-47e1-8559-7f4d43b20072" />

### Output
**Output Program:**<br>
<img width="606" height="407" alt="Screenshot 2026-11-21 152112" src="https://github.com/user-attachments/assets/9c346aac-38f2-4be2-806b-3487e5457cf9" />

---

## 3. Kesimpulan
> Semua java dan php tersebut saling berhubungan dalam membangun sistem informasi perpustakaan. Bagian aturan denda menggunakan Strategy Pattern untuk membedakan perhitungan denda berdasarkan jenis anggota, sedangkan pengelolaan data buku menggunakan Repository Pattern untuk memisahkan penyimpanan data dari logika program. Seluruh bagian kemudian dihubungkan melalui file Main.java sebagai program utama yang menjalankan sistem perpustakaan.
