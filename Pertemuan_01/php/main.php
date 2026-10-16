<?php
declare(strict_types=1);

require_once __DIR__ . '/halo_objek.php';

$saya = new HaloObjek('Haikal Putra Pratama', '4525210106');
echo $saya->sapa(), PHP_EOL;

$temanSekelas = new HaloObjek('Budi Santoso', '2024002');
echo $temanSekelas->sapa(), PHP_EOL;

echo PHP_EOL;
echo 'Pertanyaan untuk direnungkan:', PHP_EOL;
echo '  Apa padanan kata kunci "this" Java di baris-baris di atas?', PHP_EOL;
echo '  Mengapa PHP memakai -> sedangkan Java memakai titik?', PHP_EOL;
echo '  Mengapa kedua objek di atas bisa menyapa dengan nama berbeda,', PHP_EOL;
echo '  padahal method sapa() hanya ditulis satu kali?', PHP_EOL;
