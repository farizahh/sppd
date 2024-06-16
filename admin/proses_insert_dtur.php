<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if(isset($_POST['submit'])) {
    // Ambil nilai input
    $kode_jabatan = $_POST['kode_jabatan'];
    $luar_kota = $_POST['luar_kota'];
    $dalam_kota = $_POST['dalam_kota'];

    // Query untuk insert data ke database
    $sql = "INSERT INTO ur (kode_jabatan, luar_kota, dalam_kota) VALUES ('$kode_jabatan', '$luar_kota', '$dalam_kota')";

    // Jalankan query
    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href='data_ur.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi
    $koneksi->close();
}
?>
