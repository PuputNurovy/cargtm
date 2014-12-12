-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 11 Des 2014 pada 21.28
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_cargtm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `area_penyimpanan`
--

CREATE TABLE IF NOT EXISTS `area_penyimpanan` (
  `ID_AreaPenyimpanan` varchar(8) NOT NULL,
  PRIMARY KEY (`ID_AreaPenyimpanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapal`
--

CREATE TABLE IF NOT EXISTS `kapal` (
  `ID_Kapal` varchar(4) NOT NULL,
  `nama_customer` varchar(30) DEFAULT NULL,
  `asal` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Kapal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kargo`
--

CREATE TABLE IF NOT EXISTS `kargo` (
  `ID_Kargo` varchar(8) NOT NULL,
  `area_penyimpanan` varchar(8) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `ID_AreaPenyimpanan` varchar(8) NOT NULL,
  PRIMARY KEY (`ID_Kargo`),
  KEY `ID_AreaPenyimpanan` (`ID_AreaPenyimpanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian_transportasi`
--

CREATE TABLE IF NOT EXISTS `rincian_transportasi` (
  `ID_RincianTransportasi` varchar(8) NOT NULL,
  `ID_transportasi` varchar(8) NOT NULL,
  PRIMARY KEY (`ID_RincianTransportasi`),
  KEY `ID_transportasi` (`ID_transportasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `ID_Transaksi` varchar(8) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `ID_Kapal` varchar(4) NOT NULL,
  `ID_Kargo` varchar(8) NOT NULL,
  `ID_User` varchar(5) NOT NULL,
  `ID_RincianTransportasi` varchar(8) NOT NULL,
  PRIMARY KEY (`ID_Transaksi`),
  KEY `ID_Kapal` (`ID_Kapal`),
  KEY `ID_Kargo` (`ID_Kargo`),
  KEY `ID_User` (`ID_User`),
  KEY `ID_RincianTransportasi` (`ID_RincianTransportasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasi`
--

CREATE TABLE IF NOT EXISTS `transportasi` (
  `ID_transportasi` varchar(8) NOT NULL,
  `jenis` varchar(15) DEFAULT NULL,
  `kondisi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_transportasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `nama_akun` varchar(12) DEFAULT NULL,
  `jobdesk` varchar(20) DEFAULT NULL,
  `kata_sandi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `nama_akun`, `jobdesk`, `kata_sandi`) VALUES
(1, 'Subhan Gustiar Rosada', 'admin', 'Manager', 'admin'),
(2, 'Puput Nurovy', 'puput', 'Operator Terminal', 'puput'),
(3, 'Andri M Ferdian', 'stareap', 'Petugas Gerbang', 'stareap'),
(4, 'Guskar', 'bungsu', 'Petugas Transport', 'bungsu');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kargo`
--
ALTER TABLE `kargo`
  ADD CONSTRAINT `kargo_ibfk_1` FOREIGN KEY (`ID_AreaPenyimpanan`) REFERENCES `area_penyimpanan` (`ID_AreaPenyimpanan`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rincian_transportasi`
--
ALTER TABLE `rincian_transportasi`
  ADD CONSTRAINT `rincian_transportasi_ibfk_1` FOREIGN KEY (`ID_transportasi`) REFERENCES `rincian_transportasi` (`ID_RincianTransportasi`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_6` FOREIGN KEY (`ID_Kapal`) REFERENCES `kapal` (`ID_Kapal`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_7` FOREIGN KEY (`ID_Kargo`) REFERENCES `kargo` (`ID_Kargo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_8` FOREIGN KEY (`ID_User`) REFERENCES `transaksi` (`ID_Transaksi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_9` FOREIGN KEY (`ID_RincianTransportasi`) REFERENCES `transaksi` (`ID_Transaksi`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
