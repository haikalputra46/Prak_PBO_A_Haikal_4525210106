# Bukti Komposisi dan Agregasi

## Java

Jalankan dari folder `java`:

```powershell
javac -d out Main.java model\Buku.java model\Jurusan.java service\PerpustakaanService.java
java -cp out Main
```

`Buku.tambahBab()` menerima nomor dan judul, lalu membuat objek `Bab` di dalam `Buku`. Constructor `Bab` bersifat privat, sehingga kode luar tidak dapat membuat atau menyuntikkan Bab. `getBab()` menggunakan `List.copyOf`; percobaan `clear()` dari `Main` menghasilkan `UnsupportedOperationException` dan daftar internal tetap ada.

`Jurusan.daftarkan()` menerima objek `Mahasiswa` yang dibuat di luar jurusan. `keluarkan()` hanya menghapus referensi dari daftar. Bukti program menampilkan Budi sesudah ia dikeluarkan, sehingga objeknya tetap hidup.

## PHP

Jalankan dari folder `php`:

```powershell
php -l relasi.php
php main.php
```

PHP tidak menyediakan nested class atau mekanisme friend untuk membatasi constructor `Bab` agar hanya dapat dipanggil `Buku`. Karena itu constructor dapat diakses secara teknis, tetapi konvensi pemakaian menetapkan `Buku.tambahBab()` sebagai satu-satunya jalur pembuatan Bab. Properti Bab bersifat `readonly` agar objek yang dibagi melalui salinan array tidak bisa dimutasi.

Array hasil `getBab()` adalah salinan struktur array (copy-on-write), tetapi setiap elemennya tetap merujuk objek Bab yang sama. Maka salinan array saja belum cukup; properti Bab yang immutable menjaga bagian komposisi tidak berubah dari luar.

`Jurusan.daftarkan()` mencegah duplikat berdasarkan identitas objek (`in_array` dengan strict mode). `keluarkan()` melepaskan referensi tanpa mengubah atau menghancurkan objek mahasiswa di luar jurusan.
