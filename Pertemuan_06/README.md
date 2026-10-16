# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS OBJEK

| Informasi Praktikan | Keterangan |
| :--- | :--- |
| **Nama** | Haikal Putra Pratama |
| **NPM** | NPM |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Objek (PBO) |
| **Pertemuan** | 6 - Abstract Class, Interface, Enum, dan Trait |
| **Tanggal** | 7 Oktober 2026 |

---

## 1. Implementasi Java

### 1.1. File: `Fuelable.java`
**Penjelasan Kode:**
> File ini menentukan aturan bagi objek yang dapat diisi bahan bakar. Fungsinya meliputi isiBahanBakar() untuk mengisi bahan bakar, kapasitasTangki() untuk mengetahui kapasitas tangki, dan tipeBahanBakar() untuk mengetahui jenis bahan bakarnya.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="552" height="210" alt="image" src="https://github.com/user-attachments/assets/26a35d25-d5e7-4fad-a19d-1be5123c1a2e" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="563" height="214" alt="image" src="https://github.com/user-attachments/assets/0db6d63d-c841-40a1-bb80-5f46d8fbf05b" />

### 1.2. File: `Kendaraan.java`
**Penjelasan Kode:**
> File ini merupakan kelas induk yang menyimpan data umum kendaraan, seperti merek dan tahun pembuatan. File ini juga memiliki fungsi umur() untuk menghitung umur kendaraan dan jumlahRoda() yang harus dibuat oleh kelas turunannya.
**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="620" height="454" alt="image" src="https://github.com/user-attachments/assets/ac649b5f-f2d8-4c76-9b45-aa70c451697f" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="613" height="448" alt="image" src="https://github.com/user-attachments/assets/e4c626c5-22e4-4527-b2ab-f16f3b312180" />

### 1.3. File: `Mobil.java`
**Penjelasan Kode:**
> File ini merupakan kelas turunan dari Kendaraan yang juga menerapkan interface Movable dan Fuelable. File ini mengatur cara mobil bergerak, kecepatan maksimum, kapasitas tangki, jenis bahan bakar, dan jumlah bahan bakar yang tersedia.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="502" height="434" alt="Screenshot 2026-10-11 104131" src="https://github.com/user-attachments/assets/177e1400-714b-442f-aeff-731819a6283a" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="412" height="476" alt="image" src="https://github.com/user-attachments/assets/49a09763-b03c-4985-bb6f-5655f38c9dbf" />

### 1.4. File: `Movable.java`
**Penjelasan Kode:**
> File ini menentukan aturan bagi objek yang dapat bergerak. Di dalamnya terdapat fungsi bergerak() untuk menjalankan gerakan, kecepatanMaksimum() untuk menentukan kecepatan maksimal, dan ringkasanGerak() untuk menampilkan ringkasan kecepatan.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="593" height="372" alt="image" src="https://github.com/user-attachments/assets/ae474a1b-9090-48a1-bc6e-6e96e5c49595" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="584" height="350" alt="image" src="https://github.com/user-attachments/assets/2e2cc6f7-447a-40ea-b18c-8e44be00632d" />

### 1.5. File: `TipeBahanBakar.java`
**Penjelasan Kode:**
> File ini menggunakan enum untuk menentukan tiga jenis energi, yaitu bensin, solar, dan listrik. Setiap jenis memiliki label, harga per satuan, fungsi untuk menghitung biaya pengisian, serta fungsi untuk memeriksa apakah jenis tersebut ramah lingkungan.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="517" height="422" alt="image" src="https://github.com/user-attachments/assets/fda6f799-00d6-401a-8c3f-e73f739c0e4b" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="487" height="448" alt="image" src="https://github.com/user-attachments/assets/327f47d7-61ed-44a5-98ed-b69d6588c4ac" />

### 1.6. File: `Sepeda.java`
**Penjelasan Kode:**
> File ini menerapkan interface Movable, sehingga sepeda dapat bergerak dan memiliki kecepatan maksimum. Dalam kode ini, sepeda menampilkan pesan bahwa sepeda melaju di jalan raya dan memiliki kecepatan maksimum 30 km/jam.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:<br>
Untuk Sepeda.java tidak ada beforenya

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="478" height="175" alt="image" src="https://github.com/user-attachments/assets/b857272d-5ba2-4cb6-a087-b78acf323712" />

