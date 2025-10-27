<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "uploads_ajax_multi_gambar/";

// --- Tambahan Validasi ---
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxsize = 5 * 1024 * 1024; // 5 MB per file
// --- Akhir Tambahan Validasi ---

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Pastikan ada file yang dipilih (perhatikan 'files' sesuai 'name' di form)
if (isset($_FILES['files']) && $_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $responseHtml = ""; // Variabel untuk menyimpan semua pesan respons

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        
        $fileName = $_FILES['files']['name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $targetFile = $targetDirectory . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
        $errors = array(); // Reset error untuk setiap file

        // --- Blok Validasi ---
        if (!in_array($fileType, $allowedExtensions)) {
            $errors[] = "Ekstensi file '$fileName' tidak diizinkan (harus .jpg, .png, .gif).";
        }

        if ($fileSize > $maxsize) {
            $errors[] = "Ukuran file '$fileName' terlalu besar (maks 5MB).";
        }
        // --- Akhir Blok Validasi ---

        if (empty($errors)) {
            // Pindahkan file HANYA JIKA valid
            if (move_uploaded_file($fileTmp, $targetFile)) {
                $responseHtml .= "File $fileName berhasil diunggah.<br>";
            } else {
                $responseHtml .= "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            // Pesan error jika file tidak valid
            $responseHtml .= implode("<br>", $errors) . "<br>";
        }
    }
    echo $responseHtml; // Cetak semua pesan ke output AJAX
} else {
    echo "Tidak ada file yang diunggah.";
}
?>