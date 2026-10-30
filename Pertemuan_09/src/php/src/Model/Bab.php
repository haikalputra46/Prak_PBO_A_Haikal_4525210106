<?php
declare(strict_types=1);

namespace Perpustakaan\Model;

use InvalidArgumentException;

final class Bab
{
    public function __construct(
        public readonly int $nomor,
        public readonly string $judul,
    ) {
        if ($nomor <= 0 || trim($judul) === '') {
            throw new InvalidArgumentException('Nomor bab harus positif dan judul tidak boleh kosong');
        }
    }

    public function __toString(): string
    {
        return 'Bab ' . $this->nomor . ': ' . $this->judul;
    }
}
