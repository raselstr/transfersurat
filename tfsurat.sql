-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2023 pada 08.59
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tfsurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(18) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `tptlahir` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `gol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `namalengkap`, `tptlahir`, `tgllahir`, `jk`, `alamat`, `jabatan`, `gol`) VALUES
('198309292011011013', 'Rahmad', 'Air Joman', '1983-09-29', 'Laki-laki', 'Air Joman', 'Staf', 'II/a'),
('198309292011011016', 'Rahmad', 'Air Joman', '1983-09-29', 'Laki-laki', 'Air Joman', 'Staf', 'II/a'),
('198309292011011018', 'Wati Widyawati', 'Air Joman', '1983-09-29', 'Laki-laki', 'Kisaran', 'Kepala Seksi', 'III/a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(25) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `ttd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `nosurat`, `perihal`, `tgl_surat`, `asal_surat`, `ttd`) VALUES
(2, '001', 'Tes', '2023-01-31', 'Tes', 'Tes');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`) USING BTREE;

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
