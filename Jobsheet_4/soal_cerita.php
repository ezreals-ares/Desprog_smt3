<?php
$totalKursi = 45;       // Total kursi di restoran
$kursiDitempati = 28;   // Kursi yang sudah ditempati

$kursiKosong = $totalKursi - $kursiDitempati; // Menghitung kursi yang masih kosong
$porsiKursiKosong = ($kursiKosong / $totalKursi) * 100; // Menghitung persentase kursi yang kosong

echo "Jumlah kursi kosong adalah " . $kursiKosong . "<br>";
echo "Persentase kursi yang masih kosong adalah " . $porsiKursiKosong . "%<br>";
?>