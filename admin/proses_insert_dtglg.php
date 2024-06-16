<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if(isset($_POST['submit'])) {
    // Ambil nilai input
    $kode_golongan = $_POST['kode_golongan'];
    $jenis_golongan = $_POST['jenis_golongan'];

    //$query = "SELECT MAX(kode_jabatan) AS max_kode FROM data_jabatan";
    //$result = $koneksi->query($query);
    //$row = $result->fetch_assoc();
    //$max_kode = $row['max_kode'];
    //$next_kode = (int)$max_kode + 1;
    //$kode_jabatan = str_pad($next_kode, 3, '0', STR_PAD_LEFT); // Adding leading zeros


    // Query untuk insert data ke database
    $sql = "INSERT INTO golongan (kode_golongan, jenis_golongan) VALUES ('$kode_golongan','$jenis_golongan')";

    // Jalankan query
    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href='data_golongan.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi
    $koneksi->close();
}
?>
