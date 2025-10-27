<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Dosen</h2>

<?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan' 
    ];

    echo "<table>";

    foreach ($Dosen as $key => $value) {
        echo "<tr>";
        echo "<th>" . ucwords(str_replace('_', ' ', $key)) . "</th>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>

</body>
</html>