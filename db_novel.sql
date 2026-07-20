-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2026 pada 03.07
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_novel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `age`, `gender`, `role`) VALUES
(1, 'Aditya Nugraha', 'aditya.nugraha@gmail.com', 'AdityaNova77', 22, 'male', 'admin'),
(2, 'Celine Oktavia', 'celine.oktavia@gmail.com', 'CelineSky55', 21, 'female', 'admin'),
(3, 'Farhan Alfarezi', 'farhan.alfarezi@gmail.com', 'FarhanMatrix88', 23, 'male', 'admin'),
(4, 'Naura Azzahra', 'naura.azzahra@gmail.com', 'NauraDiamond21', 20, 'female', 'admin'),
(5, 'Reyhan Akbar', 'reyhan.akbar@gmail.com', 'ReyhanInfinity99', 24, 'male', 'admin'),
(6, 'Mutia Ananda', 'mutia.ananda@gmail.com', 'MutiaGalaxy12', 16, 'female', 'user'),
(8, 'Bunga Cahyani', 'bunga.cahyani@gmail.com', 'BungaLovely21', 18, 'female', 'user'),
(9, 'Siska Aurelia', 'siska.aurelia@gmail.com', 'SiskaMoonlight', 17, 'female', 'user'),
(10, 'Rusdia Saputra', 'rusdia.saputra@gmail.com', 'RusdiaShadow99', 21, 'male', 'user'),
(11, 'Mutia Sinta Bunga', 'mutia.sinta@gmail.com', 'SintaHeaven45', 21, 'female', 'user'),
(12, 'Ananda Prameswari', 'ananda.prameswari@gmail.com', 'AnandaBloom77', 20, 'female', 'user'),
(13, 'Fajar Ramadhan', 'fajar.ramadhan@gmail.com', 'FajarPhoenix66', 19, 'male', 'user'),
(14, 'Aulia Rahman', 'aulia.rahman@gmail.com', 'AuliaStorm55', 18, 'male', 'user'),
(15, 'Nabila Putri', 'nabila.putri@gmail.com', 'NabilaDream88', 17, 'female', 'user'),
(16, 'Kevin Ardian', 'kevin.ardian@gmail.com', 'KevinCyber21', 20, 'male', 'user'),
(17, 'Cindy Larasati', 'cindy.larasati@gmail.com', 'CindyVelvet12', 19, 'female', 'user'),
(18, 'Dimas Saputro', 'dimas.saputro@gmail.com', 'DimasInferno77', 18, 'male', 'user'),
(19, 'Tiara Khairunnisa', 'tiara.kh@gmail.com', 'TiaraAurora44', 17, 'female', 'user'),
(20, 'Rizky Maulana', 'rizky.maulana@gmail.com', 'RizkyTitan09', 20, 'male', 'user'),
(21, 'Nayla Safitri', 'nayla.safitri@gmail.com', 'NaylaCrystal33', 18, 'female', 'user'),
(22, 'Andika Prasetyo', 'andika.prasetyo@gmail.com', 'AndikaLegend88', 21, 'male', 'user'),
(23, 'Izham Dwi Mahendra', 'izhammahendra8@gmail.com', 'bismillah', 16, 'male', 'admin'),
(24, 'Amelia cahya', 'amelia.chahya@gmail.com', 'mutia34', 21, 'female', 'user'),
(26, 'Suci Rahma', 'suci.rahma@gmail.com', 'SUCI326', 16, 'female', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
