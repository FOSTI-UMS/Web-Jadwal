-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Mar 2020 pada 20.37
-- Versi server: 10.2.30-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5782209_jadwal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'Aezo27', 'ShootMyHead'),
(2, 'keor', '4dM1!nGil3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0',
  `divisi` varchar(100) DEFAULT NULL,
  `senin` varchar(100) DEFAULT NULL,
  `selasa` varchar(100) DEFAULT NULL,
  `rabu` varchar(100) DEFAULT NULL,
  `kamis` varchar(100) DEFAULT NULL,
  `jumat` varchar(100) DEFAULT NULL,
  `sabtu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`nim`, `nama`, `password`, `status`, `divisi`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`) VALUES
('A710190015', 'Arif Rahman Darmawan', 'LDKI2', '0', 'Keilmuan dan Riset Teknologi', NULL, NULL, NULL, NULL, NULL, NULL),
('A710190075', 'Benny Nur Farezi', 'RTRY2', '0', 'Hubungan Publik', NULL, NULL, NULL, NULL, NULL, NULL),
('A710190108', 'Dian Ashar Ma’ruf', 'VOAY3', '1', 'Keorganisasian', '', '3, 4, 5, 6', '1, 2, 3, 4, 5, 6, 7, 8', '7, 8, 9', '7, 8, 9, 10', ''),
('E100180147', 'Khansa Ihsan mahardika', 'GEHM9', '1', 'Web dan Jaringan', '1, 2, 9, 10', '3, 4, 7, 8', '1, 2, 5, 6, 7, 8, 9, 10', '5, 6, 7, 8', '3, 4, 6, 7, 11', ''),
('L100180123', 'Sheila Rahmah El Wahda Razzaq', 'MLTO8', '0', 'Hubungan Publik', NULL, NULL, NULL, NULL, NULL, NULL),
('L200170019', 'Afrizal Meka Mulyana', 'FYJC9', '0', 'Keilmuan dan Ristek Teknologi', NULL, NULL, NULL, NULL, NULL, NULL),
('L200170022', 'Happy Tri Miliarta', 'KFNF6', '0', 'Web dan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL),
('L200170044', 'Rima Dwi Novika', 'GXES8', '1', 'Keorganisasian', '', '7, 8, 9, 10, 11, 12', '1, 2, 3, 4, 5, 6, 7, 8, 9', '1, 2, 3, 4, 5, 6', '', ''),
('L200170092', 'Rossanti Kusumadewi', 'WZMK0', '1', 'Keorganisasian', '4, 5, 6, 7, 8, 9', '4, 5, 6, 7, 8, 9', '7, 8, 9', '10, 11, 12', '7, 8, 9', ''),
('L200170114', 'Nafiah Nurrahmah', 'ADWK7', '0', 'Web dan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL),
('L200170183', 'Ahmad Faizal Al Amin', 'PLIY8', '0', 'Web dan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL),
('L200170184', 'Mochammad Itmamul Wafa', 'GHLO3', '0', 'Web dan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180011', 'Faizal Wahyu Nuramdhan', 'XJGK8', '1', 'Keilmuan dan Riset Teknologi', '1, 2, 3, 4', '7, 8', '1, 2, 3, 7, 8, 9', '1, 2, 5, 6, 7, 8, 9', '3, 4, 11, 12', ''),
('L200180014', 'Andika Wirapala Fathin Azfar', 'LQYA4', '0', 'Keilmuan dan Riset Teknologi', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180022', 'Mochammad Afrizal', 'WSYC8', '0', 'Keorganisasian', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180025', 'Yusrina Khairin Rusydina', 'EYUM8', '0', 'Web dan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180053', 'Suryo pramuda wicaksono', 'EKWV7', '0', 'Hubungan Publik', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180061', 'MuchFatan Rahmadan', 'URUI5', '0', 'Keilmuan dan Riset Teknologi', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180064', 'Dzaki Fadhlurrohman', 'XFWY2', '1', 'Web dan Jaringan', '5, 6, 7, 8', '1, 2, 3, 5, 6, 9, 10', '10, 11, 12', '4, 5, 6', '5, 6, 7, 8, 9, 10, 11, 12', ''),
('L200180065', 'Wahyu Setyaji Rama Dwijaya', 'AEZO27', '1', 'Web dan Jaringan', '5, 6, 7', '1, 2, 3, 5, 6, 9, 10', '7, 8, 9', '4, 5, 6', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12'),
('L200180079', 'Rahmat Beny Susanto', 'UIYT4', '1', 'Web dan Jaringan', '5, 6, 7, 8', '1, 2, 3, 5, 6, 9, 10', '7, 8, 9', '4, 5, 6', '', '5, 6, 7, 8, 9, 10, 11, 12'),
('L200180080', 'Afiq Tri Nugraha', 'ZXSZ6', '1', 'Keilmuan dan Riset Teknologi', '5, 6, 7, 8', '1, 2, 3, 5, 6, 9, 10', '7, 8, 9', '4, 5, 6', '5, 6, 7, 8, 9, 10, 11, 12', ''),
('L200180082', 'Alif Al Amin', 'EAMU3', '1', 'Keorganisasian', '3, 4, 5, 6, 7, 8', '1, 2, 3, 5, 6', '5, 6, 10, 11, 12', '4, 5, 6', '5, 6, 7, 8, 9, 10', ''),
('L200180086', 'Huan Wendy Ariono', 'KUVU7', '0', 'Hubungan Publik', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180087', 'Reylian Prealdream Anareka', 'XCBL5', '0', 'Ketua Umum', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180099', 'Nadya Ayu Widya', 'RHRK1', '1', 'Sekretaris Umum', '3, 4, 5, 6, 7, 8', '1, 2, 3, 5, 6, 9, 10', '5, 6, 10, 11, 12', '4, 5, 6, 10, 11', '5, 6', ''),
('L200180100', 'Rayhan Nurfalah Lukman', 'MYBW1', '1', 'Hubungan Publik', '3, 4, 5, 6, 7, 8', '1, 2, 3, 5, 6, 9, 10', '5, 6, 10, 11, 12', '4, 5, 6, 10, 11', '5, 6', ''),
('L200180101', 'Rohmad Khoirudin', 'EDSH3', '1', 'Wakil Ketua Umum', '5, 6, 7, 8, 11, 12', '1, 2, 3, 4, 5, 6, 9, 10', '5, 6, 10, 11, 12', '4, 5, 6, 10, 11, 12', '1, 2, 3, 4, 5, 6', ''),
('L200180107', 'Berlian Vidia Puspa', 'KGVM3', '1', 'Hubungan Publik', '11, 12', '1, 2, 3, 5, 6, 9, 10', '5, 6, 7, 8, 9', '4, 5, 6, 10, 11', '1, 2, 3, 4, 5, 6', ''),
('L200180112', 'Muhammad Dharul Khadafie', 'SURY3', '0', 'Hubungan Publik', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180114', 'Arga Dwi Ardinata', 'JETW9', '0', 'Keilmuan dan Riset Teknologi', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180116', 'Brian Aditya Hermansyah', 'OKEI7', '0', 'Keilmuan dan Riset Teknologi', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180118', 'Fandhitya Giovani', 'EEPF6', '1', 'Keorganisasian', '', '1, 2, 3, 4, 5, 6, 7, 8, 9', '5, 6, 11, 12', '4, 5, 6, 7, 8, 10, 11', '1, 2, 3, 4, 5, 6', ''),
('L200180120', 'Maulana Alhif Ikhsan', 'BVZM1', '1', 'Web dan Jaringan', '7, 8, 9', '4, 5, 6, 7, 8', '5, 6, 11, 12', '4, 5, 6, 7, 8, 10, 11', '1, 2, 3, 4, 5, 6', ''),
('L200180123', 'Pasha Bhimasty', 'GRUS4', '0', 'Web dan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180138', 'Karina Muslimah', 'LYMJ2', '0', 'Web dan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180142', 'Naufal Randi Aldiansyah', 'GTEF9', '0', 'Keilmuan dan Ristek Teknologi', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180146', 'Putri Siwi Utami', 'EQYG5', '1', 'Web dan Jaringan', '7, 8, 9', '4, 5, 6, 7, 8', '3, 4, 7, 8', '4, 5, 6, 10, 11', '1, 2, 3, 4, 7, 8, 9, 10', ''),
('L200180150', 'Yudha Gana Prasetyo Wibowo', 'ZOEU2', '0', 'Hubungan Publik', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180151', 'Arya Mukti A\'raafi Zha Putra', 'GQRX4', '1', 'Keilmuan dan Riset Teknologi', '7, 8, 9', '4, 5, 6, 7, 8', '3, 4, 7, 8', '7, 8, 9, 10, 11', '1, 2, 3, 4, 7, 8, 9, 10', ''),
('L200180175', 'Afrialdy Asyura Buana', 'GRZD7', '1', 'Keorganisasian', '7, 8, 9', '4, 5, 6, 7, 8', '3, 4, 5, 6, 10, 11', '3, 4, 7, 8, 9', '7, 8, 9, 10, 11, 12', ''),
('L200180181', 'Muhammad Azka Nur Lutfi', 'TUCA2', '1', 'Keorganisasian', '7, 8, 9', '4, 5, 6', '1, 2, 5, 6, 10, 11', '3, 4, 7, 8, 9', '7, 8, 9, 10, 11, 12', ''),
('L200180183', 'Fakhar Swastika Al Baihaqi', 'QXEK2', '1', 'Web dan Jaringan', '1, 2, 3', '1, 2, 3, 7, 8', '1, 2, 5, 6, 10, 11', '3, 4, 7, 8, 9', '7, 8, 9, 10, 11, 12', ''),
('L200180187', 'Aviza ayuni wulan', 'HRNF5', '1', 'Keorganisasian', '1, 2, 3', '1, 2, 3, 7, 8', '1, 2, 5, 6, 10, 11', '3, 4, 7, 8, 9', '7, 8, 9, 10, 11, 12', ''),
('L200180192', 'Riska Meilina Puspa', 'OYMG4', '1', 'Keorganisasian', '1, 2, 3', '1, 2, 3, 7, 8', '1, 2, 5, 6, 10, 11', '3, 4, 7, 8, 9', '7, 8, 9, 10, 11, 12', ''),
('L200180193', 'Amartya Bintang Wijat Ranti', 'VNZI4', '1', 'Web dan Jaringan', '1, 2, 3', '1, 2, 3, 7, 8', '1, 2, 5, 6, 10, 11', '3, 4, 7, 8, 9', '7, 8, 9, 10, 11, 12', ''),
('L200180199', 'Ridho Malandi', 'TAWT0', '1', 'Keorganisasian', '1, 2, 3', '1, 2, 3, 7, 8', '1, 2, 5, 6, 10, 11', '3, 4, 7, 8, 9', '7, 8, 9, 10, 11, 12', ''),
('L200180205', 'Danang Ady Saputro Widodo', 'VTLT0', '1', 'Hubungan Publik', '1, 2, 3', '1, 2, 3, 5, 6, 7, 8', '1, 2, 3, 4, 10, 11', '7, 8, 9', '7, 8, 9, 10, 11, 12', ''),
('L200180207', 'Naura Fikamelyalla', 'NMPY4', '0', 'Hubungan Publik', NULL, NULL, NULL, NULL, NULL, NULL),
('L200180210', 'Cecylia Ivanka Hermanita', 'JUJG6', '1', 'Hubungan Publik', '1, 2, 3', '1, 2, 3, 5, 6, 7, 8', '1, 2, 3, 4, 10, 11', '7, 8, 9', '7, 8, 9, 10, 11, 12', ''),
('L200183070', 'Aulia Septianingrum Revyana Nurcahyani', 'RMZW4', '1', 'Keorganisasian', '1, 2, 3, 4, 5, 6, 7', '3, 4, 7, 8, 9', '1, 2, 3, 4, 5, 6, 9, 10', '1, 2', '11, 12', '1, 2, 3, 4, 5, 6, 7, 8, 9'),
('L200183143', 'Fawwaz Haidar Abyansyah Kusuma', 'YCZK2', '0', 'Hubungan Publik', NULL, NULL, NULL, NULL, NULL, NULL),
('L200183161', 'Donny Rizal Adhi Pratama', 'PMNG1', '0', 'Web dan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL),
('L200183203', 'Ainayah syifa hendri', 'CRWV6', '0', 'Keilmuan dan Riset Teknologi', NULL, NULL, NULL, NULL, NULL, NULL),
('L200184033', 'Kemas Muhamad Kevin', 'GGLN7', '0', 'Hubungan Publik', NULL, NULL, NULL, NULL, NULL, NULL),
('L200184040', 'Aqshal Fatwa Ibrahim', 'QOEL0', '0', 'Keilmuan dan Riset Teknologi', NULL, NULL, NULL, NULL, NULL, NULL),
('L200184137', 'Nadhifah Chairunnisa', 'YULR8', '1', 'Keorganisasian', '1, 2, 3, 4, 5, 6', '1, 2, 3, 4, 5, 6, 7, 8, 9', '1, 2, 3, 4, 5, 6, 9, 10', '1, 2', '', ''),
('L200184165', 'Muhammad Irfan', 'OKDT7', '0', 'Web dan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL),
('L200184172', 'Hafshah Fitri Afifah', 'WGTY9', '1', 'Bendahara Umum', '1, 2, 3, 4, 5, 6', '1, 2, 3, 4, 7, 8, 9', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10', '1, 2', '11, 12', '1, 2, 3, 4, 5, 6, 7, 8'),
('L200190002', 'Alfian Nur fathoni', 'UQEQ8', '1', 'Web dan Jaringan', '10, 11, 12', '1, 2', '3, 4, 5, 6', '4, 5, 6, 7, 8, 9', '1, 2, 3', ''),
('L200190031', 'Daffa Putra Alwansyah', 'CHKQ8', '1', 'Hubungan Publik', '10, 11, 12', '1, 2', '4, 5, 6, 7, 8', '4, 5, 6, 7, 8, 9', '1, 2, 3', ''),
('L200190033', 'Mutiara Putri Nugraheni', 'YBFZ6', '1', 'Bendahara Umum 2', '10, 11, 12', '1, 2', '4, 5, 6, 7, 8', '4, 5, 6, 7, 8, 9', '1, 2, 3', ''),
('L200190040', 'Candra Pramudya', 'DCWS5', '0', 'Hubungan Publik', NULL, NULL, NULL, NULL, NULL, NULL),
('L200190062', 'Jihan Mustikasari', 'PSCL1', '1', 'Hubungan Publik', '10, 11, 12', '1, 2', '4, 5, 6, 10, 11', '4, 5, 6, 7, 8, 9, 10, 11', '1, 2, 3', ''),
('L200190065', 'Arindra Hning Adhepta', 'IKHD2', '1', 'Keilmuan dan Riset Teknologi', '1, 2, 3, 4, 5, 6, 7, 8, 9', '3, 4', '4, 5, 6', '7, 8, 9', '3, 4', ''),
('L200190071', 'Shofiya Nafisah', 'AGWW8', '1', 'Keilmuan dan Riset Teknologi', '1, 2, 3, 4, 5, 6, 7, 8, 9', '3, 4', '4, 5, 6, 10, 11', '', '1, 2, 3', ''),
('L200190073', 'Puspa Dhewanti', 'IZWH1', '1', 'Keilmuan dan Ristek Teknologi', '1, 2, 3, 4, 5, 6, 7, 8, 9', '3, 4', '4, 5, 6, 10, 11', '7, 8, 9', '', ''),
('L200190076', 'Danis ardani', 'YWSP6', '1', 'Keorganisasian', '1, 2, 3, 4, 5, 6, 7, 8, 9', '3, 4', '4, 5, 6, 10, 11', '7, 8, 9', '', ''),
('L200190078', 'Shandika galih nur amin', 'CKGE0', '1', 'Keorganisasian', '1, 2, 3, 4, 5, 6, 7, 8, 9', '3, 4', '4, 5, 6, 10, 11', '7, 8, 9', '', ''),
('L200190088', 'Nur Rohmat Utamma', 'NRIH5', '1', 'Keilmuan dan Riset Teknologi', '1, 2, 3, 4, 5, 6, 7, 8, 9', '3, 4', '4, 5, 6, 9, 10', '7, 8, 9', '', ''),
('L200190128', 'Muhammad Asharul Ma\'ali', 'MEWS3', '1', 'Hubungan Publik', '1, 2, 3, 4, 5, 6, 7, 8, 9', '3, 4', '4, 5, 6', '7, 8, 9', '9, 10', ''),
('L200190129', 'Aditia riki pratama fani manggala putra', 'LTYT2', '1', 'Web dan Jaringan', '1, 2, 3, 4, 5, 6, 7, 8, 9', '3, 4', '4, 5, 6', '7, 8, 9', '9, 10', ''),
('L200190130', 'Edy Susilo', 'XUYW0', '1', 'Keorganisasian', '1, 2, 3, 4, 5, 6, 7, 8, 9', '3, 4', '4, 5, 6', '7, 8, 9', '9, 10', ''),
('L200190134', 'Adissa Tarra Istanarendra', 'WJUA9', '1', 'Hubungan Publik', '1, 2, 3, 4, 5, 6, 7, 8, 9', '3, 4', '4, 5, 6', '7, 8, 9', '9, 10', ''),
('L200190138', 'Anas Ardiansyah', 'GAVC3', '1', 'Hubungan Publik', '', '', '', '', '3, 4, 5', ''),
('L200190143', 'Senopati Bekti Wicaksono', 'JMVJ2', '1', 'Keorganisasian', '4, 5, 6', '1, 2, 3', '3, 4, 7, 8, 9', '1, 2, 3, 7, 8, 9', '9, 10', ''),
('L200190160', 'Muhamad Zulfan', 'XAIX5', '1', 'Keilmuan dan Riset Teknologi', '4, 5, 6', '1, 2, 3', '3, 4, 7, 8, 9', '1, 2, 3, 10, 11, 12', '7, 8', ''),
('L200190179', 'Ilyas Muhlisin', 'IRJC1', '1', 'Web dan Jaringan', '4, 5, 6', '1, 2, 3', '3, 4, 7, 8, 9', '1, 2, 3, 10, 11, 12', '7, 8', ''),
('L200190192', 'Ahmad Zamzami', 'VRVY7', '1', 'Keorganisasian', '4, 5, 6', '1, 2, 3', '3, 4, 7, 8, 9', '1, 2, 3, 10, 11, 12', '7, 8', ''),
('L200190198', 'Afifah Ghaisani Imana', 'YIKI5', '1', 'Web dan Jaringan', '4, 5, 6', '1, 2, 3', '3, 4, 7, 8, 9', '1, 2, 3, 10, 11, 12', '5, 6', ''),
('L200190199', 'Muhammad Sofiyan Hadi', 'XUXU3', '1', 'Web dan Jaringan', '4, 5, 6', '1, 2, 3', '3, 4, 7, 8, 9', '1, 2, 3, 10, 11, 12', '5, 6', ''),
('L200190211', 'Sherly Maycana Puspita Anwar', 'SFON4', '1', 'Sekretaris Umum 2', '4, 5, 6, 7, 8, 9', '4, 5, 6', '5, 6', '4, 5, 6, 10, 11, 12', '5, 6', ''),
('L200190213', 'Calvin Alvito Dinova', 'CLZK8', '1', 'Keilmuan dan Riset Teknologi', '4, 5, 6, 7, 8, 9', '4, 5, 6', '5, 6', '4, 5, 6, 10, 11, 12', '5, 6', ''),
('L200190215', 'Sekar Tyas Mawarni', 'KZKS2', '1', 'Hubungan Publik', '4, 5, 6, 7, 8, 9', '4, 5, 6', '5, 6', '4, 5, 6', '5, 6', ''),
('L200190217', 'Surya sumirat', 'YOCJ5', '1', 'Keilmuan dan Riset Teknologi', '4, 5, 6, 7, 8, 9', '4, 5, 6', '1, 2, 3, 5, 6', '4, 5, 6', '5, 6', ''),
('L200190223', 'Siti Setyaningsih', 'WJOS5', '1', 'Keorganisasian', '4, 5, 6, 7, 8, 9', '4, 5, 6', '1, 2, 3, 5, 6', '4, 5, 6, 7', '5, 6', '1, 2, 3'),
('L200190227', 'Asyam Daffa\' Tsaqif', 'DADO9', '1', 'Keilmuan dan Riset Teknologi', '4, 5, 6, 7, 8, 9', '4, 5, 6', '1, 2, 3, 5, 6', '4, 5, 6', '5, 6', ''),
('L200190237', 'Zaimatul Ummah', 'CBIX1', '1', 'Web dan Jaringan', '4, 5, 6, 7, 8, 9', '4, 5, 6', '1, 2, 3, 5, 6', '4, 5, 6', '5, 6', ''),
('L200190240', 'Mutiara Aisya Harfi Putri', 'IELV2', '1', 'Keorganisasian', '4, 5, 6, 7, 8, 9', '4, 5, 6', '1, 2, 3, 5, 6', '4, 5, 6', '5, 6', ''),
('L200190254', 'Nila Dwi Rahmawati', 'OPXC8', '1', 'Web dan Jaringan', '4, 5, 6, 7, 8, 9', '4, 5, 6', '1, 2, 3, 5, 6', '4, 5, 6', '3, 4', ''),
('L200190261', 'Laila Fadila Burhani', 'MQEG2', '1', 'Keorganisasian', '4, 5, 6, 7, 8, 9', '4, 5, 6', '1, 2, 3, 5, 6', '4, 5, 6', '3, 4', ''),
('L200190263', 'Alivia Rahma Sakina', 'IAQL3', '1', 'Web dan Jaringan', '4, 5, 6, 7, 8, 9', '4, 5, 6', '1, 2, 3, 5, 6', '4, 5, 6', '3, 4', ''),
('L200190265', 'Indah Setia Rini', 'WNKQ1', '1', 'Web dan Jaringan', '4, 5, 6, 7, 8, 9', '4, 5, 6', '1, 2, 3, 5, 6', '4, 5, 6', '3, 4', ''),
('L200194156', 'Radin Mundingwangi Nurangga Prabasakti', 'OZAQ6', '0', 'Web dan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL),
('L200194197', 'Indira Febriyanti', 'XYOH8', '1', 'Hubungan Publik', '4, 5, 6', '', '4, 5, 6, 7, 8, 9', '4, 5, 6', '1, 2, 3, 4, 5, 6', '1, 2, 3, 4, 5, 6, 7, 8');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `nim` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
