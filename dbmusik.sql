-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Okt 2020 pada 10.38
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmusik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `athor`
--

CREATE TABLE IF NOT EXISTS `athor` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `athor`
--

INSERT INTO `athor` (`id`, `nama`) VALUES
(1, 'Peterpan'),
(2, 'ANGGA'),
(3, 'ipank'),
(4, 'ipank');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `video_link` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `nama`, `video_link`, `type`, `id_course`) VALUES
(1, 'Peterpan', 'www.youtube.com', 'mp4', 1),
(2, 'ipank', 'www.youtube.com', 'mkv', 2),
(3, 'Jamrud', 'www.youtube.com', 'flv', 3),
(5, 'Avenged Sevendfold', 'www.youtube.com', 'Mp4', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `id_author` int(11) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `course`
--

INSERT INTO `course` (`id`, `nama`, `thumbnail`, `id_author`, `duration`, `description`) VALUES
(1, 'Peterpan', 'photo01', 1, '03.30', 'Judul:Ada Apa Dengan Mu'),
(2, 'ipank', 'photo02', 2, '03.30', 'Judul:Kau Segalanya Bagi ku'),
(3, 'Jamrud', 'photo03', 3, '04.55', 'Judul: 30 Menit'),
(5, 'Avenged Sevenfold', 'photo04', 4, '05.52', 'Judul : Size The day,'),
(6, 'Lukman', 'photo04', 4, '03.52', 'Judul : Jangan Jsdvfd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athor`
--
ALTER TABLE `athor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athor`
--
ALTER TABLE `athor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
