<?php
include '../koneksi.php';

// Proses delete data
if (isset($_GET['delete'])) {
    $kode_jabatan = $_GET['delete'];

    $sql_delete = "DELETE FROM ur WHERE kode_jabatan = ?";

    $stmt_delete = $koneksi->prepare($sql_delete);
    $stmt_delete->bind_param("s", $kode_jabatan);

    if ($stmt_delete->execute()) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_ur.php';</script>";
        exit();
    } else {
        echo "Error: " . $stmt_delete->error;
    }
    $stmt_delete->close();
}

// Proses edit data
if (isset($_POST['submit'])) {
    $kode_jabatan = $_POST['kode_jabatan'];
    $luar_kota = $_POST['luar_kota'];
    $dalam_kota = $_POST['dalam_kota'];

    $sql_edit = "UPDATE ur SET luar_kota = ?, dalam_kota = ? WHERE kode_jabatan = ?";

    $stmt_edit = $koneksi->prepare($sql_edit);
    $stmt_edit->bind_param("sss", $luar_kota, $dalam_kota, $kode_jabatan);

    if ($stmt_edit->execute()) {
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>window.location.href='data_ur.php';</script>";
        exit();
    } else {
        echo "Error: " . $stmt_edit->error;
    }
    $stmt_edit->close();
}

$koneksi->close();
?>
