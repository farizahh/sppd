<?php
include '../koneksi.php';

// Proses delete data
if(isset($_GET['delete'])) {
    $kode_provinsi = $_GET['delete'];

    $sql_delete = "DELETE FROM uh_rapat WHERE kode_provinsi = '$kode_provinsi';";

    if ($koneksi->query($sql_delete) === TRUE) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_uhrapat.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_delete . "<br>" . $koneksi->error;
    }
}

// Proses edit data
if(isset($_POST['submit'])) {
    $kode_provinsi = $_POST['kode_provinsi'];
    $fullboard_lk = $_POST['fullboard_lk'];
    $fullboard_dk = $_POST['fullboard_dk'];
    $fullhalfday_dk = $_POST['fullhalfday_dk'];
    $residence_dk = $_POST['residence_dk'];

    $sql_edit = "UPDATE uh_rapat SET fullboard_lk = '$fullboard_lk', fullboard_dk = '$fullboard_dk', fullhalfday_dk = '$fullhalfday_dk', residence_dk = '$residence_dk' WHERE kode_provinsi = '$kode_provinsi';";

    if ($koneksi->query($sql_edit) === TRUE) {
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>window.location.href='data_uhrapat.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_edit . "<br>" . $koneksi->error;
    }
}
