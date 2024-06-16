<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if(isset($_POST['submit'])) {
    // Ambil nilai input
    $kode_provinsi = $_POST['kode_provinsi'];
    $fullboard_lk = $_POST['fullboard_lk'];
    $fullboard_dk = $_POST['fullboard_dk'];
    $fullhalfday_dk = $_POST['fullhalfday_dk'];
    $residence_dk = $_POST['residence_dk'];

    // Query untuk insert data ke database
    $sql = "INSERT INTO uh_rapat (kode_provinsi, fullboard_lk, fullboard_dk, fullhalfday_dk, residence_dk) VALUES ('$kode_provinsi', '$fullboard_lk', '$fullboard_dk', '$fullhalfday_dk', '$residence_dk')";

    // Jalankan query
    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href='data_uhrapat.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi
    $koneksi->close();
}