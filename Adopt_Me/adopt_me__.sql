-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2022 pada 18.14
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adopt_me!!`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`) VALUES
(1, 'momonare', '123', 'momonare096@gmail.com'),
(3, 'shironya', '2333', '2010817220004@mhs.ulm.ac.id'),
(5, 'admin', '2333', 'momonare096@gmail.com'),
(9, 'momonare', 'eeeee', '2010817220004@mhs.ulm.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adopter`
--

CREATE TABLE `adopter` (
  `id_adopter` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `umur` int(150) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `penghasilan` varchar(500) NOT NULL,
  `no_telepon` int(15) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adopter`
--

INSERT INTO `adopter` (`id_adopter`, `username`, `umur`, `jenis_kelamin`, `alamat`, `penghasilan`, `no_telepon`, `email`) VALUES
(1, 'Nova', 21, 'perempuan', 'isekai', 'Rp.500.000.00', 823510636, 'eerrrr'),
(2, 'momonare', 22, 'rrrrr', 'isekai', 'rp39999', 44444444, '2010817220004@mhs.ulm.ac.id'),
(4, 'momonare', 22, 'rrrrr', 'isekai kara', 'rp39999', 44444444, '2010817220004@mhs.ulm.ac.id'),
(5, 'momonare', 22, '444fff', 'isekai kara', 'rp39999', 44444444, '2010817220004@mhs.ulm.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kucing`
--

CREATE TABLE `data_kucing` (
  `id_kucing` int(11) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `foto` varchar(10) NOT NULL,
  `nama_kucing` varchar(150) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kucing`
--

INSERT INTO `data_kucing` (`id_kucing`, `kategori`, `foto`, `nama_kucing`, `umur`, `alamat`, `keterangan`) VALUES
(4, 'jantan', 'cat.png', 'olivia', '2 tahun', 'isekai', 'ambil di isekai wkwk'),
(5, 'beetina', '', 'momo', '3 bulan', 'banjarmasin', 'tidak ada'),
(7, 'jantan', 'cat.png', 'oreo', '4 bulan', 'kabupaten.tabalong', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_adopter` int(11) NOT NULL,
  `nama_adopter` varchar(150) NOT NULL,
  `tgl_adopt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id_history`, `id_adopter`, `nama_adopter`, `tgl_adopt`) VALUES
(1, 1, '', '2022-05-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'jantan'),
(3, 'putih'),
(8, 'betina');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`) VALUES
(6, 'shironya', 'momonare096@gmail.com', 'tyhj'),
(15, 'admin', 'oktavianinoba07@gmail.com', '2333'),
(17, 'momonare', '2010817220004@mhs.ulm.ac.id', 'eeeee'),
(18, 'momonare', 'momonare096@gmail.com', '2333'),
(21, 'Vinaneko096', 'oktavianinoba07@gmail.com', '455');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `adopter`
--
ALTER TABLE `adopter`
  ADD PRIMARY KEY (`id_adopter`);

--
-- Indeks untuk tabel `data_kucing`
--
ALTER TABLE `data_kucing`
  ADD PRIMARY KEY (`id_kucing`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `object` (`id_adopter`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `adopter`
--
ALTER TABLE `adopter`
  MODIFY `id_adopter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_kucing`
--
ALTER TABLE `data_kucing`
  MODIFY `id_kucing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `object` FOREIGN KEY (`id_adopter`) REFERENCES `adopter` (`id_adopter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
