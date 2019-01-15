-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Mar 2016 pada 18.20
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `embewolu_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_pengguna` varchar(30) NOT NULL,
  `kata_sandi` varchar(32) NOT NULL,
  `nama_admin` text NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` char(15) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi_kami`
--

CREATE TABLE IF NOT EXISTS `hubungi_kami` (
  `id_hubungikami` int(5) NOT NULL,
  `nama_pengunjung` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
`id_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(30) NOT NULL,
  `fasilitas` varchar(200) NOT NULL,
  `harga` int(6) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `tipe_kamar`, `fasilitas`, `harga`, `foto`, `detail`) VALUES
(1, 'A', 'kipas Angin, Sarapan, Tambah Bed ', 500000, 'images/standart.jpg', 'Tarif hotel murah, lebih dari 100.000 hotel di seluruh Indonesia,Asia,dunia. Diskon kamar hotel sampai dengan 80%. Pesan di Embewolu.com, dapatkan harga khusus'),
(2, 'B', 'AC, Sarapan, Tambah Bed, TV ', 500000, 'images/standart.jpg', 'Tarif hotel murah, lebih dari 100.000 hotel di seluruh Indonesia,Asia,dunia. Diskon kamar hotel sampai dengan 80%. Pesan di Embewolu.com, dapatkan harga khusus'),
(3, 'C', 'AC,TV, Double Bed, Sarapan, Balkon', 500000, 'images/standart.jpg', 'Tarif hotel murah, lebih dari 100.000 hotel di seluruh Indonesia,Asia,dunia. Diskon kamar hotel sampai dengan 80%. Pesan di Embewolu.com, dapatkan harga khusus'),
(4, 'D', 'ac', 500000, 'images/standart.jpg', 'Tarif hotel murah, lebih dari 100.000 hotel di seluruh Indonesia,Asia,dunia. Diskon kamar hotel sampai dengan 80%. Pesan di Embewolu.com, dapatkan harga khusus'),
(5, 'E', 'ac', 500000, 'images/standart.jpg', 'Tarif hotel murah, lebih dari 100.000 hotel di seluruh Indonesia,Asia,dunia. Diskon kamar hotel sampai dengan 80%. Pesan di Embewolu.com, dapatkan harga khusus'),
(6, 'F', 'ac', 500000, 'images/standart.jpg', 'Tarif hotel murah, lebih dari 100.000 hotel di seluruh Indonesia,Asia,dunia. Diskon kamar hotel sampai dengan 80%. Pesan di Embewolu.com, dapatkan harga khusus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resepsionis`
--

CREATE TABLE IF NOT EXISTS `resepsionis` (
  `id_resepsionis` char(6) NOT NULL,
  `nama_resepsionis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
`id_reservasi` int(5) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jumlah_orang` int(20) NOT NULL,
  `id_kamar` int(5) NOT NULL,
  `jumlah_harga` int(10) NOT NULL,
  `id_ktp` int(5) NOT NULL,
  `id_resepsionis` char(6) NOT NULL,
  `konfirmasi` enum('Yes','No') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `tgl_masuk`, `tgl_keluar`, `jumlah_orang`, `id_kamar`, `jumlah_harga`, `id_ktp`, `id_resepsionis`, `konfirmasi`) VALUES
(2, '2016-03-01', '2016-03-02', 1, 2, 4000000, 232143324, '3', 'Yes'),
(3, '2016-03-04', '2016-03-05', 1, 3, 11111, 2222, '333', 'Yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `id_ktp` int(5) NOT NULL,
  `nama_tamu` text NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_telp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
 ADD PRIMARY KEY (`id_hubungikami`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
 ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `resepsionis`
--
ALTER TABLE `resepsionis`
 ADD PRIMARY KEY (`id_resepsionis`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
 ADD PRIMARY KEY (`id_reservasi`), ADD KEY `no_kamar` (`id_kamar`), ADD KEY `id_ktp` (`id_ktp`), ADD KEY `no_kamar_2` (`id_kamar`), ADD KEY `no_kamar_3` (`id_kamar`), ADD KEY `id_resepsionis` (`id_resepsionis`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
 ADD PRIMARY KEY (`id_ktp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
MODIFY `id_reservasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
