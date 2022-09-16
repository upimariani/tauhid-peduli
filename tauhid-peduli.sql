-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Sep 2022 pada 17.39
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tauhid-peduli`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(125) NOT NULL,
  `alamat_admin` text NOT NULL,
  `no_hp_admin` varchar(15) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat_admin`, `no_hp_admin`, `username_admin`, `password_admin`, `level`) VALUES
(1, 'admin', 'kuningan', '089765456765', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_dt_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `asal_sklh` varchar(125) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(15) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `pekerjaan_ortu` text NOT NULL,
  `pendapatan_ortu` varchar(50) DEFAULT NULL,
  `file` text NOT NULL,
  `sktm` text DEFAULT NULL,
  `raport` text DEFAULT NULL,
  `nilai_ing` int(11) NOT NULL,
  `nilai_mtk` int(11) NOT NULL,
  `nilai_indo` int(11) NOT NULL,
  `tes_tulis` int(11) NOT NULL,
  `tes_baca` int(11) NOT NULL,
  `tes_wawancara` int(11) NOT NULL,
  `hasil` float NOT NULL,
  `keputusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_dt_siswa`, `id_siswa`, `nisn`, `asal_sklh`, `tempat_lahir`, `tanggal_lahir`, `nama_ortu`, `pekerjaan_ortu`, `pendapatan_ortu`, `file`, `sktm`, `raport`, `nilai_ing`, `nilai_mtk`, `nilai_indo`, `tes_tulis`, `tes_baca`, `tes_wawancara`, `hasil`, `keputusan`) VALUES
(1, 1, '251752712', 'sma 1 kuningan', 'kuningan,', '2022-09-05', 'juhe', 'buruh', '750000000', '5_6285095441197434212.pdf', NULL, NULL, 0, 0, 0, 1, 0, 0, 0, 0),
(2, 2, '1234567', 'jepang', 'jepang,', '2022-09-06', 'narito', 'ninja', '1200000', '260-Article_Text-469-1-10-20190407.pdf', '260-Article_Text-469-1-10-20190407.pdf', '260-Article_Text-469-1-10-20190407.pdf', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jwbn_soal_siswa`
--

CREATE TABLE `jwbn_soal_siswa` (
  `id_jwb` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jwbn_siswa` text NOT NULL,
  `nilai_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jwbn_soal_siswa`
--

INSERT INTO `jwbn_soal_siswa` (`id_jwb`, `id_siswa`, `id_soal`, `jwbn_siswa`, `nilai_soal`) VALUES
(1, 1, 1, '<p>sah</p>', 0),
(2, 1, 2, '<p>sah</p>', 0),
(3, 1, 3, '<p>sah</p>', 0),
(4, 1, 4, '<p>sah</p>', 0),
(5, 1, 5, '<p>sah</p>', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(125) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `no_hp_siswa` varchar(15) NOT NULL,
  `username_siswa` varchar(50) NOT NULL,
  `password_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `jk`, `alamat_siswa`, `no_hp_siswa`, `username_siswa`, `password_siswa`) VALUES
(1, 'jamal', 'laki-laki', 'kuningan', '089192819281', 'jamal', 'jamal'),
(2, 'sayang', 'Perempuan', 'waduk darma', '089192819281', 'WINA', 'Asu12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `nama_soal` varchar(125) NOT NULL,
  `pertanyaan_soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `nama_soal`, `pertanyaan_soal`) VALUES
(1, 'IPA', 'Zat murni yang tidak dapat diuraikan lagi menjadi zat-zat yang lebih sederhana lagi dengan reaksi kimia dinamakan ….'),
(2, 'IPA', 'Unsur-unsur yang terdapat di alam bebas biasanya tidak dalam bentuk persenyawaan. Berikut yang tidak termasuk unsur-unsur di alam bebas adalah ….'),
(3, 'IPA', 'Jika suatu unsur dilambangkan dengan satu huruf, maka harus digunakan huruf ….'),
(4, 'IPA', 'Unsur berikut ini yang tidak dilambangkan dengan suatu huruf adalah ….'),
(5, 'IPA', 'Zat murni yang terbentuk dari dua atau lebih unsur melalui reaksi kimia dinamakan ….');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_dt_siswa`);

--
-- Indeks untuk tabel `jwbn_soal_siswa`
--
ALTER TABLE `jwbn_soal_siswa`
  ADD PRIMARY KEY (`id_jwb`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_dt_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jwbn_soal_siswa`
--
ALTER TABLE `jwbn_soal_siswa`
  MODIFY `id_jwb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
