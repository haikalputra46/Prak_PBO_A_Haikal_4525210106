# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS OBJEK

| Informasi Praktikan | Keterangan |
| :--- | :--- |
| **Nama** | Haikal Putra Pratama |
| **NPM** | 4525210106 |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Objek (PBO) |
| **Pertemuan** | 4 - Pewarisan (Inheritance) |
| **Tanggal** | 24 September 2026 |

---

## 1. Implementasi Java

### 1.1. File: `Pegawai.java`
**Penjelasan Kode:**
> File ini berfungsi sebagai kelas induk (parent class) yang menyimpan data dan fungsi umum untuk semua jenis pegawai.
> Fungsi utamanya:
> - Menyimpan NIP, nama, dan gaji pokok.
> - Memvalidasi agar gaji pokok tidak negatif.
> - Menyediakan metode hitungGaji() untuk menghitung gaji dasar.
> - Menyediakan metode abstrak jenis() yang harus diterapkan oleh kelas turunannya.
> - Menampilkan informasi pegawai melalui toString().

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="496" height="476" alt="image" src="https://github.com/user-attachments/assets/414678da-1c44-4936-bdd1-a2887bdd3ba5" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="512" height="470" alt="image" src="https://github.com/user-attachments/assets/7633f69f-b08a-4c14-bc3b-f130a0e2e7b7" />

### 1.2. File: `PegawaiTetap.java`
**Penjelasan Kode:**
> File ini berfungsi untuk mengelola data pegawai tetap dengan tambahan tunjangan masa kerja.
> Fungsi utamanya:
> - Menyimpan masa kerja dalam tahun.
> - Menghitung tunjangan sebesar 2% dari gaji pokok untuk setiap tahun masa kerja.
> - Membatasi tunjangan maksimal sebesar 40% dari gaji pokok.
> - Menghitung total gaji beserta tunjangan.
> - Menentukan jenis pegawai sebagai TETAP.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="529" height="461" alt="image" src="https://github.com/user-attachments/assets/66e48519-8e9c-4a1f-ae91-dbf23d15bf96" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="718" height="344" alt="image" src="https://github.com/user-attachments/assets/bd6187c4-2490-4f72-9d57-262cfb52b22a" />

### 1.3. File: `PegawaiKontrak.java`
**Penjelasan Kode:**
> File ini berfungsi untuk mengelola data pegawai kontrak.
> Fungsi utamanya:
> - Menyimpan lama kontrak dalam bulan.
> - Menentukan jenis pegawai sebagai KONTRAK.
> - Menyediakan metode getBulanKontrak() untuk mendapatkan lama kontrak.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="710" height="351" alt="Screenshot 2026-10-10 235725" src="https://github.com/user-attachments/assets/4d16bd01-2748-49c4-8a73-59dc4771dff1" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="724" height="277" alt="image" src="https://github.com/user-attachments/assets/405f878d-44d9-4232-bd45-b0f8ea0625b5" />

### 1.4. File: `Dosen.java`
**Penjelasan Kode:**
> File ini berfungsi sebagai program utama untuk menjalankan dan menguji sistem penggajian pegawai.
> Fungsi utamanya:
> - Membuat data pegawai tetap, kontrak, dosen, dan harian.
> - Menyimpan semua data pegawai dalam array Pegawai[].
> - Menampilkan daftar pegawai beserta gaji masing-masing.
> - Menghitung total keseluruhan biaya gaji.
> - Menampilkan contoh perhitungan tunjangan masa kerja pegawai tetap.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*: <br>
Untuk Dosen.java tidak ada before
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="625" height="379" alt="image" src="https://github.com/user-attachments/assets/57bb141d-4b9b-41a8-8fca-b61250c15dbb" />

### 1.5. File: `PegawaiHarian.java`
**Penjelasan Kode:**
> File ini berfungsi untuk mengelola data pegawai harian.
> Fungsi utamanya:
> - Menyimpan jumlah hari kerja pegawai.
> - Menghitung gaji dengan mengalikan gaji pokok dengan jumlah hari kerja.
> - Menentukan jenis pegawai sebagai HARIAN.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*: <br>
Untuk PegawaiHarian.java tidak ada before
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="552" height="262" alt="image" src="https://github.com/user-attachments/assets/d044bfd5-2acd-4365-9e83-b336debd17a7" />

