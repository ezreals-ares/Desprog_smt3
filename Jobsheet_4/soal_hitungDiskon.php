<?php
$harga = 120000;
$diskon = 0.2 * $harga;

if ($harga > 100000) {
    echo "Diskon        : 20% <br>";
    $hargaBayar = $harga - $diskon;
    echo "Harga Bayar   : " . $hargaBayar;
} else {
    echo "Tidak ada diskon";
    echo "Harga Bayar   : " . $harga;
}
?>