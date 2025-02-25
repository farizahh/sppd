-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2025 at 04:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppdbpbj`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kegiatan`
--

CREATE TABLE `data_kegiatan` (
  `id` int(11) NOT NULL,
  `kode_provinsi` varchar(10) NOT NULL,
  `kode_kota` varchar(10) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `kategori_dinas` varchar(50) DEFAULT NULL,
  `nama_hotel` varchar(255) DEFAULT NULL,
  `lama_menginap` int(11) DEFAULT NULL,
  `harga_hotel` decimal(10,2) DEFAULT NULL,
  `transportasi` text DEFAULT NULL,
  `total_biaya` decimal(15,2) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `penanggung_jawab` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kegiatan`
--

INSERT INTO `data_kegiatan` (`id`, `kode_provinsi`, `kode_kota`, `lokasi`, `tanggal_berangkat`, `tanggal_kembali`, `kategori_dinas`, `nama_hotel`, `lama_menginap`, `harga_hotel`, `transportasi`, `total_biaya`, `keterangan`, `penanggung_jawab`, `created_at`) VALUES
(3, '002 ', '', 'Gedung A', '2024-12-24', '2024-12-26', 'Perjalanan dinas dalam negeri', 'aston', 1, 800000.00, 'pesawat', 0.00, 'RAPAT TAHUNAN', 'kesya_sakha', '2024-12-24 06:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `data_spt`
--

CREATE TABLE `data_spt` (
  `id_spt` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `kode_provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `tanggal_berangkat` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `kategori_dinas` varchar(100) DEFAULT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `lama_menginap` int(11) DEFAULT NULL,
  `harga_hotel` int(11) DEFAULT NULL,
  `total_transport` int(11) DEFAULT NULL,
  `total_biaya` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `penanggung_jawab` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_spt`
--

INSERT INTO `data_spt` (`id_spt`, `no_surat`, `kode_provinsi`, `kota`, `lokasi`, `tanggal_berangkat`, `tanggal_kembali`, `kategori_dinas`, `hotel_name`, `lama_menginap`, `harga_hotel`, `total_transport`, `total_biaya`, `keterangan`, `penanggung_jawab`, `created_at`) VALUES
(1, '', '017', '031', 'SEKDA BPP', '2025-02-23', '2025-03-01', 'Kegiatan rapat', 'Zest', 6, 1200000, 1199999, 8399999, '0', 'Farizah Farhana', '2025-02-23 05:35:56'),
(2, '', '015', '013', 'BALAI', '2025-02-23', '2025-02-28', 'Perjalanan dinas dalam negeri', 'Mercure', 3, 2000000, 3400000, 9400000, 'Rapat paripurna', 'Ersy Genius', '2025-02-23 05:48:03'),
(3, '001234', '012', '006', 'SEKDA BPP', '2025-02-23', '2025-02-26', 'Kegiatan rapat', 'SWISS BELL', 3, 2000000, 1199999, 7199999, '0', 'Farizah Farhana', '2025-02-23 05:49:35'),
(4, '', '036', '055', 'SEKDA BPP', '2025-02-23', '2025-02-27', 'Perjalanan dinas dalam negeri', 'SWISS BELL', 3, 2000000, 9000000, 15000000, 'Rapat paripurna', 'Farizah Farhana', '2025-02-23 05:59:01');

--
-- Triggers `data_spt`
--
DELIMITER $$
CREATE TRIGGER `after_insert_data_spt` AFTER INSERT ON `data_spt` FOR EACH ROW BEGIN
    -- Misalnya, kita ingin menambahkan entri default ke spt_pegawai
    INSERT INTO spt_pegawai (id_spt, nip, nama, kode_jabatan, kode_golongan)
    VALUES (NEW.id_spt, 'default_nip', 'default_nama', 'default_jabatan', 'default_golongan');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `kode_golongan` varchar(50) NOT NULL,
  `jenis_golongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`kode_golongan`, `jenis_golongan`) VALUES
