-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Gru 2021, 00:06
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `quiz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `pytanie` varchar(100) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `poprawna` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `quiz`
--

INSERT INTO `quiz` (`id`, `pytanie`, `a`, `b`, `c`, `d`, `poprawna`) VALUES
(1, 'W którym roku powstała firma valve?', '1996', '2000', '2002', '1990', 'a'),
(2, 'Jaka jest najnowsza wersja systemu android?', 'Android Vista', 'Android 11', 'Andromeda', 'Android 12', 'd'),
(3, ' W którym roku powstał język php?', '1995', '2000', '2005', '1990', 'a'),
(4, 'Z ilu diamentów tworzy się kilof żelazny w minecraft?', '3', '4', '0', '5', 'c'),
(5, 'Ile wyszło części gier wiedźmin?', '2', '5', '1', '3', 'd'),
(6, 'Ile naboi mieści się w magazynku ak 47?', '35', '25', '30', '20', 'c'),
(7, 'Jaki jest najnowszy system windows?', '10', '12', '11', '9', 'c'),
(8, 'Jaka jest stolica Angli?\r\n', 'Manchester', 'Oslo ', 'Warszawa', 'Londyn', 'd');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
