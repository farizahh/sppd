<?php
include '../koneksi.php';

if(isset($_GET['delete'])) {
    $kode_jabatan = $_GET['delete'];

    $sql = "DELETE FROM jabatan WHERE kode_jabatan = '$kode_jabatan'; ";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_jabatan.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}