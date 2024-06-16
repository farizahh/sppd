<?php
include '../koneksi.php';

// Proses delete data
if (isset($_GET['delete'])) {
    $kode_provinsi = $_GET['delete'];

    // Gunakan prepared statement untuk menghindari SQL injection
    $sql_delete = $koneksi->prepare("DELETE FROM oneway WHERE kode_provinsi = ?");
    $sql_delete->bind_param("s", $kode_provinsi);

    if ($sql_delete->execute()) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_oneway.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_delete->error;
    }

    // Tutup statement
    $sql_delete->close();
}

// Tutup koneksi
$koneksi->close();
