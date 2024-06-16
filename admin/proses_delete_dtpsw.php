<?php
include '../koneksi.php';

// Proses delete data
if(isset($_GET['delete'])) {
    $kode_pesawat = $_GET['delete'];

    $sql_delete = "DELETE FROM pesawat WHERE kode_pesawat = '$kode_pesawat'; ";

    if ($koneksi->query($sql_delete) === TRUE) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_pesawat.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_delete . "<br>" . $koneksi->error;
    }
}

// Proses edit data
if(isset($_POST['submit'])) {
    $kode_pesawat = $_POST['kode_pesawat'];
    $asal_kota = $_POST['asal_kota'];
    $tujuan_kota = $_POST['tujuan_kota'];
    $bisnis = $_POST['bisnis'];
    $ekonomi = $_POST['ekonomi'];

    $sql_edit = "UPDATE pesawat SET asal_kota = '$asal_kota', tujuan_kota = '$tujuan_kota', bisnis = '$bisnis', ekonomi = '$ekonomi' WHERE kode_pesawat = '$kode_pesawat'; ";

    if ($koneksi->query($sql_edit) === TRUE) {
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>window.location.href='data_pesawat.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_edit . "<br>" . $koneksi->error;
    }
}
?>
