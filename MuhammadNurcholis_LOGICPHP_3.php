<?php

$pengeluaran_1 = 10000;
echo "Pengeluaran ke 1 : " . number_format($pengeluaran_1) . "\n";

$pengeluaran_68 = 30100;
echo "Pengeluaran ke 68 : " . number_format($pengeluaran_68) . "\n\n";

$rasio_pembagian = $pengeluaran_68 / $pengeluaran_1;
echo "68 / 1 = " . number_format($pengeluaran_68) . "/" . number_format($pengeluaran_1) . "\n";
$rasio = pow($rasio_pembagian, (1 / 67));
echo "r = " . $rasio_pembagian . " ^ (1/67)\n";
echo "r = " . $rasio . "\n\n";

$pengeluaran_81 = $pengeluaran_68 * (pow($rasio, (81 - 68)));
echo "Pengeluaran ke 81 = " . number_format($pengeluaran_68) . " * (" . $rasio . " ^ (81 - 68))\n";
echo "\nPengeluaran ke 81 : " . $pengeluaran_81;
