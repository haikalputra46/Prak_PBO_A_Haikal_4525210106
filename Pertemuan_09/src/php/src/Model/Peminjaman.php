<?php
declare(strict_types=1);

namespace Perpustakaan\Model;

use Carbon\CarbonImmutable;
use InvalidArgumentException;
use LogicException;

final class Peminjaman
{
    private ?CarbonImmutable $dikembalikanPada = null;
    private readonly CarbonImmutable $jatuhTempo;

    public function __construct(
        private readonly string $nomorAnggota,
        private readonly Buku $buku,
        private readonly CarbonImmutable $dipinjamPada,
        int $durasiHari = 14,
    ) {
        if (trim($nomorAnggota) === '' || $durasiHari <= 0) {
            throw new InvalidArgumentException('Nomor anggota wajib diisi dan durasi harus positif');
        }
        $this->jatuhTempo = $dipinjamPada->addDays($durasiHari);
    }

    public function getNomorAnggota(): string
    {
        return $this->nomorAnggota;
    }

    public function getBuku(): Buku
    {
        return $this->buku;
    }

    public function getJatuhTempo(): CarbonImmutable
    {
        return $this->jatuhTempo;
    }

    public function masihAktif(): bool
    {
        return $this->dikembalikanPada === null;
    }

    public function kembalikan(CarbonImmutable $waktu): void
    {
        if (!$this->masihAktif()) {
            throw new LogicException('Peminjaman sudah dikembalikan');
        }
        $this->dikembalikanPada = $waktu;
    }
}
