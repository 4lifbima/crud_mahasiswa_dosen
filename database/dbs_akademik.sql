-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2024 pada 18.38
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_dosen`
--

CREATE TABLE `m_dosen` (
  `id` int(11) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_dosen`
--

INSERT INTO `m_dosen` (`id`, `nip`, `nama`, `telp`, `alamat`) VALUES
(1, 12345, 'Hidayat Koniyo, ST., M.Kom', '082291383797', 'Gorontalo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_mahasiswa`
--

CREATE TABLE `m_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_mahasiswa`
--

INSERT INTO `m_mahasiswa` (`id`, `nim`, `nama`, `alamat`, `telp`) VALUES
(1, 531423009, 'Alif Bima Pradana', 'Kabupaten Banggai Kepulauan', '082291383797'),
(2, 531423007, 'Indah Belastri Sibran', 'Kabupaten Banggai Laut', '081234567431'),
(3, 531423008, 'Dhimaz Pramudya Lc. Lasabang', 'Kabupaten Toli toli', '081254773245');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_matkul`
--

CREATE TABLE `m_matkul` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `matkul` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_matkul`
--

INSERT INTO `m_matkul` (`id`, `kode`, `matkul`) VALUES
(1, 'ICG001', 'Pemrograman Berorientasi  Objek'),
(2, 'ICG002', 'Pemrograman web');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_nilai`
--

CREATE TABLE `m_nilai` (
  `id` int(11) NOT NULL,
  `mutu` varchar(150) NOT NULL,
  `angka` varchar(50) NOT NULL,
  `huruf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_nilai`
--

INSERT INTO `m_nilai` (`id`, `mutu`, `angka`, `huruf`) VALUES
(1, 'Baik Sekali', '4', 'A'),
(2, 'Cukup', '3', 'B+'),
(3, 'Baik', '3.5', 'A-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pegawai`
--

CREATE TABLE `m_pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_pegawai`
--

INSERT INTO `m_pegawai` (`id`, `nip`, `nama`, `telp`, `alamat`) VALUES
(1, '123456789', 'Sendy Trias Nugroho, S.Kom', '089543213456', 'Kota gorontalo'),
(2, '452284', 'Alif Bima Pradana, S.Kom., M.Kom', '08123456789', 'Desa Sambiut');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `m_dosen`
--
ALTER TABLE `m_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_matkul`
--
ALTER TABLE `m_matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_nilai`
--
ALTER TABLE `m_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_pegawai`
--
ALTER TABLE `m_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `m_dosen`
--
ALTER TABLE `m_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_matkul`
--
ALTER TABLE `m_matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `m_nilai`
--
ALTER TABLE `m_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_pegawai`
--
ALTER TABLE `m_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
