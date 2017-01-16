-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 05:41 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jawara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `password`, `nama_lengkap`, `foto`, `email`) VALUES
('jawara.admin1', '11eed79923d1f3b44629b155dbdb2bb3', 'Gaben Ricky', 'admin1.jpg', 'gaben.admin@jawara.com'),
('jawara.admin2', '9ead022a78d7970861c4ba2cb0a6c815', 'Bruce Lee', 'admin2.jpg', 'BruceLee@jawara.com');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `username_admin` varchar(32) NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `waktu` date NOT NULL,
  `isi_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `username_admin`, `judul_berita`, `waktu`, `isi_berita`) VALUES
(1, 'jawara.admin1', 'Dummy Judul1', '2017-01-14', 'Dummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi\r\nDummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi'),
(2, 'jawara1.admin', 'Dummy Judul 2', '2017-01-14', 'Dummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi'),
(5, 'jawara.admin1', 'Dummy Judul 3', '2017-01-15', '<p>\r\n\r\nDummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy IsiDummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi Dummy Isi\r\n\r\n<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `kampanye`
--

CREATE TABLE `kampanye` (
  `id_kampanye` int(3) NOT NULL,
  `id_kandidat` int(3) NOT NULL,
  `jadwal_kampanye` date NOT NULL,
  `lokasi_kampanye` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_pengguna` int(3) NOT NULL,
  `id_komentar` int(3) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_pengguna`, `id_komentar`, `id_berita`, `isi_komentar`, `waktu`) VALUES
(1, 1, 0, 'WTF !!!', '2017-01-03'),
(2, 2, 0, 'WTF dude!!', '2017-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_lengkap` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `nama_lengkap`, `email`, `foto`, `password`) VALUES
(1, 'users1', 'Dark Side', 'Darkside@email.com', 'ava1.jpg', '765aeaa439bcda745fc8f45188df7285');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`),
  ADD UNIQUE KEY `username_admin_2` (`username_admin`),
  ADD KEY `username_admin` (`username_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD UNIQUE KEY `id_berita_2` (`id_berita`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_berita_3` (`id_berita`);

--
-- Indexes for table `kampanye`
--
ALTER TABLE `kampanye`
  ADD PRIMARY KEY (`id_kampanye`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
