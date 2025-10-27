
<?php

$host = "localhost";
$user = "root"; // Username default Laragon
$pass = "";     // Password default Laragon (kosong)
$db   = "prakwebdb";

$Connect = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
} 

?>
