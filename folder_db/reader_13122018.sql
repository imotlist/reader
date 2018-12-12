-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2018 pada 19.15
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reader`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_username` varchar(100) NOT NULL,
  `author_password` varchar(100) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_full_name` varchar(255) NOT NULL,
  `author_nickname` varchar(100) NOT NULL,
  `author_birthdate` date NOT NULL,
  `author_gender` varchar(100) NOT NULL,
  `author_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `author`
--

INSERT INTO `author` (`author_id`, `author_username`, `author_password`, `author_email`, `author_full_name`, `author_nickname`, `author_birthdate`, `author_gender`, `author_profile`) VALUES
(5, 'giginaga', '7d52a9edf73392ba88e65d58aebbce8a', 'giginaga@gmail.com', 'Gigi Naga', 'GigiNaga', '2018-12-12', 'L', 'giginaga.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comic`
--

CREATE TABLE `comic` (
  `comic_id` int(11) NOT NULL,
  `comic_judul` varchar(255) NOT NULL,
  `comic_desc` text NOT NULL,
  `comic_pengarang` varchar(255) NOT NULL,
  `comic_status` int(11) NOT NULL,
  `comic_genre` varchar(255) NOT NULL,
  `comic_cover` varchar(255) NOT NULL,
  `comic_tgl` date NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `comic_chapter`
--

CREATE TABLE `comic_chapter` (
  `chapter_id` int(11) NOT NULL,
  `chapter_no` int(11) NOT NULL,
  `chapter_judul` varchar(255) NOT NULL,
  `chapter_content` text NOT NULL,
  `chapter_date` date NOT NULL,
  `comic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `novel`
--

CREATE TABLE `novel` (
  `novel_id` int(11) NOT NULL,
  `novel_judul` varchar(255) NOT NULL,
  `novel_desc` text NOT NULL,
  `novel_pengarang` varchar(255) NOT NULL,
  `novel_status` int(11) NOT NULL,
  `novel_genre` varchar(255) NOT NULL,
  `novel_cover` varchar(255) NOT NULL,
  `novel_tgl` date NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `novel_chapter`
--

CREATE TABLE `novel_chapter` (
  `chapter_id` int(11) NOT NULL,
  `chapter_no` int(11) NOT NULL,
  `chapter_judul` varchar(255) NOT NULL,
  `chapter_content` text NOT NULL,
  `chapter_date` date NOT NULL,
  `novel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(1, 'superadmin', 'ac497cfaba23c4184cb03b97e8c51e0a', 'superadmin@mail.com', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indeks untuk tabel `comic`
--
ALTER TABLE `comic`
  ADD PRIMARY KEY (`comic_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indeks untuk tabel `comic_chapter`
--
ALTER TABLE `comic_chapter`
  ADD PRIMARY KEY (`chapter_id`),
  ADD KEY `novel_rel` (`comic_id`);

--
-- Indeks untuk tabel `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`novel_id`),
  ADD KEY `author_rel` (`author_id`);

--
-- Indeks untuk tabel `novel_chapter`
--
ALTER TABLE `novel_chapter`
  ADD PRIMARY KEY (`chapter_id`),
  ADD KEY `novel_rel` (`novel_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `comic`
--
ALTER TABLE `comic`
  MODIFY `comic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `comic_chapter`
--
ALTER TABLE `comic_chapter`
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `novel`
--
ALTER TABLE `novel`
  MODIFY `novel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `novel_chapter`
--
ALTER TABLE `novel_chapter`
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comic`
--
ALTER TABLE `comic`
  ADD CONSTRAINT `author_rel2` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Ketidakleluasaan untuk tabel `comic_chapter`
--
ALTER TABLE `comic_chapter`
  ADD CONSTRAINT `comic_rel` FOREIGN KEY (`comic_id`) REFERENCES `comic` (`comic_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `novel`
--
ALTER TABLE `novel`
  ADD CONSTRAINT `author_rel` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Ketidakleluasaan untuk tabel `novel_chapter`
--
ALTER TABLE `novel_chapter`
  ADD CONSTRAINT `novel_rel` FOREIGN KEY (`novel_id`) REFERENCES `novel` (`novel_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
