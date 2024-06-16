<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if(isset($_POST['submit'])) {
    // Ambil nilai input
    $kode_jabatan = $_POST['kode_jabatan'];
    $jenis_jabatan = $_POST['jenis_jabatan'];

    //$query = "SELECT MAX(kode_jabatan) AS max_kode FROM data_jabatan";
    //$result = $koneksi->query($query);
    //$row = $result->fetch_assoc();
    //$max_kode = $row['max_kode'];
    //$next_kode = (int)$max_kode + 1;
    //$kode_jabatan = str_pad($next_kode, 3, '0', STR_PAD_LEFT); // Adding leading zeros


    // Query untuk insert data ke database
    $sql = "INSERT INTO jabatan (kode_jabatan, jenis_jabatan) VALUES ('$kode_jabatan','$jenis_jabatan')";

    // Jalankan query
    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href='data_jabatan.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi
    $koneksi->close();
}
?>
