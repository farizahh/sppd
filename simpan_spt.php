<?php
// Koneksi ke database
include 'koneksi.php';

// Cek apakah form telah di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $kode_provinsi = $_POST['kode_provinsi'];
    $kota = $_POST['kota'];
    $lokasi = $_POST['lokasi'];
    $tanggal_berangkat = $_POST['tanggal_berangkat'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $kategori_dinas = $_POST['kategori_dinas'];
    $hotel_name = $_POST['hotel_name'];
    $lama_menginap = $_POST['lama_menginap'];
    $harga_hotel = $_POST['harga_hotel'];
    $total_transport = isset($_POST['total_transport']) ? floatval($_POST['total_transport']) : 0;
    $transportasi = isset($_POST['transportasi']) ? $_POST['transportasi'] : [];
    $keterangan = $_POST['keterangan'];
    $penanggung_jawab = $_POST['penanggung_jawab'];
    
    // Hitung total biaya
    $total_biaya = ($lama_menginap * $harga_hotel) + $total_transport;

    foreach ($transportasi as $trans) {
        if ($trans === 'pesawat' && isset($_POST['hargaTiketPesawat'])) {
            $total_biaya += $_POST['hargaTiketPesawat'];
        } elseif ($trans === 'taksi' && isset($_POST['hargaTaksi'])) {
            $total_biaya += $_POST['hargaTaksi'];
        } elseif ($trans === 'oneWay' && isset($_POST['hargaOneway'])) {
            $total_biaya += $_POST['hargaOneway'];
        } elseif ($trans === 'sewaKendaraan' && isset($_POST['hargaSewa'])) {
            $total_biaya += $_POST['hargaSewa'];
        }
    }

    // Query untuk menyimpan data ke data_spt
    $sql = "INSERT INTO data_spt (
        kode_provinsi, kota, lokasi, tanggal_berangkat, tanggal_kembali, kategori_dinas, 
        hotel_name, lama_menginap, harga_hotel, total_transport, total_biaya, keterangan, penanggung_jawab
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $koneksi->prepare($sql);

if ($stmt) {
$stmt->bind_param("sssssssiiidss", 
    $kode_provinsi, $kota, $lokasi, $tanggal_berangkat, $tanggal_kembali, $kategori_dinas, 
    $hotel_name, $lama_menginap, $harga_hotel, $total_transport, $total_biaya, $keterangan, $penanggung_jawab
);

        if ($stmt->execute()) {
            // Ambil ID SPT terbaru yang baru saja disimpan
            $id_spt = $koneksi->insert_id;

            // Ambil pegawai yang dipilih dari form
            if (isset($_POST['pegawai']) && is_array($_POST['pegawai'])) {
                foreach ($_POST['pegawai'] as $nip) {
                    // Ambil nama pegawai dari database berdasarkan NIP
                    $query_pegawai = "SELECT nama, kode_jabatan, kode_golongan FROM pegawai WHERE nip = ?";
                    $stmt_pegawai = $koneksi->prepare($query_pegawai);
                    $stmt_pegawai->bind_param("s", $nip);
                    $stmt_pegawai->execute();
                    $result = $stmt_pegawai->get_result();
                    $pegawai = $result->fetch_assoc();
                    $stmt_pegawai->close();

                    // Jika pegawai ditemukan, baru insert ke spt_pegawai
                    if ($pegawai) {
                        $nama = $pegawai['nama'];
                        $kode_jabatan = $pegawai['kode_jabatan'];
                        $kode_golongan = $pegawai['kode_golongan'];

                        $query_insert = "INSERT INTO spt_pegawai (id_spt, nip, nama, kode_jabatan, kode_golongan) 
                                         VALUES (?, ?, ?, ?, ?)";
                        $stmt_insert = $koneksi->prepare($query_insert);
                        $stmt_insert->bind_param("issss", $id_spt, $nip, $nama, $kode_jabatan, $kode_golongan);
                        $stmt_insert->execute();
                        $stmt_insert->close();
                    } else {
                        echo "⚠️ Pegawai dengan NIP $nip tidak ditemukan. Data tidak dimasukkan.<br>";
                    }
                }
            }

            // Redirect ke s_cetak.php dengan ID SPT
            echo "<script>
                    alert('Data berhasil disimpan dan pegawai ditambahkan!');
                    window.location.href = 's_cetak.php?id_spt=$id_spt';
                  </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Query Error: " . $koneksi->error;
    }

    // Tutup koneksi
    $koneksi->close();
}
?>
