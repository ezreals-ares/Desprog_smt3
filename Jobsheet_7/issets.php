<?php

$data = array("nama" => "Vira", "umur" => 19);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"] . "<br>";
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array";
}

?>