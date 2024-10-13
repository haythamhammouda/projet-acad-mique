-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 13 oct. 2024 à 21:45
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
-- Base de données : `4x4`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `nomadmin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `nomadmin`, `password`) VALUES
(1, 'haytham_', 'haytham_');

-- --------------------------------------------------------

--
-- Structure de la table `automobile`
--

CREATE TABLE `automobile` (
  `mat` varchar(20) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `prix` double NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `automobile`
--

INSERT INTO `automobile` (`mat`, `marque`, `prix`, `photo`) VALUES
('11', 'Nissan', 750, 'images/Nissan.png'),
('121', 'porshe', 1200, 'images/porshe.png'),
('13', 'Dacia', 349, 'images/dacia.png'),
('14UCL', 'Electrice', 751, 'images/electrice.png'),
('15', 'capture', 300, 'images/capture.png'),
('2000DBD23', 'Peugeot 5008', 400, 'images/5008.png'),
('40', 'clio', 400, 'images/clio.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `nom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `objet` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`nom`, `email`, `objet`, `message`) VALUES
('hahah', 'corse@gamil.com', 'ccc', 'GGF'),
('haytham', 'haythamhammouda123@gmail.com', 'NONE', 'HAYTGHAM HAMMOUDA \r\n');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `photo` varchar(20) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`photo`, `titre`, `msg`) VALUES
('photo/air.jpg', 'Airoport', 'Des voitures propres, des chauffeurs souriants dans le respect des temps'),
('photo/dure.jpg', 'Longue durée', 'Un large choix de nouveaux véhicules pour les professionnels et entreprises'),
('photo/loc.jpg', 'Location de voitures', 'Les meilleures voitures au meilleurs prix dans toutes les villes du Maroc');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `automobile`
--
ALTER TABLE `automobile`
  ADD PRIMARY KEY (`mat`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
