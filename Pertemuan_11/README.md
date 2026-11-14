# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS OBJEK

| Informasi Praktikan | Keterangan |
| :--- | :--- |
| **Nama** | Haikal Putra Pratama |
| **NPM** | 4525210106 |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Objek (PBO) |
| **Pertemuan** | 11 - Collections, Generics, dan Operasi Fungsional |
| **Tanggal** | 12 November 2026 |

---

## 1. Implementasi Java

### 1.1. File: `Buku.java`
**Penjelasan Kode:**
> Model buku dengan atribut nomor induk, judul, penulis, dan jumlah eksemplar. Memiliki inner class Bab (komposisi: Bab hanya bisa dibuat lewat tambahBab, konstruktornya private). getBab() mengembalikan salinan tak-berubah (List.copyOf). Ada validasi stok negatif dan kurangiStok() yang melempar IllegalStateException bila stok 0.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1756" height="3864" alt="buku java" src="https://github.com/user-attachments/assets/502743b8-00b3-48ec-b668-ec50592490b6" />

### 1.2. File: `Repository.java`
**Penjelasan Kode:**
> Kelas generik Repository<T> berbasis LinkedHashMap, dengan Function<T, String> untuk mengambil kunci. Menyediakan simpan, cariById (mengembalikan Optional, bukan null), cariSemua (salinan tak-berubah), hapus, dan jumlah. Menunjukkan konsep generics dan enkapsulasi koleksi.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1540" height="2762" alt="repository java" src="https://github.com/user-attachments/assets/3c42a19e-7142-4ff0-b089-b8969edf6ccb" />

### 1.3. File: `LibraryService.java`
**Penjelasan Kode:**
> Logika bisnis inti: tambah buku (stok ditambah bila ISBN sudah ada), daftar anggota, peminjaman dengan empat validasi (anggota tidak ada, buku tidak ada, stok habis, batas 3 pinjaman) yang masing-masing melempar exception domain. Juga ada laporan fungsional memakai Stream API: filter buku tersedia, joining judul, dan groupingBy + counting per penulis.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1878" height="4624" alt="libraryservice java" src="https://github.com/user-attachments/assets/a6999dc4-5fa2-48e5-a974-863a6c5de448" />

### 1.4. File: `Main.java`
**Penjelasan Kode:**
> Titik masuk program: menu interaktif (1–4, 0 keluar), lalu mengekspor laporan buku ke laporan_buku.txt dengan try-with-resources. Catatan: pesan default menu menyebut “0 - 3” padahal menu sampai 4.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="2110" height="3674" alt="main java" src="https://github.com/user-attachments/assets/b2788d2e-84b7-4718-8162-023bd6b2862f" />

### 1.5. File: `PerpustakaanService.java`
**Penjelasan Kode:**
> Lapisan antarmuka konsol (input/output) untuk tambah anggota, tambah buku, pinjam buku, dan laporan. Menangani NumberFormatException dan exception domain dengan instanceof pattern matching. Catatan: pada pinjamBuku, ID kosong hanya memberi peringatan tanpa continue, sehingga proses tetap berlanjut.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="2064" height="5346" alt="perpustakaanservice java" src="https://github.com/user-attachments/assets/dbf3665b-f2ff-4d13-a06a-ce202ebcf50e" />

### 1.6. File: `pom.xml`
<img width="1526" height="3180" alt="pom xml" src="https://github.com/user-attachments/assets/b4ad1c4c-5342-4bbe-8322-18e4e52c202c" />

### Output
**Output Program:**<br>
<img width="374" height="393" alt="image" src="https://github.com/user-attachments/assets/803df97f-df2a-4774-a8e2-9f0f9ed106be" />
<img width="354" height="311" alt="image" src="https://github.com/user-attachments/assets/1f2d6820-737c-4041-afb8-3e34342a8b45" />
<img width="341" height="286" alt="image" src="https://github.com/user-attachments/assets/cd0c7dd5-5c53-44bd-8fd5-d148c77be4af" />
<img width="419" height="284" alt="image" src="https://github.com/user-attachments/assets/b587a1eb-5949-4b46-9786-ff11059c5882" />

