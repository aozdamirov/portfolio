-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 14 mai 2024 à 13:24
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
-- Base de données : `authentification`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_is_0900_ai_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_is_0900_ai_ci NOT NULL,
  `password` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_sl_0900_ai_ci NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`) USING BTREE,
  KEY `password` (`password`(250))
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'bonjour', 'bonjour@gmail.com', '$2y$10$tIYsaQoWKFidhkfIFRSATOyZYC5RUjszdZkYvlFQLiU', 'user'),
(2, 'bonsoir', 'bonsoir@gmail.com', '$2y$10$b51B/MXXU0DDXN6GLkjDI.5qJE6wdwFOP89A2xjNyLc', 'user'),
(3, 'bonj', 'bonj@gmail.com', 'bonj', 'user'),
(4, 'testhash', 'testhash@gmail.com', '$2y$10$mHOC6PthdSmHXw.vKliFPO7RBEJwh2qkx8vAnDl7g/M', 'user'),
(5, 'test', 'test@gmail.com', '$2y$10$zSLiefjFeem8m4B5e2rgsO/GJG9G98f0COBzB2RjYyh', 'user'),
(6, 'bob', 'bob@gmail.com', '$2y$10$wtobWTy/J6/kkK71rMSSle.DsWaIq9ETFcBuAXWRTjH', 'user'),
(7, 'Compte1', 'Compte1@gmail.com', '$2y$10$aEbuL0OKiRskq2w213IEQuacKkeoBpZPnZ5AhRZR6/s', 'user'),
(8, 'Compte2', 'Compte2@gmail.com', '$2y$10$KJcPYn5/z4gBfwtRcKXyu.i7PuCjDvaqBCRc4JXJEDj8bHhSCAtEe', 'user'),
(9, 'compte3', 'compte3@gmail.com', '$2y$10$BKgGETX5cNRDM5BtA/JkAuo67x01FRGsXMRovFgEJA68F/uuvPnFC', 'user'),
(10, 'Compte4', 'Compte4@gmail.com', '$2y$10$e0lRldOSUdJFOBIK9TUCCO1vQKDdYpQcK/sf0iAA4a9254CEMe2ZO', 'user'),
(11, '18/04', '18/04@gmail.com', '$2y$10$li4SENwcLN1tPsCfMqCAquFk.CB3jqBhYRh/Ex18ymZbtzGP/rqZu', 'user'),
(12, 'Utilisateur', 'Utilisateur@gmail.com', '$2y$10$YZPW2cAXHYffAy1fUpvRqO5iN2Qva/HrhbKjGfrbikfGgvAlf6nrO', 'user'),
(13, 'Admin', 'Admin@gmail.com', '$2y$10$QIRv.ZH09EcS2LGROMQ2h.GAKXgHgejNoJZqnCoYDy4lNoWIksk5q', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
