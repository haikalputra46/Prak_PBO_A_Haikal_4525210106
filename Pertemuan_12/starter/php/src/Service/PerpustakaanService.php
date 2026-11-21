<?php
declare(strict_types=1);

namespace Perpustakaan\Service;

use Carbon\CarbonImmutable;
use InvalidArgumentException;
use LogicException;
use OutOfBoundsException;
use Perpustakaan\Model\Buku;
use Perpustakaan\Model\Peminjaman;

final class PerpustakaanService
{
    /** @var array<string, Buku> */
    private array $koleksi = [];

    /** @var array<string, Peminjaman> */
    private array $peminjamanAktif = [];

    public function tambahKoleksi(Buku $buku): void
    {
        $nomorInduk = $buku->getNomorInduk();
        if (isset($this->koleksi[$nomorInduk])) {
            throw new InvalidArgumentException('Buku dengan nomor induk tersebut sudah terdaftar');
        }
        $this->koleksi[$nomorInduk] = $buku;
    }

    public function cariKoleksi(string $nomorInduk): ?Buku
    {
        return $this->koleksi[$nomorInduk] ?? null;
    }

    public function pinjam(string $nomorAnggota, string $nomorInduk): Peminjaman
    {
        $buku = $this->cariKoleksi($nomorInduk);
        if ($buku === null) {
            throw new OutOfBoundsException('Buku tidak ditemukan: ' . $nomorInduk);
        }
        if (trim($nomorAnggota) === '') {
            throw new InvalidArgumentException('Nomor anggota tidak boleh kosong');
        }

        $kunci = $this->kunciPeminjaman($nomorAnggota, $nomorInduk);
        if (isset($this->peminjamanAktif[$kunci])) {
            throw new LogicException('Anggota masih memiliki peminjaman aktif untuk buku ini');
        }

        $buku->kurangiStok();
        $peminjaman = new Peminjaman($nomorAnggota, $buku, CarbonImmutable::now());
        $this->peminjamanAktif[$kunci] = $peminjaman;

        return $peminjaman;
    }

    public function kembalikan(string $nomorAnggota, string $nomorInduk): void
    {
        $kunci = $this->kunciPeminjaman($nomorAnggota, $nomorInduk);
        $peminjaman = $this->peminjamanAktif[$kunci] ?? null;
        if ($peminjaman === null) {
            throw new OutOfBoundsException('Peminjaman aktif tidak ditemukan');
        }

        $peminjaman->kembalikan(CarbonImmutable::now());
        $peminjaman->getBuku()->tambahStok();
        unset($this->peminjamanAktif[$kunci]);
    }

    private function kunciPeminjaman(string $nomorAnggota, string $nomorInduk): string
    {
        return $nomorAnggota . ':' . $nomorInduk;
    }
    
public function tampilkanLaporanFungsional(LibraryService $libraryService): void
{
    echo PHP_EOL . "=== LAPORAN FUNGSIONAL PERPUSTAKAAN ===" . PHP_EOL;

    // Menampilkan semua judul buku
    echo "Daftar Judul Buku: ";
    echo $libraryService->getSemuaJudulDigabung() . PHP_EOL;

    // Menampilkan buku yang tersedia
    echo PHP_EOL . "Buku yang Tersedia:" . PHP_EOL;

    foreach ($libraryService->getBukuTersedia() as $buku) {
        echo "- " . $buku->getJudul() . PHP_EOL;
    }

    // Menghitung jumlah buku berdasarkan penulis
    echo PHP_EOL . "Jumlah Buku Per Penulis:" . PHP_EOL;

    foreach ($libraryService->getJumlahBukuPerPenulis() as $penulis => $jumlah) {
        echo "- " . $penulis . ": " . $jumlah . " buku" . PHP_EOL;
    }

    echo "=======================================" . PHP_EOL;
}


}