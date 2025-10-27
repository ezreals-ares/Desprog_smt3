<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil tambah " . $a . " dengan " . $b . " adalah " . $hasilTambah . "<br>";
echo "Hasil kurang " . $a . " dengan " . $b . " adalah " . $hasilKurang . "<br>";
echo "Hasil kali " . $a . " dengan " . $b . " adalah " . $hasilKali . "<br>";
echo "Hasil sisa bagi " . $a . " dengan " . $b . " adalah " . $sisaBagi . "<br>";
echo "Hasil pangkat " . $a . " dengan " . $b . " adalah " . $pangkat . "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil perbandingan apakah " . $a . " sama dengan " . $b . " adalah " . var_export($hasilSama, true) . "<br>";
echo "Hasil perbandingan apakah " . $a . " tidak sama dengan " . $b . " adalah " . var_export($hasilTidakSama, true) . "<br>";
echo "Hasil perbandingan apakah " . $a . " lebih kecil dari " . $b . " adalah " . var_export($hasilLebihKecil, true) . "<br>";
echo "Hasil perbandingan apakah " . $a . " lebih besar dari " . $b . " adalah " . var_export($hasilLebihBesar, true) . "<br>";
echo "Hasil perbandingan apakah " . $a . " lebih kecil atau sama dengan " . $b . " adalah " . var_export($hasilLebihKecilSama, true) . "<br>";
echo "Hasil perbandingan apakah " . $a . " lebih besar atau sama dengan " . $b . " adalah " . var_export($hasilLebihBesarSama, true) . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND antara " . $a . " dan " . $b . " adalah " . var_export($hasilAnd, true) . "<br>";
echo "Hasil OR antara " . $a . " dan " . $b . " adalah " . var_export($hasilOr, true) . "<br>";
echo "Hasil NOT untuk " . $a . " adalah " . var_export($hasilNotA, true) . "<br>";
echo "Hasil NOT untuk " . $b . " adalah " . var_export($hasilNotB, true) . "<br>";

$a += $b;
$a = $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Hasil setelah a += b adalah " . $a . "<br>";
echo "Hasil setelah a = b adalah " . $a . "<br>";
echo "Hasil setelah a *= b adalah " . $a . "<br>";
echo "Hasil setelah a /= b adalah " . $a . "<br>";
echo "Hasil setelah a %= b adalah " . $a . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik antara a dan b adalah " . var_export($hasilIdentik, true) . "<br>";
echo "Hasil tidak identik antara a dan b adalah " . var_export($hasilTidakIdentik, true) . "<br>";

?>