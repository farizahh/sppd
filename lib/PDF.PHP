<?php
// Include library FPDF
require('fpdf.php');
include '../koneksi.php'; // Sesuaikan path koneksi Anda

// Ambil data ID SPT dari parameter GET
if (!isset($_GET['id_spt'])) {
    die('ID SPT tidak ditemukan!');
}
$id_spt = $_GET['id_spt'];

// Query untuk mendapatkan data berdasarkan ID SPT dengan join ke tabel provinsi dan kota
$query = "SELECT s.*, p.nama_provinsi, k.nama_kota 
          FROM data_spt s
          JOIN provinsi p ON s.kode_provinsi = p.kode_provinsi
          JOIN kota k ON s.kota = k.kode_kota
          WHERE s.id_spt = ?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param('i', $id_spt);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die('Data tidak ditemukan!');
}

// Ambil data dari database
$data = $result->fetch_assoc();

// Format tanggal
$tanggal_berangkat = date('d-m-Y', strtotime($data['tanggal_berangkat']));
$tanggal_kembali = date('d-m-Y', strtotime($data['tanggal_kembali']));

// Inisialisasi FPDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Judul
$pdf->Cell(0, 10, 'Surat Perintah Tugas (SPT)', 0, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 12);

// Informasi Surat
$fields = [
    'No. Surat' => $data['no_surat'],
    'ID SPT' => $data['id_spt'],
    'Provinsi' => $data['nama_provinsi'],
    'Kota' => $data['nama_kota'],
    'Lokasi' => $data['lokasi'],
    'Tanggal Berangkat' => $tanggal_berangkat,
    'Tanggal Kembali' => $tanggal_kembali,
    'Kategori Dinas' => $data['kategori_dinas'],
    'Nama Hotel' => $data['hotel_name'],
    'Lama Menginap' => $data['lama_menginap'] . ' malam',
    'Harga Hotel' => 'Rp ' . number_format($data['harga_hotel'], 0, ',', '.'),
    'Total Transport' => 'Rp ' . number_format($data['total_transport'], 0, ',', '.'),
    'Total Biaya' => 'Rp ' . number_format($data['total_biaya'], 0, ',', '.'),
    'Keterangan' => $data['keterangan'],
    'Penanggung Jawab' => $data['penanggung_jawab']
];

foreach ($fields as $key => $value) {
    $pdf->Cell(60, 10, $key . ':', 0, 0);
    $pdf->Cell(100, 10, $value, 0, 1);
}

$pdf->Ln(10);

// Footer tanda tangan
$pdf->Cell(0, 10, 'Mengetahui,', 0, 1, 'R');
$pdf->Cell(0, 30, '(____________________)', 0, 1, 'R');
$pdf->Cell(0, 10, $data['penanggung_jawab'], 0, 1, 'R');

// Output PDF
$pdf->Output();
?>
