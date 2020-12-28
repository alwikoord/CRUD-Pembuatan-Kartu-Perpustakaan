-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2020 pada 19.46
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kartu_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(150) NOT NULL,
  `daerah` varchar(100) DEFAULT NULL,
  `telpon` varchar(80) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `jk` varchar(90) DEFAULT NULL,
  `tipe` varchar(90) DEFAULT NULL,
  `fakultas` varchar(99) DEFAULT NULL,
  `prodi` varchar(99) DEFAULT NULL,
  `semester` varchar(99) DEFAULT NULL,
  `ttl` date NOT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`nama`, `nim`, `daerah`, `telpon`, `email`, `jk`, `tipe`, `fakultas`, `prodi`, `semester`, `ttl`, `foto`) VALUES
('Albarokah Ilmu', '3920177761', 'Jakarta Selatan', '08999212211', 'hidayah@gmail.com', 'Perempuan', 'Mahasiswa / Mahasiswi', 'Ekonomi Dan Manajemen', 'Pendidikan Bahasa Arab', '8+', '2020-03-07', 'user.png'),
('Muhammad Alwi', '3920186110305', 'Kalimantan Selatan', '081253485723', 'muhammadalwi@unida.gontor.ac.id', 'Laki - Laki', 'Mahasiswa', 'Sains Dan Teknlogi', 'Teknik Informatika', '4', '2016-06-12', '1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(90) NOT NULL,
  `nama_user` varchar(90) DEFAULT NULL,
  `password` varchar(90) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password`, `foto`) VALUES
('392016110304', 'Alwi', 'unidagontor', 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