('001', 'GOLONGAN I'),
('002', 'GOLONGAN II'),
('003', 'GOLONGAN III');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kode_jabatan` varchar(50) NOT NULL,
  `jenis_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kode_jabatan`, `jenis_jabatan`) VALUES
('001', 'PEJABAT NEGARA'),
('002', 'PEJABAT DAERAH'),
('003', 'PEJABAT ESELON I'),
('004', 'PEJABAT ESELON II');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `kategori_dinas` varchar(50) NOT NULL,
  `penginapan` varchar(100) DEFAULT NULL,
  `transportasi` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `penanggung_jawab` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kode_kota` varchar(10) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `kode_provinsi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kode_kota`, `nama_kota`, `kode_provinsi`) VALUES
('001', 'KOTA SURABAYA', NULL),
('002', 'KOTA MALANG', NULL),
('003', 'KOTA BATU', NULL),
('004', 'KOTA BLITAR', NULL),
('005', 'KOTA PASURUAN', NULL),
('006', 'KOTA KEDIRI', NULL),
('007', 'KOTA MOJOKERTO', NULL),
('008', 'KOTO PROBOLINGGO', NULL),
('009', 'KOTA JAKARTA', NULL),
('010', 'KOTA AMBON', NULL),
('011', 'KOTA BALIKPAPAN', NULL),
('012', 'KOTA BANDA ACEH', NULL),
('013', 'KOTA BANDAR LAMPUNG', NULL),
('014', 'KOTA BANDUNG', NULL),
('015', 'KOTA BANJARMASIN', NULL),
('016', 'KOTA BATAM', NULL),
('017 ', 'KOTA BIAK', NULL),
('018', 'JAMBI', NULL),
('019', 'KOTA KENDARI', NULL),
('020', 'KOTA KUPANG', NULL),
('021', 'KOTA MANADO', NULL),
('022', 'KOTA MATARAM', NULL),
('023', 'KOTA MEDAN', NULL),
('024', 'KOTA PADANG', NULL),
('025', 'KOTA PALANGKA RAYA', NULL),
('026', 'KOTA PALEMBANG', NULL),
('027', 'KOTA PALU', NULL),
('028', 'KOTA PANGKAL PINANG', NULL),
('029', 'KOTA PEKANBARU', NULL),
('030', 'KOTA PONTIANAK', NULL),
('031', 'KOTA DENPASAR', NULL),
('032', 'KOTA JAYAPURA', NULL),
('033', 'KOTA MAKASSAR', NULL),
('034', 'KOTA TIMIKA', NULL),
('035', 'KAB. BANGKALAN', NULL),
('036', 'KAB. BANYUWANGI', NULL),
('037', 'KAB. BLITAR', NULL),
('038', 'KAB. BOJONEGORO', NULL),
('039', 'KAB. BONDOWOSO', NULL),
('040', 'KAB. GRESIK', NULL),
('041', 'KAB. JEMBER', NULL),
('042', 'KAB. JOMBANG', NULL),
('043', 'KAB. KEDIRI', NULL),
('044', 'KAB. LAMONGAN', NULL),
('045', 'KAB. LUMAJANG', NULL),
('046', 'KAB. MADIUN', NULL),
('047', 'KAB. MAGETAN', NULL),
('048', 'KAB. MALANG', NULL),
('049', 'KAB. MOJOKERTO', NULL),
('050', 'KAB. NGANJUK', NULL),
('051', 'KAB. NGAWI', NULL),
('052', 'KAB. PACITAN', NULL),
('053', 'KAB. PAMEKASAN', NULL),
('054', 'KAB. PASURUAN', NULL),
('055', 'KAB. PONOROGO', NULL),
('056', 'KAB. PROBOLINGGO', NULL),
('057', 'KAB. SAMPANG', NULL),
('058', 'KAB. SIDOARJO', NULL),
('059', 'KAB. SUMENEP', NULL),
('060', 'KAB. TRENGGALEK', NULL),
('061', 'KAB. TUBAN', NULL),
('062', 'KAB. TULUNGAGUNG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oneway`
--

CREATE TABLE `oneway` (
  `kode_oneway` int(11) NOT NULL,
  `kode_provinsi` varchar(50) DEFAULT NULL,
  `kode_kota` varchar(50) DEFAULT NULL,
  `besaran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oneway`
--

INSERT INTO `oneway` (`kode_oneway`, `kode_provinsi`, `kode_kota`, `besaran`) VALUES
(1, '016', '035', '225000');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode_jabatan` varchar(50) DEFAULT NULL,
  `kode_golongan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `kode_jabatan`, `kode_golongan`) VALUES
('21082010169', 'KESYA SAKHA NESYA ARIMAWAN', '001', '001'),
('21082010197', 'FARIZAH FARHANA', '002', '002');

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `kode_provinsi` varchar(10) NOT NULL,
  `p1` varchar(100) NOT NULL,
  `p2` varchar(100) NOT NULL,
  `p3` varchar(100) NOT NULL,
  `p4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`kode_provinsi`, `p1`, `p2`, `p3`, `p4`) VALUES
('001', '4420000', '3526000', '1533000', '770000');

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `kode_pesawat` int(11) NOT NULL,
  `asal_kota` varchar(50) DEFAULT NULL,
  `tujuan_kota` varchar(50) DEFAULT NULL,
  `bisnis` varchar(100) DEFAULT NULL,
  `ekonomi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`kode_pesawat`, `asal_kota`, `tujuan_kota`, `bisnis`, `ekonomi`) VALUES
