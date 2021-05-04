<?php

// fungsi mendapatkan jumlah
function getPay($amount, $fraction)
{
    switch ($fraction) {
        case 'seribu':
            return $amount * 1000;
            break;
        case 'duaribu':
            return $amount * 2000;
            break;
        case 'limaribu':
            return $amount * 5000;
            break;
        case 'sepuluhribu':
            return $amount * 10000;
            break;
        case 'duapuluhribu':
            return $amount * 20000;
            break;
        case 'limapuluhribu':
            return $amount * 50000;
            break;
        case 'seratusribu':
            return $amount * 100000;
            break;

        default:
            return $amount;
            break;
    }
}

$uangSetyo = (getPay(5, "limaribu") + getPay(3, "sepuluhribu") + getPay(5, "duapuluhribu"));
$harga_mainan = 55000;
$sisa_uang = $uangSetyo - $harga_mainan;

echo "Jumlah Uang Setyo : Rp. " . number_format($uangSetyo) . "\n";
echo "Harga Mainan : Rp. " . number_format($harga_mainan) . "\n\n";

echo "Sisa uang Setyo adalah Rp. " . number_format($sisa_uang) . "\n";
