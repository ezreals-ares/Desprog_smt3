<?php
$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$nilaiSiswaRataRata = [];
$jmlNilai = 0;


foreach ($nilaiSiswa as $nilai) {
    $jmlNilai += $nilai[1];
}

$ratarata = $jmlNilai / count($nilaiSiswa);
echo "Nilai rata-rata siswa adalah $ratarata <br><br>";

foreach ($nilaiSiswa as $nilai) {
    if ($nilai[1] > $ratarata) {
        echo "Nama: $nilai[0], Nilai: $nilai[1] <br>";
    }
}

?>