(1, '001', '009', '5466000', '2647000'),
(2, '001', '010', '8803000', '4845000');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `kode_provinsi` varchar(10) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL,
  `ibukota_provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`kode_provinsi`, `nama_provinsi`, `ibukota_provinsi`) VALUES
('001', 'ACEH', 'BANDA ACEH'),
('002 ', 'SUMATERA UTARA', 'MEDAN'),
('003', 'RIAU', 'PEKANBARU'),
('004', 'KEPULAUAN RIAU', 'TANJUNG PINANG'),
('005', 'JAMBI', 'JAMBI'),
('006', 'SUMATERA BARAT', 'PADANG'),
('007', 'SUMATERA SELATAN', 'PALEMBANG'),
('008', 'LAMPUNG', 'BANDAR LAMPUNG'),
('009', 'BENGKULU', 'BENGKULU'),
('010', 'BANGKA BELITUNG', 'PANGKAL PINANG'),
('011', 'BANTEN', 'SERANG'),
('012', 'JAWA BARAT', 'BANDUNG'),
('013', 'DKI JAKARTA', 'JAKARTA'),
('014', 'JAWA TENGAH', 'SEMARANG'),
('015', 'DI YOGYAKARTA', 'YOGYAKARTA'),
('016', 'JAWA TIMUR', 'SURABAYA'),
('017', 'BALI', 'DENPASAR'),
('018', 'NUSA TENGGARA BARAT (NTB)', 'MATARAM'),
('019', 'NUSA TENGGARA TIMUR (NTT)', 'KUPANG'),
('020', 'KALIMANTAN BARAT', 'PONTIANAK'),
('021', 'KALIMANTAN TENGAH', 'PALANGKA RAYA'),
('022', 'KALIMANTAN SELATAN', 'BANJARMASIN'),
('023', 'KALIMANTAN TIMUR', 'SAMARINDA'),
('024', 'KALIMANTAN UTARA', 'TANJUNG SELOR'),
('025', 'SULAWESI UTARA', 'MANADO'),
('026', 'GORONTALO', 'GORONTALO'),
('027', 'SULAWESI BARAT', 'MAMUJU'),
('028', 'SULAWESI SELATAN', 'MAKASSAR'),
('029', 'SULAWESI TENGAH', 'PALU'),
('030', 'SULAWESI TENGGARA', 'KENDARI'),
('031', 'MALUKU', 'AMBON'),
('032', 'MALUKU UTARA', 'SOFIFI'),
('033', 'PAPUA', 'JAYAPURA'),
('034', 'PAPUA BARAT', 'MANOKWARI'),
('035', 'PAPUA BARAT DAYA', 'SORONG'),
('036', 'PAPUA TENGAH', 'NABIRE'),
('037', 'PAPUA SELATAN', 'MERAUKE'),
('038', 'PAPUA PEGUNUNGAN', 'WAMENA');

-- --------------------------------------------------------

--
-- Table structure for table `sewa_dd`
--

CREATE TABLE `sewa_dd` (
  `kode_sewa_dd` int(11) NOT NULL,
  `jenis_kendaraan` varchar(100) DEFAULT NULL,
  `besaran` varchar(100) DEFAULT NULL,
  `minimal_personil` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sewa_dd`
