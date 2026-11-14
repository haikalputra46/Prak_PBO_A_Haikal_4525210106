<?php
declare(strict_types=1);

namespace Perpustakaan\Repository;

use Countable;
use Perpustakaan\Model\Buku;

final class KoleksiBuku implements Countable
{
    /** @var array<string, Buku> */
    private array $koleksi = [];

    public function simpan(Buku $buku): void
    {
        $this->koleksi[$buku->getNomorInduk()] = $buku;
    }

    public function cariByIsbn(string $isbn): ?Buku
    {
        return $this->koleksi[$isbn] ?? null;
    }

    /** @return Buku[] */
    public function semua(): array
    {
        return array_values($this->koleksi);
    }

    public function count(): int
    {
        return count($this->koleksi);
    }

    public function filter(callable $kondisi): self
    {
        $hasil = new self();

        foreach ($this->semua() as $buku) {
            if ($kondisi($buku)) {
                $hasil->simpan($buku);
            }
        }

        return $hasil;
    }

    /** @return array<mixed> */
    public function map(callable $fungsi): array
    {
        return array_map($fungsi, $this->semua());
    }

    /** @return array<string|int, Buku[]> */
    public function kelompokkan(callable $fungsi): array
    {
        $hasil = [];

        foreach ($this->semua() as $buku) {
            $kunci = $fungsi($buku);
            $hasil[$kunci][] = $buku;
        }

        return $hasil;
    }

    public function jumlahkan(callable $fungsi): float
    {
        $total = 0.0;

        foreach ($this->semua() as $buku) {
            $total += (float) $fungsi($buku);
        }

        return $total;
    }
}