### 1.6. File: `Main.java`
**Penjelasan Kode:**
> File ini berfungsi sebagai program utama untuk menjalankan dan menguji sistem penggajian pegawai.
> Fungsi utamanya:
> - Membuat data pegawai tetap, kontrak, dosen, dan harian.
> - Menyimpan semua data pegawai dalam array Pegawai[].
> - Menampilkan daftar pegawai beserta gaji masing-masing.
> - Menghitung total keseluruhan biaya gaji.
> - Menampilkan contoh perhitungan tunjangan masa kerja pegawai tetap.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="724" height="277" alt="image" src="https://github.com/user-attachments/assets/10edb859-33ab-4f5b-b5f1-e888d5dc03ad" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="704" height="276" alt="image" src="https://github.com/user-attachments/assets/b7d11dc7-06f4-498c-9977-624c50ff7ceb" />

### Output
**Output Program:**
<img width="648" height="157" alt="image" src="https://github.com/user-attachments/assets/41beef64-7946-43eb-8587-b92a8d597d67" />

---

## 2. Implementasi PHP

### 2.1. File: `Pegawai.php`
**Penjelasan Kode:**
> File ini berfungsi sebagai kelas induk (parent class) untuk berbagai jenis pegawai.
> Fungsi utamanya:
> - Menyimpan data NIP, nama, dan gaji pokok.
> - Memvalidasi agar gaji pokok tidak negatif.
> - Menghitung gaji pokok melalui metode hitungGaji().
> - Menentukan metode abstrak jenis() yang harus dibuat oleh kelas turunannya.
> - Menampilkan informasi pegawai melalui __toString().

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="424" height="443" alt="image" src="https://github.com/user-attachments/assets/796186f3-019b-4e80-b23c-b3d49f256243" />
<img width="452" height="461" alt="image" src="https://github.com/user-attachments/assets/8016f869-3761-464f-84bd-194c5363e724" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="454" height="469" alt="image" src="https://github.com/user-attachments/assets/40997ff0-c882-4808-8567-cd2fe0cf0eff" />
<img width="437" height="435" alt="image" src="https://github.com/user-attachments/assets/9bf23c43-4b48-4823-8b61-5bdb70147bca" />

### 2.2. File: `main.php`
**Penjelasan Kode:**
> File ini berfungsi sebagai program utama untuk menjalankan dan menguji sistem penggajian pegawai.
> Fungsi utamanya:
> - Memanggil file Pegawai.php menggunakan require_once.
> - Membuat data pegawai tetap, pegawai kontrak, dosen, dan pegawai harian.
> - Menampilkan daftar pegawai beserta gaji masing-masing.
> - Menghitung dan menampilkan total biaya gaji seluruh pegawai.
> - Menampilkan contoh perhitungan gaji untuk memeriksa hasil program.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="691" height="371" alt="image" src="https://github.com/user-attachments/assets/5a5f4b23-a69a-4f6f-b98b-cde1c339d0c3" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="635" height="465" alt="image" src="https://github.com/user-attachments/assets/c25e0215-b655-47cd-96a5-df7726890c47" />

### Output
**Output Program:**
<img width="640" height="290" alt="image" src="https://github.com/user-attachments/assets/c7179811-86f7-4c03-b03e-c162a2fe1115" />

---

## 3. Kesimpulan
> Program ini merupakan sistem penggajian pegawai menggunakan bahasa Java dengan konsep Object-Oriented Programming (OOP), khususnya pewarisan (inheritance) dan polimorfisme (polymorphism). Setiap kelas mewakili jenis pegawai yang berbeda, yaitu pegawai harian, kontrak, tetap, dan dosen, dengan perhitungan gaji sesuai ketentuannya masing-masing. File Main.java berfungsi menjalankan program, menampilkan daftar gaji pegawai, dan menghitung total biaya gaji seluruh pegawai.
