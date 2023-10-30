-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2023 pada 13.40
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anime`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_anime`
--

CREATE TABLE `admin_anime` (
  `id_admin` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin_anime`
--

INSERT INTO `admin_anime` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anime`
--

CREATE TABLE `data_anime` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `studio` varchar(50) NOT NULL,
  `rating` float NOT NULL,
  `gambar_path` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_anime`
--

INSERT INTO `data_anime` (`id`, `tittle`, `genre`, `studio`, `rating`, `gambar_path`, `tanggal`) VALUES
(23, 'shingeki no kyojin', 'Action , Drama', 'Mappa', 9.09, 'aot.jpg', '22-10-2023 01:59:29am'),
(25, 'Oshi No Ko', 'Drama , Supernatural', 'Kobo Doga', 8.97, 'oshi no ko.jpg', '22-10-2023 02:01:18am'),
(26, 'tensei no shittara slime data ken', 'action , adventure , fantasy', '8-bit', 8.23, 'tensura.jpg', '22-10-2023 02:02:23am'),
(27, 'Black Bullet', 'Action, Mystery, Sci-Fi', 'Kinema Citrus, Orange', 7.09, 'black_bulet.jpg', '22-10-2023 02:03:48am'),
(28, 'Black Clover', 'Action , Adventure , Comedy', 'Pierrot', 8.14, 'Black Clover.jpg', '22-10-2023 02:04:18am'),
(37, 'Goblin Slayer II', 'Action, Adventure, Fantasy', 'LidenFilms', 7.7, 'Goblin Slayer ii.jpg', '22-10-2023 02:08:51am'),
(38, 'Isekai Maou to Shoukan Shoujo no Dorei Majutsu Ω', 'action , adventure , fantasy ,ecchi', ' Tezuka Productions, Okuruto Noboru', 6.71, 'isekai maou.jpg', '22-10-2023 02:11:07am'),
(62, 'Overlord', 'Action , Adventure , Comedy', 'Madhouse', 7.91, '2023-10-25 overlord.jpg', '25-10-2023 08:10:30am'),
(63, 'Mashle', 'Action , Adventure , Comedy', 'A-1 Picture', 8.23, '2023-10-25 mashle.jpg', '25-10-2023 08:13:25am'),
(65, 'growtopia', 'Action , Adventure , Comedy', '2-bit Picture', 9.999, '2023-10-30 download.jpeg', '30-10-2023 07:17:04pm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `username_user`, `password`) VALUES
(3, 'a@gmail.com', 'a', '$2y$10$HQgx3.g7sqSR.i2izbqu2uwJMGusJizhqTe/2RNOM8XGZLQ6iDgea'),
(4, 'asomasow23@qwq.com', 's', '$2y$10$N0EjDm0ryEt58ECU.8MXjekf3L1sJD50Uor9m7OL3kbD4zR1DHl02'),
(5, 'b@gmail.com', 'z', '$2y$10$i1R1uwMDwkc7IgtzkToyaeqq205KKkIEhEVTwr7Gp3NhcIjZZhIIW'),
(6, 'sao@gimel.com', 'k', '$2y$10$niRqND.9B3sVHBivKeOV/..XIQFb3.huYGZzs7rcCyjxvzwZ1kIry');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_anime`
--
ALTER TABLE `admin_anime`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_anime`
--
ALTER TABLE `data_anime`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_anime`
--
ALTER TABLE `admin_anime`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_anime`
--
ALTER TABLE `data_anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
