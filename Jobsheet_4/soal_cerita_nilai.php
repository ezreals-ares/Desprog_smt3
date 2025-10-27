<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai);

array_shift($nilai); 
array_shift($nilai); 

array_pop($nilai); 
array_pop($nilai);

$total_nilai = array_sum($nilai);

echo "Nilai: " . implode(", ", $nilai) . "<br>";
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan terendah: " . $total_nilai;
?>