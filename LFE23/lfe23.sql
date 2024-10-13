-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 13 oct. 2024 à 21:44
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lfe23`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `nomadmin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `idadmins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`nomadmin`, `password`, `idadmins`) VALUES
('haytham_user', '@haytham49', 1);

-- --------------------------------------------------------

--
-- Structure de la table `calendrier8`
--

CREATE TABLE `calendrier8` (
  `id_tournoi` int(11) NOT NULL,
  `NT` varchar(30) NOT NULL,
  `E1` varchar(22) NOT NULL,
  `E2` varchar(22) NOT NULL,
  `E3` varchar(22) NOT NULL,
  `E4` varchar(22) NOT NULL,
  `E5` varchar(22) NOT NULL,
  `E6` varchar(22) NOT NULL,
  `E7` varchar(20) NOT NULL,
  `E8` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `calendrier10`
--

CREATE TABLE `calendrier10` (
  `id_tournoi` int(11) NOT NULL,
  `NT` int(11) NOT NULL,
  `E1` varchar(22) NOT NULL,
  `E2` varchar(25) NOT NULL,
  `E3` varchar(22) NOT NULL,
  `E4` varchar(22) NOT NULL,
  `E5` varchar(22) NOT NULL,
  `E6` varchar(22) NOT NULL,
  `E7` varchar(20) NOT NULL,
  `E8` varchar(22) NOT NULL,
  `E9` varchar(22) NOT NULL,
  `E10` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `calendrier12`
--

CREATE TABLE `calendrier12` (
  `id_tournoi` int(11) NOT NULL,
  `NT` varchar(22) NOT NULL,
  `E1` varchar(22) NOT NULL,
  `E2` varchar(22) NOT NULL,
  `E3` varchar(22) NOT NULL,
  `E4` varchar(22) NOT NULL,
  `E5` varchar(22) NOT NULL,
  `E6` varchar(22) NOT NULL,
  `E7` varchar(22) NOT NULL,
  `E8` varchar(22) NOT NULL,
  `E9` varchar(22) NOT NULL,
  `E10` varchar(22) NOT NULL,
  `E11` varchar(22) NOT NULL,
  `E12` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `equipe_8`
--

CREATE TABLE `equipe_8` (
  `id_e` int(11) NOT NULL,
  `nomeq` varchar(100) NOT NULL,
  `mj` int(11) NOT NULL DEFAULT 0,
  `bp` int(11) NOT NULL DEFAULT 0,
  `bc` int(11) NOT NULL DEFAULT 0,
  `db` int(11) NOT NULL DEFAULT 0,
  `pt` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `equipe_8`
--

INSERT INTO `equipe_8` (`id_e`, `nomeq`, `mj`, `bp`, `bc`, `db`, `pt`) VALUES
(35, 'haytham', 0, 0, 0, 0, 0),
(36, 'mouad', 0, 0, 0, 0, 0),
(37, 'bahae', 0, 0, 0, 0, 0),
(38, 'brahim', 0, 0, 0, 0, 0),
(39, 'loukmane', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `jequipe`
--

CREATE TABLE `jequipe` (
  `id_j` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `buts` int(11) NOT NULL DEFAULT 0,
  `nomeq` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `matchj`
--

CREATE TABLE `matchj` (
  `idm` int(11) NOT NULL,
  `nomeq1` varchar(30) NOT NULL,
  `sc1` int(11) NOT NULL,
  `nomeq2` varchar(30) NOT NULL,
  `sc2` int(11) NOT NULL,
  `gm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `nom`, `email`, `message`) VALUES
(1, 'francolegends47@gami', 'haytham', 'eufgiF'),
(3, 'sdv@ygzfy.sc', 'eqf', 'sqwdvq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idadmins`);

--
-- Index pour la table `calendrier8`
--
ALTER TABLE `calendrier8`
  ADD PRIMARY KEY (`id_tournoi`);

--
-- Index pour la table `calendrier10`
--
ALTER TABLE `calendrier10`
  ADD PRIMARY KEY (`id_tournoi`);

--
-- Index pour la table `calendrier12`
--
ALTER TABLE `calendrier12`
  ADD PRIMARY KEY (`id_tournoi`);

--
-- Index pour la table `equipe_8`
--
ALTER TABLE `equipe_8`
  ADD PRIMARY KEY (`id_e`);

--
-- Index pour la table `jequipe`
--
ALTER TABLE `jequipe`
  ADD PRIMARY KEY (`id_j`);

--
-- Index pour la table `matchj`
--
ALTER TABLE `matchj`
  ADD PRIMARY KEY (`idm`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `idadmins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `calendrier8`
--
ALTER TABLE `calendrier8`
  MODIFY `id_tournoi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `calendrier10`
--
ALTER TABLE `calendrier10`
  MODIFY `id_tournoi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `calendrier12`
--
ALTER TABLE `calendrier12`
  MODIFY `id_tournoi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `equipe_8`
--
ALTER TABLE `equipe_8`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `jequipe`
--
ALTER TABLE `jequipe`
  MODIFY `id_j` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `matchj`
--
ALTER TABLE `matchj`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
