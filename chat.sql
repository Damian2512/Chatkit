-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 29 aug 2019 om 09:50
-- Serverversie: 5.7.24
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `typing` int(11) DEFAULT NULL,
  `readed` int(11) DEFAULT NULL,
  `seen` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `typing`, `readed`, `seen`, `created_at`) VALUES
(1, 1, 2, 'test', NULL, NULL, NULL, '2019-08-29 08:50:57'),
(2, 2, 1, 'test', NULL, NULL, NULL, '2019-08-29 08:51:00'),
(3, 1, 2, 'testing', NULL, NULL, NULL, '2019-08-29 08:51:13'),
(4, 2, 1, 'testing', NULL, NULL, NULL, '2019-08-29 08:51:16');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `created_at`) VALUES
(1, 'klaas', '2019-08-27 08:30:34'),
(2, 'piet', '2019-08-27 08:21:32'),
(3, 'Henk', '2019-08-29 04:20:36'),
(4, 'Erik', '2019-08-29 08:29:32'),
(5, 'Max', '2019-08-29 09:35:34'),
(6, 'Chris', '2019-08-29 12:37:40');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