--

INSERT INTO `sewa_dd` (`kode_sewa_dd`, `jenis_kendaraan`, `besaran`, `minimal_personil`) VALUES
(1, 'Roda Enam/Bus Besar', '4000000', '30 Orang'),
(2, 'Roda Enam/Bus Sedang', '2500000', '15 Orang');

-- --------------------------------------------------------

--
-- Table structure for table `sewa_ld`
--

CREATE TABLE `sewa_ld` (
  `kode_sewa_ld` int(11) NOT NULL,
  `jenis_kendaraan` varchar(100) DEFAULT NULL,
  `besaran` varchar(100) DEFAULT NULL,
  `minimal_personil` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sewa_ld`
--

INSERT INTO `sewa_ld` (`kode_sewa_ld`, `jenis_kendaraan`, `besaran`, `minimal_personil`) VALUES
(1, 'Roda Enam/Bus Besar', '2700000', '30 Orang');

-- --------------------------------------------------------

--
-- Table structure for table `sewa_ldk`
--

CREATE TABLE `sewa_ldk` (
  `kode_sewa_ldk` int(11) NOT NULL,
  `jenis_kendaraan` varchar(100) DEFAULT NULL,
  `besaran` varchar(100) DEFAULT NULL,
  `minimal_personil` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sewa_ldk`
--

INSERT INTO `sewa_ldk` (`kode_sewa_ldk`, `jenis_kendaraan`, `besaran`, `minimal_personil`) VALUES
(1, 'Roda Enam/Bus Besar', '4750000', '30 Orang');

-- --------------------------------------------------------

--
-- Table structure for table `spt`
--

CREATE TABLE `spt` (
  `kode_spt` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `tujuan_kota` varchar(10) DEFAULT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spt_pegawai`
--

CREATE TABLE `spt_pegawai` (
  `id_spt_pegawai` int(11) NOT NULL,
  `id_spt` int(11) DEFAULT NULL,
  `nip` varchar(20),
  `nama` varchar(100),
  `kode_jabatan` varchar(10),
  `kode_golongan` varchar(10)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spt_pegawai`
--

INSERT INTO `spt_pegawai` (`id_spt_pegawai`, `id_spt`, `nip`, `nama`, `kode_jabatan`, `kode_golongan`) VALUES
(1, NULL, '21082010169', 'KESYA SAKHA NESYA ARIMAWAN', 'PEJABAT NE', 'GOLONGAN I'),
(2, 4, 'default_nip', 'default_nama', 'default_ja', 'default_go');

-- --------------------------------------------------------

--
-- Table structure for table `taksi`
--

CREATE TABLE `taksi` (
  `kode_taksi` int(11) NOT NULL,
  `kode_provinsi` varchar(50) NOT NULL,
  `besaran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uh_pddn`
--

CREATE TABLE `uh_pddn` (
  `kode_provinsi` varchar(10) NOT NULL,
  `luar_kota` varchar(100) DEFAULT NULL,
  `dalam_kota` varchar(100) DEFAULT NULL,
  `diklat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uh_pddn`
--

INSERT INTO `uh_pddn` (`kode_provinsi`, `luar_kota`, `dalam_kota`, `diklat`) VALUES
('001', '360000', '-', '110000'),
('002 ', '370000', '-', '110000'),
('003', '370000', '-', '110000'),
('004', '370000', '-', '110000'),
('005', '370000', '-', '110000'),
('006', '380000', '-', '110000'),
('007', '380000', '-', '110000'),
('008', '380000', '-', '110000'),
('009', '380000', '-', '110000'),
('010', '410000', '-', '120000'),
('011', '370000', '-', '110000'),
('012', '430000', '-', '130000'),
('013', '530000', '-', '160000'),
('014', '370000', '-', '110000'),
('015', '420000', '-', '130000'),
('016', '410000', '160000', '120000'),
('017', '480000', '-', '140000'),
('018', '440000', '-', '130000'),
('019', '430000', '-', '130000');

-- --------------------------------------------------------

--
-- Table structure for table `uh_rapat`
--

CREATE TABLE `uh_rapat` (
  `kode_provinsi` varchar(10) NOT NULL,
  `fullboard_lk` varchar(100) NOT NULL,
  `fullboard_dk` varchar(100) NOT NULL,
  `fullhalfday_dk` varchar(100) NOT NULL,
  `residence_dk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uh_rapat`
--

INSERT INTO `uh_rapat` (`kode_provinsi`, `fullboard_lk`, `fullboard_dk`, `fullhalfday_dk`, `residence_dk`) VALUES
('016', '140000', '140000', '100000', '140000');

-- --------------------------------------------------------

--
-- Table structure for table `ur`
--

CREATE TABLE `ur` (
  `kode_jabatan` varchar(50) NOT NULL,
  `luar_kota` varchar(100) NOT NULL,
  `dalam_kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ur`
--

INSERT INTO `ur` (`kode_jabatan`, `luar_kota`, `dalam_kota`) VALUES
('001', '250000', '125000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_spt`
--
ALTER TABLE `data_spt`
  ADD PRIMARY KEY (`id_spt`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`kode_golongan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kode_jabatan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kode_kota`),
  ADD KEY `kode_provinsi` (`kode_provinsi`);

--
-- Indexes for table `oneway`
--
ALTER TABLE `oneway`
  ADD PRIMARY KEY (`kode_oneway`),
  ADD KEY `kode_provinsi` (`kode_provinsi`),
  ADD KEY `kode_kota` (`kode_kota`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD UNIQUE KEY `nama_2` (`nama`),
  ADD KEY `kode_jabatan` (`kode_jabatan`),
  ADD KEY `kode_golongan` (`kode_golongan`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`kode_provinsi`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`kode_pesawat`),
  ADD KEY `fk_asal_kota` (`asal_kota`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`kode_provinsi`);

--
-- Indexes for table `sewa_dd`
--
ALTER TABLE `sewa_dd`
  ADD PRIMARY KEY (`kode_sewa_dd`);

--
-- Indexes for table `sewa_ld`
--
ALTER TABLE `sewa_ld`
  ADD PRIMARY KEY (`kode_sewa_ld`);

--
-- Indexes for table `sewa_ldk`
--
ALTER TABLE `sewa_ldk`
  ADD PRIMARY KEY (`kode_sewa_ldk`);

--
-- Indexes for table `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`kode_spt`),
  ADD KEY `nip` (`nip`),
  ADD KEY `tujuan_kota` (`tujuan_kota`);

--
-- Indexes for table `spt_pegawai`
--
ALTER TABLE `spt_pegawai`
  ADD PRIMARY KEY (`id_spt_pegawai`),
  ADD KEY `id_spt` (`id_spt`);

--
-- Indexes for table `taksi`
--
ALTER TABLE `taksi`
  ADD PRIMARY KEY (`kode_taksi`),
  ADD KEY `fk_kode_provinsi` (`kode_provinsi`);

--
-- Indexes for table `uh_pddn`
--
ALTER TABLE `uh_pddn`
  ADD PRIMARY KEY (`kode_provinsi`);

--
-- Indexes for table `uh_rapat`
--
ALTER TABLE `uh_rapat`
  ADD PRIMARY KEY (`kode_provinsi`);

--
-- Indexes for table `ur`
--
ALTER TABLE `ur`
  ADD PRIMARY KEY (`kode_jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_spt`
--
ALTER TABLE `data_spt`
  MODIFY `id_spt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oneway`
--
ALTER TABLE `oneway`
  MODIFY `kode_oneway` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `kode_pesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sewa_dd`
--
ALTER TABLE `sewa_dd`
  MODIFY `kode_sewa_dd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sewa_ld`
--
ALTER TABLE `sewa_ld`
  MODIFY `kode_sewa_ld` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sewa_ldk`
--
ALTER TABLE `sewa_ldk`
  MODIFY `kode_sewa_ldk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spt_pegawai`
--
ALTER TABLE `spt_pegawai`
  MODIFY `id_spt_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `taksi`
--
ALTER TABLE `taksi`
  MODIFY `kode_taksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE;

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`kode_provinsi`) REFERENCES `provinsi` (`kode_provinsi`);

--
-- Constraints for table `oneway`
--
ALTER TABLE `oneway`
  ADD CONSTRAINT `oneway_ibfk_1` FOREIGN KEY (`kode_provinsi`) REFERENCES `provinsi` (`kode_provinsi`),
  ADD CONSTRAINT `oneway_ibfk_2` FOREIGN KEY (`kode_kota`) REFERENCES `kota` (`kode_kota`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`kode_golongan`) REFERENCES `golongan` (`kode_golongan`);

--
-- Constraints for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD CONSTRAINT `penginapan_ibfk_1` FOREIGN KEY (`kode_provinsi`) REFERENCES `provinsi` (`kode_provinsi`);

--
-- Constraints for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD CONSTRAINT `fk_asal_kota` FOREIGN KEY (`asal_kota`) REFERENCES `kota` (`kode_kota`);

--
-- Constraints for table `spt`
--
ALTER TABLE `spt`
  ADD CONSTRAINT `spt_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`),
  ADD CONSTRAINT `spt_ibfk_2` FOREIGN KEY (`tujuan_kota`) REFERENCES `kota` (`kode_kota`);

--
-- Constraints for table `spt_pegawai`
--
ALTER TABLE `spt_pegawai`
  ADD CONSTRAINT `spt_pegawai_ibfk_1` FOREIGN KEY (`id_spt`) REFERENCES `data_spt` (`id_spt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taksi`
--
ALTER TABLE `taksi`
  ADD CONSTRAINT `fk_kode_provinsi` FOREIGN KEY (`kode_provinsi`) REFERENCES `provinsi` (`kode_provinsi`);

--
-- Constraints for table `uh_pddn`
--
ALTER TABLE `uh_pddn`
  ADD CONSTRAINT `uh_pddn_ibfk_1` FOREIGN KEY (`kode_provinsi`) REFERENCES `provinsi` (`kode_provinsi`);

--
-- Constraints for table `uh_rapat`
--
ALTER TABLE `uh_rapat`
  ADD CONSTRAINT `uh_rapat_ibfk_1` FOREIGN KEY (`kode_provinsi`) REFERENCES `provinsi` (`kode_provinsi`);

--
-- Constraints for table `ur`
--
ALTER TABLE `ur`
  ADD CONSTRAINT `ur_ibfk_1` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
