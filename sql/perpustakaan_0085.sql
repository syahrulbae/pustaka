-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 06:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_0085`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `alamat`, `hp`) VALUES
(6, 'Gandi Gara Mangunsong S.Pt', 'Ds. Pasir Koja No. 729, Gunungsitoli 12739, Jambi', '+38652765203'),
(7, 'Carla Zulaika', 'Ki. Tentara Pelajar No. 255, Tangerang Selatan 47758, Jambi', '+996732519619'),
(8, 'Suci Yulia Lailasari', 'Ki. Sukajadi No. 404, Sukabumi 74653, Malut', '+22238884109'),
(9, 'Rahayu Wahyuni', 'Jr. Yoga No. 564, Blitar 52126, Bali', '+352689856807'),
(10, 'Gangsa Rajata S.H.', 'Gg. Suryo Pranoto No. 214, Semarang 99328, Kaltim', '+878486708647'),
(11, 'Michelle Rahmawati', 'Kpg. Ujung No. 583, Banjarbaru 13899, Sulteng', '+22396125162'),
(12, 'Salimah Prastuti', 'Ds. Ekonomi No. 438, Banjar 54341, Jatim', '+4778616307'),
(13, 'Garang Gading Habibi S.H.', 'Kpg. Sam Ratulangi No. 900, Kotamobagu 43618, Banten', '+260354660932'),
(14, 'Jagaraga Manullang', 'Ds. Ketandan No. 155, Semarang 35662, Lampung', '+80005450790'),
(15, 'Amalia Uchita Susanti', 'Dk. Pintu Besar Selatan No. 69, Pekanbaru 97733, Babel', '+224832896104'),
(16, 'Padmi Farida', 'Ki. Banda No. 689, Gorontalo 33208, Riau', '+971191829721'),
(17, 'Cinthia Suartini S.Farm', 'Ki. Jagakarsa No. 615, Bau-Bau 45628, Sulbar', '+508806371444'),
(18, 'Zamira Nuraini', 'Jr. Baan No. 755, Jambi 37530, Kalteng', '+880067960609'),
(19, 'Zelaya Suartini', 'Gg. Sentot Alibasa No. 197, Payakumbuh 38227, Kaltim', '+355212035218'),
(20, 'Uli Hassanah', 'Kpg. Dahlia No. 90, Langsa 37406, Malut', '+23642396832'),
(21, 'Hamima Aryani', 'Ds. Pattimura No. 702, Administrasi Jakarta Pusat 76556, Babel', '+202005768331'),
(22, 'Clara Hariyah', 'Ds. Baha No. 78, Tarakan 26206, Sulbar', '+29052009'),
(23, 'Mitra Permadi', 'Ds. Veteran No. 851, Gorontalo 35833, Pabar', '+4547510870'),
(24, 'Mursita Darijan Sitompul M.Ak', 'Gg. Bakau No. 405, Administrasi Jakarta Pusat 93908, Papua', '+595199715184'),
(25, 'Mahfud Hutasoit M.Kom.', 'Dk. Dipatiukur No. 977, Pariaman 23950, DIY', '+26626839833'),
(26, 'Kariman Cengkir Pradana', 'Kpg. Tentara Pelajar No. 351, Bandar Lampung 99278, Sulteng', '+492578435666'),
(27, 'Labuh Gaman Hardiansyah S.E.', 'Ds. S. Parman No. 331, Ternate 48945, Kaltara', '+460618869368'),
(28, 'Anastasia Najwa Prastuti S.Gz', 'Dk. Thamrin No. 622, Sukabumi 96772, Bengkulu', '+298320872'),
(29, 'Salman Jagaraga Gunarto', 'Jln. Tambun No. 812, Magelang 85957, Sulteng', '+41432828789'),
(30, 'Luis Natsir', 'Ds. Kebonjati No. 93, Denpasar 43133, Sumut', '+383631308807'),
(31, 'Maman Utama Lazuardi', 'Jr. Taman No. 720, Sungai Penuh 57293, Kaltim', '+689776217737'),
(32, 'Hendri Saptono S.T.', 'Dk. Basket No. 903, Pematangsiantar 98199, Jambi', '+35056124284'),
(33, 'Mutia Wijayanti', 'Psr. Babakan No. 808, Singkawang 24020, NTT', '+23250064167'),
(34, 'Garda Sirait', 'Jln. Bakau Griya Utama No. 6, Subulussalam 37719, Gorontalo', '+50253365930'),
(35, 'Sari Rina Prastuti', 'Jln. Kyai Mojo No. 519, Tangerang Selatan 49093, DIY', '+689582549485'),
(36, 'Hafshah Pratiwi', 'Dk. Yogyakarta No. 833, Tangerang 49330, Bengkulu', '+262976526587'),
(37, 'Restu Salwa Nurdiyanti S.Sos', 'Psr. Ters. Kiaracondong No. 268, Tasikmalaya 37052, Jambi', '+6804105759'),
(38, 'Zizi Lailasari S.I.Kom', 'Jln. Barat No. 885, Magelang 58275, Kalsel', '+50656798342'),
(39, 'Timbul Hutapea M.M.', 'Dk. Bawal No. 135, Mataram 22462, Sumut', '+545629388475'),
(40, 'Zalindra Ophelia Wahyuni S.Sos', 'Jln. Diponegoro No. 549, Banjarmasin 75797, Babel', '+378310348228'),
(41, 'Cahyanto Soleh Narpati M.TI.', 'Jr. Bayam No. 628, Administrasi Jakarta Pusat 79864, Kalbar', '+96530364571'),
(42, 'Prayitna Nainggolan M.M.', 'Gg. Sunaryo No. 745, Tangerang 53848, NTT', '+22216902248'),
(43, 'Novi Lailasari M.M.', 'Ki. Ters. Kiaracondong No. 63, Madiun 86059, Bengkulu', '+2388987560'),
(44, 'Putri Widiastuti', 'Jr. Supomo No. 675, Tangerang Selatan 82983, Sulteng', '+648237081342'),
(45, 'Vino Hakim S.Pd', 'Jr. Bagis Utama No. 52, Jayapura 39802, Lampung', '+237734454361'),
(46, 'Ayu Purwanti', 'Ki. Ciwastra No. 745, Sibolga 36631, Aceh', '+480757496567'),
(47, 'Kania Anggraini S.Psi', 'Ds. Gambang No. 313, Palopo 19190, Jambi', '+397965375296'),
(48, 'Arsipatra Uwais S.H.', 'Jln. Tentara Pelajar No. 793, Sorong 29493, Kaltim', '+385428833488'),
(49, 'Gandi Januar', 'Kpg. Adisucipto No. 618, Tanjung Pinang 60832, Sulut', '+234893039418'),
(50, 'Irfan Dono Sinaga', 'Dk. Ciumbuleuit No. 280, Pekanbaru 41526, Sulteng', '+256882815273'),
(51, 'Bancar Darijan Manullang', 'Kpg. Panjaitan No. 942, Subulussalam 67747, Sumsel', '+6915924810'),
(52, 'Sabar Dongoran', 'Dk. Imam No. 494, Sorong 11266, Lampung', '+962155504163'),
(53, 'Imam Rajata', 'Ds. Yap Tjwan Bing No. 913, Ambon 79998, Sulbar', '+377380187659'),
(54, 'Padmi Pratiwi', 'Jr. Tentara Pelajar No. 299, Balikpapan 87722, Riau', '+850458279330'),
(55, 'Raina Hassanah S.H.', 'Gg. Moch. Toha No. 631, Pagar Alam 33480, NTB', '+6789545553');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(75) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `sampul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `sampul`) VALUES
(1, 'Inspirasi Codeigniter', 'Ibnu Syuhada', 'Elex Media Komputindo', '2015', 'sampul-satu.jpg'),
(2, 'Practical PHP : CodeIgniter, Doctrine, Twig', 'Adam Pahlevi Baihaqi', 'Elex Media Komputindo', '2013', 'sampul-dua.jpg'),
(3, 'Morfologi', 'Prof. Dr. Drs. I Wayan Simpen, M. Hum.', 'Bumi Nasaka', '2023', 'sampul-tiga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
