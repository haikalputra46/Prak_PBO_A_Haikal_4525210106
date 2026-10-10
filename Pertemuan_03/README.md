# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS OBJEK

| Informasi Praktikan | Keterangan |
| :--- | :--- |
| **Nama** | Haikal Putra Pratama |
| **NPM** | 4525210106 |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Objek (PBO) |
| **Pertemuan** | 3 - Class, Object and Encapsulation |
| **Tanggal** | 17 September 2026 |

---

## 1. Implementasi Java

### 1.1. File: `RekeningBank.java`
**Penjelasan Kode:**
> Kode ini digunakan untuk mengelola rekening bank, mulai dari menyimpan data rekening, mengatur saldo, hingga melakukan transaksi.
> 1. Konstanta untuk Menentukan batas penarikan, bunga tahunan, dan biaya administrasi.
> 2. Atribut untuk Menyimpan nomor rekening, nama pemilik, dan saldo.
> 3. Constructor untuk Membuat rekening baru dengan saldo awal atau saldo nol jika menggunakan constructor ringkas.
> 4. Method setor() untuk Menambahkan uang ke saldo rekening dengan memvalidasi jumlah setoran.
> 5. Method tarik() untuk Mengurangi saldo berdasarkan jumlah penarikan yang valid.
> 6. Method potongBiayaAdmin() untuk Memotong biaya administrasi sebesar Rp5.000 tanpa membuat saldo negatif.
> 7. Method getJumlahRekening() untuk Menghitung jumlah rekening yang telah dibuat.
> 8. Method bungaSetahun() untuk Menghitung bunga tahunan sebesar 2,5% dari saldo yang diberikan.
> 9. Method toString() untuk Menampilkan informasi rekening dalam format yang rapi.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="380" height="455" alt="image" src="https://github.com/user-attachments/assets/beadb5e9-8521-42f9-9bda-ae0969e430f3" />
<img width="519" height="453" alt="image" src="https://github.com/user-attachments/assets/bc87813c-be1a-48b4-9c81-d395a0384cfc" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="413" height="443" alt="image" src="https://github.com/user-attachments/assets/a6e9f48d-d105-4326-96ac-e3f824eb8965" />
<img width="436" height="447" alt="image" src="https://github.com/user-attachments/assets/baa2f6a9-95ed-4e8c-b796-fda8baa15408" />

### 1.2. File: `Main.java`
**Penjelasan Kode:**
> Kode ini digunakan untuk menjalankan dan menguji fitur-fitur dalam RekeningBank.java.
> 1. Membuat tiga rekening milik Ani, Budi, dan Citra.
> 2. Menampilkan informasi dan menghitung jumlah rekening yang dibuat.
> 3. Menguji transaksi setoran sebesar Rp500.000.
> 4. Menguji penarikan yang melebihi batas agar ditolak oleh program.
> 5. Menguji pemotongan biaya administrasi pada rekening Budi.
> 6. Menghitung bunga tahunan dari saldo rekening Ani.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="545" height="434" alt="image" src="https://github.com/user-attachments/assets/454edfc9-c52d-4e73-983c-ed1365c2fa10" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="552" height="441" alt="image" src="https://github.com/user-attachments/assets/1037969f-8df2-4230-aab6-f30ac31c756d" />

### Output
**Output Program:**
<img width="656" height="170" alt="image" src="https://github.com/user-attachments/assets/a3c5bd3b-b70f-4813-a308-43afd2b0775d" />

---

## 2. Implementasi PHP

### 2.1. File: `RekeningBank.php`
**Penjelasan Kode:**
> File ini berfungsi untuk mendefinisikan class RekeningBank beserta aturan dan operasi rekening bank.
> Fungsi utamanya:
> - Menyimpan data nomor rekening, nama pemilik, dan saldo.
> - Memvalidasi nomor rekening dan saldo awal.
> - Menyediakan fitur setor uang dan tarik uang.
> - Menentukan batas penarikan maksimal sebesar Rp5.000.000 sekali transaksi.
> - Memotong biaya administrasi sebesar Rp5.000.
> - Menghitung jumlah rekening yang telah dibuat.
> - Menghitung bunga tahunan sebesar 2,5%.
> - Menampilkan informasi rekening dalam format yang mudah dibaca.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="513" height="435" alt="image" src="https://github.com/user-attachments/assets/e97a2537-0e83-4f06-b85a-8402186c1cf9" />
<img width="472" height="446" alt="image" src="https://github.com/user-attachments/assets/85fde3ce-48e6-4c12-89af-ca0cd88bbcd3" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="411" height="453" alt="image" src="https://github.com/user-attachments/assets/35d69b7a-bba0-43a9-ad17-02d05da3a9db" />
<img width="380" height="446" alt="image" src="https://github.com/user-attachments/assets/a46cb104-423d-4944-ae4f-ff5d06074fac" />

### 2.2. File: `Main.php`
**Penjelasan Kode:**
> File ini berfungsi sebagai program utama untuk menjalankan dan menguji class RekeningBank yang ada di file RekeningBank.php.
> Fungsi utamanya:
> - Menampilkan jumlah rekening yang dibuat.
> - Membuat tiga rekening bank atas nama Ani, Budi, dan Citra.
> - Menampilkan informasi rekening dan saldo masing-masing.
> - Menguji operasi setor uang dan tarik uang.
> - Menguji penolakan penarikan yang melebihi batas.
> - Memotong biaya administrasi rekening Budi.
> - Menghitung bunga tahunan dari saldo Ani.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="643" height="457" alt="image" src="https://github.com/user-attachments/assets/9f1e9d7e-cf23-42dc-b6cc-3a1c7faa9448" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="622" height="455" alt="image" src="https://github.com/user-attachments/assets/c1ea3442-7928-45f5-8da0-0c12c1e25180" />

### Output
**Output Program:**
<img width="529" height="146" alt="image" src="https://github.com/user-attachments/assets/5da7a883-83e6-4834-92a1-d504a940f22e" />

---

## 3. Kesimpulan
> Kesimpulannya, program Java ini digunakan untuk membuat dan mengelola rekening bank, termasuk setoran, penarikan, pemotongan biaya administrasi, dan perhitungan bunga. Program ini menerapkan konsep OOP, seperti enkapsulasi, constructor berdelegasi, atribut statis, dan konstanta, serta validasi untuk menjaga saldo tetap sesuai aturan.
