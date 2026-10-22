# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS OBJEK

| Informasi Praktikan | Keterangan |
| :--- | :--- |
| **Nama** | Haikal Putra Pratama |
| **NPM** | 4525210106 |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Objek (PBO) |
| **Pertemuan** | 07 - Relasi Objek dan UML Class Diagram |
| **Tanggal** | 15 Oktober 2026 |

---

## 1. Implementasi Java

### 1.1. File: `Buku.java`
**Penjelasan Kode:**
> File ini digunakan untuk menyimpan informasi buku, seperti nomor induk, judul, penulis, jumlah stok, dan daftar bab. File ini juga mengatur penambahan bab, pengecekan ketersediaan buku, serta penambahan dan pengurangan stok. Konsep yang diterapkan adalah komposisi, yaitu hubungan antara buku dan bab.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="481" height="478" alt="image" src="https://github.com/user-attachments/assets/3fb2216d-9625-48d0-9b09-75e622b99c09" />
<img width="425" height="433" alt="image" src="https://github.com/user-attachments/assets/9cddfde3-5c53-4b8d-a8e4-3df53f25ad3f" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="475" height="449" alt="image" src="https://github.com/user-attachments/assets/7d3b6a16-0aaf-49a4-864f-a0874849fca7" />
<img width="437" height="424" alt="image" src="https://github.com/user-attachments/assets/00ec1c45-318e-46ba-9db0-d192ec1e590f" />

### 1.2. File: `Jurusan.java`
**Penjelasan Kode:**
> File ini digunakan untuk mengelola data jurusan dan mahasiswa, seperti mendaftarkan mahasiswa, mengeluarkan mahasiswa, dan menampilkan jumlah mahasiswa. Konsep yang diterapkan adalah agregasi, yaitu mahasiswa tetap dapat ada meskipun sudah tidak menjadi bagian dari jurusan.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="562" height="470" alt="image" src="https://github.com/user-attachments/assets/e1e95f2c-5108-4e10-8a53-d79b2c947714" />
<img width="583" height="401" alt="image" src="https://github.com/user-attachments/assets/51937f5f-2351-49f7-a414-423c1e4cd749" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="557" height="463" alt="image" src="https://github.com/user-attachments/assets/e8dbe844-a56d-4474-a207-958ff25aecbb" />
<img width="550" height="449" alt="image" src="https://github.com/user-attachments/assets/15e6a0ac-9bbb-4e8b-aae4-a181a0297c7c" />

### 1.3. File: `PerpustakaanService.java`
**Penjelasan Kode:**
> File ini digunakan untuk mengatur layanan perpustakaan, seperti mendaftarkan anggota, menambahkan koleksi buku, mencari buku, memproses peminjaman, dan pengembalian buku. File ini juga membatasi jumlah peminjaman maksimal tiga buku untuk setiap anggota.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="547" height="473" alt="image" src="https://github.com/user-attachments/assets/b0eff0a0-84d6-401c-bafb-6b63c47ead40" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="453" height="454" alt="image" src="https://github.com/user-attachments/assets/7d69bd4f-4d4b-4219-b287-8ec2342083f0" />
<img width="524" height="401" alt="image" src="https://github.com/user-attachments/assets/bd0b74b6-be79-45ba-8024-2bc072acb8c2" />

### 1.4. File: `Main.java`
**Penjelasan Kode:**
> File ini digunakan sebagai program utama untuk menjalankan dan menguji semua kelas yang telah dibuat. Program ini menunjukkan contoh komposisi pada buku dan bab, agregasi pada jurusan dan mahasiswa, serta proses peminjaman dan pengembalian buku di perpustakaan.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="586" height="445" alt="image" src="https://github.com/user-attachments/assets/52b04fca-0296-4d77-9200-bfaced621730" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="782" height="434" alt="image" src="https://github.com/user-attachments/assets/78346e29-414c-4c8f-a11d-d6514a2c7c96" />
<img width="679" height="401" alt="image" src="https://github.com/user-attachments/assets/0be77231-076f-4651-b8e6-4ac83d8fd1c8" />

### Output
**Output Program:**<br>
<img width="722" height="289" alt="image" src="https://github.com/user-attachments/assets/b0f9682a-b064-426e-baed-b73ce5bc921c" />

---

## 2. Implementasi PHP

### 2.1. File: `Relasi.php`
**Penjelasan Kode:**
> File ini digunakan untuk mendefinisikan kelas Bab, Buku, Mahasiswa, dan Jurusan. File ini mengatur data buku dan bab, serta data jurusan dan mahasiswa. Konsep OOP yang diterapkan adalah komposisi, yaitu buku memiliki bab, dan agregasi, yaitu jurusan menaungi mahasiswa.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="547" height="449" alt="image" src="https://github.com/user-attachments/assets/c71fb739-4239-4e78-8974-113f80ffb1f3" />
<img width="590" height="386" alt="image" src="https://github.com/user-attachments/assets/8d143968-e37a-41a3-b083-3d81573ec00a" />
<img width="559" height="421" alt="image" src="https://github.com/user-attachments/assets/454d2c93-17f1-4f05-809d-4f1661f2c55b" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="509" height="463" alt="image" src="https://github.com/user-attachments/assets/4b06aa27-4ac2-4204-93e3-3a5c2584c614" />
<img width="453" height="434" alt="image" src="https://github.com/user-attachments/assets/edf4d115-3a80-4ae7-8308-f1e5cdf8c582" />
<img width="476" height="462" alt="image" src="https://github.com/user-attachments/assets/c3ea8f50-4695-4673-8103-71b6b55f29f9" />

### 2.2. File: `main.php`
**Penjelasan Kode:**
> File ini digunakan sebagai program utama untuk menjalankan dan menguji kelas-kelas yang terdapat dalam relasi.php. Program ini membuat objek buku beserta bab-babnya, mendaftarkan mahasiswa ke jurusan, serta menunjukkan bahwa mahasiswa tetap ada sebagai objek meskipun dikeluarkan dari jurusan.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="536" height="387" alt="image" src="https://github.com/user-attachments/assets/3d8dee5c-9179-495e-aeea-a5ee20367037" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="536" height="387" alt="image" src="https://github.com/user-attachments/assets/2494fc26-deaa-4b88-a789-d410638dfb15" />

### Output
**Output Program:**<br>
<img width="713" height="142" alt="image" src="https://github.com/user-attachments/assets/19d8abcc-1673-48f6-bf02-db837eb134f8" />

---

## 3. Kesimpulan
> Kedua program tersebut membahas konsep Object-Oriented Programming (OOP), khususnya komposisi dan agregasi. Kedua program menunjukkan bagaimana objek saling berhubungan melalui contoh buku dan bab serta jurusan dan mahasiswa. Selain itu, program Java juga menerapkan layanan peminjaman dan pengembalian buku di perpustakaan. Dengan demikian, kedua bahasa pemrograman tersebut dapat digunakan untuk memahami penerapan OOP dalam pengelolaan objek dan hubungan antarobjek.