### 1.7. File: `Main.java`
**Penjelasan Kode:**
> File ini digunakan untuk menjalankan dan menguji semua kelas serta interface. Program menampilkan cara kendaraan bergerak, mengisi tangki mobil hingga penuh, menghitung biaya pengisian, dan menampilkan informasi setiap jenis bahan bakar.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="476" height="475" alt="Screenshot 2026-10-11 105213" src="https://github.com/user-attachments/assets/706ab125-32ec-4f45-94d2-2ebe98f4d94c" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="458" height="464" alt="image" src="https://github.com/user-attachments/assets/6ef61002-5357-4f34-a225-45801e552fd5" />

### Output
**Output Program:**
<img width="656" height="170" alt="image" src="https://github.com/user-attachments/assets/cd77df60-c8aa-4d6a-a2d1-329df783b8a1" />

---

## 2. Implementasi PHP

### 2.1. File: `abstraksi.php`
**Penjelasan Kode:**
> File ini berfungsi untuk mendefinisikan struktur dan aturan dasar objek kendaraan serta pesanan. Di dalamnya terdapat interface Movable dan Fuelable, enum TipeBahanBakar, trait Loggable, abstract class Kendaraan, serta class Mobil, Sepeda, dan Pesanan.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="479" height="445" alt="image" src="https://github.com/user-attachments/assets/6854261b-72a5-4417-8445-4b63e795a5ec" />
<img width="415" height="439" alt="image" src="https://github.com/user-attachments/assets/68b22fcc-7b1a-466f-aa24-dd2fecf9d3f6" />
<img width="489" height="440" alt="image" src="https://github.com/user-attachments/assets/4f2e9dad-f348-484e-aa88-8adea1b5cd5c" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="463" height="389" alt="image" src="https://github.com/user-attachments/assets/3936da73-6556-4858-a08b-2fb718b1578f" />
<img width="461" height="385" alt="image" src="https://github.com/user-attachments/assets/a97c8666-0341-4daa-87f6-fe6db98330b2" />
<img width="477" height="387" alt="image" src="https://github.com/user-attachments/assets/08b6daa2-831a-4f24-aac5-3c11aa444676" />
<img width="530" height="409" alt="image" src="https://github.com/user-attachments/assets/54c19ade-1b48-431f-924d-ac1ab77e2659" />
<img width="413" height="401" alt="image" src="https://github.com/user-attachments/assets/4a5fdcdb-e218-4530-8898-9098ef5dcec7" />

### 2.2. File: `main.php`
**Penjelasan Kode:**
> File ini berfungsi sebagai program utama untuk menjalankan dan menguji kode dari abstraksi.php. Program membuat objek mobil dan sepeda, menampilkan cara bergerak dan kecepatan maksimum, menghitung biaya pengisian bahan bakar, serta menguji penggunaan trait Loggable pada objek mobil dan pesanan.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="500" height="473" alt="image" src="https://github.com/user-attachments/assets/8050c6a1-8814-4b2c-8dba-921cf24cded7" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="450" height="464" alt="image" src="https://github.com/user-attachments/assets/a94c46e2-bd68-481b-9809-38f1c8be5f70" />

### Output
**Output Program:**
<img width="904" height="277" alt="image" src="https://github.com/user-attachments/assets/1d2fcdcf-09b8-4662-a9b8-1563eb395bdb" />

---

## 3. Kesimpulan
> Program ini menggunakan konsep OOP dalam Java untuk memodelkan kendaraan dan kemampuannya. Inheritance digunakan untuk mewariskan data kendaraan, interface digunakan untuk menentukan kemampuan bergerak dan mengisi bahan bakar, sedangkan enum digunakan untuk mengatur jenis bahan bakar. Semua bagian dihubungkan melalui Main agar program dapat dijalankan dan diuji.
