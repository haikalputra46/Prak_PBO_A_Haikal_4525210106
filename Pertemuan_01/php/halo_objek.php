<?php
declare(strict_types=1);

/**
 * Sesi 1 — objek pertama Anda (PHP).
 *
 * Bandingkan baris demi baris dengan java/HaloObjek.java.
 * Konsepnya sama persis; hanya sintaksnya yang berbeda.
 *
 * Jalankan program melalui main.php:
 *     php main.php
 */
class HaloObjek
{
    private string $nama;
    private string $nim;

    public function __construct(string $nama, string $nim)
    {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    /**
     * Mengembalikan sapaan berdasarkan data yang tersimpan pada objek.
     */
    public function sapa(): string
    {
        return "Halo, saya {$this->nama} ({$this->nim})";
    }
}
