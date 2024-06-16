<?php
include '../koneksi.php';

// Proses delete data
if(isset($_GET['delete'])) {
    $kode_provinsi = $_GET['delete'];

    $sql_delete = "DELETE FROM penginapan WHERE kode_provinsi = '$kode_provinsi';";

    if ($koneksi->query($sql_delete) === TRUE) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_penginapan.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_delete . "<br>" . $koneksi->error;
    }
}

// Proses edit data
if(isset($_POST['submit'])) {
    $kode_provinsi = $_POST['kode_provinsi'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];

    $sql_edit = "UPDATE penginapan SET p1 = '$p1', p2 = '$p2', p3 = '$p3', p4 = '$p4' WHERE kode_provinsi = '$kode_provinsi';";

    if ($koneksi->query($sql_edit) === TRUE) {
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>window.location.href='data_uhrapat.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_edit . "<br>" . $koneksi->error;
    }
}
?>
