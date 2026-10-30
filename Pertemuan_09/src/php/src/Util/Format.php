<?php
declare(strict_types=1);

namespace Perpustakaan\Util;

use Carbon\CarbonInterface;

final class Format
{
    public static function tanggal(CarbonInterface $tanggal): string
    {
        return $tanggal->format('d-m-Y');
    }
}
