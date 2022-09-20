-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2022 pada 17.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpusabrar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perpusabrar`
--

CREATE TABLE `tb_perpusabrar` (
  `no` int(11) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `namabuku` varchar(100) NOT NULL,
  `penulis` varchar(25) NOT NULL,
  `penerbit` varchar(25) NOT NULL,
  `tahunterbit` int(4) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perpusabrar`
--

INSERT INTO `tb_perpusabrar` (`no`, `cover`, `namabuku`, `penulis`, `penerbit`, `tahunterbit`, `link`) VALUES
(10, 'pemrogramanweb.jpg', 'Pemrograman Web', 'Rohi', 'EMK', 2020, 'https://instagram.com'),
(13, 'sunnahnabi.jpg', 'Sunnah Nabi', 'Imam Nawawi', 'Khatulistiwa Press', 2014, 'https://instagram.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_perpusabrar`
--
ALTER TABLE `tb_perpusabrar`
  ADD PRIMARY KEY (`no`),
 

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_perpusabrar`
--
ALTER TABLE `tb_perpusabrar`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
