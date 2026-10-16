| Informasi Praktikan | Keterangan |
| :--- | :--- |
| **Nama** | Haikal Putra Pratama |
| **NPM** | 4525210106 |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Objek (PBO) |
| **Pertemuan** | 2 - Class, Object and Encapsulation |
| **Tanggal** | 10 September 2026 |

---

## 1. Implementasi Java

### 1.1. File: `Mahasiswa.java`
**Penjelasan Kode:**
> Kode ini digunakan untuk membuat class Mahasiswa yang mengelola data mahasiswa, menghitung nilai akhir, dan menentukan huruf mutu berdasarkan nilai yang diperoleh. <br>
> - Konstanta bobot nilai untuk Mengatur persentase nilai tugas (30%), UTS (30%), dan UAS (40%). <br>
> - Constructor untuk Mengisi NIM, nama, dan nilai mahasiswa saat objek dibuat. <br>
> - Validasi nilai untuk Memastikan nilai tugas, UTS, dan UAS berada dalam rentang 0–100 serta NIM tidak kosong. <br>
> - Menghitung nilai akhir untuk Menghitung nilai akhir berdasarkan bobot masing-masing komponen. <br>
> - Menentukan huruf mutu untuk Mengubah nilai akhir menjadi huruf A, B, C, D, atau E. <br>
> - Getter untuk Mengambil data mahasiswa tanpa memberikan akses langsung untuk mengubah data pribadi. <br>
> - toString() untuk Menampilkan NIM, nama, nilai akhir, dan huruf mutu dalam format teks.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="515" height="407" alt="image" src="https://github.com/user-attachments/assets/4b67f9c7-4144-4f2d-b550-19b3b4a8fcda" />
<img width="454" height="402" alt="image" src="https://github.com/user-attachments/assets/d4330bf9-ee65-483e-927c-cc7ef4bd9896" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="489" height="329" alt="image" src="https://github.com/user-attachments/assets/833ac412-1726-45cf-8313-85b39db94640" />
<img width="520" height="326" alt="image" src="https://github.com/user-attachments/assets/580ed2ba-3629-478f-8584-9002d4105091" />
<img width="427" height="309" alt="image" src="https://github.com/user-attachments/assets/be034f32-54d9-40fa-af4b-3eae2cce7433" />

### 1.2. File: `Main.java`
**Penjelasan Kode:**
> Kode ini digunakan untuk menjalankan dan menguji class Mahasiswa.java, mulai dari menampilkan rekap nilai mahasiswa hingga memastikan sistem menolak data yang tidak valid.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="577" height="447" alt="image" src="https://github.com/user-attachments/assets/9c79590c-b7f1-4b83-92f5-5d09eb846b5b" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="572" height="452" alt="image" src="https://github.com/user-attachments/assets/690219a5-32bc-4d7a-a2a1-360bc992729f" />

### Output
**Output Program:**
<img width="642" height="134" alt="image" src="https://github.com/user-attachments/assets/50d99812-acf2-4a56-a569-9410a833a497" />

---

## 2. Implementasi PHP

### 2.1. File: `Mahasiswa.php`
**Penjelasan Kode:**
> Kode ini digunakan untuk membuat class Mahasiswa yang mengelola data mahasiswa, menghitung nilai akhir, dan menentukan huruf mutu berdasarkan nilai yang diperoleh. <br>
> - Konstanta bobot nilai untuk Mengatur persentase nilai tugas (30%), UTS (30%), dan UAS (40%). <br>
> - Constructor untuk Mengisi NIM, nama, dan nilai mahasiswa saat objek dibuat. <br>
> - Validasi nilai untuk Memastikan nilai tugas, UTS, dan UAS berada dalam rentang 0–100 serta NIM tidak kosong. <br>
> - Menghitung nilai akhir untuk Menghitung nilai akhir berdasarkan bobot masing-masing komponen. <br>
> - Menentukan huruf mutu untuk Mengubah nilai akhir menjadi huruf A, B, C, D, atau E. <br>
> - Getter untuk Mengambil data mahasiswa tanpa memberikan akses langsung untuk mengubah data pribadi. <br>
> - toString() untuk Menampilkan NIM, nama, nilai akhir, dan huruf mutu dalam format teks.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="419" height="415" alt="image" src="https://github.com/user-attachments/assets/01ad170e-8438-4f7b-a27d-6407f42ab04e" />
<img width="449" height="394" alt="image" src="https://github.com/user-attachments/assets/a578c127-f317-4d94-9c41-3ee799642994" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="468" height="449" alt="image" src="https://github.com/user-attachments/assets/ecc7e422-a827-4946-962b-18d1d7af4355" />
<img width="542" height="436" alt="image" src="https://github.com/user-attachments/assets/e18e171b-b8be-42ec-8dd8-7b218f12cb70" />

### 2.2. File: `main.php`
**Penjelasan Kode:**
> Kode ini digunakan untuk menjalankan dan menguji Mahasiswa.php, mulai dari menampilkan rekap nilai mahasiswa hingga memastikan sistem menolak data yang tidak valid.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="460" height="430" alt="image" src="https://github.com/user-attachments/assets/6e2f1e5a-50a4-4ca6-a6dc-9d29aa7dff99" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="452" height="428" alt="image" src="https://github.com/user-attachments/assets/bd28a99b-008b-42f2-8bcb-7b2e3715cda6" />

---

## 3. Kesimpulan
> Kesimpulannya, program Java ini digunakan untuk mengelola data mahasiswa, menghitung nilai akhir berdasarkan bobot tugas, UTS, dan UAS, serta menentukan huruf mutu. Program ini juga menerapkan konsep OOP, khususnya enkapsulasi dan validasi data, untuk memastikan data yang dimasukkan sesuai aturan.
