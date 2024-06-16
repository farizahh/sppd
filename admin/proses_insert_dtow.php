<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai input
    $kode_provinsi = $_POST['kode_provinsi'];
    $kode_kota = $_POST['kode_kota'];
    $besaran = $_POST['besaran'];

    // Periksa apakah nilai untuk kode_provinsi, kode_kota, dan besaran telah diberikan
    if (!empty($kode_provinsi) && !empty($kode_kota) && !empty($besaran)) {
        // Query untuk insert data ke database menggunakan prepared statements
        $sql = $koneksi->prepare("INSERT INTO oneway (kode_provinsi, kode_kota, besaran) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $kode_provinsi, $kode_kota, $besaran);

        // Jalankan query
        if ($sql->execute()) {
            echo "<script>alert('Data berhasil ditambahkan');</script>";
            echo "<script>window.location.href='data_oneway.php';</script>";
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
