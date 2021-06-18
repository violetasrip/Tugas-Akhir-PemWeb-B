-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 16.05
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charityin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_donasi`
--

CREATE TABLE `daftar_donasi` (
  `id_person` int(7) NOT NULL,
  `foto` varchar(20) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `usia` int(5) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_donasi`
--

INSERT INTO `daftar_donasi` (`id_person`, `foto`, `nama`, `usia`, `gender`, `asal`, `pendidikan`, `bio`, `status`) VALUES
(1, 'annisa', 'Annisa Putriana', 14, 'Perempuan', 'Banyuwangi', 'SD', 'Saya putus sekolah karena saya anak yatim dan ibu saya tidak memiliki cukup biaya untuk menyekolahkan saya ke jenjang smp, ibu saya seorang buruh tani dan saya memiliki 2 adik yang juga membutuhkan biaya.', 'Telah Menerima Donasi'),
(2, 'aksa', 'Aksa Kinandar', 16, 'Laki-laki', 'Brebes\r\n', 'SMP', 'Saya tidak melanjutkan ke jenjang SMA karena orang tua tidak mampu membayar uang sekolah, jadi saya memilih bekerja demi membantu orang tua memenuhi kebutuhan sehari-hari yang masih serba kekurangan.', 'Belum Pernah Mendapatkan Donasi'),
(3, 'anindia', 'Anindia Syakila', 14, 'Perempuan', 'Jombang\r\n', 'SD', 'Kedua orang tua saya sudah tidak ada, dan saya hidup bersama dengan saudara sepupu saya yang juga putus sekolah. Saya sangat ingin bersekolah karena kalau dewasa nanti saya sangat ingin menjadi dokter dan jadi orang sukses.', 'Belum Pernah Mendapatkan Donasi'),
(4, 'bella', 'Bella Inindira', 16, 'Perempuan', 'Gresik', 'SMP', 'Semenjak adanya pandemi kedua orang tua saya terkena PHK, dan keluarga saya yang sebelumnya memiliki pendapatan yang pas-pasan, menjadi lebih kesulitan. Akhirnya saya memilih untuk tidak melanjutkan sekolah ke jenjang SMA.', 'Belum Pernah Mendapatkan Donasi'),
(5, 'dendi', 'Dendi Sinanggar', 16, 'Laki-laki', 'Bekasi', 'SMP', 'Saya sangat ingin melanjutkan sekolah saya, karena tujuan saya mengikuti banyak lomba sebelumnya adalah karena saya ingin masuk ke salah satu perguruan tinggi, namun keadaan tidak memungkinkan.', 'Belum Pernah Mendapatkan Donasi'),
(6, 'david', 'David Firdaus', 13, 'Laki-laki', 'Jember', 'SD', 'Saya sangat berharap dapat melanjutkan sekolah seperti teman-teman saya yang lain. Tetapi, saya tidak tega dengan orang tua saya terutama bapak saya yang sekarang kesehatannya sudah menurun namun tetap memaksa bekerja demi membiayai sekolah saya.', 'Belum Pernah Mendapatkan Donasi'),
(7, 'erna', 'Erna Kinanti', 15, 'Perempuan', 'Bangkalan', 'SMP', 'Keluarga saya kurang mampu, sebelumnya saat lulus smp saya hampir memutuskan berhenti, tetapi orang tua memaksa saya untuk tetap lanjut. Dan benar saja setelah saya melanjutkan baru beberapa bulan ekonomi keluarga saya terpuruk, sehingga saya keluar.', 'Belum Pernah Mendapatkan Donasi'),
(8, 'fifi', 'Fifi Tarisa', 15, 'Perempuan', 'Cilacap', 'SMP', 'Semenjak adanya pandemi dan sekolah online saya tidak tega meminta uang kepada orang tua untuk membeli smartphone dan paket data, karena orang tua sudah menanggung beban yang berat untuk biaya adik-adik saya.', 'Telah Menerima Donasi'),
(9, 'gilang', 'Gilang Ramadhan', 16, 'Laki-laki', 'Boyolali', 'SMP', 'Saya berhenti sekolah dan memilih bekerja semenjak bapak saya sakit dan tidak bisa bekerja, akhirnya saya menggantikan bapak saya mencari nafkah untuk keluarga terutama adik-adik saya yang masih kecil.', 'Belum Pernah Mendapatkan Donasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(10) NOT NULL,
  `jenjang` varchar(3) NOT NULL,
  `nominal` bigint(15) NOT NULL,
  `id_person` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `jenjang`, `nominal`, `id_person`, `email`) VALUES
(3, 'SMA', 3600000, 1, 'berdikari_jaya@gmail.com'),
(4, 'SMA', 4200000, 8, 'berdikari_jaya@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `nama_p` varchar(100) NOT NULL,
  `alamat_p` varchar(255) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `motto` varchar(255) DEFAULT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`email`, `nama_p`, `alamat_p`, `telepon`, `motto`, `pass`) VALUES
('14041@cimbniaga.co.id', 'Bank Cimb Niaga', 'Jl. Jend Sudirman Kav. 58 Jakarta 12190, Indonesia', '14041', 'Menjadi Bank Universal pilihan dalam memberikan solusi kepada nasabah agar dapat lebih cepat menggapai ambisi, tujuan, dan mimpi dalam setiap jenjang kehidupan', '12345678'),
('berdikari_jaya@gmail.com', 'test perusahaan', 'bla bla bla', '0356-007-065', 'jayaaaa teroooss', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_donasi`
--
ALTER TABLE `daftar_donasi`
  ADD PRIMARY KEY (`id_person`);

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_donasi`
--
ALTER TABLE `daftar_donasi`
  MODIFY `id_person` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
