-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Sty 2018, 08:29
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `domowe`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cytat`
--

CREATE TABLE `cytat` (
  `ID` int(11) NOT NULL,
  `tekst_cyt` text COLLATE utf8_polish_ci NOT NULL,
  `autor_cyt` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `cytat`
--

INSERT INTO `cytat` (`ID`, `tekst_cyt`, `autor_cyt`) VALUES
(1, '\0Nie podążaj tam gdzie wiedzie ścieżka. Zamiast tego pójdź tam gdzie jej niema i wytycz szlak.', 'Ralph Waldo Emerson'),
(2, '\0Szukajcie prawdy jasnego płomienia!\r\nSzukajcie nowych, nie odkrytych dróg... ', 'Adam Asnyk'),
(3, '\0Za dwadzieścia lat bardziej będziesz żałował tego czego nie zrobiłeś, niż tego co zrobiłeś. Więc odwiąż liny, opuść bezpieczną przystań. Złap w żagle pomyślne wiatry. Podróżuj. Śnij. Odkrywaj.', 'Mark Twain'),
(4, '\0Wszak istnieje coś takiego jak zarażenie podróżą i jest to rodzaj choroby w gruncie rzeczy nieuleczalnej', 'Ryszard Kapuściński'),
(5, 'Turyści nie wiedzą gdzie byli, podróżnicy nie wiedzą gdzie będą', 'Paul Theroux'),
(6, 'Lepiej zobaczyć coś raz, niż słyszeć o tym tysiąc razy', 'chińskie przysłowie'),
(7, 'Nie odkładaj marzeń, odkładaj na marzenia', 'autor nieznany'),
(8, 'Nawet najdalsza podróż zaczyna się od pierwszego kroku', 'Lao Tzu'),
(9, 'Nie podróżujemy aby uciec przed życiem, ale aby życie nam nie uciekło', 'autor nieznany'),
(10, 'Ten, kto żyje widzi dużo. Ten, kto podróżuje widzi więcej', 'arabskie przysłowie'),
(11, 'Ten, kto znalazł się za drzwiami, pokonał najtrudniejszy etap podróży', 'duńskie przysłowie'),
(13, 'Tylko przygoda sprawia, że niektórym udaje się poznać siebie', 'Andre Gide'),
(14, 'Podróżowanie nie zależy od ilości posiadanych pieniędzy, ale od ilości posiadanej odwagi', 'Autor nieznany');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `okres_wynajmu`
--

CREATE TABLE `okres_wynajmu` (
  `ID` int(11) NOT NULL,
  `okres` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `okres_wynajmu`
--

INSERT INTO `okres_wynajmu` (`ID`, `okres`) VALUES
(1, '7 dni'),
(2, '14 dni'),
(3, '30 dni'),
(4, '90 dni');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `ID` int(11) NOT NULL,
  `Samochod` varchar(11) COLLATE utf8_polish_ci NOT NULL,
  `dni_wynajmu` varchar(11) COLLATE utf8_polish_ci NOT NULL,
  `imie_klienta` varchar(11) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko_klienta` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `telefon` int(10) NOT NULL,
  `mail` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `uwagi` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rezerwacje`
--

INSERT INTO `rezerwacje` (`ID`, `Samochod`, `dni_wynajmu`, `imie_klienta`, `nazwisko_klienta`, `telefon`, `mail`, `uwagi`) VALUES
(7, '2', '2', 'Tomasz', 'Przyklad', 223334455, 'tp@o2.pl', 'to moje uwagi'),
(8, '1', '3', 'Kasia', 'W', 222, '2323', 'dfdc'),
(9, '4', '4', 'Åukasz', 'Z', 222121212, '2212@wp.pl', 'Chce kabriolet'),
(10, '7', '1', 'Å‚Ã³Å¼', 'Ä…Ä‡Å›', 0, 'vv', 'Å›ÅºÄ…Å›Ä‡Ä™'),
(35, '1', '1', '', 'lgmkm', 0, '', 'lkjjnpmmpiuvbpet'),
(36, '3', '4', 'Katarzynka', 'WyczÃ³Å‚kowska', 793593968, 'kasia@mastersatwork.pl', 'Plis, plis, plis...'),
(37, '4', '2', 'Proba', 'Request', 2147483647, 'fdd@pl.pl', 'fhfhfh'),
(217, '2', '3', 'Andzej', 'Dudowski', 0, '', ''),
(218, '2', '3', 'Andzej', 'Dudowski', 0, '', ''),
(219, '2', '3', 'Andzej', 'Dudowski', 0, '', ''),
(220, '5', '1', 'dfdf', '', 0, '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `ID` int(11) NOT NULL,
  `Samochod` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`ID`, `Samochod`) VALUES
(1, 'Mercedes G Klasse'),
(2, 'Toyota FJ Cruiser'),
(3, 'Range Rover Defender'),
(4, 'Lada Niva'),
(5, 'Jeep Wrangler'),
(6, 'Honker'),
(7, 'łóźąć');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `cytat`
--
ALTER TABLE `cytat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `okres_wynajmu`
--
ALTER TABLE `okres_wynajmu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `cytat`
--
ALTER TABLE `cytat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `okres_wynajmu`
--
ALTER TABLE `okres_wynajmu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
