<?php
declare(strict_types=1);

namespace Perpustakaan\Exception;

final class BatasPinjamTerlampauiException extends PerpustakaanException
{
    public function __construct(string $idAnggota, int $batas)
    {
        parent::__construct("Anggota '{$idAnggota}' telah mencapai batas maksimal peminjaman ({$batas} buku).");
    }
}
