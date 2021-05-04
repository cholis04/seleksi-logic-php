<?php

function cetak($jenis)
{
    echo $jenis . "\n";
    for ($i = 0; $i < 3; $i++) {
        echo ($i + 1) . ". Menu " . $jenis . " ke " . ($i + 1) . "\n";
    }
}

cetak("Makanan");
cetak("Minuman");
cetak("Parsel");
