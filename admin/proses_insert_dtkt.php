<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai input
    $kode_kota = $_POST['kode_kota'];
    $nama_kota = $_POST['nama_kota'];

    // Query untuk insert data ke database menggunakan prepared statements
    $sql = $koneksi->prepare("INSERT INTO kota (kode_kota, nama_kota) VALUES (?, ?)");
    $sql->bind_param("ss", $kode_kota, $nama_kota);

    // Jalankan query
    if ($sql->execute()) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href='data_kota.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql->error;
    }

    // Tutup statement dan koneksi
    $sql->close();
    $koneksi->close();
}
