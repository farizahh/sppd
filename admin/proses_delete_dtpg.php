<?php
include '../koneksi.php';

if(isset($_GET['delete'])) {
    $nip = $_GET['delete']; // Mengambil NIP pegawai dari parameter URL

    // Menggunakan parameterized query untuk mencegah serangan SQL injection
    $sql = "DELETE FROM pegawai WHERE nip = ?";

    // Persiapkan pernyataan SQL
    $stmt = $koneksi->prepare($sql);

    // Bind parameter dan eksekusi pernyataan
    $stmt->bind_param("s", $nip);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href='data_pegawai.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup pernyataan dan koneksi setelah selesai menggunakan database
    $stmt->close();
    $koneksi->close();
}
?>
