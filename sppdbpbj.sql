-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 03:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
('001', 'Golongan I'),
('002', 'Golongan II'),
('003', 'Golongan III');

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
('001', 'Gurbernur'),
('002', 'Wakil Gurbernur'),
('003', 'Sekretaris Daerah Provinsi'),
('004', 'Biro Pengadaan Barang dan Jasa'),
('005', 'PEJABAT DAERAH NEGARA'),
('006', 'PEJABAT ESELON I'),
('007', 'PEJABAT ESELON II');

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
('062', 'KAB. TULUNGAGUNG', NULL),
('063', 'KAB. SITUBONDO', NULL),
('064', 'KOTA MADIUN', NULL);

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
(6, '016', '035', '225000'),
(7, '016', '036', '285000'),
(8, '016', '037', '255000'),
(9, '016', '038', '225000'),
(10, '016', '039', '255000'),
(11, '016', '040', '225000'),
(12, '016', '041', '261000'),
(13, '016', '042', '235000'),
(14, '016', '043', '235000'),
(15, '016', '044', '225000'),
(16, '016', '045', '261000'),
(17, '016', '046', '245000'),
(19, '016', '047', '253000'),
(20, '016', '048', '228000'),
(21, '016', '049', '225000'),
(22, '016', '050', '245000'),
(23, '016', '051', '253000'),
(24, '016', '052', '285000'),
(25, '016', '053', '243000'),
(26, '016', '054', '228000'),
(27, '016', '055', '255000'),
(28, '016', '056', '228000'),
(29, '016', '057', '235000'),
(30, '016', '058', '240000'),
(31, '016', '063', '255000'),
(32, '016', '059', '255000'),
(33, '016', '060', '245000'),
(34, '016', '061', '245000'),
(35, '016', '062', '245000'),
(36, '016', '003', '242000'),
(37, '016', '004', '255000'),
(38, '016', '005', '225000'),
(39, '016', '006', '235000'),
(40, '016', '064', '245000'),
(41, '016', '002', '228000'),
(42, '016', '007', '225000'),
(43, '016', '008', '228000');

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
('21082010002', 'Adhinda Salsabilla Wijayanti', '004', '001'),
('21082010003', 'Imelda Audina', '004', '001'),
('21082010011', 'Silvia Ayu Ningtyas', '004', '001'),
('21082010012', 'Shanti Putri Syawalina', '004', '001'),
('21082010015', 'Ersy Genius Nagari', '004', '001'),
('21082010016', 'Rendi Panca Wijanarko', '004', '001'),
('21082010029', 'Dea Puspita Anggraeni', '004', '001'),
('21082010030', 'Ida Ayu Ernawati', '004', '001'),
('21082010031', 'Nissa Adwitiya Aji', '004', '001'),
('21082010034', 'Ilham Berlian Oktavio', '004', '001'),
('21082010035', 'Putri Dia Lestari', '004', '001'),
('21082010036', 'Adibah Dewi Satriani', '004', '001'),
('21082010041', 'Carissa Renatasari', '004', '001'),
('21082010044', 'Amalia Putri', '004', '001'),
('21082010045', 'Vanesa Wanda Anggela', '004', '001'),
('21082010046', 'Heldha Ayu Setia', '004', '001'),
('21082010050', 'Elisa Tri Aswuri', '004', '001'),
('21082010057', 'Farras Hafish Zidane', '004', '001'),
('21082010064', 'Moh. Farhan Haryono', '004', '001'),
('21082010071', 'Dinda Adisty Yudianto Putri', '004', '001'),
('21082010073', 'Fathur Rahmansyah Maulana Muhammad', '004', '001'),
('21082010115', 'Ardyanto Widyadana Syahputra', '004', '001'),
('21082010127', 'Vina Ishalatussilmi', '004', '001'),
('21082010142', 'Siad Anas Mayshoffa Maulidio', '004', '001'),
('21082010149', 'Ni Made Berliana Deswita Rini', '004', '001'),
('21082010154', 'Andika Gosal', '004', '001'),
('21082010156', 'Fariz', '004', '001'),
('21082010169', 'Kesya Sakha Nesya Arimawan', '004', '001'),
('21082010170', 'Fannia Nur Aziza', '004', '001'),
('21082010174', 'Safinatun Naja', '004', '001'),
('21082010175', 'Zetha Aulizna Permana', '004', '001'),
('21082010177', 'Nasywa Agra Nisrina', '004', '001'),
('21082010180', 'Muhammad Ilyasa Mahardhika', '004', '001'),
('21082010183', 'Moch. Abdillah Emha Ramdhani', '004', '001'),
('21082010184', ' Salwa Amalia Balqis', '004', '001'),
('21082010185', 'Putrinadiffa Wardinasahira', '004', '001'),
('21082010187', 'Dimas Alfayza R.E', '004', '001'),
('21082010188', 'Muhammad Noer', '004', '001'),
('21082010191', 'Nadia Latifa Cintani', '004', '001'),
('21082010193', 'Kevin Yohanes Wuryanto', '004', '001'),
('21082010194', 'Amalia Safira', '004', '001'),
('21082010196', 'Cindy Berliana Latansyah', '004', '001'),
('21082010197', 'Farizah Farhana', '004', '001'),
('21082010199', 'Putu Anggi Suryantari', '004', '001'),
('21082010203', 'Muhammad Faiq Al-Abiyyi', '004', '001'),
('21082010204', 'Jonathan Devrinno', '004', '001'),
('21082010206', 'Jose Bagus Ramadhan', '004', '001');

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
('001', '4420000', '3526000', '1533000', '770000'),
('002 ', '4960000', '2195000', '1100000', '699000'),
('003', '3820000', '3119000', '1650000', '852000'),
('004', '5344000', '2318000', '1297000', '792000'),
('005', '5000000', '4102000', '1225000', '580000'),
('006', '5236000', '3332000', '1353000', '701000'),
('007', '5850000', '3083000', '1955000', '861000'),
('008', '4491000', '2488000', '1425000', '580000'),
('009', '2140000', '1628000', '1546000', '692000'),
('010', '3827000', '2838000', '1957000', '649000'),
('011', '5727000', '2373000', '1204000', '724000'),
('012', '5381000', '2755000', '1201000', '686000'),
('013', '8720000', '2063000', '992000', '730000'),
('014', '5303000', '1850000', '1201000', '750000'),
('015', '5017000', '2695000', '1384000', '84500'),
('016', '444900', '2007000', '1153000', '814000'),
('017', '6848000', '2433000', '1685000', '1138000'),
('018', '4375000', '2648000', '1418000', '907000'),
('019', '3750000', '2133000', '1355000', '688000'),
('020', '2654000', '1923000', '1125000', '538000'),
('021', '4901000', '3391000', '1160000', '659000'),
('022', '4797000', '3316000', '1500000', '697000'),
('023', '4000000', '2188000', '1507000', '804000'),
('024', '4000000', '2735000', '1507000', '904000'),
('025', '4919000', '2290000', '1270000', '978000'),
('026', '4168000', '3107000', '1431000', '955000'),
('027', '4076000', '3098000', '1344000', '704000'),
('028', '4820000', '1938000', '1423000', '745000'),
('029', '2309000', '2027000', '1679000', '951000'),
('030', '3088800', '2574000', '1297000', '786000'),
('031', '3467000', '3240000', '1059000', '667000'),
('032', '4611600', '3843000', '1160000', '605000'),
('033', '3859000', '3318000', '2521000', '1038000'),
('034', '3872000', '3341000', '2056000', '967000'),
('035', '3872000', '3341000', '2056000', '967000'),
('036', '3859000', '3318000', '2521000', '1038000'),
('037', '5673000', '4877000', '3706000', '1526000'),
('038', '5711000', '4911000', '3731000', '1536000');

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
(2, '001', '010', '8803000', '4845000'),
(3, '001', '011', '10889000', '5113000'),
(4, '001', '012', '10985000', '5113000'),
(5, '001', '013', '6386000', '3123000'),
(6, '001', '014', '4824000', '2856000'),
(7, '001', '015', '8942000', '4385000'),
(8, '001', '016', '8600000', '4300000'),
(9, '001', '017 ', '12782000', '7081000'),
(10, '001', '018', '7883000', '3915000'),
(11, '001', '019', '11103000', '5466000'),
(12, '001', '020', '6749000', '3722000'),
(13, '001', '021', '9937000', '5262000'),
(14, '001', '022', '3829000', '2321000'),
(15, '001', '023', '10739000', '5134000'),
(16, '001', '024', '9199000', '4364000'),
(17, '001', '025', '8696000', '4385000'),
(18, '001', '026', '7690000', '3744000'),
(19, '001', '027', '6878000', '3883000'),
(20, '001', '028', '7284000', '3626000'),
(21, '001', '029', '9241000', '4407000'),
(22, '001', '030', '8140000', '4204000'),
(23, '001', '031', '3198000', '1979000'),
(24, '001', '032', '12675000', '7231000'),
(25, '001', '033', '5936000', '3433000'),
(26, '001', '034', '11295000', '6589000'),
(27, '002', '009', '4599000', '2695000'),
(28, '002', '011', '10108000', '5134000'),
(29, '002', '012', '10204000', '5765000'),
(30, '002', '015', '8161000', '4407000'),
(31, '002', '016', '7819000', '4311000'),
(32, '002', '017 ', '16087000', '8482000'),
(33, '002', '032', '16536000', '9092000'),
(34, '002', '019', '10322000', '5487000'),
(35, '002', '033', '10129000', '5166000'),
(36, '002', '021', '13167000', '6311000'),
(37, '002', '023', '9958000', '5145000'),
(38, '002', '024', '8418000', '4385000'),
(39, '002', '025', '7915000', '4407000'),
(40, '002', '026', '6899000', '3765000'),
(41, '002', '029', '8461000', '4439000'),
(42, '002', '034', '15873000', '8461000');

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
(1, 'Roda Enam/Bus Besar', '4000000', '30'),
(2, 'Roda Enam/Bus Sedang', '2500000', '15'),
(3, 'Roda Enam/Bus Mini', '225000', '5'),
(4, 'Roda Empat/MPV Standard', '1300000', '3'),
(5, 'Roda Dua', '175000', '1');

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
(1, 'Roda Enam/Bus Besar', '2700000', '30'),
(2, 'Roda Enam/Bus Sedang', '228000', '5'),
(3, 'Roda Empat/Bus Mini', '1700000', '8'),
(4, 'Roda Empat/MPV Standard', '1200000', '3');

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
(1, 'Roda Enam/Bus Besar', '4750000', '30'),
(2, 'Roda Enam/Bus Sedang', '225000', '5'),
(3, 'Roda Empat/Bus Mini', '2500000', '8'),
(4, 'Roda Empat/MPV Standard', '2000000', '3');

