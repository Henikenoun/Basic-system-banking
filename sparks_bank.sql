-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 27 juil. 2022 à 19:16
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sparks_bank`
--

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `num` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`num`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'amine', 'Heni Kenoun', 45550, '2022-07-20'),
(2, 'Heni Kenoun', 'amine', 4000, '2022-07-20'),
(3, 'Heni Kenoun', 'amine', 400, '2022-07-20'),
(4, 'amine', 'Heni Kenoun', 400, '2022-07-20'),
(5, 'Heni Kenoun', 'amine', 1000, '2022-07-20'),
(6, 'Heni Kenoun', 'amine', 400, '2022-07-20'),
(7, 'Heni Kenoun', 'amine', 5000, '2022-07-20'),
(8, 'Heni Kenoun', 'Heni Kenoun', 4000, '2022-07-21'),
(9, 'ahmed', 'Heni Kenoun', 200, '2022-07-21'),
(10, 'ahmed', 'Heni Kenoun', 200, '2022-07-21'),
(11, 'ahmed', 'Heni Kenoun', 400, '2022-07-21'),
(12, 'ahmed', 'Heni Kenoun', 400, '2022-07-21'),
(13, 'sallemi', 'ahmed', 600, '2022-07-21'),
(14, 'Heni Kenoun', 'mohamed', 2000, '2022-07-21');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(2, 'ahmed', 'ahmed@gmail.com', 5000),
(3, 'salem be selem', 'sale@gmail.com', 70000),
(5, 'sallemi', 'karimsallem@gmail.com', 70000),
(8, 'mohamed', 'mohamed@gmail.com', 14000),
(14, 'Heni Kenoun', 'kenounheni4@gmail.com', 2000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
