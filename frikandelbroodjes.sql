-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 30 mrt 2020 om 12:08
-- Serverversie: 5.7.26
-- PHP-versie: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frikandelbroodjes`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `berichten`
--

DROP TABLE IF EXISTS `berichten`;
CREATE TABLE IF NOT EXISTS `berichten` (
  `MESSAGE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `MESSAGE` varchar(500) NOT NULL,
  PRIMARY KEY (`MESSAGE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userrole` enum('root','admin','moderator','gebruiker') NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `register`
--

INSERT INTO `register` (`USER_ID`, `email`, `nickname`, `password`, `userrole`) VALUES
(26, 'vincevandoorn@gmail.com', 'Vince', '$2y$10$E59uCnpxtH.LLxOrxw3sHeBM80A1jOc0m.ic9iiVtNlEbTa51kNiW', 'admin'),
(25, 'dab@MXP.dns-cloud.net', 'hallo', '$2y$10$ApD5WeRqUVh5vJRGsLcEUeSuZplhvJz7Ab.qL9YMSiFbLk3viuCOe', 'gebruiker'),
(27, 'd@gmail.com', 'hank', '$2y$10$oZKwq0lRXft1Bg4YvRg.e.8wAhgb4okQLcNZV3MY6DL8HNePLMQmm', 'gebruiker'),
(28, 'hacker@gmail.com', 'hank', '$2y$10$4LEjH94OJeDjD13JRtlV4e4wiG9gyPV4dKQVDA7WQBJv0yy2ecFT6', 'gebruiker'),
(29, 'hacker2@gmail.com', 'hank', '$2y$10$lpH3fGtOCaXH7oheCpnWRO0T72HyiWp8z5hJzq/9weVBpEvDKffKi', 'gebruiker'),
(30, 'newschoolmassa@gmail.com', 'Dinojëager', '$2y$10$1Pm4fPEgcxiEn5ymxUhy7OeDgQU4wa2FFnzB2Xr2NnxO4OvSqK./q', 'admin'),
(33, 'belgischehacker@gmail.com', 'belg', '$2y$10$8luxTaoVxBKrQSN3rYndkuFoGQxrklxlqrf2VKNEEdk3JF0LJ/sju', 'gebruiker'),
(32, 'vincevandoorn2@gmail.com', 'hank', '$2y$10$m5/O6jmJ5u10g1YGqtkGJuTCTySnvKkARpK7G2lrtj/nWSjA4j3Da', 'gebruiker');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
