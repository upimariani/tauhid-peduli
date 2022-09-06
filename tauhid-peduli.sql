-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2022 pada 23.35
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
  `password_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat_admin`, `no_hp_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'kuningan', '089765456765', 'admin', 'admin');

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

INSERT INTO `data_siswa` (`id_dt_siswa`, `id_siswa`, `nisn`, `asal_sklh`, `tempat_lahir`, `tanggal_lahir`, `nama_ortu`, `nilai_ing`, `nilai_mtk`, `nilai_indo`, `tes_tulis`, `tes_baca`, `tes_wawancara`, `hasil`, `keputusan`) VALUES
(1, 1, '123456', 'SMA 1 Kuningan', 'Kuningan,', '2022-09-01', 'Ahmad', 70, 80, 80, 3, 80, 90, 0.476, 2),
(2, 2, '78908766', 'SMA 1 Cigugur', 'Kuningan,', '2021-06-15', 'Maman', 70, 80, 90, 2, 90, 80, 0.524, 1);

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
(1, 1, 1, '<p>contoh jawaban 1</p>', 2),
(2, 1, 2, '<p>contoh jawaban 2<br></p>', 3),
(3, 1, 3, '<p>contoh jawaban 3<br></p>', 2),
(4, 1, 4, '<p>contoh jawaban 4<br></p>', 3),
(5, 1, 5, '<p>contoh jawaban 5<br></p>', 3),
(6, 2, 1, '<p>adgkjufr</p>', 2),
(7, 2, 2, '<p>dfgds</p>', 1),
(8, 2, 3, '<p>vcbvvc</p>', 3),
(9, 2, 4, '<p>fdg</p>', 1),
(10, 2, 5, '<p>sdfdsfs</p>', 1);

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
(1, 'Dinda', 'Perempuan', 'Kuningan, Jawa Barat', '0875698745633', 'siswa', 'siswa'),
(2, 'Zaenal', 'Laki - Laki', 'Ciawigebang, Kuningan', '0875698745633', 'siswa1', 'siswa1');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_dt_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jwbn_soal_siswa`
--
ALTER TABLE `jwbn_soal_siswa`
  MODIFY `id_jwb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
