-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 09.58
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_buku`
--

CREATE TABLE `t_buku` (
  `id_buku` varchar(11) NOT NULL,
  `id_judul` int(4) NOT NULL DEFAULT 0,
  `id_user` varchar(5) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_buku`
--

INSERT INTO `t_buku` (`id_buku`, `id_judul`, `id_user`, `tgl_input`, `status`) VALUES
('20140420001', 1, 'admin', '2014-04-23 09:13:06', 0),
('20140420002', 5, 'agus', '2014-04-23 09:13:06', 1),
('20140420003', 1, 'agus', '2014-04-23 09:13:44', 1),
('20140420004', 2, 'admin', '2014-04-23 09:13:44', 1),
('20140420005', 3, 'agus', '2014-04-23 09:16:56', 1),
('20140420006', 2, 'agus', '2014-04-23 09:16:56', 1),
('20140420007', 4, 'agus', '2014-04-23 09:16:56', 1),
('20140420008', 4, 'admin', '2014-04-23 09:16:56', 1),
('20140420009', 6, 'agus', '2014-04-23 09:16:56', 1),
('20140420010', 7, 'putu', '2014-04-23 09:16:56', 1),
('20140420011', 7, 'agus', '2014-04-23 09:16:56', 1),
('20140420012', 8, 'agus', '2014-04-23 09:16:56', 0),
('20140420013', 9, 'agus', '2014-04-23 09:16:56', 0),
('20140420014', 1, 'putu', '2014-04-23 09:16:56', 1),
('20140420015', 3, 'admin', '2020-04-05 12:03:53', 1),
('20140420016', 12, 'agus', '2020-04-05 12:40:44', 1),
('20140420017', 11, 'agus', '2020-04-05 12:36:26', 1),
('20140420018', 31, 'putu', '2020-04-05 12:36:26', 1),
('20140420019', 13, 'agus', '2020-04-05 12:36:26', 1),
('20140420020', 32, 'admin', '2020-04-05 12:36:26', 1),
('20140420021', 14, 'putu', '2020-04-05 12:36:26', 1),
('20140420022', 15, 'admin', '2020-04-05 12:36:26', 1),
('20140420023', 16, 'admin', '2020-04-05 12:36:26', 1),
('20140420024', 17, 'putu', '2020-04-05 12:36:27', 1),
('20140420025', 18, 'admin', '2020-04-05 12:36:27', 1),
('20140420026', 28, 'putu', '2020-04-05 12:36:27', 1),
('20140420027', 31, 'admin', '2020-04-05 12:36:27', 1),
('20140420028', 23, 'agus', '2020-04-05 12:36:27', 1),
('20140420029', 21, 'admin', '2020-04-05 12:36:26', 1),
('20140420030', 20, 'putu', '2020-04-05 12:36:26', 1),
('20140420031', 20, 'admin', '2020-04-05 12:36:10', 1),
('20140420032', 24, 'putu', '2020-04-05 12:36:26', 1),
('20140420033', 27, 'putu', '2020-04-05 12:36:26', 1),
('20140420034', 25, 'agus', '2020-04-05 12:36:26', 1),
('20140420035', 9, 'admin', '2020-04-05 12:36:26', 1),
('20140420036', 11, 'putu', '2020-04-05 12:36:26', 1),
('20140420037', 10, 'putu', '2020-04-05 12:36:26', 1),
('20140420038', 22, 'putu', '2020-04-05 12:36:26', 1),
('20140420039', 26, 'putu', '2020-04-05 12:36:26', 1),
('20140420040', 25, 'admin', '2020-04-05 12:36:26', 1),
('20140420041', 8, 'admin', '2020-04-05 12:36:26', 1),
('20140420042', 23, 'admin', '2020-04-05 12:36:26', 1),
('20140420043', 30, 'putu', '2020-04-05 12:35:54', 1),
('20140420044', 29, 'admin', '2020-04-05 12:36:27', 1),
('20140420045', 7, 'agus', '2020-04-05 12:40:44', 1),
('20140420046', 4, 'putu', '2020-04-05 12:40:44', 1),
('20140420047', 10, 'admin', '2020-04-05 12:40:44', 1),
('20140420048', 19, 'agus', '2020-04-05 12:40:44', 1),
('20140420049', 21, 'agus', '2020-04-05 12:40:44', 1),
('20140420050', 30, 'agus', '2020-04-05 12:40:44', 1),
('20140420051', 39, 'agus', '2020-04-05 12:40:44', 1),
('20140420052', 37, 'agus', '2020-04-05 12:40:44', 1),
('20140420053', 37, 'agus', '2020-04-05 12:40:44', 1),
('20140420054', 36, 'agus', '2020-04-05 12:40:44', 1),
('20140420055', 36, 'agus', '2020-04-05 12:40:44', 1),
('20140420056', 36, 'agus', '2020-04-05 12:40:44', 1),
('20140420057', 33, 'agus', '2020-04-05 12:40:44', 1),
('20140420058', 34, 'agus', '2020-04-05 12:40:44', 1),
('20140420059', 34, 'agus', '2020-04-05 12:40:44', 1),
('20140420060', 34, 'agus', '2020-04-05 12:40:44', 0),
('20140420061', 34, 'agus', '2020-04-05 12:40:44', 0),
('20140420062', 34, 'agus', '2020-04-05 12:40:44', 1),
('20140420063', 35, 'agus', '2020-04-05 12:40:44', 1),
('20140420064', 38, 'admin', '2020-04-05 12:40:44', 1),
('20140420065', 24, 'admin', '2020-04-05 12:40:44', 1),
('20140420066', 24, 'putu', '2020-04-05 12:40:44', 1),
('20140420067', 24, 'admin', '2020-04-05 12:40:44', 1),
('20140420068', 27, 'admin', '2020-04-05 12:40:44', 1),
('20140420069', 28, 'admin', '2020-04-05 12:40:44', 1),
('20140420070', 28, 'admin', '2020-04-05 12:40:44', 1),
('20140420071', 19, 'admin', '2020-04-05 12:40:44', 1),
('20140420072', 19, 'putu', '2020-04-05 12:40:44', 1),
('20140420073', 19, 'putu', '2020-04-05 12:40:44', 0),
('20140420074', 1, 'putu', '2020-04-05 12:40:44', 1),
('20140420075', 1, 'putu', '2020-04-05 12:40:44', 1),
('20140420076', 1, 'putu', '2020-04-05 12:40:44', 0),
('20140420077', 1, 'admin', '2020-04-05 12:40:44', 1),
('20140420078', 5, 'admin', '2020-04-05 12:40:44', 1),
('20140420079', 5, 'admin', '2020-04-05 12:40:44', 0),
('20140420080', 5, 'admin', '2020-04-05 12:40:44', 1),
('20140420081', 22, 'admin', '2020-04-05 12:40:44', 1),
('20140420082', 22, 'admin', '2020-04-05 12:40:44', 0),
('20140420083', 14, 'admin', '2020-04-05 12:40:44', 0),
('20140420084', 33, 'admin', '2020-04-05 12:40:44', 0),
('20140420085', 33, 'admin', '2020-04-05 12:40:44', 0),
('20140420086', 6, 'admin', '2020-04-05 12:40:44', 0),
('20140420087', 18, 'admin', '2020-04-05 12:40:44', 0),
('20140420088', 18, 'admin', '2020-04-05 12:40:44', 0),
('20140420089', 15, 'admin', '2020-04-05 12:40:44', 0),
('20140420090', 16, 'admin', '2020-04-05 12:40:44', 0),
('20140420091', 16, 'admin', '2020-04-05 12:40:44', 1),
('20140420092', 15, 'admin', '2020-04-05 12:40:44', 1),
('20140420093', 15, 'admin', '2020-04-05 12:40:44', 1),
('20140420094', 15, 'admin', '2020-04-05 12:40:44', 1),
('20140420095', 32, 'admin', '2020-04-05 12:40:44', 1),
('20140420096', 32, 'admin', '2020-04-05 12:40:44', 1),
('20140420097', 32, 'admin', '2020-04-05 12:40:44', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_judul`
--

CREATE TABLE `t_judul` (
  `id_judul` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL DEFAULT '-',
  `id_kategori` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_judul`
--

INSERT INTO `t_judul` (`id_judul`, `judul`, `id_kategori`, `status`) VALUES
(1, '101 Tip dan Trik Pemrograman PHP', 1, 0),
(2, 'Algoritma & Pemrograman Dengan Borland C++', 1, 1),
(3, 'Algoritma & Pemrograman Menggunakan Java', 1, 1),
(4, 'Konsep Dasar Pemrograman Bahasa C', 1, 1),
(5, 'Pemrograman Internet Dan Xml Pada Ponsel Dengan Midlet Java', 1, 0),
(6, 'Pemrograman Visual Basic 6.0 Dan Microsoft Access', 1, 1),
(7, '25 Inspirasi Desain Wedding Invitation Dengan Coreldraw Floral,Retro,Couple,Unique & Heart', 3, 1),
(8, '3 In 1 Aplikasi Grafis Langsung Bisa Desain Grafis Tanpa Guru ', 3, 0),
(9, 'Adobe Dreamweaver Cs5 Untuk Beragam Desain Website Interaktif ', 3, 1),
(10, '42 Contoh Desain Corel Draw 12', 3, 1),
(11, 'Information Technology And Mobile Communication ', 4, 1),
(12, 'Handbook Of Algorithms For Wireless Networking And Mobile Computing', 4, 1),
(13, 'Membangun Aplikasi Mobile Dengan QT SDK', 4, 1),
(14, 'Mudah Membuat Mobile Application Dengan Flash Lite 3.0', 4, 1),
(15, 'Matematika Numerik Dengan Implementasi Matlab', 7, 1),
(16, 'Matematika Untuk Ilmu Fisika & Teknik', 7, 0),
(17, 'Logika Matematika Untuk Ilmu Komputer ', 7, 1),
(18, 'Matematika Dasar Untuk Perguruan Tinggi ', 7, 1),
(19, '15 Program Bantu Populer Untuk Mengembangkan & Mengelola Situs Web Anda', 5, 1),
(20, 'AJAX Membangun Web Dengan Teknologi ASYNCHRONOUSE JavaScript & XML ', 5, 1),
(21, 'Aplikasi Web Database Dengan Dreamweaver Dan Php-Mysql ', 5, 1),
(22, 'Aplikasi Web Dengan Xml Menggunakan Dreamweaver 8', 5, 1),
(23, 'Pemrograman Web Database Menggunakan ADODB PHP', 5, 1),
(24, 'Seri Desain Web Promosi Web & Registrasi Domain (Dengan Berbagai Teknik Dan Tool)', 5, 0),
(25, 'Panduan Lengkap Menggunakan ZOPE Membangun dan Membuat Aplikasi Web', 5, 0),
(26, 'Panduan Lengkap Menguasai Pemrograman Web dengan PHP 5', 5, 1),
(27, 'Web Hacking Serangan Dan Pertahanannya', 5, 1),
(28, 'Visual Web Developer Untuk Pengembangan Aplikasi Web Dinamis', 5, 1),
(29, 'Cermat Berbahasa Indonesia Untuk Perguruan Tinggi', 6, 1),
(30, 'Kamus Peribahasa Bahasa Indonesia', 6, 1),
(31, 'Teori Bahasa Dan Otomata', 6, 1),
(32, 'Pedoman Umum Ejaan Bahasa Indonesia Yang Disempurnakan & Pedoman Umum Pembentukan Istilah', 6, 1),
(33, 'Sistem Basis Data Menggunakan Microsoft Sql Server 2005', 2, 1),
(34, 'Membangun Sistem Basis Data dengan Oracle XE', 2, 1),
(35, 'Membangun Aplikasi Multimedia Interaktif Pembelajaran', 12, 1),
(36, 'Sistem Basis Data Dalam Paket Five In One', 2, 1),
(37, 'Konsep & Tuntunan Praktis Basis Data', 2, 1),
(38, 'Etika Profesi Pendidikan', 12, 1),
(39, 'Etika Bisnis Konsep Dan Kasus', 8, 1),
(40, 'Etika Komputer Dan Tanggung Jawab Profesional Di Bidang Teknologi Informasi', 16, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` tinyint(1) NOT NULL,
  `kategori` varchar(100) NOT NULL DEFAULT '-',
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `kategori`, `status`) VALUES
(1, 'Pemrograman', 1),
(2, 'Basis Data', 1),
(3, 'Desain', 1),
(4, 'Mobile', 1),
(5, 'Web', 1),
(6, 'Literatur dan Sastra', 1),
(7, 'Sains dan Matematika', 1),
(8, 'Ekonomi', 1),
(9, 'Rekayasa Sistem', 1),
(10, 'Agama', 1),
(11, 'Statistik', 1),
(12, 'Pendidikan', 1),
(13, 'Biografi', 1),
(14, 'Ensiklopedi', 1),
(15, 'Seni dan Rekreasi\r\n', 1),
(16, 'Filsafat dan Psikologi', 1),
(17, 'Ilmu Politik', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_penerbit`
--

CREATE TABLE `t_penerbit` (
  `id_penerbit` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_penerbit`
--

INSERT INTO `t_penerbit` (`id_penerbit`, `nama`, `kota`, `contact_name`, `contact_phone`, `alamat`, `email`, `status`) VALUES
(1, 'Andi Publisher', 'Yogjakarta', 'Agus Santoso', '0821323265', 'Jl. Raya Yogjakarta', 'andi@gmail.com', 1),
(2, 'Elexmedia Komputindo', 'Jakarta', 'Mahendra Putra', '0821454658', 'Jl. Kebon Sirih 5', 'alex_media@gmail.com', 1),
(3, 'Purnama Emas', 'Denpasar', 'Wahyuni Anggarawati', '08223445128', 'Jl. Raya Puputan No. 88', 'purnama.emas@gmail.com', 0),
(4, 'Gagas Media', 'Jakarta', 'Sri Wulandari', '08216655445', 'Jl. Jagakarsa 33', 'gagas_media09@gmail.com', 1),
(5, 'Bambang Adi Saputra', 'Bangli', 'Bambang', '0822499888', 'Bandung', 'bams.bambang@gmail.com', 0),
(6, 'Exova Indonesia', 'Bangli', 'Bambang', '081238169667', 'Jl. Nusantara', 'artha@exova.id', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengarang`
--

CREATE TABLE `t_pengarang` (
  `id_pengarang` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pengarang`
--

INSERT INTO `t_pengarang` (`id_pengarang`, `nama`, `alamat`, `email`, `hp`, `status`, `foto`) VALUES
(1, 'Okta Widyawati', 'Denpasar', 'okta.widyawati20@gmail.com', '08215566666', 1, 'user-1.png'),
(2, 'Mahendra Putrayasa', 'Jimbaran', 'mahendra09@gmail.com', '08215988754', 0, 'user-2.png'),
(3, 'Putu Aditama', 'Gianyar', 'aditama.putu@gmail.com', '08229985885', 0, 'user-2.png'),
(4, 'Sukmawati', 'Denpasar', 'sukmawati99@gmail.com', '08215554455', 1, 'user-3.png'),
(5, 'Bambang Adi', 'Bandung', 'bams.bambang@gmail.com', '0822499887878', 1, 'user-3.png'),
(15, 'Exova Indonesia', 'Jl. Nusantara', 'artha@exova.id', '081238169667', 1, 'poin.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(60) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama`, `password`, `email`, `hp`, `status`, `foto`) VALUES
('aa111', 'Ketut Agus Adi', '827ccb0eea8a706c4c34a16891f84e7b', 'ketut@gmail.com', '08212345678', 1, 'user-3.png'),
('admin', 'Administrator', 'e10adc3949ba59abbe56e057f20f883e', 'admin.perpus@stikom-bali.ac.id', '0361244445', 1, 'user-1.png'),
('agus', 'Agus Mahendra', '827ccb0eea8a706c4c34a16891f84e7b', 'agus2020@gmail.com', '08123456789', 1, 'user-2.png'),
('putu', 'Putu Aditama', '827ccb0eea8a706c4c34a16891f84e7b', 'putu_aditama@gmail.com', '08212366547', 1, 'user-3.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_buku`
--
ALTER TABLE `t_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `t_judul`
--
ALTER TABLE `t_judul`
  ADD PRIMARY KEY (`id_judul`),
  ADD UNIQUE KEY `judul` (`judul`);

--
-- Indeks untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indeks untuk tabel `t_penerbit`
--
ALTER TABLE `t_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `t_pengarang`
--
ALTER TABLE `t_pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_judul`
--
ALTER TABLE `t_judul`
  MODIFY `id_judul` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `t_penerbit`
--
ALTER TABLE `t_penerbit`
  MODIFY `id_penerbit` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `t_pengarang`
--
ALTER TABLE `t_pengarang`
  MODIFY `id_pengarang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
