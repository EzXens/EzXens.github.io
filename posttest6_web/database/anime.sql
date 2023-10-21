-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2023 pada 20.22
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
(39, 'Overlord', 'Action , Adventure , Fantasy', 'Madhouse', 7.91, 'overlord.jpg', '22-10-2023 02:13:27am'),
(40, 'Sword Art Online', 'Action , Adventure , Fantasy , Romance', 'A-1 Picture', 7.2, 'SAWO.jpg', '22-10-2023 02:15:02am'),
(41, 'Mashle', 'Action , Adventure , Comedy', 'A-1 Picture', 7.56, 'mashle.jpg', '22-10-2023 02:16:32am');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_anime`
--
ALTER TABLE `data_anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_anime`
--
ALTER TABLE `data_anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
