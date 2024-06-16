<?php
include '../koneksi.php';

// Proses delete data
if (isset($_GET['delete'])) {
    $kode_sewa_ld = $_GET['delete'];

    // Gunakan prepared statement untuk menghindari SQL injection
    $sql_delete = $koneksi->prepare("DELETE FROM sewa_ld WHERE kode_sewa_ld = ?");
    $sql_delete->bind_param("i", $kode_sewa_ld);

    if ($sql_delete->execute()) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='sewa_ld.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql_delete->error;
    }

    // Tutup statement
    $sql_delete->close();
}

// Tutup koneksi
$koneksi->close();
?>
