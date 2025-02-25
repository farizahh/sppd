<?php
include 'koneksi.php';

// Ambil data SPT terbaru
$query = "SELECT 
            d.id_spt, d.no_surat, p.nama_provinsi, k.nama_kota, d.lokasi, 
            d.tanggal_berangkat, d.tanggal_kembali, d.kategori_dinas, 
            d.hotel_name, d.lama_menginap, d.harga_hotel, d.total_transport, 
            d.total_biaya, d.keterangan, d.penanggung_jawab, d.created_at
          FROM data_spt d
          LEFT JOIN provinsi p ON p.kode_provinsi = d.kode_provinsi
          LEFT JOIN kota k ON k.kode_kota = d.kota
          ORDER BY d.id_spt DESC LIMIT 1";

$stmt = $koneksi->prepare($query);
if (!$stmt) {
    die('Error dalam query SPT: ' . $koneksi->error);
}
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die('Data tidak ditemukan!');
}

$data = $result->fetch_assoc();

if (!isset($data['id_spt'])) {
    die('Error: ID SPT tidak ditemukan!');
}

$query_pegawai = "SELECT sp.nama 
                  FROM spt_pegawai sp
                  WHERE sp.id_spt = ?";

// Pastikan koneksi ke database valid
if (!$koneksi) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

$stmt = mysqli_prepare($koneksi, $query_pegawai);
if (!$stmt) {
    die('Error dalam query pegawai: ' . mysqli_error($koneksi));
}

mysqli_stmt_bind_param($stmt, "i", $data['id_spt']);
mysqli_stmt_execute($stmt);
$result_pegawai = mysqli_stmt_get_result($stmt);

$pegawai_list = [];
while ($row = mysqli_fetch_assoc($result_pegawai)) {
    $pegawai_list[] = $row['nama'];
}

// Format tanggal agar lebih rapi
$tanggal_berangkat = date('d-m-Y', strtotime($data['tanggal_berangkat']));
$tanggal_kembali = date('d-m-Y', strtotime($data['tanggal_kembali']));

// Jika ada permintaan POST untuk menyimpan nomor surat
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no_surat = $_POST['no_surat'] ?? '';

    if (!empty($no_surat)) {
        // Update nomor surat di database
        $update_query = "UPDATE data_spt SET no_surat = ? WHERE id_spt = ?";
        $stmt_update = $koneksi->prepare($update_query);

        if (!$stmt_update) {
            die('Error dalam update nomor surat: ' . $koneksi->error);
        }

        $stmt_update->bind_param('si', $no_surat, $data['id_spt']);

        if ($stmt_update->execute()) {
            echo "<script>alert('Nomor surat berhasil disimpan!'); window.location.href='s_cetak.php';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan nomor surat!');</script>";
        }
    } else {
        echo "<script>alert('Nomor surat tidak boleh kosong!');</script>";
    }
}

// Fetch and display data
if ($result->num_rows > 0) {
    echo "Total Transport: " . number_format($data['total_transport'] ?? 0, 0, ',', '.') . "<br>";
    echo "Total Biaya: " . number_format($data['total_biaya'] ?? 0, 0, ',', '.') . "<br>";
} else {
    echo "Data not found.";
}

?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <aside class="fixed top-0 left-0 z-40 w-64 h-screen bg-blue-900 text-white">
        <div class="p-4">
            <a href="user.php" class="flex items-center mb-5">
                <img src="assets/img/logo.png" class="h-12 me-3" />
                <span class="text-2xl font-semibold">SPPD</span>
            </a>
            <div class="bg-blue-700 py-2 px-5 text-center rounded-lg mb-4">
                <p class="font-semibold text-sm">MENU TAMBAH SPT</p>
            </div>
            <ul class="space-y-4">
                <li><a href="dt_pegawai.php" class="flex items-center px-4 py-3 hover:bg-blue-500 rounded-lg"><i class="fa-solid fa-user w-5"></i><span class="ms-3">Data Pegawai</span></a></li>
                <li><a href="dt_kegiatan.php" class="flex items-center px-4 py-3 hover:bg-blue-500 rounded-lg"><i class="fa-solid fa-clipboard-list w-5"></i><span class="ms-3">Data Kegiatan</span></a></li>
                <li><a href="s_cetak.php" class="flex items-center px-4 py-3 bg-blue-500 rounded-lg"><i class="fa-solid fa-print w-5"></i><span class="ms-3">Cetak Data</span></a></li>
            </ul>
        </div>
    </aside>

    <main class="ml-64 p-6">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-bold mb-4">Data Surat Perintah Tugas (SPT) Terbaru</h3>
            <div class="mt-6">
                <form action="s_cetak.php" method="POST" class="space-y-4">
                    <label for="no_surat" class="block text-sm font-medium text-gray-700">Nomor Surat:</label>
                    <input type="text" id="no_surat" name="no_surat" class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nomor surat" required>
                    <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">Simpan Nomor Surat</button>
                </form>
            </div>

            <table class="table-auto w-full text-left border border-gray-300 rounded-lg mt-6">
                <tbody>
                    <?php foreach ($data as $key => $value) : ?>
                        <tr class="border-b">
                            <td class="px-4 py-2 font-semibold"><?= ucfirst(str_replace('_', ' ', $key)) ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($value) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr class="border-b">
                        <td class="px-4 py-2 font-semibold">Nama Pegawai</td>
                        <td class="px-4 py-2"><?= implode(', ', $pegawai_list) ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-6">
                <form action="lib/pdf.php" method="GET">
                    <input type="hidden" name="id_spt" value="<?= htmlspecialchars($data['id_spt']) ?>">
                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 flex items-center gap-2">
                        <i class="fa-solid fa-print"></i> Cetak PDF
                    </button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>