---

## 2. Implementasi PHP

### 2.1. File: `Buku.php`
**Penjelasan Kode:**
> Padanan Buku.java. Kelas Bab dan Buku dalam satu file, memakai constructor promotion dan readonly. Karena PHP tidak punya nested class, Bab publik dan disiplin komposisi hanya lewat konvensi. Validasi memakai InvalidArgumentException dan UnderflowException.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1756" height="3978" alt="buku php" src="https://github.com/user-attachments/assets/230c3c27-c888-48fc-ac7b-46612d46793c" />

### 2.2. File: `LibraryService.php`
**Penjelasan Kode:**
> Padanan LibraryService.java dengan logika sama (empat validasi pinjam, batas 3, tambah stok). Operasi fungsional memakai method KoleksiBuku. pinjam bertipe void (Java mengembalikan boolean).

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1894" height="5270" alt="libraryservice php" src="https://github.com/user-attachments/assets/366603d6-880d-494d-b3e0-389a070bfeb1" />

### 2.3. File: `PerpustakaanService.php`
**Penjelasan Kode:**
> Berisi daftar koleksi sederhana, pinjam/kembalikan yang hanya echo, serta tampilkanLaporanFungsional.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1648" height="3180" alt="perpustakaanservice php" src="https://github.com/user-attachments/assets/04342428-7bb7-47cd-a489-1081dae7a27b" />

### 2.4. File: `KoleksiBuku.php`
**Penjelasan Kode:**
> Padanan Repository<T>, tetapi khusus Buku (tidak generik). Mengimplementasikan Countable dan menyediakan filter, map, kelompokkan, dan jumlahkan berbasis callable, sehingga gaya fungsionalnya setara Stream di Java. Mengembalikan null saat tidak ditemukan.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1172" height="3256" alt="koleksibuku php" src="https://github.com/user-attachments/assets/32060d08-5440-43e7-825b-e074a80e4f4f" />

### 2.5. File: `KoleksiBukuTest.php`
**Penjelasan Kode:**
> Unit test PHP untuk KoleksiBuku: simpan/cari, null saat tidak ada, koleksi kosong, filter, jumlahkan, timpa ISBN sama, map, kelompokkan, dan dua tes exception (buku/anggota tidak ditemukan). Total 10 tes, memenuhi syarat minimal lima skenario. Tidak ada padanan di sisi Java

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="1862" height="5536" alt="koleksibukutest php" src="https://github.com/user-attachments/assets/1c584af9-11d5-45fe-bf4d-b562716a810a" />

### 2.6. File: `Main.php`
**Penjelasan Kode:**
> Skrip demo non-interaktif: menjalankan daftar skenario peminjaman (berhasil/gagal) lewat array, menampilkan laporan, lalu mengekspor laporan_buku.txt dengan try/catch/finally untuk menutup file.

**Bukti Eksekusi (Screenshot):**
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="2064" height="3636" alt="main php" src="https://github.com/user-attachments/assets/4e94ba1d-e6dc-47f2-96d7-73ac06f4e5f4" />

### Output
**Output Program:**<br>
<img width="669" height="420" alt="Screenshot 2026-11-14 113516" src="https://github.com/user-attachments/assets/36b620e3-8e88-470a-bddf-76f9e1d8b4a6" />

---

## 3. Kesimpulan
> Keduanya mengimplementasikan sistem perpustakaan yang sama: model Buku dengan komposisi Bab, lapisan repository, LibraryService dengan aturan peminjaman dan exception domain, laporan fungsional, dan ekspor laporan ke file. Arsitekturnya berlapis (model, repository, service, main) dengan pemisahan tanggung jawab yang jelas.
