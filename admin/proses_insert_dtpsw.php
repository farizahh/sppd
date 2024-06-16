<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai input
    $asal_kota = $_POST['asal_kota'];
    $tujuan_kota = $_POST['tujuan_kota'];
    $bisnis = $_POST['bisnis'];
    $ekonomi = $_POST['ekonomi'];

    // Periksa apakah nilai untuk asal_kota, tujuan_kota, bisnis, dan ekonomi telah diberikan
    if (!empty($asal_kota) && !empty($tujuan_kota) && !empty($bisnis) && !empty($ekonomi)) {
        // Query untuk insert data ke database menggunakan prepared statements
        $sql = $koneksi->prepare("INSERT INTO pesawat (asal_kota, tujuan_kota, bisnis, ekonomi) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssii", $asal_kota, $tujuan_kota, $bisnis, $ekonomi);

        // Jalankan query
        if ($sql->execute()) {
            echo "<script>alert('Data berhasil ditambahkan');</script>";
            echo "<script>window.location.href='data_pesawat.php';</script>";
            exit();
        } else {
            echo "Error: " . $sql->error;
        }

        // Tutup statement
        $sql->close();
    } else {
        echo "Error: Harap isi semua kolom.";
    }
}

// Tutup koneksi
$koneksi->close();
?>
