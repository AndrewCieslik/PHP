-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 20, 2024 at 02:13 PM
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
-- Database: `yachts_charter`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `assigned_roles`
--

CREATE TABLE `assigned_roles` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `assigned_at` date NOT NULL,
  `unassigned_at` date NOT NULL,
  `assignment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `assigned_roles`
--

INSERT INTO `assigned_roles` (`id_user`, `id_role`, `assigned_at`, `unassigned_at`, `assignment_id`) VALUES
(12, 3, '2024-05-20', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `charters`
--

CREATE TABLE `charters` (
  `id_charter` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_yacht` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `charters`
--

INSERT INTO `charters` (`id_charter`, `id_user`, `id_yacht`, `date_start`, `date_end`, `approved`) VALUES
(26, 12, 1, '2024-04-18', '2024-04-25', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `passwords`
--

CREATE TABLE `passwords` (
  `id_user` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`id_user`, `password`) VALUES
(55, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `role`) VALUES
(1, 'user'),
(2, 'manager'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `phone`) VALUES
(12, 'Andrzej', 'Cieslik', 1234567),
(13, 'Jarek', 'Zeglarz', 1234567),
(55, 'a', 'a', 0),
(56, 'X', 'Y', 12345),
(57, 'X', 'Y', 12345),
(58, 'X', 'Y', 12345),
(59, 'XXX', 'XXX', 123),
(60, 'XXX', 'XXX', 123),
(61, 'andrew', 'cie', 123456),
(62, 'qq', 'qq', 12),
(63, 'ww', 'ww', 123),
(64, 'ee', 'ee', 1234),
(65, 'ff', 'ff', 43),
(66, 'ff', 'ff', 43),
(67, 'ff', 'ff', 43),
(68, 'g', 'g', 1),
(69, 't', 't', 1),
(70, 'xx', 'xx', 12345),
(71, 'v', 'v', 1234),
(72, 'b', 'b', 45),
(73, 'b', 'b', 45),
(74, 'b', 'b', 45),
(75, 'vv', 'vv', 125),
(76, 'b', 'b', 2147483647),
(77, 'i', 'i', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `yachts`
--

CREATE TABLE `yachts` (
  `id_yacht` int(11) NOT NULL,
  `model` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `yachts`
--

INSERT INTO `yachts` (`id_yacht`, `model`, `name`) VALUES
(1, 'Antila 26', 'Superowa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `assigned_roles`
--
ALTER TABLE `assigned_roles`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `charters`
--
ALTER TABLE `charters`
  ADD PRIMARY KEY (`id_charter`),
  ADD KEY `id_yacht` (`id_yacht`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indeksy dla tabeli `passwords`
--
ALTER TABLE `passwords`
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeksy dla tabeli `yachts`
--
ALTER TABLE `yachts`
  ADD PRIMARY KEY (`id_yacht`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `charters`
--
ALTER TABLE `charters`
  MODIFY `id_charter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `yachts`
--
ALTER TABLE `yachts`
  MODIFY `id_yacht` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
  ADD CONSTRAINT `assigned_roles_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assigned_roles_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `charters`
--
ALTER TABLE `charters`
  ADD CONSTRAINT `charters_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `charters_ibfk_2` FOREIGN KEY (`id_yacht`) REFERENCES `yachts` (`id_yacht`);

--
-- Constraints for table `passwords`
--
ALTER TABLE `passwords`
  ADD CONSTRAINT `passwords_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
