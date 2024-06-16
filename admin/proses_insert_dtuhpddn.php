<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if(isset($_POST['submit'])) {
    // Ambil nilai input
    $kode_provinsi = $_POST['kode_provinsi'];
    $luar_kota = $_POST['luar_kota'];
    $dalam_kota = $_POST['dalam_kota'];
    $diklat = $_POST['diklat'];

    // Query untuk insert data ke database
    $sql = "INSERT INTO uh_pddn (kode_provinsi, luar_kota, dalam_kota, diklat) VALUES ('$kode_provinsi', '$luar_kota', '$dalam_kota', '$diklat')";

    // Jalankan query
    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href='data_uhpddn.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi
    $koneksi->close();
}
