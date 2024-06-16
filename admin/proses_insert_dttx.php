<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai input
    $kode_provinsi = $_POST['kode_provinsi'];
    $besaran = $_POST['besaran'];

    // Periksa apakah nilai untuk kode_provinsi dan besaran telah diberikan
    if (!empty($kode_provinsi) && !empty($besaran)) {
        // Query untuk insert data ke database menggunakan prepared statements
        $sql = $koneksi->prepare("INSERT INTO taksi (kode_provinsi, besaran) VALUES (?, ?)");
        $sql->bind_param("si", $kode_provinsi, $besaran);

        // Jalankan query
        if ($sql->execute()) {
            echo "<script>alert('Data berhasil ditambahkan');</script>";
            echo "<script>window.location.href='data_taksi.php';</script>";
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
