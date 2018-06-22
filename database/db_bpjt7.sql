-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jul 2017 pada 17.05
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bpjt7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `budgetkontruksi`
--

CREATE TABLE `budgetkontruksi` (
  `id_budget` int(11) NOT NULL,
  `id_seksi` int(5) NOT NULL,
  `Rencana` decimal(7,2) NOT NULL,
  `Realisasi` decimal(7,0) NOT NULL,
  `Deviasi` decimal(7,2) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `budgetkontruksi`
--

INSERT INTO `budgetkontruksi` (`id_budget`, `id_seksi`, `Rencana`, `Realisasi`, `Deviasi`, `Tanggal`) VALUES
(5, 5, '56.67', '56', '-0.67', '2017-05-19'),
(6, 105, '0.00', '0', '0.00', '2017-06-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `budgettanah`
--

CREATE TABLE `budgettanah` (
  `id_budget` int(11) NOT NULL,
  `id_seksi` int(5) NOT NULL,
  `UGR` double NOT NULL,
  `Rencana` float NOT NULL,
  `Realisasi` float NOT NULL,
  `Deviasi` float NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `danatalangan`
--

CREATE TABLE `danatalangan` (
  `id_danatalangan` int(11) NOT NULL,
  `id_ruas` int(5) NOT NULL,
  `PemberiDana` varchar(50) NOT NULL,
  `BesarDana` double NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `JenisDana` char(1) NOT NULL COMMENT '1:Bank;2:Talangan',
  `Ket` mediumtext NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `danatalangan`
--

INSERT INTO `danatalangan` (`id_danatalangan`, `id_ruas`, `PemberiDana`, `BesarDana`, `tahun`, `JenisDana`, `Ket`, `Tanggal`) VALUES
(16, 28, '', 1039215543693, '2016', '', '', '2017-05-22'),
(17, 5, 'test', 333, '2017', '', '', '2017-07-20'),
(18, 5, 'test2', 555, '2017', '', '', '2017-07-20'),
(19, 5, 'test 3', 333, '2017', '', '', '2017-07-20'),
(20, 3, 'PUI1', 300000, '2017', '', '', '2017-07-22'),
(21, 3, 'PUI4', 4, '2017', '', '', '2017-07-23'),
(22, 3, 'PUI3', 300, '2017', '', '', '2017-07-21'),
(23, 3, 'PUI2', 4, '2017', '', '', '2017-07-23'),
(24, 3, 'PUI2', 4, '2017', '', '', '2017-07-23'),
(25, 3, 'PUI2', 4, '2017', '', '', '2017-07-23'),
(26, 5, 'test 7', 4, '2017', '', '', '2017-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `id_ruas` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_penggunaanalat`
--

CREATE TABLE `history_penggunaanalat` (
  `id` int(11) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `id_seksi` int(5) NOT NULL,
  `NamaAlat` varchar(50) NOT NULL,
  `QTY` tinyint(3) NOT NULL,
  `WorkingHour` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history_penggunaanalat`
--

INSERT INTO `history_penggunaanalat` (`id`, `id_alat`, `id_seksi`, `NamaAlat`, `QTY`, `WorkingHour`, `Tanggal`) VALUES
(53, 2, 8, 'Grader', 13, '13', '2017-07-07'),
(54, 3, 8, 'Vibro', 13, '13', '2017-07-07'),
(55, 5, 8, 'Excavator', 13, '13', '2017-07-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `issue`
--

CREATE TABLE `issue` (
  `id_issue` int(11) NOT NULL,
  `id_seksi` int(11) NOT NULL,
  `Permasalahan` text NOT NULL,
  `TelahDilakukan` text NOT NULL,
  `UsulanTindakLanjut` text NOT NULL,
  `status` char(1) NOT NULL COMMENT '1:Open;2:closed',
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `issue`
--

INSERT INTO `issue` (`id_issue`, `id_seksi`, `Permasalahan`, `TelahDilakukan`, `UsulanTindakLanjut`, `status`, `Tanggal`) VALUES
(1, 21, 'testing', 'testing', 'testing', '1', '2017-05-29'),
(2, 21, 'cob algi', 'coba lgi', 'coba lgi ke dua ya', '2', '2017-05-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontraktor`
--

CREATE TABLE `kontraktor` (
  `id_kontraktor` int(11) NOT NULL,
  `id_ruas` int(11) NOT NULL,
  `id_seksi` int(11) NOT NULL,
  `NamaKontraktor` varchar(30) NOT NULL,
  `NilaiKontrak` double DEFAULT NULL,
  `Pekerjaan` varchar(50) DEFAULT NULL,
  `JumlahPekerja` mediumint(5) DEFAULT NULL,
  `status_kon` char(1) NOT NULL COMMENT '1:kontraktor;2:supervisi;3:PMI',
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontraktor`
--

INSERT INTO `kontraktor` (`id_kontraktor`, `id_ruas`, `id_seksi`, `NamaKontraktor`, `NilaiKontrak`, `Pekerjaan`, `JumlahPekerja`, `status_kon`, `Tanggal`) VALUES
(7, 0, 5, 'PT. waskita Karya', 45.5, 'Pembersihan Lahan', 54, '1', '0000-00-00'),
(11, 0, 21, 'PT.Waskita Karya', 34.6, '', 456, '1', '0000-00-00'),
(53, 3, 0, 'PT Ariajasa raksatama', NULL, NULL, 0, '3', '2017-07-03'),
(40, 0, 21, 'PT. Jakarta Rencana Seletan', NULL, NULL, 34, '2', '2017-06-02'),
(41, 0, 21, 'PT. Ariajasa Reksatama', NULL, NULL, 4, '3', '2017-06-02'),
(54, 5, 0, 'PT Waskita Karya (Persero) Tbk', 0, '0', 30, '1', '2017-07-03'),
(46, 1, 0, 'PT Waskita Karya (Persero) Tbk', 0, '', 30, '1', '2017-07-03'),
(47, 1, 0, 'PT Waskita Karya (Persero) Tbk', 0, '-', 30, '1', '2017-07-03'),
(48, 1, 0, 'PT Virama Karya', NULL, NULL, 500, '2', '2017-07-03'),
(49, 1, 0, 'PT Sarana Multi Daya', NULL, NULL, 50, '3', '2017-07-03'),
(50, 3, 0, 'PT Waskita Karya (Persero) Tbk', 0, '-', 30, '1', '2017-07-03'),
(51, 3, 0, 'PT Jakarta Rencana Selaras', NULL, NULL, 0, '2', '2017-07-03'),
(52, 3, 0, 'PT Sumber Mitra Jaya', 0, '-', 30, '1', '2017-07-03'),
(55, 5, 0, 'PT Anugerah Kridapradana', NULL, NULL, 0, '3', '2017-07-03'),
(56, 4, 0, 'PT Solo Ngawi Jaya', 0, '', 30, '1', '2017-07-03'),
(57, 4, 0, 'PT Solo Ngawi Jaya', 0, '0', 30, '1', '2017-07-03'),
(58, 6, 0, 'PT Waskita Karya (Persero) Tbk', 0, '0', 30, '1', '2017-07-03'),
(59, 6, 0, 'PT Virama Karya ', NULL, NULL, 0, '2', '2017-07-03'),
(63, 7, 0, 'PT Anugerah Krida Pradana', NULL, NULL, 0, '3', '2017-07-03'),
(62, 6, 0, 'PT Wirantha Bhuana Raya', NULL, NULL, 0, '3', '2017-07-03'),
(65, 7, 0, 'PT Waskita Karya', 0, '0', 30, '1', '2017-07-03'),
(66, 7, 0, 'PT Waskita Karya', 0, '', 0, '1', '2017-07-03'),
(67, 7, 0, 'PT Adhi Karya', 0, '0', 30, '1', '2017-07-03'),
(68, 7, 0, 'PT Adhi Karya', 0, '0', 30, '1', '2017-07-03'),
(69, 7, 0, 'PT Multi Phi Beta KSO PT Indec', NULL, NULL, 500, '2', '2017-07-03'),
(70, 7, 0, 'PT Buana Archion KSO PT Mitrap', NULL, NULL, 50, '2', '2017-07-03'),
(71, 7, 0, 'PT Mega Trustlink', NULL, NULL, 50, '2', '2017-07-03'),
(72, 7, 0, 'PT Seecons', NULL, NULL, 50, '2', '2017-07-03'),
(73, 7, 0, 'PT Eskapindo Matra KSO PT Dres', NULL, NULL, 50, '2', '2017-07-03'),
(74, 8, 0, 'PT Hutama Karya Infrastruktur', 0, '0', 30, '1', '2017-07-03'),
(75, 8, 0, 'PT Adhi Karya', 0, '0', 30, '1', '2017-07-03'),
(76, 8, 0, 'PT Adhi Karya ', 0, '0', 30, '1', '2017-07-03'),
(77, 8, 0, 'PT Ridlatama Bahtera Contructi', 0, '0', 30, '1', '2017-07-03'),
(78, 8, 0, 'PT Adhi Karya', 0, '0', 30, '1', '2017-07-03'),
(79, 8, 0, 'PT Mitrapacific Consulindo Int', NULL, NULL, 500, '2', '2017-07-03'),
(80, 8, 0, 'PT Guteg Harindo', NULL, NULL, 50, '2', '2017-07-03'),
(81, 8, 0, 'PT Daya Dreasi', NULL, NULL, 50, '2', '2017-07-03'),
(82, 8, 0, 'PT Mitrapacific Conculindo Int', NULL, NULL, 50, '2', '2017-07-03'),
(83, 8, 0, 'PT Mono Heksa', NULL, NULL, 0, '3', '2017-07-03'),
(84, 9, 0, 'PT Wijaya Karya', 0, '0', 30, '1', '2017-07-03'),
(85, 9, 0, 'KSO Dressa Badja', NULL, NULL, 50, '2', '2017-07-03'),
(86, 9, 0, 'PT Perentjana Djaja', NULL, NULL, 0, '3', '2017-07-03'),
(87, 10, 0, 'PT Adhi Karya', 0, '0', 30, '1', '2017-07-04'),
(88, 10, 0, 'PT Waskita', 0, '0', 30, '1', '2017-07-04'),
(89, 10, 0, 'PT Multi Phi Beta KSO', NULL, NULL, 50, '2', '2017-07-04'),
(90, 10, 0, 'PT Seecons', NULL, NULL, 50, '3', '2017-07-04'),
(91, 13, 0, 'PT Waskita ', 0, '0', 30, '1', '2017-07-04'),
(92, 13, 0, 'PT Wika KSO', 0, '0', 30, '1', '2017-07-04'),
(93, 13, 0, 'PT Pasco E', 0, '0', 30, '1', '2017-07-04'),
(94, 13, 0, 'PT Mitrapacific Consulindo Int', NULL, NULL, 50, '2', '2017-07-04'),
(95, 13, 0, 'PT Anugerah Krida Pradana', NULL, NULL, 0, '3', '2017-07-04'),
(96, 14, 0, 'PT Wijaya Karya', 0, '0', 30, '1', '2017-07-04'),
(97, 14, 0, 'PT Grider Indonesia', 0, '0', 30, '1', '2017-07-04'),
(98, 14, 0, 'PT Jabar Bumi Kontruksi', 0, '0', 30, '1', '2017-07-04'),
(99, 14, 0, 'PT Multi Phi Beta KSO', NULL, NULL, 50, '2', '2017-07-04'),
(100, 14, 0, 'PT Matra Rakayasa Internationa', NULL, NULL, 0, '3', '2017-07-04'),
(101, 15, 0, 'Sino Road ang Bridge Group.Co.', 0, '0', 30, '1', '2017-07-04'),
(102, 15, 0, 'PT Hutama Krya JO', 0, '0', 30, '1', '2017-07-04'),
(103, 15, 0, 'PT Jaya Kontruksi', 0, '0', 30, '1', '2017-07-04'),
(104, 15, 0, 'PT Waskita Karya', 0, '0', 30, '1', '2017-07-04'),
(105, 15, 0, 'PT Wijaya Karya', 0, '0', 30, '1', '2017-07-04'),
(108, 15, 0, 'Hutama - Waskita KSO', 0, '0', 30, '1', '2017-07-04'),
(109, 15, 0, 'Nindya - Bk KSO', 0, '0', 30, '1', '2017-07-04'),
(110, 18, 0, 'PT Waskita Karya', 0, '0', 30, '1', '2017-07-04'),
(111, 18, 0, 'PT Waskita Beton Precast', 0, '0', 30, '1', '2017-07-04'),
(112, 19, 0, 'Beijing Urban Contruction Grou', 0, '0', 30, '1', '2017-07-04'),
(113, 19, 0, 'PT Wijaya Karya (Persero) Tbk', 0, '0', 30, '1', '2017-07-04'),
(114, 19, 0, 'PT Pembangunan Perumahan (Pers', 0, '0', 30, '1', '2017-07-04'),
(115, 21, 0, 'PT Waskita Karya', 0, '0', 30, '1', '2017-07-04'),
(116, 21, 0, 'PT Virama Karya', NULL, NULL, 50, '2', '2017-07-04'),
(117, 21, 0, 'PT Aria Jasa Reksatama', NULL, NULL, 0, '3', '2017-07-04'),
(118, 22, 0, 'PT Hutama Karya', 0, '0', 30, '1', '2017-07-04'),
(119, 22, 0, 'PT Hutama Karya', 0, '0', 30, '1', '2017-07-04'),
(120, 22, 0, 'PT Perentjana Djaja', NULL, NULL, 50, '2', '2017-07-04'),
(121, 22, 0, 'PT Anugerah Krida Pradana', NULL, NULL, 0, '3', '2017-07-04'),
(122, 23, 0, 'WKPPHK KSO ', 0, '0', 30, '1', '2017-07-04'),
(123, 23, 0, 'PT Grider Indonesia', 0, '0', 30, '1', '2017-07-04'),
(124, 23, 0, 'KSO ', NULL, NULL, 50, '2', '2017-07-04'),
(125, 23, 0, 'PT Multi Phi Beta', NULL, NULL, 50, '2', '2017-07-04'),
(126, 23, 0, 'PT Virama Karya ', NULL, NULL, 50, '2', '2017-07-04'),
(127, 23, 0, 'IKU', NULL, NULL, 50, '2', '2017-07-04'),
(128, 23, 0, 'PT Sarana Multi Daya', NULL, NULL, 0, '3', '2017-07-04'),
(129, 24, 0, 'PT Waskita Karya', 0, '0', 30, '1', '2017-07-04'),
(130, 24, 0, 'PT Virama Karya', NULL, NULL, 50, '2', '2017-07-04'),
(131, 24, 0, 'PT Sarana Multi Daya', NULL, NULL, 0, '3', '2017-07-04'),
(132, 29, 0, 'PT PP', 0, '0', 30, '1', '2017-07-04'),
(133, 29, 0, 'PT Waskita Karya (Persero) Tbk', 0, '0', 30, '1', '2017-07-04'),
(134, 29, 0, 'PT Adhi Karya (Persero) Tbk', 0, '0', 30, '1', '2017-07-04'),
(135, 29, 0, 'PT Wijaya Karya (Persero) Tbk', 0, '0', 30, '1', '2017-07-04'),
(136, 29, 0, 'PT Cipta Strada', NULL, NULL, 50, '2', '2017-07-04'),
(137, 29, 0, 'PT Daya Creasi Mitrayasa', NULL, NULL, 50, '2', '2017-07-04'),
(139, 29, 0, 'PT Buana Archicon', NULL, NULL, 50, '2', '2017-07-04'),
(140, 29, 0, 'PT Indec Internusa KSO', NULL, NULL, 50, '2', '2017-07-04'),
(141, 29, 0, 'PT Multi Phi Beta', NULL, NULL, 50, '2', '2017-07-04'),
(142, 29, 0, 'PT Aria Jasa Reksatama', NULL, NULL, 50, '3', '2017-07-07'),
(143, 30, 0, 'PT Prima Indojaya Andiri', 0, '0', 30, '1', '2017-07-04'),
(144, 30, 0, 'PT Chungma Engineering And Con', 0, '0', 30, '1', '2017-07-04'),
(145, 30, 0, 'PT Yasa Patria Perkasa', 0, '0', 30, '1', '2017-07-04'),
(146, 30, 0, 'PT Waskita Karya (Persero) Tbk', 0, '0', 30, '1', '2017-07-04'),
(147, 31, 0, 'PT Hutama Karya', 0, '0', 30, '1', '2017-07-04'),
(148, 31, 0, 'PT Cipta Strada', NULL, NULL, 50, '2', '2017-07-04'),
(149, 31, 0, 'PT Wiranta Bhuana Raya', NULL, NULL, 0, '3', '2017-07-04'),
(150, 33, 0, 'PT Waskita Karya', 0, '0', 30, '1', '2017-07-04'),
(151, 33, 0, 'China Jo', NULL, NULL, 50, '2', '2017-07-04'),
(152, 33, 0, 'PT Hutama Karya', NULL, NULL, 50, '2', '2017-07-04'),
(153, 33, 0, 'PT Yodya Karya', NULL, NULL, 50, '2', '2017-07-04'),
(154, 33, 0, 'PT Perentjana Djaja KSO', NULL, NULL, 0, '3', '2017-07-04'),
(155, 33, 0, 'PT Wahana Mitra Amerta', NULL, NULL, 0, '3', '2017-07-04'),
(156, 34, 0, 'PT Hutama Karya Infrastruktur', 0, '0', 30, '1', '2017-07-04'),
(157, 34, 0, 'PT Multi Phi Beta KSo', NULL, NULL, 50, '2', '2017-07-04'),
(158, 34, 0, 'PT Perentjana Djaja', NULL, NULL, 0, '3', '2017-07-04'),
(159, 55, 0, 'PT Waskita Karya (Persero) Tbk', 0, '0', 30, '1', '2017-07-04'),
(160, 55, 0, 'PT Jasa Marga Semarang Batang', 0, '0', 30, '1', '2017-07-04'),
(161, 55, 0, 'PT Waskita Bumi Wira', 0, '0', 30, '1', '2017-07-04'),
(162, 55, 0, 'PT Citra Karya Jabar Tol', 0, '0', 30, '1', '2017-07-04'),
(163, 55, 0, 'PT Jasa Marga Jalanlayang Cika', 0, '0', 30, '1', '2017-07-04'),
(164, 36, 0, 'PT Hutama Marga Waskita', 0, '0', 30, '1', '2017-07-04'),
(165, 36, 0, 'PT Hutama Karya', 0, '0', 30, '1', '2017-07-04'),
(166, 36, 0, 'PT Jasa Marga (Persero) Tbk', 0, '0', 30, '1', '2017-07-04'),
(167, 36, 0, 'PT Waskita Karya (Persero) Tbk', 0, '0', 30, '1', '2017-07-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mastermaterial`
--

CREATE TABLE `mastermaterial` (
  `id_material` int(5) NOT NULL,
  `NamaMaterial` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mastermaterial`
--

INSERT INTO `mastermaterial` (`id_material`, `NamaMaterial`) VALUES
(1, 'Besi'),
(2, 'Baja'),
(3, 'Beton'),
(4, 'Aspal'),
(5, 'Aggregat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masterperalatan`
--

CREATE TABLE `masterperalatan` (
  `id_alat` int(11) NOT NULL,
  `NamaAlat` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masterperalatan`
--

INSERT INTO `masterperalatan` (`id_alat`, `NamaAlat`) VALUES
(2, 'Grader'),
(3, 'Vibro'),
(4, 'Bull Dozer'),
(5, 'Excavator'),
(6, 'Dump Truck'),
(7, 'Concrete Paver');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerja`
--

CREATE TABLE `pekerja` (
  `id_pekerja` int(11) NOT NULL,
  `JumlahPekerja` int(5) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemegangsaham`
--

CREATE TABLE `pemegangsaham` (
  `id_saham` int(5) NOT NULL,
  `id_ruas` int(5) NOT NULL,
  `PemegangSaham` varchar(50) NOT NULL,
  `Jumlah` decimal(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemegangsaham`
--

INSERT INTO `pemegangsaham` (`id_saham`, `id_ruas`, `PemegangSaham`, `Jumlah`) VALUES
(1, 1, 'PT. Waskita Karya', '0.01'),
(2, 1, 'PT. Waskita MNC Transjawa Toll', '99.99'),
(4, 3, 'PT. Sumber Mitra Jaya', '40.00'),
(5, 3, 'PT. Waskita Karya Toll Road', '60.00'),
(6, 21, 'PT Pejagan Pemalang Tol Road', '6.84'),
(7, 5, 'PT. Jasa Marga', '60.00'),
(8, 5, 'PT. Waskita Tol Road', '40.00'),
(9, 4, 'PT. Jasa Marga (Persero) Tbk', '73.91'),
(10, 4, 'PT. Astratel Nusantara', '25.00'),
(11, 4, 'PT. Sarana Pembangunan Jawa Tengah', '1.09'),
(12, 6, 'PT. Waskita Toll Road', '40.00'),
(13, 6, 'PT. Ferido Putra Senilai 1 Saham', '1.00'),
(14, 6, 'PT. Jasa Marga (Persero) Tbk', '60.00'),
(15, 7, 'PT. Waskita Toll Road', '40.00'),
(16, 7, 'PT. Ferido Putra Senilai 1 Saham', '1.00'),
(17, 7, 'PT. Jasa Marga (Persero) Tbk', '60.00'),
(18, 8, 'PT. Trans Utama Jaya Sejahtera', '5.00'),
(19, 8, 'PT. Astratel Nusantara', '95.00'),
(20, 9, 'PT. Jasa Marga (Persero) Tbk', '55.00'),
(21, 9, 'PT. Moeladi', '25.00'),
(22, 9, 'PT. Wijaya Karya (Persero) Tbk', '20.00'),
(23, 10, 'PT. Jasa Marga (Persero) Tbk', '80.00'),
(24, 10, 'PT. Jatim Marga Utama', '20.00'),
(25, 11, 'PT. Waskita MNC Transjawa Toll', '80.00'),
(26, 11, 'PT. Bukaka Mega Investama', '20.00'),
(27, 13, 'PT. Waskita Toll Road', '81.64'),
(28, 13, 'PT. Jaya Sarana', '8.22'),
(29, 13, 'PT. Bukaka Mega Investama', '10.14'),
(30, 14, 'PT. Jasa Sarana', '10.00'),
(31, 14, 'PT. Citra Mega Nusaphala Persada', '65.00'),
(32, 14, 'PT. Wijaya Karya', '25.00'),
(33, 15, 'PT. Jasa Marga (Persero) Tbk', '65.00'),
(34, 15, 'PT. Wijaya Karya ', '20.00'),
(35, 15, 'PT. Pembangunan Perumahan', '15.00'),
(36, 16, 'PT. Wijaya Karya', '15.00'),
(37, 16, 'PT. Bangun Tjipta Sarana', '15.00'),
(38, 16, 'PT. Pembangunan Perumahan', '15.00'),
(39, 16, 'PT. Jasa Marga (Persero) Tbk', '55.00'),
(40, 17, 'PT. Sarana Multi Infrastruktur (Persero)', '5.00'),
(41, 17, 'PT. Jasa Marga (Persero) Tbk', '60.00'),
(42, 17, 'PT. Pembangunan Perumahan (Persero) Tbk', '35.00'),
(43, 18, 'PT. Panca Wira Usaha Jawa Timur', '20.00'),
(44, 18, 'PT. Energi Bumi Mining', '25.00'),
(45, 18, 'PT. Waskita Toll Road', '55.00'),
(46, 19, 'PT. Jasa Sarana', '10.00'),
(47, 19, 'PT. Wijaya Karya', '25.00'),
(48, 19, 'PT. Citra Marga Nusaphala Persada', '65.00'),
(49, 21, 'PT. Citra Mandiri Sekses Sejati', '12.00'),
(50, 21, 'PT. Waskita Toll Road', '60.00'),
(51, 21, 'Indadi Utama', '6.00'),
(52, 21, 'PT. Remaja Bangun Kencana', '6.00'),
(53, 21, 'PT. Jasa Marga (Persero) Tbk', '1.03'),
(54, 21, 'PT. Tirtobumi Prakarsatama', '14.97'),
(55, 22, 'Kopnatel Jaya', '0.75'),
(56, 22, 'PT. Trasinso Karya Investindo', '78.01'),
(57, 22, 'PT. Waskita Karya', '18.14'),
(58, 22, 'PT. Jalan Tol Lingkar Luar Jakarta ', '3.10'),
(59, 23, 'PT. Waskita Karya ', '12.50'),
(60, 23, 'PT. CMNP Tbk', '62.50'),
(61, 23, 'PT. Bangun Perumahan', '12.50'),
(62, 23, 'PT. Waskita Toll Road', '12.50'),
(63, 24, 'PT. Waskita Toll Road', '90.00'),
(64, 24, 'PT. Bakrie & Brothers Tbk', '5.00'),
(65, 24, 'PT. Bakrie Toll Indonesia', '5.00'),
(66, 25, 'PT. Jasa Sarana', '15.00'),
(67, 25, 'PT. Jasa Marga', '55.00'),
(68, 25, 'PT. CMNP', '30.00'),
(69, 29, 'PT. Hutaman Karya (Persero)', '100.00'),
(70, 30, 'PT. Sriwijaya Marga Persada', '4.00'),
(71, 30, 'PT. Kayson Company', '4.75'),
(72, 30, 'PT. Persada Tanjung Api-Api', '30.25'),
(73, 30, 'PT. Perusahaan Daerah Prodexim', '1.00'),
(74, 30, 'PT. Waskita Toll Road', '60.00'),
(75, 31, 'PT. Hutama Karya (Persero) Tbk', '100.00'),
(76, 32, 'PT. Hutama Karya (Persero)', '100.00'),
(77, 33, 'PT. Jasa Marga (Persero) Tbk', '55.00'),
(78, 33, 'PT. Waskita Karya (Persero) Tbk', '15.00'),
(79, 33, 'PT. Waskita Toll Road', '15.00'),
(80, 33, 'PT. Pembangunan Perumahan', '15.00'),
(81, 34, 'PT. Hutama Karya (Persero)', '100.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penagihankelman`
--

CREATE TABLE `penagihankelman` (
  `id_tagihan` int(11) NOT NULL,
  `id_ruas` int(11) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `Danaditagihkan` double NOT NULL,
  `tanggal_pencairan` date DEFAULT NULL,
  `Danadibayarkan` double DEFAULT NULL,
  `sisa` double DEFAULT NULL,
  `Tahun` varchar(4) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penagihankelman`
--

INSERT INTO `penagihankelman` (`id_tagihan`, `id_ruas`, `tanggal_terima`, `Danaditagihkan`, `tanggal_pencairan`, `Danadibayarkan`, `sisa`, `Tahun`, `Tanggal`) VALUES
(27, 28, '2017-04-28', 1039215543693, '2017-05-05', 276527854020, 762687689673, '2016', '2017-05-30'),
(28, 5, '2017-07-24', 4, '2017-07-20', 4, 0, '1', '2017-07-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembaliandrlman`
--

CREATE TABLE `pengembaliandrlman` (
  `id` int(11) NOT NULL,
  `id_tagihan` int(5) NOT NULL,
  `Jumlahdibayarkan` double NOT NULL,
  `Oleh` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `Ket` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaanalat`
--

CREATE TABLE `penggunaanalat` (
  `id` int(11) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `id_seksi` int(5) NOT NULL,
  `NamaAlat` varchar(50) NOT NULL,
  `QTY` tinyint(3) NOT NULL,
  `WorkingHour` varchar(20) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penggunaanalat`
--

INSERT INTO `penggunaanalat` (`id`, `id_alat`, `id_seksi`, `NamaAlat`, `QTY`, `WorkingHour`, `satuan`, `keterangan`, `Tanggal`) VALUES
(1, 2, 21, 'Grader', 3, '3', '', '', '2017-05-29'),
(2, 3, 21, 'Vibro', 3, '3', '', '', '2017-05-29'),
(3, 4, 21, 'Dozer', 2, '2', '', '', '2017-05-29'),
(4, 5, 21, 'Excavator', 2, '2', '', '', '2017-05-29'),
(5, 6, 21, 'Dump Truck', 4, '4', '', '', '2017-05-29'),
(6, 7, 21, 'Concrete Paver', 5, '5', '', '', '2017-05-29'),
(7, 2, 21, 'Grader', 2, '2', '', '', '2017-05-29'),
(8, 3, 21, 'Vibro', 2, '2', '', '', '2017-05-29'),
(9, 4, 21, 'Dozer', 5, '5', '', '', '2017-05-29'),
(10, 5, 21, 'Excavator', 1, '1', '', '', '2017-05-29'),
(11, 7, 21, 'Concrete Paver', 1, '1', '', '', '2017-05-29'),
(12, 2, 21, 'Grader', 2, '2', '', '', '2017-05-29'),
(13, 3, 21, 'Vibro', 3, '3', '', '', '2017-05-29'),
(14, 4, 21, 'Dozer', 5, '5', '', '', '2017-05-29'),
(15, 6, 21, 'Dump Truck', 5, '5', '', '', '2017-05-29'),
(16, 2, 21, 'Grader', 2, 'fgr', '', '', '2017-05-29'),
(17, 3, 21, 'Vibro', 3, 'rg', '', '', '2017-05-29'),
(18, 4, 21, 'Dozer', 4, '4df', '', '', '2017-05-29'),
(19, 5, 21, 'Excavator', 4, '4df', '', '', '2017-05-29'),
(20, 6, 21, 'Dump Truck', 4, '4df', '', '', '2017-05-29'),
(40, 2, 21, 'Grader', 5, '12 jam', '', '', '2017-05-30'),
(41, 3, 21, 'Vibro', 12, '21', '', '', '2017-05-30'),
(42, 4, 21, 'Bull Dozer', 3, '1', '', '', '2017-05-30'),
(57, 5, 8, 'Excavator', 13, '13', '', '', '2017-07-07'),
(56, 3, 8, 'Vibro', 13, '13', '', '', '2017-07-07'),
(55, 2, 8, 'Grader', 13, '13', '', '', '2017-07-07'),
(58, 2, 9, '', 5, '5', '5', '5', '2017-07-23'),
(59, 2, 9, '', 5, '5', '5', '5', '2017-07-23'),
(60, 2, 9, '', 6, '6', '6', '6', '2017-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaanmaterial`
--

CREATE TABLE `penggunaanmaterial` (
  `id` int(11) NOT NULL,
  `id_material` int(5) NOT NULL,
  `id_seksi` int(5) NOT NULL,
  `NamaMaterial` varchar(50) NOT NULL,
  `QTY` smallint(5) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penggunaanmaterial`
--

INSERT INTO `penggunaanmaterial` (`id`, `id_material`, `id_seksi`, `NamaMaterial`, `QTY`, `satuan`, `keterangan`, `Tanggal`) VALUES
(10, 1, 21, 'Besi', 23, '', '', '2017-05-10'),
(11, 2, 21, 'Baja', 34, '', '', '2017-05-10'),
(12, 3, 21, 'Beton', 23432, '', '', '2017-05-10'),
(13, 4, 21, 'Aspal', 233, '', '', '2017-05-10'),
(14, 5, 21, 'Aggregat', 555, '', '', '2017-05-10'),
(15, 1, 21, 'Besi', 12, '', '', '2017-05-30'),
(16, 2, 21, 'Baja', 12, '', '', '2017-05-30'),
(17, 3, 21, 'Beton', 12, '', '', '2017-05-30'),
(18, 1, 8, 'Besi', 45, '', '', '2017-07-07'),
(19, 2, 8, 'Baja', 4, '', '', '2017-07-07'),
(20, 3, 8, 'Beton', 66, '', '', '2017-07-07'),
(21, 1, 0, '', 6, '6', '6', '2017-07-23'),
(22, 2, 0, '', 6, '6', '6', '2017-07-23'),
(23, 1, 0, '', 4, '4', '4', '2017-07-23'),
(24, 1, 0, '', 0, '4', '4', '2017-07-23'),
(25, 1, 9, '', 5, '5', '5', '2017-07-23'),
(26, 3, 9, '', 6, 'Ton', 'test', '2017-07-23'),
(27, 1, 10, '', 5, '5', '5', '2017-07-23'),
(28, 1, 10, '', 5, '5', '5', '2017-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaansdm`
--

CREATE TABLE `penggunaansdm` (
  `id` int(11) NOT NULL,
  `id_seksi` varchar(50) DEFAULT '0',
  `namasdm` varchar(50) DEFAULT '0',
  `kuantiti` int(11) DEFAULT '0',
  `satuan` varchar(50) DEFAULT '0',
  `keterangan` varchar(50) DEFAULT '0',
  `Tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penggunaansdm`
--

INSERT INTO `penggunaansdm` (`id`, `id_seksi`, `namasdm`, `kuantiti`, `satuan`, `keterangan`, `Tanggal`) VALUES
(1, '9', '5', 4, '4', '4', '2017-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `progreskontruksi`
--

CREATE TABLE `progreskontruksi` (
  `id_kontruksi` int(11) NOT NULL,
  `id_seksi` int(11) NOT NULL,
  `Rencana` decimal(5,2) NOT NULL,
  `Realisasi` decimal(5,2) NOT NULL,
  `Deviasi` decimal(5,2) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `progreskontruksi`
--

INSERT INTO `progreskontruksi` (`id_kontruksi`, `id_seksi`, `Rencana`, `Realisasi`, `Deviasi`, `Tanggal`) VALUES
(28, 10, '26.45', '19.97', '-6.48', '2017-06-21'),
(6, 6, '100.00', '100.00', '0.00', '2017-06-19'),
(7, 6, '100.00', '100.00', '0.00', '2017-06-19'),
(8, 7, '37.38', '37.75', '0.37', '2017-06-19'),
(9, 8, '42.70', '42.71', '0.01', '2017-06-20'),
(10, 9, '27.13', '18.86', '-8.27', '2017-06-20'),
(11, 38, '11.56', '62.03', '50.47', '2017-06-20'),
(12, 39, '11.56', '13.11', '1.55', '2017-06-20'),
(13, 42, '13.07', '36.37', '23.30', '2017-06-20'),
(14, 41, '13.07', '36.37', '23.30', '2017-06-20'),
(15, 40, '13.03', '16.81', '3.78', '2017-06-20'),
(16, 20, '6.78', '4.04', '-2.74', '2017-06-20'),
(17, 19, '6.78', '4.04', '-2.74', '2017-06-20'),
(18, 18, '99.79', '97.08', '-2.71', '2017-06-20'),
(19, 17, '100.00', '100.00', '0.00', '2017-06-20'),
(20, 16, '100.00', '100.00', '0.00', '2017-06-20'),
(21, 45, '99.88', '98.25', '-1.63', '2017-06-20'),
(22, 192, '100.00', '100.00', '0.00', '2017-06-20'),
(40, 207, '80.28', '68.98', '-11.30', '2017-06-22'),
(39, 194, '79.16', '60.33', '-18.83', '2017-06-22'),
(25, 193, '100.00', '100.00', '0.00', '2017-06-20'),
(26, 195, '100.00', '100.00', '0.00', '2017-06-20'),
(29, 11, '11.56', '62.03', '50.47', '2017-06-22'),
(30, 12, '11.56', '13.11', '1.55', '2017-06-22'),
(31, 13, '13.03', '16.81', '3.78', '2017-06-22'),
(32, 15, '13.07', '36.37', '23.30', '2017-06-22'),
(33, 199, '99.39', '91.68', '-7.71', '2017-06-22'),
(34, 200, '100.00', '100.00', '0.00', '2017-06-22'),
(35, 201, '100.00', '100.00', '0.00', '2017-06-22'),
(36, 202, '100.00', '100.00', '0.00', '2017-06-22'),
(37, 203, '100.00', '100.00', '0.00', '2017-06-22'),
(38, 204, '100.00', '100.00', '0.00', '2017-06-22'),
(41, 206, '72.16', '64.18', '-7.98', '2017-06-22'),
(42, 205, '75.62', '63.22', '-12.40', '2017-06-22'),
(43, 22, '100.00', '100.00', '0.00', '2017-06-22'),
(44, 23, '95.48', '75.55', '-19.93', '2017-06-22'),
(45, 24, '100.00', '100.00', '0.00', '2017-06-22'),
(46, 25, '54.81', '48.47', '-6.34', '2017-06-22'),
(47, 26, '100.00', '100.00', '0.00', '2017-06-22'),
(48, 27, '95.00', '86.34', '-8.66', '2017-06-22'),
(49, 28, '52.02', '46.82', '-5.20', '2017-06-22'),
(50, 29, '62.85', '52.87', '-9.98', '2017-06-22'),
(51, 30, '100.00', '100.00', '0.00', '2017-06-22'),
(52, 69, '99.79', '97.49', '-2.30', '2017-06-27'),
(53, 70, '15.24', '7.36', '-7.88', '2017-06-27'),
(55, 72, '0.00', '0.00', '0.00', '2017-06-27'),
(56, 60, '9.98', '6.57', '-3.41', '2017-06-27'),
(57, 62, '5.10', '0.79', '-4.31', '2017-06-27'),
(58, 63, '8.06', '11.19', '3.13', '2017-06-27'),
(59, 209, '8.06', '11.19', '3.13', '2017-06-27'),
(60, 111, '46.44', '35.76', '-10.68', '2017-06-27'),
(61, 112, '0.00', '0.00', '0.00', '2017-06-27'),
(62, 113, '0.00', '0.00', '0.00', '2017-06-27'),
(63, 114, '0.00', '0.00', '0.00', '2017-06-27'),
(64, 76, '100.00', '98.00', '-2.00', '2017-06-27'),
(65, 77, '100.00', '96.00', '-4.00', '2017-06-27'),
(66, 93, '9.92', '4.92', '-5.00', '2017-06-27'),
(67, 94, '52.10', '15.14', '-36.96', '2017-06-27'),
(68, 210, '58.04', '56.03', '-2.01', '2017-06-27'),
(69, 211, '4.95', '5.04', '0.09', '2017-06-27'),
(70, 212, '12.68', '13.15', '0.47', '2017-06-27'),
(71, 213, '2.46', '2.60', '0.14', '2017-06-27'),
(72, 214, '10.65', '5.49', '-5.16', '2017-06-27'),
(73, 73, '3.07', '4.95', '1.88', '2017-06-27'),
(76, 75, '0.00', '0.13', '0.13', '2017-06-27'),
(75, 74, '0.88', '0.83', '-0.05', '2017-06-27'),
(77, 64, '2.65', '1.29', '-1.36', '2017-06-27'),
(78, 66, '2.65', '1.29', '-1.36', '2017-06-27'),
(80, 68, '7.54', '12.03', '4.49', '2017-06-27'),
(81, 79, '0.00', '0.00', '0.00', '2017-06-27'),
(82, 80, '85.43', '79.10', '-6.33', '2017-06-27'),
(83, 88, '0.00', '0.00', '0.00', '2017-06-27'),
(84, 87, '0.00', '0.00', '0.00', '2017-06-27'),
(85, 86, '0.00', '0.00', '0.00', '2017-06-27'),
(86, 85, '0.00', '0.00', '0.00', '2017-06-27'),
(87, 118, '0.00', '0.00', '0.00', '2017-06-27'),
(88, 117, '85.68', '70.36', '-15.32', '2017-06-27'),
(89, 102, '100.00', '100.00', '0.00', '2017-06-27'),
(90, 103, '82.25', '68.33', '-13.92', '2017-06-27'),
(91, 104, '0.00', '0.00', '0.00', '2017-06-27'),
(92, 125, '58.20', '57.57', '-0.63', '2017-06-27'),
(93, 126, '0.00', '0.00', '0.00', '2017-06-27'),
(94, 127, '0.00', '0.00', '0.00', '2017-06-27'),
(95, 119, '27.06', '21.84', '-5.22', '2017-06-27'),
(96, 120, '0.00', '0.00', '0.00', '2017-06-27'),
(97, 215, '27.08', '42.90', '15.82', '2017-06-27'),
(98, 216, '0.00', '0.00', '0.00', '2017-06-27'),
(99, 217, '0.00', '0.00', '0.00', '2017-06-27'),
(100, 107, '100.00', '100.00', '0.00', '2017-06-27'),
(101, 108, '100.00', '100.00', '0.00', '2017-06-27'),
(102, 109, '14.50', '14.69', '0.19', '2017-06-27'),
(103, 110, '0.00', '0.00', '0.00', '2017-06-27'),
(104, 121, '0.01', '0.00', '-0.01', '2017-06-27'),
(105, 122, '0.01', '0.00', '-0.01', '2017-06-27'),
(106, 123, '0.01', '0.00', '-0.01', '2017-06-27'),
(107, 124, '0.01', '0.02', '0.01', '2017-06-27'),
(108, 130, '59.97', '26.97', '-33.00', '2017-06-27'),
(109, 131, '32.90', '18.27', '-14.63', '2017-06-27'),
(110, 185, '34.57', '16.67', '-17.90', '2017-06-27'),
(111, 186, '18.90', '10.07', '-8.83', '2017-06-27'),
(112, 188, '16.57', '1.37', '-15.20', '2017-06-27'),
(113, 133, '100.00', '85.22', '-14.78', '2017-06-27'),
(114, 134, '58.02', '4.43', '-53.59', '2017-06-27'),
(115, 135, '100.00', '62.55', '-37.45', '2017-06-27'),
(116, 136, '5.38', '3.72', '-1.66', '2017-06-27'),
(117, 137, '1.90', '3.40', '1.50', '2017-06-27'),
(118, 138, '0.08', '0.35', '0.27', '2017-06-27'),
(119, 139, '0.00', '0.00', '0.00', '2017-06-27'),
(120, 140, '0.00', '0.00', '0.00', '2017-06-27'),
(121, 141, '0.00', '0.00', '0.00', '2017-06-27'),
(125, 143, '0.00', '73.62', '73.62', '2017-06-27'),
(124, 142, '0.00', '56.25', '0.00', '2017-06-27'),
(126, 144, '100.00', '100.00', '0.00', '2017-06-27'),
(127, 145, '84.57', '90.27', '5.70', '2017-06-27'),
(128, 146, '90.54', '81.84', '-8.70', '2017-06-27'),
(129, 147, '84.69', '78.96', '-5.73', '2017-06-27'),
(130, 148, '0.00', '0.00', '0.00', '2017-06-27'),
(131, 149, '0.00', '16.72', '16.72', '2017-06-27'),
(132, 150, '100.00', '93.31', '-6.69', '2017-06-27'),
(133, 151, '100.00', '93.78', '-6.22', '2017-06-27'),
(134, 106, '0.00', '0.00', '0.00', '2017-07-04'),
(135, 105, '0.00', '0.00', '0.00', '2017-07-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `progrestanah`
--

CREATE TABLE `progrestanah` (
  `id_tanah` int(11) NOT NULL,
  `id_seksi` int(5) NOT NULL,
  `JumlahBidang` smallint(5) NOT NULL,
  `LuasTanah` float NOT NULL,
  `UGR` float NOT NULL COMMENT 'Dalam M',
  `Bobotluas` decimal(6,3) NOT NULL,
  `BobotUGR` decimal(6,3) NOT NULL,
  `Rencana` float NOT NULL,
  `Realisasi` float NOT NULL,
  `Deviasi` float NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `progrestanah`
--

INSERT INTO `progrestanah` (`id_tanah`, `id_seksi`, `JumlahBidang`, `LuasTanah`, `UGR`, `Bobotluas`, `BobotUGR`, `Rencana`, `Realisasi`, `Deviasi`, `Tanggal`) VALUES
(1, 5, 4, 121.54, 90.94, '0.000', '0.000', 0, 0, 0, '2017-05-17'),
(2, 7, 0, 76.72, 549.35, '0.000', '0.000', 0, 0, 0, '2017-05-17'),
(3, 8, 0, 172.55, 519.43, '0.000', '0.000', 0, 0, 0, '2017-05-17'),
(4, 8, 0, 173.1, 525.12, '0.000', '0.000', 0, 0, 0, '2017-05-17'),
(5, 6, 4, 59.79, 95.21, '0.000', '0.000', 0, 0, 0, '2017-06-19'),
(6, 7, 4, 75.59, 544.2, '0.000', '0.000', 0, 0, 0, '2017-06-19'),
(7, 9, 2, 154.49, 434.26, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(9, 10, 2, 144.19, 1115.6, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(10, 38, 5, 31.71, 39.08, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(11, 39, 5, 256.68, 861.34, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(12, 40, 5, 90.61, 660.34, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(13, 41, 5, 86.67, 785.45, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(14, 42, 5, 92.18, 2288.61, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(15, 16, 5, 143.97, 686.46, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(16, 17, 5, 169.59, 492.96, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(17, 18, 99, 98.58, 98.67, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(18, 19, 94, 95.23, 93.98, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(19, 20, 96, 97.29, 96.73, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(20, 156, 100, 99.18, 56.65, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(21, 157, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(22, 158, 100, 99.77, 99.5, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(23, 159, 100, 98.66, 96.54, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(24, 160, 100, 99.94, 99.23, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(25, 161, 100, 95.39, 82.58, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(26, 162, 99, 98.26, 96.47, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(27, 163, 98, 98.2, 96.08, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(28, 22, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(29, 23, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(30, 24, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(31, 25, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(32, 26, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(33, 27, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(34, 28, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(35, 29, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(36, 30, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(37, 11, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(38, 12, 78, 81.57, 78.02, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(39, 13, 38, 44.8, 36.15, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(40, 14, 27, 49.29, 16.8, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(41, 15, 92, 89.13, 80.85, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(42, 60, 97, 93.79, 92.39, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(43, 62, 92, 90.27, 74.56, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(44, 63, 97, 88.57, 72.65, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(45, 64, 84, 81.38, 79.67, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(46, 66, 93, 94.59, 83.38, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(47, 68, 98, 97.99, 91.19, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(48, 69, 100, 98.85, 97.46, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(49, 70, 99, 94.67, 92.38, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(50, 71, 35, 33.21, 5.34, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(51, 71, 35, 33.21, 5.34, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(52, 72, 43, 33.71, 27.55, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(53, 73, 93, 84.82, 78.69, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(54, 74, 60, 55.76, 61.32, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(55, 75, 68, 86.62, 72.5, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(56, 76, 99, 99.61, 99.33, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(57, 77, 98, 98.83, 95.7, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(58, 78, 97, 97.37, 91.91, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(59, 79, 98, 69.89, 16.55, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(60, 80, 99, 95.26, 100.11, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(61, 85, 95, 98.08, 95.85, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(62, 86, 0, 1.64, 0, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(63, 93, 75, 89.25, 92.22, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(64, 94, 35, 45.15, 58.02, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(65, 95, 11, 11.08, 0, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(66, 96, 3, 15.98, 0, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(67, 97, 86, 95.16, 80.75, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(68, 98, 82, 95.69, 83.63, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(69, 99, 96, 94.21, 15.35, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(70, 100, 58, 53.97, 42.73, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(71, 101, 28, 62.88, 30.65, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(72, 102, 99, 93.98, 86.09, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(73, 103, 95, 96.94, 82.26, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(74, 104, 1, 8.41, 3.2, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(75, 105, 49, 64.21, 55.38, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(76, 106, 10, 15.78, 18.63, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(77, 107, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(78, 108, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(79, 109, 77, 83.23, 87.34, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(80, 111, 99, 99.9, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(81, 170, 77, 50.96, 70.77, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(82, 171, 19, 22.44, 23.53, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(83, 117, 77, 87.6, 38.87, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(84, 119, 2, 2.24, 2.39, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(85, 120, 12, 11.95, 11.1, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(86, 121, 24, 12.41, 12.84, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(87, 122, 1, 2.66, 1.66, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(88, 123, 34, 34.54, 28.86, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(89, 124, 72, 59.13, 61.19, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(90, 173, 78, 77.25, 54.57, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(91, 174, 62, 65.82, 40.4, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(92, 125, 82, 88.96, 60.84, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(93, 126, 33, 38.87, 72.44, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(94, 128, 78, 75.41, 85.04, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(95, 129, 77, 88.45, 77.75, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(96, 130, 69, 78.03, 83.75, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(97, 131, 91, 90.14, 86.91, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(98, 183, 11, 14.73, 27.36, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(99, 184, 18, 15.05, 9.26, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(100, 185, 95, 97.03, 73.14, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(101, 186, 88, 66.4, 0, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(102, 188, 96, 91.91, 0, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(103, 133, 96, 98.81, 98.94, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(104, 134, 96, 98.81, 98.94, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(105, 133, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(106, 135, 93, 82.75, 92.09, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(107, 136, 62, 80.69, 56.92, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(108, 137, 9, 33.43, 32.47, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(109, 138, 34, 70.74, 75.23, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(110, 139, 0, 12.12, 8.55, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(111, 140, 0, 36.94, 36.76, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(112, 141, 40, 45.68, 31.6, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(113, 142, 91, 96.01, 74.97, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(114, 143, 100, 100, 100, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(115, 144, 98, 99.9, 99.6, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(116, 145, 98, 99.77, 76.44, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(117, 146, 94, 90.41, 34.76, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(118, 147, 86, 93.68, 69.76, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(119, 148, 38, 45.35, 15.86, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(120, 149, 30, 53.03, 8.97, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(121, 150, 86, 99.26, 53.78, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(122, 151, 95, 99.38, 90.55, '0.000', '0.000', 0, 0, 0, '2017-06-20'),
(123, 7, 99, 98.35, 77.77, '0.000', '0.000', 0, 0, 0, '2017-06-21'),
(124, 209, 97, 88.57, 72.65, '0.000', '0.000', 0, 0, 0, '2017-06-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `region`
--

CREATE TABLE `region` (
  `id_region` int(5) NOT NULL,
  `NamaRegion` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `region`
--

INSERT INTO `region` (`id_region`, `NamaRegion`) VALUES
(1, 'Trans Jawa'),
(2, 'Non Trans Jawa'),
(3, 'Jabodetabek'),
(4, 'Trans Sumatra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruas`
--

CREATE TABLE `ruas` (
  `id_ruas` int(5) NOT NULL,
  `id_region` int(3) NOT NULL,
  `urutan` tinyint(3) NOT NULL,
  `NamaRuas` varchar(50) NOT NULL,
  `BadanUsaha` varchar(50) NOT NULL,
  `Panjang` char(7) NOT NULL,
  `JumlahSeksi` tinyint(3) NOT NULL,
  `JumlahKendaraanPerhari` tinyint(3) NOT NULL,
  `TargetOperasi` varchar(4) NOT NULL,
  `BiayaInvestasi` double NOT NULL,
  `BiayaKonstruksi` double NOT NULL,
  `BiayaTanah` double NOT NULL,
  `LuasTanah` float NOT NULL,
  `MasaKonsesi` mediumint(3) NOT NULL,
  `TarifTol` varchar(15) NOT NULL,
  `Peta` varchar(100) NOT NULL,
  `LogoBadanUsaha` varchar(100) NOT NULL,
  `PSN` char(1) NOT NULL COMMENT '1:Ya;2:Tidak',
  `Status` char(1) NOT NULL COMMENT '1:persiapan;2:Pelelangan;3:PPJT;4:PengadaanTanah;5:konstruksi;6:Operasi'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruas`
--

INSERT INTO `ruas` (`id_ruas`, `id_region`, `urutan`, `NamaRuas`, `BadanUsaha`, `Panjang`, `JumlahSeksi`, `JumlahKendaraanPerhari`, `TargetOperasi`, `BiayaInvestasi`, `BiayaKonstruksi`, `BiayaTanah`, `LuasTanah`, `MasaKonsesi`, `TarifTol`, `Peta`, `LogoBadanUsaha`, `PSN`, `Status`) VALUES
(1, 1, 3, 'Pejagan - Pemalang', 'PT. Pejagan Pemalang Toll Road', '57,50', 4, 45, '2017', 6840000000000, 3390000000000, 253000000000, 0, 45, '1000/km', '', '', '1', ''),
(3, 1, 1, 'Pemalang- Batang', 'PT.Pemalang Batang Toll Road', '39.20', 2, 127, '2018', 4080000000000, 2270000000000, 803000000000, 0, 45, '839/KM', '', '', '1', ''),
(4, 1, 3, 'Semarang - Solo', 'PT. Trans Marga Jateng', '72.64', 5, 127, '2018', 7300000000000, 4930000000000, 927000000000, 0, 45, '500/KM', '', '', '1', ''),
(5, 1, 4, 'Batang - Semarang', 'PT Jasamarga Semarang Batang', '75.00', 5, 127, '2018', 11050000000000, 7660000000000, 588000000000, 0, 45, '1100/KM', '', '', '1', ''),
(6, 1, 5, 'Solo - Ngawi', 'PT Solo Ngawi Jaya', '90.42', 4, 127, '2017', 5140000000000, 3200000000000, 1780000000000, 0, 35, '650/KM', '', '', '1', ''),
(7, 1, 6, 'Ngawi - Kertosono', 'PT Ngawi Kertosono Jaya', '86.90', 4, 127, '2018', 3820000000000, 2360000000000, 1080000000000, 0, 35, '650/KM', '', '', '1', ''),
(8, 1, 7, 'Kertosono - Mojokerto', 'PT Marga Harjaya Infrastruktur', '40.50', 4, 127, '2017', 3480000000000, 2380000000000, 485000000000, 0, 45, '646/KM', '', '', '1', ''),
(9, 1, 8, 'Surabaya - Mojokerto', 'PT Jasamarga Surabaya Mojokerto', '36.47', 4, 127, '2017', 3790000000000, 1830000000000, 557000000000, 0, 42, '940/KM', '', '', '1', ''),
(10, 1, 9, 'Gempol - Pasuruan', 'PT Transmarga Jatim Pasuruan', '34.15', 3, 127, '2019', 2770000000000, 1680000000000, 256000000000, 0, 45, '700/KM', '', '', '1', ''),
(11, 1, 10, 'Pasuruan - Probolinggo ', 'PT Trans Jawa Paspro Jalan Tol', '31.30', 3, 127, '2019', 3550000000000, 1560000000000, 3550000000000, 0, 45, '700/KM', '', '', '1', ''),
(12, 1, 11, 'Probolinggo - Banyuwangi', 'PT Trans Jawa Paspro Jalan Tol', '172.09', 7, 0, '0000', 0, 0, 0, 0, 0, '000/KM', '', '', '1', ''),
(13, 2, 2, 'Ciawi - Sukabumi', 'PT Trans Jabar Tol', '54', 4, 127, '2017', 7770000000000, 4170000000000, 824000000000, 0, 45, '1000/KM', '', '', '1', ''),
(14, 2, 1, 'Soreang - Pasir Koja', 'PT Citra Marga Lintas Jabar', '8.15', 2, 45, '2017', 1510000000000, 1140000000000, 0, 0, 45, '702/KM', '', '', '1', ''),
(15, 2, 3, 'Manado - Bitung', 'PT Jasamarga Manado Bitung', '39.90', 2, 127, '2019', 5120000000000, 3270000000000, 713000000000, 0, 40, '900/KM', '', '', '1', ''),
(16, 2, 4, 'Balikpapan - Samarinda', 'PT Jasamarga Balikpapan Samarinda', '99.35', 5, 127, '2019', 9970000000000, 6540000000000, 0, 0, 40, '1000/KM', '', '', '1', ''),
(17, 2, 5, 'Pandaan - Malang', 'PT Jasamarga Pandaan Malang', '42.48', 5, 127, '2019', 5970000000000, 3810000000000, 1350000000000, 0, 35, '750/KM', '', '', '1', ''),
(18, 2, 6, 'Krian - Lengundi - Bunder - Manyar', 'PT Waskita Bumi Wira', '38.2', 4, 0, '2019', 10030000000000, 3250000000000, 1110000000000, 0, 45, '1250/KM', '', '', '1', ''),
(19, 2, 7, 'Ciulenyi - Sumedang - Dawuan', 'PT Citra karya Jabar Tol', '61.68', 6, 45, '2019', 10030000000000, 3390000000000, 1290000000000, 0, 35, '800/KM', '', '', '1', ''),
(20, 2, 8, 'Serang - Panimbang', 'none', '83.91', 3, 127, '0', 11380000000000, 6960000000000, 907000000000, 0, 0, 'none/KM', '', '', '1', ''),
(21, 3, 1, 'Bekasi - Cawang - Kp. Melayu', 'PT Kresna Kusuma Dyandara Marga', '21.04', 2, 127, '2021', 7200000000000, 4780000000000, 449000000000, 0, 45, '11000/KM', '', '', '1', ''),
(22, 3, 3, 'Cinere - Jagorawi', 'PT Translingkar Kita Jaya', '14.46', 3, 127, '2019', 2620000000000, 1110000000000, 930000000000, 0, 35, '940/KM', '', '', '1', ''),
(23, 3, 3, 'Depok - Antasari', 'PT Citra Waspphutowa', '22.60', 3, 127, '2018', 2990000000000, 1460000000000, 769000000000, 0, 40, '1168/KM', '', '', '1', ''),
(24, 3, 4, 'Cimanggis - Cibitung', 'PT Cimanggis Cibitung Tollways', '25.21', 4, 127, '2019', 4520000000000, 1610000000000, 1310000000000, 0, 35, '835/KM', '', '', '1', ''),
(25, 3, 5, 'Bogor Ring Road', 'PT Marga Sarana Jabar', '11', 3, 127, '2019', 983000000000, 529000000000, 77000000000, 0, 45, '5500/KM', '', '', '1', ''),
(26, 3, 6, 'Cengkareng - Batuceper - Kunciran', 'PT Jasamarga Kunciran Cengkareng', '14.19', 4, 0, '2018', 0, 0, 0, 0, 0, 'none', '', '', '1', ''),
(27, 3, 7, 'Jakarta - Cikampek II Elevated', 'PT Jasamarga Jalanlayang Cikampek', '36.36', 9, 0, '0', 0, 0, 0, 0, 0, '000/KM', '', '', '1', ''),
(28, 3, 8, 'Cinere - Serpong', 'PT Cinere Serpong Jaya', '10.14', 2, 0, '000', 0, 0, 0, 0, 0, '000/KM', '', '', '1', ''),
(29, 4, 1, 'Bakauheni - Terbanggi Besar', 'PT Hutama Karya (Persero)', '140.7', 4, 127, '2018', 16790000000000, 12220000000000, 110000000000, 0, 40, '800/KM', '', '', '1', ''),
(30, 4, 2, 'Kayu Agung - Palembang - Betung', 'PT Sriwijaya Marmore Persada', '111.69', 3, 127, '2018', 17350000000000, 9840000000000, 450000000000, 0, 40, '833/KM', '', '', '1', ''),
(31, 4, 3, 'Palembang - Indralaya', 'PT Hutama Karya ', '21.93', 3, 127, '2018', 3300000000000, 2630000000000, 0, 0, 40, '750/KM', '', '', '1', ''),
(32, 4, 4, 'Pekanbaru - Dumai', 'PT Hutama Karya', '131.48', 6, 127, '2020', 16210000000000, 12180000000000, 0, 0, 40, '900/KM', '', '', '1', ''),
(33, 4, 5, 'Medan - Kualanamu - Tebing Tinggi', 'PT Jasamarga Kualanamu Tol', '61.70', 7, 0, '2017', 4070000000000, 1760000000000, 441000000000, 0, 40, '744/KM', '', '', '1', ''),
(34, 4, 6, 'Medan - Binjai', 'PT Hutama Karya', '16.72', 3, 127, '2018', 1600000000000, 1290000000000, 495000000000, 0, 40, '750/KM', '', '', '1', ''),
(35, 4, 7, 'Pematang Panggang - Kayu Agung', 'none', '185', 3, 127, '2018', 21850000000000, 0, 0, 0, 40, '900/KM', '', '', '1', ''),
(36, 4, 8, 'Kuala Tanjung - Tebing Tinggi - Parapat', 'PT Hutama Marga Waskita', '143.25', 6, 127, '2019', 13454000000000, 9554000000000, 0, 0, 0, '1000', '', '', '1', ''),
(37, 4, 9, 'Medan - Banda Aceh', 'none', '470', 0, 0, '2019', 55760000000000, 0, 0, 0, 0, '000/KM', '', '', '1', ''),
(39, 3, 9, 'Serpong - Balaraja', 'PT Trans Bumi Serbaraja', '30.00', 3, 0, '2017', 0, 0, 0, 0, 0, '0', '', '', '1', ''),
(55, 4, 10, 'Terbanggi Besar - Pematang Panggang - Kayu Agung', '0', '185', 3, 127, '2018', 21850000000000, 0, 0, 0, 40, '900', '', '', '1', ''),
(41, 4, 11, 'Padang - Pekanbaru', 'none', '240', 0, 0, '2024', 0, 0, 0, 0, 0, '0', '', '', '1', ''),
(42, 4, 12, 'Palembang - Tanjung Siapi - Api', 'none', '70', 0, 0, '2019', 0, 0, 0, 0, 0, '0', '', '', '1', ''),
(43, 1, 12, 'Semarang - Solo Seksi 3 Bawen - Salatiga', 'PT Trans Marga Jateng ', '17.6', 3, 0, '2017', 0, 0, 0, 0, 0, '0', '', '', '1', ''),
(46, 2, 9, 'Balikpapan - Samarinda - APBD', 'PT Jasamarga Balikpapan Samarinda - Loan China', '99.35', 5, 0, '2018', 0, 0, 0, 0, 0, '0', '', '', '1', ''),
(45, 1, 13, 'Semarang - Solo Seksi 4&5 (Salatiga - Kartasur)', 'none', '32.7', 5, 0, '2017', 0, 0, 0, 0, 0, '0', '', '', '1', ''),
(48, 1, 14, 'Mantingan - Kertosono', 'None', '124.31', 5, 0, '2017', 1427000000, 0, 0, 0, 0, '', '', '', '1', ''),
(49, 2, 10, 'Semarang - Demak', 'none', '24.00', 2, 0, '2017', 1962000000, 0, 0, 0, 0, '', '', '', '1', ''),
(50, 3, 10, 'Sunter - Pulogebang', 'none', '9.44', 4, 0, '2017', 884910000000, 0, 0, 0, 0, '', '', '', '1', ''),
(51, 3, 11, 'Cibitung - Cilincing', 'none', '34.72', 4, 0, '2017', 4178400000000, 0, 0, 0, 0, '', '', '', '1', ''),
(52, 3, 12, 'Kunciran - Serpong', 'none', '11.20', 2, 0, '2017', 4201420000000, 0, 0, 0, 0, '', '', '', '1', ''),
(54, 4, 13, 'Binjai - langsa', 'none', '0', 0, 0, '2017', 1325250000000, 0, 0, 0, 0, '', '', '', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seksi`
--

CREATE TABLE `seksi` (
  `id_seksi` int(5) NOT NULL,
  `id_ruas` int(5) NOT NULL,
  `Seksi` varchar(50) NOT NULL,
  `Panjang` float NOT NULL,
  `BiayaInvestasi` double NOT NULL,
  `BiayaKonstruksi` double NOT NULL,
  `BiayaTanah` double NOT NULL,
  `LuasTanah` float NOT NULL,
  `TargetOperasi` varchar(4) NOT NULL,
  `StatusPengerjaan` char(1) NOT NULL COMMENT '1:Persiapan;2:Pelelangan;3;Kontruksi;4:Operasi'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seksi`
--

INSERT INTO `seksi` (`id_seksi`, `id_ruas`, `Seksi`, `Panjang`, `BiayaInvestasi`, `BiayaKonstruksi`, `BiayaTanah`, `LuasTanah`, `TargetOperasi`, `StatusPengerjaan`) VALUES
(5, 1, 'Seksi 1: Sutamaja - Klampok', 14.2, 0, 0, 90630000000, 121.54, '2016', ''),
(6, 1, 'Seksi 2: Sidamulya - Kaligangsa', 6, 0, 0, 95210000000, 59.79, '2016', ''),
(7, 1, 'Seksi 3: Sidokaton  - Langgeng ', 12, 0, 0, 669720000000, 76.86, '2017', ''),
(8, 1, 'Seksi 4: Tegal Timur-Pemalang', 26.9, 0, 0, 532200000000, 174.65, '2017', ''),
(9, 3, 'Seksi 1: Ds. Pemalang - Ds. Pendowo', 20.05, 0, 0, 439540000000, 159.43, '2017', ''),
(10, 3, 'Seksi 2:  SS Pekalongan - SS. Batang', 19.6, 0, 0, 1028550000000, 161.24, '2017', ''),
(11, 5, 'Seksi 1: SS Batang - SS Batang Timur', 3.5, 0, 0, 39080000000, 31.71, '2017', ''),
(12, 5, 'Seksi 2: SS Batang Timur - SS Weleri', 36.05, 0, 0, 1104010000000, 283.52, '2017', ''),
(13, 5, 'Seksi 3: SS Weleri - SS Kendal', 15.85, 0, 0, 1003130000000, 135.44, '2018', ''),
(14, 5, 'Seksi 4: SS Kendal - SS Kaliwungu', 12.1, 0, 0, 967440000000, 115.34, '2017', ''),
(15, 5, 'Seksi 5: SS Kaliwungu - SS Krapyak', 13.33, 0, 0, 2763400000000, 108.93, '2017', ''),
(16, 4, 'Seksi I : Tembalang - Ungaran', 10.58, 0, 0, 686460000000, 143.97, '2017', ''),
(17, 4, 'Seksi ll : Ungaran - Bawen', 11.99, 0, 0, 492960000000, 169.59, '2017', ''),
(18, 4, 'Seksi III: Bawen - Salatiga', 17.56, 0, 0, 553080000000, 182.14, '2017', ''),
(19, 4, 'Seksi lV: Salatiga - Boyolali', 27.17, 0, 0, 673780000000, 191.17, '2017', ''),
(20, 4, 'Seksi V: Boyolali - Karanganyar', 5.35, 0, 0, 194380000000, 37.68, '2017', ''),
(22, 8, 'Seksi I: Bandar - Jombang', 14.7, 0, 0, 116970000000, 129.97, '2017', ''),
(23, 8, 'Seksi II: Jombang - Mojokerto Barat', 20.48, 0, 0, 139280000000, 152.56, '2017', ''),
(24, 8, 'Seksi III: Mojokerto Barat - Mojokerto Utara', 4.43, 0, 0, 44010000000, 30.11, '2017', ''),
(25, 8, 'Seksi IV : Kertosono - Bandar', 0.9, 0, 0, 4020000000, 5.49, '2017', ''),
(26, 9, 'Seksi Ia : Sepanjang - SS Waru', 2.3, 0, 0, 283570000000, 36.13, '2017', ''),
(27, 9, 'Seksi Ib : SS Waru - WRR', 6, 0, 0, 568040000000, 59.43, '2017', ''),
(28, 9, 'Seksi II: WRR - SS Driyorejo', 5.07, 0, 0, 218260000000, 42.31, '2017', ''),
(29, 9, 'Seksi III: SS Driyorejo - SS Krian', 6.1, 0, 0, 142320000000, 50.08, '2017', ''),
(30, 9, 'Seksi IV: SS Krian - Mojokerto', 18.5, 0, 0, 202260000000, 124.01, '2017', ''),
(159, 48, 'Seksi I: Ngawi', 44.52, 0, 0, 365810000000, 302.96, '2017', ''),
(158, 47, 'Seksi III: Sragen - Mantingan', 29.9, 0, 0, 580800000000, 205.14, '2017', ''),
(157, 47, 'Seksi II: Karanganyar - Surakarta', 10, 0, 0, 371300000000, 110.69, '2017', ''),
(156, 47, 'Seksi I: Boyolali', 14.15, 0, 0, 891900000000, 131.96, '2017', ''),
(208, 7, 'Seksi 4: Saradan - Kertosono', 37.39, 0, 0, 0, 0, '2018', ''),
(207, 7, 'Seksi 3: IC Caruban - IC Nganjuk', 21.06, 0, 0, 0, 0, '2017', ''),
(206, 7, 'Seksi 2: IC Madiun - IC Caruban', 8.45, 0, 0, 0, 0, '2017', ''),
(205, 7, 'Seksi 1: IC Ngawi - IC Madiun', 20, 0, 0, 0, 0, '2017', ''),
(204, 43, 'Paket : 3.3D', 4.31, 0, 0, 0, 0, '2017', ''),
(203, 43, 'Paket : 3.3C', 1.2, 0, 0, 0, 0, '2017', ''),
(202, 43, 'Paket : 3.3B', 0.8, 0, 0, 0, 0, '2017', ''),
(201, 43, 'Paket : 3.3A', 1, 0, 0, 0, 0, '2017', ''),
(199, 43, 'Paket : 3.1', 3.94, 0, 0, 0, 0, '2017', ''),
(200, 43, 'Peket : 3.2', 6.8, 0, 0, 0, 0, '2017', ''),
(220, 55, 'Seksi III', 85.6, 0, 0, 0, 0, '2018', ''),
(219, 55, 'Seksi II', 55, 0, 0, 0, 0, '2018', ''),
(214, 46, 'Seksi V: Balikpapan - Bandara Sepinggan ', 11.09, 0, 0, 0, 0, '2018', ''),
(216, 39, 'Seksi II: Legok - Tugaraksa Selatan', 10.7, 0, 0, 0, 0, '2017', ''),
(217, 39, 'Seksi III: Tigaraksa Selatan - Balaraja', 10, 0, 0, 0, 0, '2017', ''),
(218, 55, 'Seksi I', 45, 0, 0, 0, 0, '2018', ''),
(60, 11, 'Seksi I: Grati - SS Tongas', 15.4, 0, 0, 495360000000, 130.07, '2017', ''),
(212, 46, 'Seksi III: Muara Jawa - Palaran', 17.5, 0, 0, 0, 0, '2018', ''),
(62, 11, 'Seksi II: SS Tongas - SS Probolinggo Barat', 6.74, 0, 0, 220880000000, 50.68, '2017', ''),
(211, 46, 'Seksi II: Samboja - Muara Jawa', 30.98, 0, 0, 0, 0, '2018', ''),
(64, 18, 'Seksi I: Sidoarjo - Gresik', 10.5, 0, 0, 350050000000, 76.31, '2017', ''),
(66, 18, 'Seksi II: Gresik', 8, 0, 0, 143430000000, 36.27, '2017', ''),
(160, 48, 'Seksi II: Mangetan', 6.55, 0, 0, 83820000000, 44.27, '2017', ''),
(68, 18, 'Seksi III: Gresik', 10.67, 0, 0, 135500000000, 39.82, '2017', ''),
(69, 10, 'Seksi I: Gempol - Rembang', 13.95, 0, 0, 215160000000, 135.68, '2017', ''),
(70, 10, 'Seksi IIa: Rembang - Kota Pasuruan', 6.8, 0, 0, 175000000000, 80.11, '2017', ''),
(71, 10, 'Seksi IIb: Kota Pasuruan', 2.8, 0, 0, 214670000000, 20.35, '2017', ''),
(72, 10, 'Seksi III: Kota Pasuruan - Grati', 10.65, 0, 0, 306970000000, 81.25, '2017', ''),
(73, 17, 'Seksi I: Kab. Pasuruan', 0, 0, 0, 647240000000, 139.13, '2017', ''),
(74, 17, 'Seksi II: Kab. Malang', 0, 0, 0, 1749560000000, 220.25, '2017', ''),
(75, 17, 'Seksi III: Kota Malang', 0, 0, 0, 272700000000, 14.97, '2017', ''),
(76, 14, 'Seksi I: Pasir Koja - Margaasih', 4.25, 0, 0, 487, 51.98, '2017', ''),
(77, 14, 'Seksi II: Margaasih - Kutawaringin', 3.55, 0, 0, 293030000000, 39.53, '2017', ''),
(78, 14, 'Seksi III: Kutawaringin - Soreang', 2.15, 0, 0, 71680000000, 13.74, '2017', ''),
(79, 19, 'Seksi I: Cileunyi - Tanjungsari', 14.7, 0, 0, 1060030000000, 194.36, '2017', ''),
(80, 19, 'Seksi II: Tanjungsari - Sumedang', 19.52, 0, 0, 748900000000, 307.1, '2017', ''),
(88, 19, 'Seksi VI: Ujung Jaya - Kertajati', 3.3, 0, 0, 0, 26.67, '2017', ''),
(87, 19, 'Seksi V: Legok - Ujung Jaya', 17.4, 0, 0, 0, 158.54, '2017', ''),
(86, 19, 'Seksi IV: Cimalaka - Legok', 8.2, 0, 0, 0, 156.1, '2017', ''),
(85, 19, 'Seksi III: Sumedang - Cimalaka', 3.15, 0, 0, 243250000000, 50.24, '2017', ''),
(89, 20, 'Seksi I: Kota Serang', 2.43, 0, 0, 45670000000, 21.18, '2017', ''),
(90, 20, 'Seksi II: Kab. Serang', 16.5, 0, 0, 184760000000, 159.58, '2017', ''),
(91, 20, 'Seksi III: Kab. Lebak', 37.9, 0, 0, 390910000000, 358.74, '2017', ''),
(92, 20, 'Seksi IV: Kab. Pandeglang', 26.85, 0, 0, 114240000000, 245.91, '2017', ''),
(93, 15, 'Seksi Ia: Maumbi - Suwaan', 7, 0, 0, 224930000000, 154.27, '2017', ''),
(94, 15, 'Seksi Ib: Sukur - Tumaluntung', 7, 0, 0, 356890000000, 139.67, '2017', ''),
(95, 15, 'Seksi IIa: Paslaten - Watubomba II', 11.5, 0, 0, 131970000000, 110.08, '2017', ''),
(96, 15, 'Seksi IIb: Watudomba II - Bitung Tengah', 0, 0, 0, 0, 113.33, '2017', ''),
(97, 16, 'Seksi I: Balikpapan - Samboja', 25.07, 0, 0, 37920000000, 182.71, '2017', ''),
(98, 16, 'Seksi II: Samboja - Palaran', 23.26, 0, 0, 12220000000, 204.76, '2017', ''),
(99, 16, 'Seksi III: Samboja - Palaran II', 21.9, 0, 0, 37090000000, 203.62, '2017', ''),
(100, 16, 'Seksi IV: Palaran - Mahkota II', 18.25, 0, 0, 99310000000, 98.08, '2017', ''),
(101, 16, 'Seksi V: Sepinggang - Balikpapan', 11.5, 0, 0, 111200000000, 102.65, '2017', ''),
(102, 22, 'Seksi I: SS Cimanggis - SS Raya Bogor', 3.55, 0, 0, 547940000000, 35.04, '2017', ''),
(103, 22, 'Seksi II: Raya Bogor - Raya Kukusan', 6.4, 0, 0, 1346440000000, 55.17, '2017', ''),
(104, 22, 'Seksi III: Raya Kukusan - Awal Proyek', 5.55, 0, 0, 1034450000000, 46.16, '2017', ''),
(105, 28, 'Seksi I: Serpong IC - Pamulang IC', 7, 0, 0, 1936680000000, 514.55, '2017', ''),
(106, 28, 'Seksi II: Pamulang IC - Cinere IC', 3.14, 0, 0, 843540000000, 16.73, '2017', ''),
(107, 25, 'Seksi I: Sentul Selatan - Kedung Halang', 4, 0, 0, 127440000000, 30.44, '2017', ''),
(108, 25, 'Seksi IIa: Kedung halang - Kedung Badak', 1.95, 0, 0, 55810000000, 0.83, '2017', ''),
(109, 25, 'Seksi IIb: Kedung Badak - Simpang Yasmin', 2.63, 0, 0, 1043290000000, 4.11, '2017', ''),
(110, 25, 'Seksi III: Simpang Yasmin - Salabenda', 5.3, 0, 0, 0, 0, '2017', ''),
(111, 13, 'Seksi I: Ciawi - Cigombong', 14.6, 0, 0, 1833340000000, 163.7, '2017', ''),
(112, 13, 'Seksi II: Cigombong - Cibadak', 11.9, 0, 0, 996800000000, 156.18, '2017', ''),
(113, 13, 'Seksi III: Cibadak - Sukabumi Barat', 13.7, 0, 0, 993300000000, 141.89, '2017', ''),
(114, 13, 'Seksi IV: Sukabumi Barat - Sukabumi Timur', 13.2, 0, 0, 1264000000000, 126.36, '2017', ''),
(118, 21, 'Seksi II: Kayuringin Jaya - Karang Satria', 11.04, 0, 0, 1579030000000, 22.29, '2017', ''),
(117, 21, 'Seksi I: Cipinang - Jakasampurna', 11, 0, 0, 1466140000000, 81.58, '2017', ''),
(119, 24, 'Seksi I: SS Cimanggis - SS Narogong', 11.98, 0, 0, 3183760000000, 103.46, '2017', ''),
(120, 24, 'Seksi II: SS Narogong - SS Cibitung', 14.3, 0, 0, 1862600000000, 151.74, '2017', ''),
(121, 26, 'Seksi I: Kunciran jaya - Cipete', 6.46, 0, 0, 1024040000000, 28.53, '2017', ''),
(122, 26, 'Seksi II: Poris Plawad - Tanah Tinggi', 6.57, 0, 0, 938960000000, 27.43, '2017', ''),
(123, 26, 'Seksi III: Batusari - Panjang', 11.39, 0, 0, 2625410000000, 53.53, '2017', ''),
(124, 26, 'Seksi IV: Juru Mudi - Benda', 7.21, 0, 0, 855520000000, 14.46, '2017', ''),
(125, 23, 'Seksi I: Antasari - Brigif', 8.02, 0, 0, 2851510000000, 21.65, '2017', ''),
(126, 23, 'Seksi II: Brigif - Sawangan', 6.48, 0, 0, 2134810000000, 106.92, '2017', ''),
(127, 23, 'Seksi III: Sawangan - Bojong Gede', 8.7, 0, 0, 1998720000000, 23.81, '2017', ''),
(128, 29, 'Seksi I: Bakauheni - Terbanggi Besar I', 38, 0, 0, 845610000000, 493.83, '2017', ''),
(129, 29, 'Seksi II: Bakauheni - Terbanggi Besar Ib', 43.9, 0, 0, 1591760000000, 603.03, '2017', ''),
(130, 29, 'Seksi III: Bakauheni - Terbanggi Besar Ia', 24.7, 0, 0, 1188840000000, 351.95, '2017', ''),
(131, 29, 'Seksi IV: Bakauheni - Terbanggi Besar II', 35.71, 0, 0, 655890000000, 499.79, '2017', ''),
(192, 6, 'Seksi Ia: Colomadu - Karanganyar', 0.9, 0, 0, 0, 0, '2017', ''),
(133, 31, 'Seksi I: Palembang - Pemulutan', 7, 0, 0, 37210000000, 77.74, '2017', ''),
(134, 31, 'Seksi II: Pemulutan - KTM', 9.24, 0, 0, 52660000000, 84.07, '2017', ''),
(135, 31, 'Seksi III: KTM Rambutan - Indralaya', 9.3, 0, 0, 43720000000, 58.42, '2017', ''),
(136, 32, 'Seksi I: Outering Road - IC Manis', 9.2, 0, 0, 40590000000, 106.81, '2017', ''),
(137, 32, 'Seksi II: IC Manis - IC Kandis Selatan', 24, 0, 0, 43, 257.88, '2017', ''),
(138, 32, 'Seksi III: IC Kandis Selatan - IC Kandis Utara', 22.55, 0, 0, 29350000000, 189.1, '2017', ''),
(139, 32, 'Seksi IV: IC Kandis Utara - IC Duri Selatan', 23.95, 0, 0, 43650000000, 183.19, '2017', ''),
(140, 32, 'Seksi V: IC Duri Selatan - IC Duri Utara', 27.23, 0, 0, 29110000000, 196.95, '2017', ''),
(141, 32, 'Seksi VI: Juntion - Dumai', 25.33, 0, 0, 63250000000, 158.81, '2017', ''),
(142, 33, 'Seksi I: Bangun Sari - IC Paluh Kemiri', 16.02, 0, 0, 0, 113.85, '2017', ''),
(143, 33, 'Seksi II: IC Paluh Kemiri - JC Kualanamu', 4.5, 0, 0, 0, 30.98, '2017', ''),
(144, 33, 'Seksi III: JC L. Pakam - IC L. Pakam Julinsum', 7.1, 0, 0, 0, 42.04, '2017', ''),
(145, 33, 'Seksi IV: IC L. Pakam - Sungai Ular - IC Perbaunga', 14.95, 0, 0, 0, 97.02, '2017', ''),
(146, 33, 'Seksi V: IC Teluk Mengkudu - IC Sei Rampah', 11.84, 0, 0, 0, 83.44, '2017', ''),
(147, 33, 'Seksi VI: IC Perbaungan - IC Teluk Mengkudu', 8.83, 0, 0, 0, 56.69, '2017', ''),
(148, 33, 'Seksi VII: IC Sei Rampah - Jalinsum Tebing Tinggi', 9.19, 0, 0, 0, 53.66, '2017', ''),
(149, 34, 'Seksi I: Tanjung Mulia - Helvetia', 6.07, 0, 0, 0, 46.66, '2017', ''),
(150, 34, 'Seksi II: Helvetia - Sei Semayang', 9.05, 0, 0, 0, 45.94, '2017', ''),
(151, 34, 'Seksi III: Sei Semayang - Binjai', 10.32, 0, 0, 0, 61.01, '2017', ''),
(213, 46, 'Seksi IV: Palaran - Samarinda', 17.95, 0, 0, 0, 0, '2018', ''),
(209, 11, 'Seksi III: Probolinggo Barat - Probolinggo Timur', 12.31, 0, 0, 634790000000000, 90.46, '2017', ''),
(210, 46, 'Seksi I: Balikpapan - Samboja', 22.03, 0, 0, 0, 0, '2018', ''),
(215, 39, 'Seksi I: BSD - Legok', 9.3, 0, 0, 0, 0, '2017', ''),
(161, 48, 'Seksi III: Madiun', 36.79, 0, 0, 399170000000, 258.39, '2017', ''),
(162, 48, 'Seksi IV: Nganjuk', 34.4, 0, 0, 555850000000, 259.45, '2017', ''),
(163, 48, 'Seksi V: Jombang', 2.05, 0, 0, 21880000000, 14.41, '2017', ''),
(164, 49, 'Seksi I: Kota Semarang', 3.05, 0, 0, 347220000000, 24, '2017', ''),
(165, 49, 'Seksi II: Kab. Demak', 20.95, 0, 0, 615160000000, 165, '2017', ''),
(166, 50, 'Seksi I: Raya Bekasi', 2.1, 0, 0, 136190000000, 1.8, '2017', ''),
(167, 50, 'Seksi II: MOI - Pegangsaan Dua', 5.4, 0, 0, 805200000000, 4.12, '2017', ''),
(168, 50, 'Seksi III: MOI Sunter Jaya', 1.94, 0, 0, 434110000000, 0.11, '2017', ''),
(169, 51, 'Seksi I: SS Cibitung - SS Telaga Asih', 3.7, 0, 0, 913470000000, 34.86, '2017', ''),
(170, 51, 'Seksi II: SS Telaga Asih - SS Tambun Utara', 12.48, 0, 0, 829740000000, 92.04, '2017', ''),
(171, 51, 'Seksi III: Tambun Utara - Taruma Jaya', 13.98, 0, 0, 774290000000, 101.31, '2017', ''),
(172, 51, 'Seksi IV: Taruma Jaya - Cilincing', 4.57, 0, 0, 1660900000000, 32.74, '2017', ''),
(173, 52, 'Seksi I: Kunciran - Parigi Baru', 1.7, 0, 0, 531990000000, 15.47, '2017', ''),
(174, 52, 'Seksi II: Parigi Baru - Rawa Mekar Jaya', 9.5, 0, 0, 3669430000000, 97, '2017', ''),
(175, 53, 'Seksi I: Antasari - Brigif', 8.02, 0, 0, 285151, 21.65, '2017', ''),
(176, 53, 'Seksi III: Brigif - Sawangan', 6.48, 0, 0, 2134810000000, 106.92, '2017', ''),
(177, 53, 'Seksi III: Sawangan - Bojong Gede', 8.7, 0, 0, 1988720000000, 23.81, '2017', ''),
(178, 54, 'Seksi I: IC Binjai - IC Stabat', 0, 0, 0, 179000000000, 94.55, '2017', ''),
(179, 54, 'Seksi II: IC Stabat - IC Tanjung Pura', 0, 0, 0, 183800000000, 146.66, '2017', ''),
(180, 54, 'Seksi III: IC Tanjung Pura - IC Rangkalan Brandan', 0, 0, 0, 113180000000, 106950000000, '2017', ''),
(181, 54, 'Seksi IV: IC Pangkalan Brandan - IC Kuala Simpang', 0, 0, 0, 500460000000, 458.16, '2017', ''),
(182, 54, 'Seksi V: IC Kuala Simpang - IC Langsa', 0, 0, 0, 348810000000, 269, '2017', ''),
(183, 35, 'Seksi 1 : Pematang Panggang - Kayu Agung I', 46.9, 0, 0, 126030000000, 553.12, '2017', ''),
(184, 35, 'Seksi II : Pematang Batang - Kayu Agung II', 31.5, 0, 0, 247, 373.56, '2017', ''),
(185, 30, 'Seksi I: Kayu Agung - Jakabaring', 33.5, 0, 0, 2375500000000, 271.41, '2017', ''),
(186, 30, 'Seksi II: Jakabaring - Palembang', 33.9, 0, 0, 2370230000000, 230.01, '2017', ''),
(188, 30, 'Seksi III : Palembang - Betung', 44.29, 0, 0, 993300000000, 120.57, '2017', ''),
(194, 6, 'Seksi II: Kertosono MYC', 0.9, 0, 0, 0, 0, '2017', ''),
(193, 6, 'Seksi Ib: Colomadu - Karanganyar', 1.47, 0, 0, 0, 0, '2017', ''),
(195, 6, 'Seksi III: Colomadu - Karanganyar', 17.78, 0, 0, 0, 0, '2017', ''),
(196, 6, 'Seksi 3 (Paket !): Solo - Mantingan', 35.15, 0, 0, 0, 0, '2017', ''),
(197, 6, 'Seksi 4 (paket 2): Mantingan - Ngawi', 34.2, 0, 0, 0, 0, '2017', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kontraktor`
--

CREATE TABLE `sub_kontraktor` (
  `id_subkon` int(11) NOT NULL,
  `id_ruas` int(11) NOT NULL,
  `id_seksi` int(5) NOT NULL,
  `id_kontraktor` int(11) NOT NULL,
  `NamaSubKontraktor` varchar(30) DEFAULT NULL,
  `Pekerjaan` varchar(50) DEFAULT NULL,
  `JumlahPekerja` mediumint(5) DEFAULT NULL,
  `Seksi` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_kontraktor`
--

INSERT INTO `sub_kontraktor` (`id_subkon`, `id_ruas`, `id_seksi`, `id_kontraktor`, `NamaSubKontraktor`, `Pekerjaan`, `JumlahPekerja`, `Seksi`) VALUES
(7, 0, 5, 7, 'PT. Duta CIpta', 'Urugan Tanah', 10, ''),
(8, 0, 5, 7, 'PT. Box CU', 'Box Culvert', 12, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindaklanjutissue`
--

CREATE TABLE `tindaklanjutissue` (
  `id_tindaklanjut` int(11) NOT NULL,
  `id_issue` int(11) NOT NULL,
  `Tindakan` text NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tindaklanjutissue`
--

INSERT INTO `tindaklanjutissue` (`id_tindaklanjut`, `id_issue`, `Tindakan`, `Tanggal`) VALUES
(1, 1, 'testing', '2017-05-29'),
(2, 2, 'coba lgi ke dua ya', '2017-05-29'),
(3, 3, 'ert', '2017-07-07'),
(4, 4, '34', '2017-07-07'),
(5, 5, '45', '2017-07-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_ruas` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `chache` varchar(50) NOT NULL,
  `status_akun` char(1) NOT NULL COMMENT '1:aktif:0:Block',
  `status_user` char(1) NOT NULL COMMENT '1:admin pusat;2:admin ruas;3:user',
  `Photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `id_ruas`, `username`, `password`, `email`, `chache`, `status_akun`, `status_user`, `Photo`) VALUES
(1, 0, 'admpusat', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'pusat@gmail.com', '', '1', '1', ''),
(2, 0, 'pusat', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'pusat@gmail.com', '', '1', '3', ''),
(3, 1, 'pejagan', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(4, 3, 'pemalang', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(5, 4, 'semarang', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(6, 5, 'batang', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(7, 6, 'solongawi', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(8, 7, 'ngawi', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(9, 8, 'kertosono', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(10, 9, 'surabaya', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(11, 10, 'gempol', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(12, 11, 'pasuruan', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(13, 12, 'probolinggo', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(14, 13, 'ciawi', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(15, 14, 'soreang', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(16, 15, 'manado', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(17, 16, 'balikapan', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(18, 17, 'pandaan', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(19, 18, 'krian', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(20, 19, 'ciulenyi', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(21, 20, 'serang', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(22, 21, 'bekasi', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(23, 22, 'cinere', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(24, 23, 'depok', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(25, 24, 'cimanggis', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(26, 25, 'bogor', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(27, 26, 'cengkareng', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(28, 27, 'jakarta', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(29, 28, 'cinere', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(30, 29, 'bakauheni', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(31, 30, 'kayuagung', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(32, 31, 'palembang', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(33, 32, 'pekanbaru', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(34, 33, 'medan', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(35, 34, 'medanbinjai', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(36, 35, 'pematangpanggang', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(37, 36, 'kualatanjung', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(38, 37, 'medanbandaaceh', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(39, 39, 'serpong', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(40, 55, 'terbanggibesar', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(41, 41, 'padang', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(42, 42, 'palembang', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(43, 43, 'semarangsalatiga', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(44, 46, 'balikpapansamarinda', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(45, 45, 'semarangkartasura', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(46, 47, 'solomantingan', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(47, 48, 'mantingan', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(48, 49, 'semarang ', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(49, 50, 'sunter', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(50, 51, 'cibitung', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(51, 52, 'kunciran', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', ''),
(52, 54, 'binjai', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'test@gmail.com', '', '1', '2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgetkontruksi`
--
ALTER TABLE `budgetkontruksi`
  ADD PRIMARY KEY (`id_budget`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `budgettanah`
--
ALTER TABLE `budgettanah`
  ADD PRIMARY KEY (`id_budget`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `danatalangan`
--
ALTER TABLE `danatalangan`
  ADD PRIMARY KEY (`id_danatalangan`),
  ADD KEY `id_ruas` (`id_ruas`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `history_penggunaanalat`
--
ALTER TABLE `history_penggunaanalat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id_issue`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `kontraktor`
--
ALTER TABLE `kontraktor`
  ADD PRIMARY KEY (`id_kontraktor`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `mastermaterial`
--
ALTER TABLE `mastermaterial`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `masterperalatan`
--
ALTER TABLE `masterperalatan`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`id_pekerja`);

--
-- Indexes for table `pemegangsaham`
--
ALTER TABLE `pemegangsaham`
  ADD PRIMARY KEY (`id_saham`),
  ADD KEY `id_ruas` (`id_ruas`);

--
-- Indexes for table `penagihankelman`
--
ALTER TABLE `penagihankelman`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `pengembaliandrlman`
--
ALTER TABLE `pengembaliandrlman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tagihan` (`id_tagihan`);

--
-- Indexes for table `penggunaanalat`
--
ALTER TABLE `penggunaanalat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `penggunaanmaterial`
--
ALTER TABLE `penggunaanmaterial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `penggunaansdm`
--
ALTER TABLE `penggunaansdm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progreskontruksi`
--
ALTER TABLE `progreskontruksi`
  ADD PRIMARY KEY (`id_kontruksi`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `progrestanah`
--
ALTER TABLE `progrestanah`
  ADD PRIMARY KEY (`id_tanah`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indexes for table `ruas`
--
ALTER TABLE `ruas`
  ADD PRIMARY KEY (`id_ruas`),
  ADD KEY `id_region` (`id_region`);

--
-- Indexes for table `seksi`
--
ALTER TABLE `seksi`
  ADD PRIMARY KEY (`id_seksi`),
  ADD KEY `id_ruas` (`id_ruas`);

--
-- Indexes for table `sub_kontraktor`
--
ALTER TABLE `sub_kontraktor`
  ADD PRIMARY KEY (`id_subkon`),
  ADD KEY `id_kontraktor` (`id_kontraktor`);

--
-- Indexes for table `tindaklanjutissue`
--
ALTER TABLE `tindaklanjutissue`
  ADD PRIMARY KEY (`id_tindaklanjut`),
  ADD KEY `id_issue` (`id_issue`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budgetkontruksi`
--
ALTER TABLE `budgetkontruksi`
  MODIFY `id_budget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `budgettanah`
--
ALTER TABLE `budgettanah`
  MODIFY `id_budget` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `danatalangan`
--
ALTER TABLE `danatalangan`
  MODIFY `id_danatalangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_penggunaanalat`
--
ALTER TABLE `history_penggunaanalat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id_issue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kontraktor`
--
ALTER TABLE `kontraktor`
  MODIFY `id_kontraktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT for table `mastermaterial`
--
ALTER TABLE `mastermaterial`
  MODIFY `id_material` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `masterperalatan`
--
ALTER TABLE `masterperalatan`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pekerja`
--
ALTER TABLE `pekerja`
  MODIFY `id_pekerja` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemegangsaham`
--
ALTER TABLE `pemegangsaham`
  MODIFY `id_saham` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `penagihankelman`
--
ALTER TABLE `penagihankelman`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `pengembaliandrlman`
--
ALTER TABLE `pengembaliandrlman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penggunaanalat`
--
ALTER TABLE `penggunaanalat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `penggunaanmaterial`
--
ALTER TABLE `penggunaanmaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `penggunaansdm`
--
ALTER TABLE `penggunaansdm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `progreskontruksi`
--
ALTER TABLE `progreskontruksi`
  MODIFY `id_kontruksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `progrestanah`
--
ALTER TABLE `progrestanah`
  MODIFY `id_tanah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ruas`
--
ALTER TABLE `ruas`
  MODIFY `id_ruas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `seksi`
--
ALTER TABLE `seksi`
  MODIFY `id_seksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;
--
-- AUTO_INCREMENT for table `sub_kontraktor`
--
ALTER TABLE `sub_kontraktor`
  MODIFY `id_subkon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tindaklanjutissue`
--
ALTER TABLE `tindaklanjutissue`
  MODIFY `id_tindaklanjut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
