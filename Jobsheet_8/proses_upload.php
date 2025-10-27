<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "uploads_gambar/"; // Folder baru agar tidak tercampur

// --- Tambahan Validasi ---
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxsize = 5 * 1024 * 1024; // 5 MB
// --- Akhir Tambahan Validasi ---

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Pastikan ada file yang dipilih
// Perhatikan penggunaan 'gambar' sesuai 'name' di form
if (isset($_FILES['gambar']) && $_FILES['gambar']['name'][0]) {
    $totalFiles = count($_FILES['gambar']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        
        $fileName = $_FILES['gambar']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        $fileSize = $_FILES['gambar']['size'][$i];
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // --- Blok Validasi dipindahkan ke dalam Loop ---
        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxsize) {
            
            // Pindahkan file HANYA JIKA valid
            if (move_uploaded_file($_FILES['gambar']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }

        } else {
            // Pesan error jika file tidak valid
            echo "File $fileName tidak valid (harus .jpg, .png, .gif) atau terlalu besar (maks 5MB).<br>";
        }
        // --- Akhir Blok Validasi ---
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>