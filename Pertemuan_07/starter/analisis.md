# Analisis Kebutuhan

## Kata benda

Calon kelas: Perpustakaan, Koleksi, Buku, Majalah, Skripsi, Bab, Anggota, Peminjaman, Petugas, dan JenisKeanggotaan.

Calon atribut: nomor induk, judul, penulis, tahun terbit, jumlah eksemplar, nomor dan judul bab, nomor anggota, nama, tanggal pinjam, tanggal jatuh tempo, tanggal kembali, status koleksi, masa pinjam, dan denda per hari.

Atribut seperti nomor induk, judul, penulis, tahun, jumlah eksemplar, nomor anggota, nama, tanggal-tanggal, dan status tidak berdiri sebagai objek domain tersendiri. Nilainya melekat pada Koleksi, Anggota, atau Peminjaman. Petugas adalah peran pengguna, bukan entitas domain yang dibutuhkan untuk aturan pada sesi ini.

## Kata kerja

Menyimpan, terdiri, meminjam, mengembalikan, menghitung, mendaftarkan, menambah, mencari, melihat, mengurangi, dan menambah kembali. Kandidat method yang terlihat pada model ialah `tambahKoleksi`, `daftarkanAnggota`, `pinjam`, `kembalikan`, `cariKoleksi`, `tersedia`, `masaPinjamHari`, `bolehDipinjam`, `terlambatHari`, dan `hitungDenda`.

## Invariant dan aturan bisnis

- Nomor anggota tidak berubah setelah didaftarkan.
- Anggota tidak boleh memiliki lebih dari tiga peminjaman aktif.
- Peminjaman hanya dapat dibuat untuk koleksi yang boleh dipinjam, berstatus tersedia, dan memiliki eksemplar tersedia.
- Skripsi hanya dibaca di tempat; masa pinjam buku 14 hari dan majalah 3 hari.
- Peminjaman mengurangi stok satu; pengembalian menambah stok satu.
- Koleksi rusak atau hilang tidak dapat dipinjam.
- Tanggal kembali kosong selama peminjaman masih aktif.
- Denda per hari: mahasiswa Rp1.000, dosen Rp500, anggota kehormatan Rp0.

## Keputusan relasi

- `Buku` memiliki `Bab` melalui komposisi. Bab dibuat oleh buku dan tidak memiliki siklus hidup mandiri.
- `Jurusan` mengagregasi `Mahasiswa`: objek mahasiswa dibuat dari luar, dapat dilepas, dan tetap hidup.
- `PerpustakaanService` mengagregasi koleksi dan anggota karena service hanya menyimpan/mengelola referensi; objek domain tetap dapat hidup di luar service.
- `Peminjaman` berasosiasi dengan tepat satu anggota dan satu koleksi. Riwayat peminjaman tidak dimodelkan sebagai bagian komposisi dari keduanya.
- Jenis koleksi memakai pewarisan dan polimorfisme untuk masa pinjam serta izin pinjam. Jenis keanggotaan memakai enum dengan nilai denda, agar penambahan kategori kelak terlokalisasi.

Diagram rancangan tersedia di `uml/perpustakaan-kerangka.puml`. Implementasi Java service pada sesi ini masih menggunakan model `Buku` contoh dari latihan komposisi; rincian model domain lengkap dapat dikembangkan pada sesi berikutnya.
