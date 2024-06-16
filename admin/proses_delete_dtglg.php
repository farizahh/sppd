<?php
include '../koneksi.php';

if(isset($_GET['delete'])) {
    $kode_golongan = $_GET['delete'];

    $sql = "DELETE FROM golongan WHERE kode_golongan = '$kode_golongan'; ";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_golongan.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
