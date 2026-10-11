># LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS OBJEK

| Informasi Praktikan | Keterangan |
| :--- | :--- |
| **Nama** | Haikal Putra Pratama |
| **NPM** | 4525210106 |
| **Kelas** | A |
| **Mata Kuliah** | Pemrograman Berbasis Objek (PBO) |
| **Pertemuan** | 5 - Polimorfisme |
| **Tanggal** | 01 Oktober 2026 |

---

## 1. Implementasi Java

### 1.1. File: `BangunDatar.java`
**Penjelasan Kode:**
> File ini menjadi dasar bagi semua jenis bangun datar. Di dalamnya terdapat aturan bahwa setiap bangun datar harus memiliki fungsi untuk menghitung luas dan keliling.
> - luas() untuk menghitung luas.
> - keliling() untuk menghitung keliling.
> - getNama() untuk mendapatkan nama bangun datar.
> - toString() untuk menampilkan informasi bangun datar.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="622" height="401" alt="image" src="https://github.com/user-attachments/assets/8733772b-35d8-4ea2-99c3-9309671cde55" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="632" height="407" alt="image" src="https://github.com/user-attachments/assets/d2b522d6-11bb-40f1-9568-4bea53e0c5bd" />

### 1.2. File: `Lingkaran.java`
**Penjelasan Kode:**
> File ini digunakan untuk menghitung luas dan keliling lingkaran berdasarkan jari-jari.
> - Luas: (phi x r^2)
> - Keliling: (2 x phi x r)
> - getJariJari() untuk mengambil nilai jari-jari.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="380" height="260" alt="image" src="https://github.com/user-attachments/assets/a8106c0e-8a0e-4437-80a8-0dd5c1d29a80" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="559" height="271" alt="image" src="https://github.com/user-attachments/assets/af9896ca-099d-4596-9d85-13888ea848ad" />

### 1.3. File: `Persegi.java`
**Penjelasan Kode:**
> File ini digunakan untuk menghitung luas dan keliling persegi berdasarkan panjang sisinya.
> - Luas: sisi × sisi.
> - Keliling: 4 × sisi.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="374" height="224" alt="image" src="https://github.com/user-attachments/assets/c907759e-33f9-4bbd-8b2f-bcaa90f49177" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="518" height="191" alt="image" src="https://github.com/user-attachments/assets/ea9b03c5-5e41-48c5-804d-da31fa70d3e4" />

### 1.4. File: `Segitiga.java`
**Penjelasan Kode:**
> File ini digunakan untuk menghitung luas dan keliling segitiga berdasarkan alas, tinggi, dan panjang sisi yang dimasukkan.
> - Luas: ½ × alas × tinggi.
> - Keliling: jumlah ketiga sisi.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:<br>
Untuk Segitiga.java tidak ada beforenya
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="446" height="407" alt="image" src="https://github.com/user-attachments/assets/6a3bb1bc-1992-4091-8be8-a9f59c8a0d02" />

### 1.5. File: `Trapesium.java`
**Penjelasan Kode:**
> File ini digunakan untuk menghitung luas dan keliling trapesium berdasarkan nilai sisi sejajar, sisi samping, dan tinggi yang dimasukkan.
> - Luas: ½ × (jumlah dua sisi sejajar) × tinggi.
> - Keliling: jumlah keempat sisi.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:<br>
Untuk Trapesium.java tidak ada beforenya
* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="557" height="434" alt="image" src="https://github.com/user-attachments/assets/81e5979e-86ce-4608-bd73-ae94eb9212ba" />

### 1.6. File: `Main.java`
**Penjelasan Kode:**
> File ini merupakan bagian utama untuk menjalankan program dan menguji semua kelas bangun datar.
> - Membuat objek lingkaran, persegi, segitiga, dan trapesium.
> - Menyimpan objek dalam array bertipe BangunDatar.
> - Menampilkan luas dan keliling setiap objek.
> - Menghitung total luas semua bangun datar.
> - Menggunakan instanceof untuk memeriksa objek lingkaran dan mengambil jari-jarinya.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Kesalahan kompilasi)*:
<img width="518" height="464" alt="image" src="https://github.com/user-attachments/assets/1197b3f6-6a32-4bd6-8e1f-215cbe2ba1e7" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="542" height="479" alt="image" src="https://github.com/user-attachments/assets/027c1867-036a-4a34-99c1-f65a61c200bf" />

### Output
**Output Program:**
<img width="664" height="197" alt="image" src="https://github.com/user-attachments/assets/32a3f6ce-9f4e-4d2f-80b1-510e19786cca" />

---

## 2. Implementasi PHP

### 2.1. File: `BangunDatar.php`
**Penjelasan Kode:**
> File ini berfungsi sebagai dasar untuk semua jenis bangun datar, yaitu lingkaran, persegi, segitiga, dan trapesium. File ini menyediakan fungsi luas() dan keliling() yang harus dibuat sesuai rumus masing-masing bangun datar. Di dalamnya juga terdapat getNama() untuk mengambil nama bangun dan __toString() untuk menampilkan hasil perhitungan.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="338" height="464" alt="image" src="https://github.com/user-attachments/assets/63c211c0-89f7-49d1-a224-45a21946b334" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="521" height="446" alt="image" src="https://github.com/user-attachments/assets/43bec24b-a651-4d65-af82-e9f321341462" />
<img width="614" height="458" alt="image" src="https://github.com/user-attachments/assets/cb0bd297-8085-43f9-8240-921ae172e2c8" />
<img width="746" height="415" alt="image" src="https://github.com/user-attachments/assets/d040486b-65fb-4f43-b0f3-6dbc1458b708" />

### 2.2. File: `Main.php`
**Penjelasan Kode:**
> File ini berfungsi untuk menjalankan program dan menggunakan kelas-kelas yang terdapat di BangunDatar.php. File ini membuat objek lingkaran, persegi, segitiga, dan trapesium, kemudian menampilkan hasil luas dan keliling setiap bangun serta menghitung total luas semuanya.

**Bukti Eksekusi (Screenshot):**
* **Before** *(Kondisi awal / Galat logika)*:
<img width="659" height="370" alt="image" src="https://github.com/user-attachments/assets/ea749537-5b43-41a1-be96-e132f9c1a06d" />

* **After** *(Kondisi akhir / Eksekusi berhasil)*:
<img width="642" height="389" alt="image" src="https://github.com/user-attachments/assets/a565c400-f492-4387-8db2-9567ea399d39" />

### Output
**Output Program:**
<img width="625" height="131" alt="image" src="https://github.com/user-attachments/assets/e3ed3bb4-53f8-43cc-b786-2dd972644d0f" />

---

## 3. Kesimpulan
> Kesimpulannya, program ini dibuat menggunakan bahasa Java dengan konsep OOP dan polimorfisme untuk menghitung luas dan keliling berbagai bangun datar, yaitu lingkaran, persegi, segitiga, dan trapesium. BangunDatar.java berfungsi sebagai kelas induk, kelas lainnya sebagai kelas turunan, sedangkan Main.java digunakan untuk menjalankan program dan menampilkan hasil perhitungan. Dengan konsep ini, setiap bangun datar dapat memiliki rumus perhitungan masing-masing dalam satu program yang terstruktur dan mudah dikembangkan.
