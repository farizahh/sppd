<?php
include '../koneksi.php';

// Proses delete data
if(isset($_GET['delete'])) {
    $kode_provinsi = $_GET['delete'];

    $sql_delete = "DELETE FROM taksi WHERE kode_provinsi = '$kode_provinsi'; ";

    if ($koneksi->query($sql_delete) === TRUE) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_taksi.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_delete . "<br>" . $koneksi->error;
    }
}

// Tutup koneksi
$koneksi->close();
?>
