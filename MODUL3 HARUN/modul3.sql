-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 04:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_table`
--

CREATE TABLE `buku_table` (
  `id_buku` int(100) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis_buku` varchar(255) NOT NULL,
  `tahun_terbit` int(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_table`
--

INSERT INTO `buku_table` (`id_buku`, `judul_buku`, `penulis_buku`, `tahun_terbit`, `deskripsi`, `gambar`, `tag`, `bahasa`) VALUES
(0, '111 Kode HTML', 'Harun_1202190320', 2019, 'Teknik menguasai HTML secepat kilat Untuk pemula yang ingin menjadi master HTML Untuk menguasai pemrograman web.', '1519729914_bukuhtml.jpg', 'Pemrograman,Website', 'Indonesia'),
(0, 'HTML 5 dan PHP', 'Harun_1202190320', 2016, 'Buku ini akan membantu Anda untuk mengenal lebih jauh kedua script pemrograman utama dalam pembuatan aplikasi online berbasis website ini. Anda juga akan diperkenalkan pada penggunaan MySQL untuk pengolahan data sederhana.', '1596950446_buku html5.jpg', 'Pemrograman,Website', 'Indonesia'),
(0, 'Kalkulus', 'Harun_1202190320', 2010, 'Buku ini berfokus pada konsep-konsep paling penting, membuat anda bebas mengajar sesuai dengan cara yang anda inginkan.', '1156265345_kalkulus.jpg', 'Kalkulus', 'Indonesia');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
