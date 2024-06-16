<?php
include '../koneksi.php';

if(isset($_GET['delete'])) {
    $kode_provinsi = $_GET['delete'];

    $sql = "DELETE FROM provinsi WHERE kode_provinsi = '$kode_provinsi'; ";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_provinsi.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>
