-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Des 2018 pada 11.25
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(30) DEFAULT NULL,
  `product_image` varchar(250) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` tinytext,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `kab_kota` varchar(255) DEFAULT NULL,
  `prov` varchar(255) DEFAULT NULL,
  `no_telp` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `jumlah` int(255) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL,
  `total` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id`, `nama`, `alamat`, `kecamatan`, `kode_pos`, `kab_kota`, `prov`, `no_telp`, `email`, `product`, `gambar`, `jumlah`, `harga`, `total`) VALUES
(3, 'avrilla', 'pekalongan', 'pekalongan', '51252', '', '', 2147483647, 'avrilla.eta.wardani@gmail.com', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_view`
--

CREATE TABLE `order_view` (
  `id` int(255) NOT NULL,
  `Product` varchar(255) DEFAULT NULL,
  `Gambar` varchar(255) DEFAULT NULL,
  `Jumlah` int(255) DEFAULT NULL,
  `Harga` int(255) DEFAULT NULL,
  `Total` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_view`
--

INSERT INTO `order_view` (`id`, `Product`, `Gambar`, `Jumlah`, `Harga`, `Total`) VALUES
(72, 'BAMBANG JAS', 'p3.jpg', 2, 500000, 1000000),
(73, 'ARMY ORANGE BLACK TUX', 'p6.jpg', 3, 480000, 1440000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `kab_kota` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL,
  `total` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `detail` text NOT NULL,
  `harga` int(200) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `gambar3` varchar(255) DEFAULT NULL,
  `gambar4` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `detail`, `harga`, `kategori`, `gambar`, `gambar2`, `gambar3`, `gambar4`, `tanggal`) VALUES
(1, 'Kebaya Langka', 'pernah dipakai ken dedes', 800000, 'Wanita', 'product-1.jpg', 'pod', NULL, NULL, '2018-11-29'),
(2, 'Kebaya Ala', 'kdsjakjkdljadjkaljdklajdkajdklajdka dakjdjakd adajdha ', 500000, 'Wanita', 'product-2.jpg', NULL, NULL, NULL, '2018-12-09'),
(3, 'Kebaya Jomblo', 'ksjakkasamdka', 450000, 'Wanita', 'product-3.jpg', NULL, NULL, NULL, '2018-12-09'),
(4, 'Bambang Kebaya', 'asjfsjdfhasfhald', 575000, 'Wanita', 'product-4.jpg', NULL, NULL, NULL, '2018-12-09'),
(5, 'Abaya Syantique', 'sdfdsf', 600000, 'Wanita', 'product-5.jpg', NULL, NULL, NULL, '2018-12-09'),
(6, 'Abaya', 'dfgdfg', 800000, 'Wanita', 'product-6.jpg', NULL, NULL, NULL, '2018-12-09'),
(7, 'Kebaya', 'dfgfd', 450000, 'Wanita', 'product-7.jpg', NULL, NULL, NULL, '2018-12-09'),
(8, 'Kemplung', 'dfgdfg', 230000, 'Wanita', 'product-8.jpg', NULL, NULL, NULL, '2018-12-09'),
(9, 'Tayo', 'dfgdfg', 430000, 'Wanita', 'product-9.jpg', NULL, NULL, NULL, '2018-12-09'),
(10, 'WHITE TUXEDO', 'xdgxfg', 700000, 'Pria', 'p1.jpg', 'p1-1.jpg', 'p1-2.jpg', 'p1-3.jpg', '2018-12-09'),
(11, 'DIJAH JAS', 'fdgdfg', 450000, 'Pria', 'p2.jpg', 'p2-1.jpg', 'p2-2.jpg', 'p2-3.jpg', '2018-12-10'),
(12, 'BAMBANG JAS', 'dfgdfg', 500000, 'Pria', 'p3.jpg', 'p3-1.jpg', 'p3-2.jpg', 'p3-3.jpg', '2018-12-05'),
(13, 'ABU VULKANIK TUX', 'dfgdfg', 350000, 'Pria', 'p4.jpg', 'p4-1.jpg', 'p4-2.jpg', 'p4-3.jpg', '2018-12-08'),
(14, 'MANTUL TUXEDO', 'dfgdfg', 400000, 'Pria', 'p5.jpg', 'p5-1.jpg', 'p5-2.jpg', 'p5-3.jpg', '2018-12-09'),
(15, 'ARMY ORANGE BLACK TUX', 'dfgfdgdf', 480000, 'Pria', 'p6.jpg', 'p6-1.jpg', 'p6-2.jpg', 'p6-3.jpg', '2018-12-10'),
(16, 'BONEKA KAYU WISUDA', 'cdfhdfh', 180000, 'Hadiah', 'g1.jpg', NULL, NULL, NULL, '2018-12-10'),
(17, 'GRAD JAR', 'dfgdfg', 100000, 'Hadiah', 'g2.jpg', NULL, NULL, NULL, '2018-12-10'),
(18, 'PIGURA KESAKTIAN', 'dfghdfh', 200000, 'Hadiah', 'g3.jpg', NULL, NULL, NULL, '2018-12-10'),
(19, 'CHOCOLATE JAR & NOTE', 'dfhfh', 200000, 'Hadiah', 'g4.jpg', NULL, NULL, NULL, '2018-12-10'),
(20, 'GELANG WISUDA', 'dfhdfh', 175000, 'Hadiah', 'g5.jpg', NULL, NULL, NULL, '2018-12-10'),
(21, 'HIASAN GRADUATION TALENAN', 'dfhdhdh', 250000, 'Hadiah', 'g6.jpg', NULL, NULL, NULL, '2018-12-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `gender`) VALUES
(3, 'diva', 'diva@gmail.com', 'nadiva12345', ''),
(4, 'Bambang', 'Bambang@gmail.com', 'bambang123', ''),
(5, 'fab', 'fab@mail.com', 'fab', 'Pria'),
(7, 'avrilla', 'avrilla.eta.wardani@gmail.com', 'avilla1997', 'Wanita'),
(8, 'Eta', 'wardavrilla@gmail.com', 'bismillah', 'Wanita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_view`
--
ALTER TABLE `order_view`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_view`
--
ALTER TABLE `order_view`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