-- --------------------------------------------------------

--
-- Table structure for table `taksi`
--

CREATE TABLE `taksi` (
  `kode_provinsi` varchar(50) NOT NULL,
  `besaran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taksi`
--

INSERT INTO `taksi` (`kode_provinsi`, `besaran`) VALUES
('001', '127000'),
('002 ', '308000'),
('003', '101000'),
('004', '165000'),
('005', '147000'),
('006', '190000'),
('007', '179000'),
('008', '168000'),
('009', '109000'),
('010', '97000'),
('011', '536000'),
('012', '200000'),
('013', '256000'),
('014', '108000'),
('015', '267000'),
('016', '233000'),
('017', '227000'),
('018', '231000'),
('019', '116000'),
('020', '171000'),
('021', '134000'),
('022', '180000'),
('023', '533000'),
('024', '218000'),
('025', '138000'),
('026', '265000'),
('027', '313000'),
('028', '187000'),
('029', '165000'),
('030', '171000'),
('031', '288000'),
('032', '215000'),
('033', '513000'),
('034', '236000'),
('035', '236000'),
('036', '513000'),
('037', '513000'),
('038', '513000');

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
('019', '430000', '-', '130000'),
('020', '380000', '-', '110000'),
('021', '360000', '-', '110000'),
('022', '380000', '-', '110000'),
('023', '430000', '-', '130000'),
('024', '430000', '-', '130000'),
('025', '370000', '-', '110000'),
('026', '370000', '-', '110000'),
('027', '410000', '-', '120000'),
('029', '370000', '-', '110000'),
('030', '380000', '-', '110000'),
('031', '380000', '-', '110000'),
('032', '430000', '-', '130000'),
('033', '580000', '-', '170000'),
('034', '480000', '-', '140000'),
('035', '480000', '-', '140000'),
('036', '580000', '-', '170000'),
('037', '580000', '-', '170000'),
('038', '580000', '-', '170000');

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
-- Indexes for dumped tables
--

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
-- Indexes for table `taksi`
--
ALTER TABLE `taksi`
  ADD PRIMARY KEY (`kode_provinsi`);

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
-- AUTO_INCREMENT for table `oneway`
--
ALTER TABLE `oneway`
  MODIFY `kode_oneway` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `kode_pesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sewa_dd`
--
ALTER TABLE `sewa_dd`
  MODIFY `kode_sewa_dd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sewa_ld`
--
ALTER TABLE `sewa_ld`
  MODIFY `kode_sewa_ld` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sewa_ldk`
--
ALTER TABLE `sewa_ldk`
  MODIFY `kode_sewa_ldk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `taksi`
--
ALTER TABLE `taksi`
  ADD CONSTRAINT `taksi_ibfk_1` FOREIGN KEY (`kode_provinsi`) REFERENCES `provinsi` (`kode_provinsi`);

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
