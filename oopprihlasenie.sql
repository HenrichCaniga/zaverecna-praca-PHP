-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Po 10.Jún 2024, 02:23
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `oopprihlasenie`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `hlasovanie`
--

CREATE TABLE `hlasovanie` (
  `id` int(11) NOT NULL,
  `moznost` varchar(255) NOT NULL,
  `hlasy` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `hlasovanie`
--

INSERT INTO `hlasovanie` (`id`, `moznost`, `hlasy`) VALUES
(2, 'Baldur’s Gate 3', 38),
(3, 'The Legend of Zelda: Tears of the Kingdom', 39),
(4, 'Alan Wake 2', 15);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `uzivatelia`
--

CREATE TABLE `uzivatelia` (
  `uzivatelia_id` int(11) NOT NULL,
  `uzivatelia_uid` tinytext NOT NULL,
  `uzivatelia_pwd` longtext NOT NULL,
  `uzivatelia_email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `uzivatelia`
--

INSERT INTO `uzivatelia` (`uzivatelia_id`, `uzivatelia_uid`, `uzivatelia_pwd`, `uzivatelia_email`) VALUES
(1, 'Heno', '$2y$10$p2Yfh5EF80ob82kGr6dKh.2PK8nS77yhsRDLPt7v.NncdQi4sznge', 'henrich1002@gmail.com'),
(2, 'Neviem', '$2y$10$62sZOz8sif8Ks7vbS6ZWC.uXp3ibemC8QCffaxmgpxHi6GtOEhsUe', 'ferkomrkvicka@gmail.com'),
(3, 'Vratko', '$2y$10$Bzuzr08/6vpJ63j.GeV7guQzRwwsgGLJmKHhqERID5d5FLovmm6uu', 'eduard.mnich@seznam.cz'),
(4, 'Erik', '$2y$10$TYscfMerQ/n9xrFSDnXLy.FVV5mStW4NlXGbsI5poNkAqzmBAAJ.q', 'idk@gmail.com'),
(5, 'samo', '$2y$10$nSnRPm6PnPR4t5XCqKzziO0McnrEoDQqeqFw42/cIhbFAg7kU9ETO', 'samo@dasd.sk'),
(6, 'majo', '$2y$10$pVtVLUxI5I0CWNjmlGYeg.HA.mPGUcKwd84.fRJie6Z99R5x9Xxie', 'majo@idk.sk'),
(7, 'samko', '$2y$10$bg0mxH4dvtSBQl6a/nPbYuLKc9tjQyyytsWOGto7sSbR7CT2pXFYW', 'samko@samko.sk'),
(8, 'lukas', '$2y$10$gqbU88ILFAZLaBDOyU9/A.j2VfKDT6cAStY1PzPXCIcYyG9YzpSiu', 'lukas@lukas.sk'),
(9, 'idk', '$2y$10$syIPKK8mT.2u9BfY2tL2teVw9UzwLxAgnRpm4gDnxvWIDvHtP/XXW', 'idk@idk.sk'),
(10, 'dano', '$2y$10$zE/Kz9PVCotYa70KRhsYbOStgDb0OF6BD0VAVvwBSn7EhzSnZIsWy', 'dano@dano.sk'),
(11, 'jakub', '$2y$10$G5zfyhAAiP4assjESwnYReLTosaf1P8Vw7XobA6vVSIs8EC64wN12', 'jakub@jakub.sk'),
(12, 'Ivan', '$2y$10$jWgb72m.AnxwWcwV0/1YNeXR67sZmjmyhAxvrrAhB5lO9dRRa8GTO', 'ivan@ivan.sk'),
(13, 'Horton', '$2y$10$TdMqfEBiSWgl57LTpQh1DOPzRvPSD5915nEEtm.nh3mFjGFv6IIG.', 'Horton@Horton.sk');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `hlasovanie`
--
ALTER TABLE `hlasovanie`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `uzivatelia`
--
ALTER TABLE `uzivatelia`
  ADD PRIMARY KEY (`uzivatelia_id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `hlasovanie`
--
ALTER TABLE `hlasovanie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `uzivatelia`
--
ALTER TABLE `uzivatelia`
  MODIFY `uzivatelia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
