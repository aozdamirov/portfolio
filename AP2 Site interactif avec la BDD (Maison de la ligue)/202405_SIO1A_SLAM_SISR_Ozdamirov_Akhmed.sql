-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 14 mai 2024 à 12:45
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `202405_sio1a_slam_sisr_ozdamirov_akhmed_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `exposant`
--

DROP TABLE IF EXISTS `exposant`;
CREATE TABLE IF NOT EXISTS `exposant` (
  `numExposant` int NOT NULL,
  `nomExposant` varchar(50) DEFAULT NULL,
  `adrExposant` varchar(50) DEFAULT NULL,
  `cpExposant` int DEFAULT NULL,
  `villeExposant` varchar(50) DEFAULT NULL,
  `codeTypeExposant` int NOT NULL,
  PRIMARY KEY (`numExposant`),
  KEY `codeTypeExposant` (`codeTypeExposant`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `exposant`
--

INSERT INTO `exposant` (`numExposant`, `nomExposant`, `adrExposant`, `cpExposant`, `villeExposant`, `codeTypeExposant`) VALUES
(1, 'Exposant1', 'Adresse1', 12345, 'Ville1', 1),
(2, 'Exposant2', 'Adresse2', 67890, 'Ville2', 2),
(3, 'Exposant3', 'Adresse3', 54321, 'Ville3', 3);

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

DROP TABLE IF EXISTS `louer`;
CREATE TABLE IF NOT EXISTS `louer` (
  `codeTypeExposant` int NOT NULL,
  `codeTypeStand` int NOT NULL,
  `montant` double DEFAULT NULL,
  PRIMARY KEY (`codeTypeExposant`,`codeTypeStand`),
  KEY `codeTypeStand` (`codeTypeStand`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `louer`
--

INSERT INTO `louer` (`codeTypeExposant`, `codeTypeStand`, `montant`) VALUES
(1, 1, 1500),
(2, 1, 3500),
(3, 1, 2400),
(1, 2, 900),
(2, 2, 1800),
(3, 2, 1400);

-- --------------------------------------------------------

--
-- Structure de la table `stand`
--

DROP TABLE IF EXISTS `stand`;
CREATE TABLE IF NOT EXISTS `stand` (
  `numStand` int NOT NULL,
  `numAlleeStand` int DEFAULT NULL,
  `placeAlleeStand` int DEFAULT NULL,
  `codeTypeStand` int NOT NULL,
  `numExposant` int NOT NULL,
  PRIMARY KEY (`numStand`),
  KEY `codeTypeStand` (`codeTypeStand`),
  KEY `numExposant` (`numExposant`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stand`
--

INSERT INTO `stand` (`numStand`, `numAlleeStand`, `placeAlleeStand`, `codeTypeStand`, `numExposant`) VALUES
(53, 3, 12, 1, 1),
(54, 3, 14, 1, 2),
(55, 15, 2, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `typeexposant`
--

DROP TABLE IF EXISTS `typeexposant`;
CREATE TABLE IF NOT EXISTS `typeexposant` (
  `codeTypeExposant` int NOT NULL,
  `descTypeExposant` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codeTypeExposant`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `typeexposant`
--

INSERT INTO `typeexposant` (`codeTypeExposant`, `descTypeExposant`) VALUES
(1, 'ASS'),
(2, 'ENT'),
(3, 'COM');

-- --------------------------------------------------------

--
-- Structure de la table `typestand`
--

DROP TABLE IF EXISTS `typestand`;
CREATE TABLE IF NOT EXISTS `typestand` (
  `codeTypeStand` int NOT NULL,
  `descTypeStand` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codeTypeStand`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `typestand`
--

INSERT INTO `typestand` (`codeTypeStand`, `descTypeStand`) VALUES
(1, 'A'),
(2, 'B');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
