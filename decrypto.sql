-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 07:30 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decrypto`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `secret`
--

CREATE TABLE `secret` (
  `ID` int(11) NOT NULL,
  `Message` varchar(60) NOT NULL,
  `Szyfr` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `secret`
--

INSERT INTO `secret` (`ID`, `Message`, `Szyfr`) VALUES
(1, 'PTGDQF', 'Cezar'),
(2, 'BXGRTI', 'Podstawieniowy'),
(3, 'ALYBOK', 'Przestawieniowy'),
(4, '1/4 2/2 0/1 4/0 1/5 0/0 ', 'Ułamkowy');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `secret`
--
ALTER TABLE `secret`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `secret`
--
ALTER TABLE `secret`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
