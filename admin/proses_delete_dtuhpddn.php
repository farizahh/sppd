<?php
include '../koneksi.php';

// Proses delete data
if(isset($_GET['delete'])) {
    $kode_provinsi = $_GET['delete'];

    $sql_delete = "DELETE FROM uh_pddn WHERE kode_provinsi = '$kode_provinsi'; ";

    if ($koneksi->query($sql_delete) === TRUE) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_uhpddn.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_delete . "<br>" . $koneksi->error;
    }
}

// Proses edit data
if(isset($_POST['submit'])) {
    $kode_provinsi = $_POST['kode_provinsi'];
    $luar_kota = $_POST['luar_kota'];
    $dalam_kota = $_POST['dalam_kota'];
    $diklat = $_POST['diklat'];

    $sql_edit = "UPDATE uh_pddn SET luar_kota = '$luar_kota', dalam_kota = '$dalam_kota', diklat = '$diklat' WHERE kode_provinsi = '$kode_provinsi'; ";

    if ($koneksi->query($sql_edit) === TRUE) {
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>window.location.href='data_uhpddn.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_edit . "<br>" . $koneksi->error;
    }
}