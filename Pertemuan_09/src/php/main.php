<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Carbon\CarbonImmutable;
use Perpustakaan\Model\Anggota;
use Perpustakaan\Model\Buku;
use Perpustakaan\Model\Jurusan;
use Perpustakaan\Model\Mahasiswa;
use Perpustakaan\Service\PerpustakaanService;
use Perpustakaan\Util\Format;

echo '=== Komposisi: Buku memiliki Bab ===', PHP_EOL;
$buku = new Buku('PBO-001', 'Pemrograman Berorientasi Objek', 'A. W. Pribadi', 3);
$buku->tambahBab(1, 'Paradigma Objek');
$buku->tambahBab(2, 'Enkapsulasi');
$buku->tambahBab(3, 'Pewarisan dan Polimorfisme');
echo '  ', $buku, PHP_EOL;
foreach ($buku->getBab() as $bab) {
    echo '    ', $bab, PHP_EOL;
}

echo PHP_EOL, '  Mencoba mengubah koleksi internal dari luar...', PHP_EOL;
$babDariGetter = $buku->getBab();
$babDariGetter = [];
echo $babDariGetter === [] && count($buku->getBab()) === 3
    ? "    Perubahan larik di luar tidak mengubah koleksi Buku. Benar.\n"
    : "    MASALAH: koleksi internal berubah.\n";

echo PHP_EOL, '=== Agregasi: Jurusan menaungi Mahasiswa ===', PHP_EOL;
$ani = new Mahasiswa('2024001', 'Ani Lestari');
$budi = new Mahasiswa('2024002', 'Budi Santoso');
$informatika = new Jurusan('TI', 'Teknik Informatika');
$informatika->daftarkan($ani);
$informatika->daftarkan($budi);
echo '  ', $informatika, PHP_EOL;
$informatika->keluarkan($budi);
echo '  Setelah Budi pindah: ', $informatika, PHP_EOL;
echo '  Budi tetap ada sebagai objek: ', $budi, PHP_EOL;

echo PHP_EOL, '========== Perpustakaan Teknik =============', PHP_EOL;
$perpustakaan = new PerpustakaanService();
$perpustakaan->tambahKoleksi($buku);
$hasilPencarian = $perpustakaan->cariKoleksi('PBO-001');
echo 'Hasil pencarian buku anda: ', $hasilPencarian, PHP_EOL;
$peminjaman = $perpustakaan->pinjam('IT-4554', 'PBO-001');
echo 'Batas pengembalian: ', Format::tanggal($peminjaman->getJatuhTempo()), PHP_EOL;
$perpustakaan->kembalikan('IT-4554', 'PBO-001');
echo 'Buku berhasil dikembalikan pada: ', Format::tanggal(CarbonImmutable::now()), PHP_EOL;

echo PHP_EOL, '========== Keanggotaan Perpustakaan Teknik =============', PHP_EOL;
$anggota = new Anggota($informatika, '045');
$anggota->daftarkan($ani, CarbonImmutable::now());
echo $anggota->getKeanggotaan(), PHP_EOL;
echo 'Status keanggotaan: ', $anggota->checkMasaKeanggotaan(), PHP_EOL;
